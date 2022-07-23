<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\HouseholdLocation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function qrCode()
    {
        return view('qr.view');
    }

    public function fillForm()
    {
        $households = HouseholdLocation::orderBy('household_name', 'desc')->get();
        return view('qr.form', ['households' => $households]);
    }

    public function storeForm(Request $request)
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
            'invited' => 'required|string',
        ]);
        $name = $request->name;
        $service = $request->program;

        $message = 'Hello '.$name.', '.$service.' Service was glorious with your presence at Household of David. For more information check out our website: www.householdofdavid.org. We look forward to seeing you.God bless you. Kindly click on the link below to join the membership class of HOD';
       
       $payload = [
           'api_key' => env('TERMI_API_KEY'),
           'to' => '234'.substr($request->phone, 1),
           'from' => 'HOD',
           'sms' => $message,
           'type' => 'plain',
           'channel' => 'generic'
       ];
    
       $date_added = Carbon::now();

       $request->request->add(['date_added' => $date_added]);

       $card = Card::create($request->all());
       $card->save();
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
       
       return back()->with('success', 'Thanks, we received your information'); 
    }
}
