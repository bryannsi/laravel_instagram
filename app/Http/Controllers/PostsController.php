<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $request = request();

        //Validate request, required fields and data type
        $request->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        //Catch the path of image
        $imagePath = $request['image']->store('uploads', 'public');

        // create a new image resource from physical file
        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200, 1200, null, 'top-left');
        $image->save();
        //Set values

        auth()->user()->posts()->create([
            'caption' => $request['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }

    public function show($post)
    {
        $post = Post::findOrFail($post);
        return view('posts.show', compact('post'));
    }
}
