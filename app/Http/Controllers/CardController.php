<?php

namespace App\Http\Controllers;

use App\Helpers\GoogleApiLocation;
use App\Models\Card;
use App\Models\ChurchCentre;
use App\Models\HouseholdLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;


class CardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $households = HouseholdLocation::orderBy('household_name', 'desc')->get();
        $user = User::with('churchCentre')->where('id', auth()->id())->first();
        $centre = $user->churchCentre->name;
        return view('user.cards', ['households' => $households, 'centre' => $centre]);
    }

    public function userHome()
    {
        $user = User::with('churchCentre')->where('id', auth()->id())->first();
       
        if($user->church_centre_id == 0)
        {
            $centres = ChurchCentre::where('status', 'Active')->get();
            return view('user.phone', compact('centres'));
        }
        $guest = auth()->user()->myCards()->get();
        $centre = $user->churchCentre->name;
        return view('user.home', ['guests' => $guest, 'centre' => $centre]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'born_again' => 'required|string',
            'member' => 'required|string',
            'visitation' => 'required|string',
            'program' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|numeric',
        ]);

         $name = $request->name;
         $service = $request->program;

         $message = 'Hello '.$name.', '.$service.' Service was glorious with your presence at Household of David. For more information check out our website: www.householdofdavid.org. We look forward to seeing you.God bless you. Kindly click on the link below to join the membership class of HOD http://Bit.ly/hodms';
        
        $payload = [
            'api_key' => env('TERMI_API_KEY'),
            'to' => '234'.substr($request->phone, 1),
            'from' => 'HOD',
            'sms' => $message,
            'type' => 'plain',
            'channel' => 'generic'
        ];
        $card = Card::create($request->all());
        // $card->save();
       // $user = Auth::user();
        if($request->visitation == 'Online' || $request->visitation == 'Physical')
        {
            //get a user in visitation
            $getUser = User::where('unit', 'Visitation')->get()->random('1');
            $collection = collect($getUser);
            $user = $collection->first();
            $user->userUnit()->attach($card->id);
        }
       $this->sendSMS($payload);
        
        return back()->with('success', 'Card inputed successfully'); 
    }

    public function sendSMS($payload)
    {
       return Http::withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json-patch+json'
       ])->post('https://api.ng.termii.com/api/sms/send', $payload)->throw();
    }

    public function googleApi()
    {
        $address = 'Household Of David, Surulere Industrial Road, Ikeja';
        $formattedAddr = urlencode($address);//str_replace(' ','+',$address);
        $apiKey = 'AIzaSyAJ3PWHRjuHwbkl-9WBgxN-SJp4mnyJ4Ik';
        //curl -L -X GET 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=YOUR_API_KEY'
        //return Http::get('https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=AIzaSyAJ3PWHRjuHwbkl-9WBgxN-SJp4mnyJ4Ik');
    
          return Http::get('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=true&key='.$apiKey);
    }

    public function location($ln,$lat)
    {
        return [$ln,$lat];
    }
    public function cardList()
    {

        // $data = $this->googleApi();

        // $output = json_decode($data);

        // return $output->results[0]->geometry->location; 
       
        $user = Auth::user();
        // if($user->unit == 'Visitation')
        // {
        //     $cards = $user->userUnit()->orderBy('created_at', 'desc')->get();
        // }else{
        //     $cards = $user->myCards()->orderBy('created_at', 'desc')->get();
        // }

        $cards = $user->myCards()->orderBy('created_at', 'desc')->get();
        return view('user.cardlist', ['cards' => $cards]);
    }

    public function updateCardComment(Request $request)
    {
        $card = Card::where('id', $request->card_id)->first();
        $card->comment = $request->comment;
        $card->save();
         return back()->with('success', 'Follow Up Report added Successfully');
    }

    public function haveVisited($id)
    {
        $haveVisited = Card::where('id', $id)->first();
        $haveVisited->is_visited = true;
        $haveVisited->save();
        return back()->with('success', 'Card Updated Successfully');
    }

    public function editCard($id)
    {
        $card = Card::find($id);
        return view('user.edit_card', ['card' => $card]);
    }

    public function update(Request $request)
    {
        $editCard = Card::where('id', $request->card_id)->first();
        $editCard->name = $request->name;
        $editCard->email = $request->email;
        $editCard->phone = $request->phone;
        $editCard->address = $request->address;
        $editCard->age = $request->age;
        $editCard->source = $request->source;
        $editCard->source_other = $request->source_other;
        $editCard->born_again = $request->born_again;
        $editCard->member = $request->member;
        $editCard->visitation = $request->visitation;
        $editCard->program = $request->program;
        $editCard->save();
        return back()->with('success', 'Card Updated Successfully');

    }

    public function updatePhone(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|digits:11',
            'church_centre' => 'required',
        ]);
        $update = User::where('id', auth()->user()->id)->first();
        $update->phone = $request->phone;
        $update->unit = $request->unit;
        $update->church_centre_id = $request->church_centre;
        $update->save();
        return back()->with('success', 'Information Updated Successfully');
    }
}
