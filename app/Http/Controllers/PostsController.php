<?php

namespace App\Http\Controllers;

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
        return view('post');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'category' => '',
            'image' => ['required','image'],
            'description' => 'required',
        ]);
        $imagePath = request('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1500,628);
        $image->save();

        auth()->user()->posts()->create([
            'title'=> $data['title'],
            'category'=> $data['category'],
            'image'=> $imagePath,
            'description'=> $data['description'],
        ]);


       return redirect('/profile/'.auth()->user()->id);
    }
    public function show(\App\Post $post)
    {
        return view('show', compact('post'));
    }
}
