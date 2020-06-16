<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('post');
    }

    public function store()
    {
        dd (request()->all());
    }
}
