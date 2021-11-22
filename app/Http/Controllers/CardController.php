<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required|email|unique:cards|max:255',
            'address' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'born_again' => 'required|numeric',
            'member' => 'required|numeric',
            'visitation' => 'required|numeric',
            'program' => 'required|string',
            'phone' => 'required|numeric|unique:cards|digits:11',
        ]);

        $card = Card::create($request->all());
        $card->save();
        return back()->with('success', 'Card inputed successfully'); 
    }

    public function cardList()
    {
        $user = Auth::user();

        $cards = $user->myCards()->orderBy('created_at', 'desc')->get();

        return view('user.cardlist', ['cards' => $cards]);
    }

    public function updateCard(Request $request)
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
}
