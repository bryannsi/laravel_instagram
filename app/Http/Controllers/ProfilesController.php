<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return view(
            'profiles.index',
            [
                'user' => $user,
            ]
        );
    }

    public function edit($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        //Handle the request from the client
        $request = request();

        //Validate request, required fields and data type
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => ['url'],
            'image' => '',
        ]);

        $user->profile->update($request);
        return redirect("/profile/{$user->id}");
    }
}
