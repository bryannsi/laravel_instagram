@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fsyq1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/92772861_152834562777350_3699894156890472448_n.jpg?_nc_ht=instagram.fsyq1-1.fna.fbcdn.net&_nc_ohc=f7pX7BuTWQMAX9zzTmB&oh=6b288be3245ed6e5e81e76b88eb45240&oe=5EE43665"
                class='rounded-circle img-thumbnail'>
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
            
        </div>
    </div>
    <div class="row pt-5">
        @php
        @endphp
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100 img-thumbnail">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection