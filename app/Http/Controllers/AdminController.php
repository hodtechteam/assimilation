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
        $cards = Card::orderBy('created_at', 'desc')->get();
        return view('admin.cardlist', ['cards' => $cards]);
    }

    public function contactedCards()
    {
        $cards = Card::where('comment', '!=', null)->orderBy('created_at', 'desc')->get();
        return view('admin.contacted', ['cards' => $cards]);
    }

    public function visitedCards()
    {
        $cards = Card::where('is_visited', true)->orderBy('created_at', 'desc')->get();
        return view('admin.visited', ['cards' => $cards]);
    }

    public function userList()
    {
        $users = User::where('role', 'user')->orderBy('created_at', 'desc')->get();
        return view('admin.user_list', ['users' => $users]);
    }

    public function userInfo($id)
    {
        $user = User::find($id);
        $cards = $user->myCards()->orderBy('created_at', 'desc')->get();
        return view('admin.view_user_activity', ['user' => $user, 'cards' => $cards]);
    }
}
