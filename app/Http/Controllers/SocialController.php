<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Laravel\Socialite\Facades\Socialite;


class SocialController extends Controller
{
    public function redirect(string $driver)
    {
        Socialite::driver($driver)->redirect();
    }

    public function callback(string $driver)
    {
        Socialite::driver($driver)->user();
    }
}
