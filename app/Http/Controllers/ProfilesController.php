<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        //Catch the username from model and send to the view
        $user = User::findOrFail($user);
        return view('home', 
        [
            'user' => $user,
        ]);
    }
}
