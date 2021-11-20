<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allCards()
    {
        $cards = Card::all();
        return view('admin.cardlist', ['cards' => $cards]);
    }

    public function contactedCards()
    {
        $cards = Card::where('comment', '!=', null)->get();
        return view('admin.contacted', ['cards' => $cards]);
    }

    public function visitedCards()
    {
        $cards = Card::where('is_visited', true)->get();
        return view('admin.visited', ['cards' => $cards]);
    }

    public function userList()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.user_list', ['users' => $users]);
    }
}
