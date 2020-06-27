@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="container">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Profile</h1>
            </div>

            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label">Title</label>


                <input id="title"
                       type="text"
                       class="form-control "
                       name="title"
                       value="{{ old('title') ?? $user->profile->title }}"
                       autocomplete="title" autofocus>

                

            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Description</label>


                <input id="about"
                       type="text"
                       class="form-control "
                       name="about"
                       value="{{ old('about') ?? $user->profile->about }}"
                       autocomplete="about" autofocus>

                

            </div>
            <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label">URL</label>


                <input id="url"
                       type="text"
                       class="form-control "
                       name="url"
                       value="{{ old('url') ?? $user->profile->url }}"
                       autocomplete="url" autofocus>

                
            </div>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                <input type="file" class="form-control-file" id="image" name="image">

                
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">Save Profile</button>
            </div>

        </div>
    </div>
</form>
</div>
@endsection
