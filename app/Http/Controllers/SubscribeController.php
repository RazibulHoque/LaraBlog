<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(User $user)
    {
        return auth()->user()->subscribing()->toggle($user->profile);
    }
}
