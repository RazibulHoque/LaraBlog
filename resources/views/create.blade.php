@extends('layouts.app')

@section('content')
@include('inc.messages')
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
  {{Form::textarea('detail', '', ['class' => 'form-control', 'id' => 'summary-ckeditor', 'name' => 'summary-ckeditor'])}}

</div>
<div>
  {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
</div>
@include('inc.postarea')
@endsection
