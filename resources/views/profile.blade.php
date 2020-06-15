@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/blog/blog-slider/blog-slide1.png" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>

                    <follow-button user-id="" follows=""></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>

                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5">posts</div>
                <div class="pr-5">followers</div>
                <div class="pr-5">following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
            <div>{{ $user->profile->about }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        
    </div>
</div>
@endsection
