@extends('layouts.app')

@section('content')
<div class="container">
<h1>Create new post</h1>
{!! Form::open(['url' => 'create/submit']) !!}
<div class="form-group">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}

</div>
<div class="form-group">
  {{Form::file('image')}}

</div>
<div class="form-group">
  {{Form::label('detail', 'Description')}}
  {{Form::textarea('detail', '', ['class' => 'form-control', 'placeholder' => 'Enter Description'])}}

</div>
<div>
  {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
@include('inc.postarea')
@endsection
