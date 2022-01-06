<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        if($user->hasRole('user')){
            return redirect('user');
        }
        $users = User::where('role', 'user')->get();
        $guests = Card::orderBy('created_at', 'desc')->take('10')->get();
        return view('admin.home', ['users' => $user, 'guests' => $guests]);
    }
}
