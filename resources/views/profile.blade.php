@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    
                    <div id="app" >
                      
                    <subscribe-button :user-id="{{ $user->id }}" subscribe="{{ $subscribe }}"> </subscribe-button>
                    </div>

                </div>
                
            </div>
          <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count()}} Posts</strong></div>
            <div class="pr-5"><strong>{{ $user->profile->subscriber->count() }}</strong> Subscribers</div>
            <div class="pr-5"><strong>{{ $user->subscribing->count() }}</strong> Subscriptions</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->about }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="container single-recent-blog-post">
            <div class="thumb">
            <img class="img-fluid" src="/storage/{{$post->image}}" alt="">
              <ul class="thumb-info">
                <li><a href="#"><i class="ti-user"></i>{{ $user->name }}</a></li>
              <li><a href="#"><i class="ti-notepad"></i>{{ $post->updated_at }}</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="blog-single.html">
              <h3>{{ $post->title }}</h3>
              </a>
            <p class="tag-list-inline">Category: <a href="#">{{ $post->category }}</a></p>
            <p>{!! $post->description !!}</p>
              <a class="button" href="/post/{{$post->id}}">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        @endforeach
        
    </div>
</div>
@endsection
