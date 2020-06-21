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
            
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count()}} Posts</strong></div>
                <div class="pr-5">followers</div>
                <div class="pr-5">following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->name }}</div>
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
                <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
              </ul>
            </div>
            <div class="details mt-20">
              <a href="blog-single.html">
                <h3>Woman claims husband wants to name baby girl
                  after his ex-lover sparking.</h3>
              </a>
              <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
              <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
              <a class="button" href="/post/{{$post->id}}">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        @endforeach
        
    </div>
</div>
@endsection
