<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class VisitationConroller extends Controller
{
    public function visitationList(Request $request)
    {
        $cards = [];
        if(isset($request)) {
            $cards = Card::where('phone', $request->phone)->get(); 
        }
        // if($cards->count() == 0){
        //     return back()->with('error', 'There\'s no Information to display');
        // }
        return view('user.visitation_list', ['cards' => $cards]);
    }

    public function sendVisitationReport(Request $request)
    {
        $fetch = Card::where('id', $request->card_id)->first();
        $fetch->visitation_report = $request->report;
        $fetch->is_visited = true;
        $fetch->visitee_id = auth()->user()->id;
        $fetch->save();
        return redirect('visitation')->with('success', 'Visitation Report added Successfully');
    }
}
