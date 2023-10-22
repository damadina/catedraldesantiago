<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\SocialProfile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    public function redirectToProvider($driver)
    {

        $drivers = ['google','facebook'];
        if(in_array($driver,$drivers)) {
            return Socialite::driver($driver)->redirect();
        } else {
            return redirect()->route('login')->with('info', $driver.' no es una aplicación valida para loguearse');
        }


    }

    public function handleProviderCallback(Request $request, $driver)
    {

        if($request->get('error')) {
            $slug = session('REDIRECT');
            return redirect($slug);
        }

        $userSocialite = Socialite::driver($driver)->user();



        $social_profile = SocialProfile::where('social_id', $userSocialite->id)
                                        ->where('social_name',$driver)->first();


        if(!$social_profile) {
            $user = User::where('email',$userSocialite->email)->first();

            if(!$user) {
                $user = User::create([
                    'name' => $userSocialite->name,
                    'email'=> $userSocialite->email,

                ]);
            }



            $social_profile = SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->id,
                'social_name' => $driver,
                'social_avatar' => $userSocialite->avatar,
            ]);


        }
        $slug = session('REDIRECT');

        Auth::login($social_profile->user);
        return redirect($slug);
    }
}
