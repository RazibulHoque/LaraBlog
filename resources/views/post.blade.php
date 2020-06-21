@extends('layouts.app')

@section('content')
@include('inc.messages')
<div class="container">
<h1>Create new post</h1>
<form action="/post" enctype="multipart/form-data" method="post">
  {{ csrf_field() }}

<div class="form-group">
  {{Form::label('title', 'Title')}}
  {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}

</div>
<div class="form-group ">
  <ul class="cat-list mt-20">
  {{Form::label('category', 'Category')}}
  <li>{{Form::radio('category', 'Technology', ['class' => 'form-control'])}}Technology</li>
  <li>{{Form::radio('category', 'Software', ['class' => 'form-control'])}}Software<li>
  <li>{{Form::radio('category', 'Lifestyle', ['class' => 'form-control'])}}Lifestyle<li>
  <li>{{Form::radio('category', 'Shopping', ['class' => 'form-control'])}}Shopping</li>
  <li>{{Form::radio('category', 'Food', ['class' => 'form-control'])}}Food</li>
  <li>{{Form::radio('category', 'Other', ['class' => 'form-control'])}}Other</li>
  </ul>

</div>
<div class="form-group">
  {{Form::label('image', 'Image')}}<br>
  {{Form::file('image', ['id' => 'image', 'name' => 'image'])}}

</div>
<div class="form-group">
  {{Form::label('description', 'Description')}}
  {{Form::textarea('description', '', ['class' => 'form-control', 'id' => 'description', 'name' => 'description'])}}

</div>
<div>
  {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
</div>
</form>
</div>
@endsection
