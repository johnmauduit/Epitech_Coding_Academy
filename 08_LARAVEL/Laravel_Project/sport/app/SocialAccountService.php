<?php

namespace App;

use Laravel\Socialite\Contracts\Provider;
use App\User;

class SocialAccountService
{
    public function setOrGetUser(Provider $provider)
    {
        $providerUser = $provider->user();
        $providerName = class_basename($provider);

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account)
        {
            return $account->user;
        }
        else
        {
            $account = new SocialAccount([
                'providerUserId' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            $user = User::whereEmail($providerUser()->getEmail())->first();

            if (!$user)
            {
                $user = User::create([
                    'email' => $provider->getEmail(),
                    'name' => $providerUser->getName(),
                    'userName' => strlower(preg_replace('/\s+/', '_', $providerUser->name) . mt_rand(10, 100))
                ]);
            }
        $account->user()->associate($user);
        $account->save();

        return $user;
        }
    }
}