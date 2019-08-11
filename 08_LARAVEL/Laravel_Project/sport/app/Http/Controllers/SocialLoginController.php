<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\SocialAccountService;

class SocialLoginController extends Controller
{
    // public function redirectToSocial()
    // {
    // //static
    // Socialite::driver('facebook')->redirect();
    // Socialite::driver('google')->redirect();
    // Socialite::driver('twitter')->redirect();
    // Socialite::driver('github')->redirect();
    // }

    //dynamic
    public function redirectToSocial($social)
    {
        return Socialite::with($social)->redirect();
    }

    public function handleSocialCallback(SocialAccountService $service, $social)
    {               
        try
        {
            $user = $service->setOrGetUser(Socialite::driver($social));
            auth()->login($user);
            return redirect('/');
        }
        catch (\Exception $e)
        {
            return $e;
        }
    }

}
