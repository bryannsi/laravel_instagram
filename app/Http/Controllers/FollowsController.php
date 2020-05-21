<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Save on many to many table
     * @param User $user User to follow, (not authenticated).
     * @return mixed
     */
    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}


