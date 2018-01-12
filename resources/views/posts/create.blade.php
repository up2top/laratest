@extends('layouts.master')

@section('title')
  Create a New Post
@endsection

@section ('content')

@include ('layouts.errors')

<form method="POST" action="/posts">

	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required="">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control" required=""></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection