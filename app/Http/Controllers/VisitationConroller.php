<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class VisitationConroller extends Controller
{
    public function visitationList()
    {
        //auth()->user()->userUnit()->orderBy('created_at', 'desc')->get();
        $cards = Card::where('visitation', 'Physical')->orWhere('visitation', 'Online')->orderBy('date_added', 'desc')->get(); 
        return view('user.visitation_list', ['cards' => $cards]);

    }

    public function sendVisitationReport(Request $request)
    {
        $fetch = Card::where('id', $request->card_id)->first();
        $fetch->visitation_report = $request->visitation_report;
        $fetch->is_visited = true;
        $fetch->save();
        return back()->with('success', 'Visitation Report added Successfully');
    }
}
