@extends('layouts.app')

@section('content')
    <!--================ Banner and Blog slider start =================-->  
    <section>
      <div class="container">
      @include('inc.banner')
     @include('inc.blogslider')
    @include('inc.messages')
      </div>
    </section>
    <!--================ Banner Blog slider end =================-->  

    <!--================ Start Blog Post Area =================-->
    <section> 
    @include('inc.postarea')
    </section>
@endsection
