<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param $user
     * @return Renderable
     */
    public function index(User $user)
    {
        //Catch the username from model and send to the view
        //$user = User::findOrFail($user);
        $authUser = auth()->user();
        $followed = $authUser ? $authUser->following->contains($user->id) : false;
        return view('profiles.index',compact('user','followed'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        // $user = User::findOrFail($user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        //Handle the request and validate model
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => ['url'],
            'image' => '',
        ]);

        //Update model with the new validated values from the request

        if (request('image')) {
            //Catch the path of image
            $imageArray = request('image')->store('profile', 'public');

            // create a new image resource from physical file
            $image = Image::make(public_path("/storage/{$imageArray}"))->fit(1000, 1000, null, 'top-left');
            $image->save();
        }

        $arrayImage = ['image' => $imageArray];
        auth()->user()->profile->update(array_merge(
            $data,
            $arrayImage ?? []
        ));

        //Return to the profile
        return redirect("/profile/{$user->id}");
    }
}
