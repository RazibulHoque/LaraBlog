<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profile', compact('user'));
    }

    public function edit(User $user)
    {
        
        return view('edit', compact('user'));

    }
    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'about' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
       

        if (request('image')){
            $imagePath = request('image')->store('profile','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
        $image->save();
        }

        
        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect("/profile/{$user->id}");
    }
}
