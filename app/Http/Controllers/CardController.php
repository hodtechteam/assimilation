<?php

namespace App\Http\Controllers;

use App\Helpers\GoogleApiLocation;
use App\Models\Card;
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

        return view('user.cards');
    }

    public function userHome()
    {
        $guest = auth()->user()->myCards()->orderBy('created_at', 'desc')->take('10')->get();
        return view('user.home', ['guests' => $guest]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'born_again' => 'required|numeric',
            'member' => 'required|numeric',
            'visitation' => 'required|numeric',
            'program' => 'required|string',
            'phone' => 'required|numeric|digits:11',
        ]);


        // $ip = '105.112.67.6'; //'105.112.67.191'; //'162.159.24.227';//$request->ip();

        // dd(Location::get($ip));

        $card = Card::create($request->all());
        $card->save();
        return back()->with('success', 'Card inputed successfully'); 
    }

    public function googleApi()
    {
        
       // apiKey = AIzaSyAJ3PWHRjuHwbkl-9WBgxN-SJp4mnyJ4Ik
        //curl -L -X GET 'https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=YOUR_API_KEY'
        return Http::get('https://maps.googleapis.com/maps/api/place/details/json?place_id=ChIJN1t_tDeuEmsRUsoyG83frY4&fields=name%2Crating%2Cformatted_phone_number&key=AIzaSyAJ3PWHRjuHwbkl-9WBgxN-SJp4mnyJ4Ik');
    
    }

    public function cardList()
    {
        $user = Auth::user();

        $cards = $user->myCards()->orderBy('created_at', 'desc')->get();

        return view('user.cardlist', ['cards' => $cards]);
    }

    public function updateCardComment(Request $request)
    {
        $card = Card::where('id', $request->card_id)->first();
        $card->comment = $request->comment;
        $card->save();
         return back()->with('success', 'Card Updated Successfully');
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
        $editCard->member = $request->visitation;
        $editCard->program = $request->program;
        $editCard->save();
        return back()->with('success', 'Card Updated Successfully');

    }
}
