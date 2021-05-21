<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\User;
use Auth;

class AuthController extends Controller
{
    protected $steam;
    protected $redirectURL = '/';
    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }
    public function redirectToSteam()
    {
        return $this->steam->redirect();
    }

    public function handle()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                $user = $this->findOrNewUser($info);
                Auth::login($user, true);
                return redirect($this->redirectURL); // redirect to site
            }
        }
        return $this->redirectToSteam();
    }
    protected function findOrNewUser($info)
    {
        $user = User::where('steamid', $info->steamID64)->first();
        if (!is_null($user)) {
            return $user;
        }
        return User::create([
            'username' => $info->personaname,
            'avatar' => $info->avatarfull,
            'steamid' => $info->steamID64
        ]);
    }
}
