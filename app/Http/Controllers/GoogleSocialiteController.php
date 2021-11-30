<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Socialite;
use Illuminate\Http\Request;

use Exception;


class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        try {
             $user = Socialite::driver('google')->stateless()->user();

              //incase the email already exist...we just update the google_id and avataR
            $googleUser = User::where('email', $user->email)->first();
            if($googleUser){
                $googleUser->google_id = $user->id;
                $googleUser->avatar = $user->avatar;
                $googleUser->save();
                Auth::login($googleUser);
                return redirect('/home');
            }

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/home');
            }else{
                $password = Str::random(16);
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'avatar'=> $user->avatar,
                    'password' => Hash::make($password),
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            //return redirect('/login');
        }

    }

}
