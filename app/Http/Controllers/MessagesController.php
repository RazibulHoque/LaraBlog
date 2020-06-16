<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'title' => 'required',
        'description' => 'required',

      ]);
      return 'success';
    }
}
