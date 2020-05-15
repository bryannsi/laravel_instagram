@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://instagram.fsyq1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/92772861_152834562777350_3699894156890472448_n.jpg?_nc_ht=instagram.fsyq1-1.fna.fbcdn.net&_nc_ohc=f7pX7BuTWQMAX9zzTmB&oh=6b288be3245ed6e5e81e76b88eb45240&oe=5EE43665" class='rounded-circle img-thumbnail'>
        </div>
        <div class="col-9">
            <div>
                <h1>{{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"><img src="https://instagram.fsyq1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s750x750/90087696_209773963462317_8406980797762258202_n.jpg?_nc_ht=instagram.fsyq1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=VB5I3bX31VEAX-Pfydh&oh=b67dd4c19163ac634aa4260fd0bd4d3e&oe=5EE6B161" class="w-100 h-75 img-thumbnail"></div>
        <div class="col-4"><img src="https://instagram.fsyq1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p750x750/89029675_559191374951402_6110458928681277519_n.jpg?_nc_ht=instagram.fsyq1-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=J8KIXNGsBy8AX-dFIBD&oh=5e5fc857f292aeb4281196afdaf35977&oe=5EE5DD62" class="w-100 h-75 img-thumbnail"></div>
        <div class="col-4"><img src="https://instagram.fsyq1-1.fna.fbcdn.net/v/t51.2885-15/e35/s1080x1080/84086270_873397929773692_9122235764778419646_n.jpg?_nc_ht=instagram.fsyq1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=oMKSXUCBfvsAX8dcKY0&oh=10246f08024ac4c8a8035f182b8a4ee5&oe=5EE7B4F3" class="w-100 h-75 img-thumbnail"></div>
    </div>
</div>
@endsection
