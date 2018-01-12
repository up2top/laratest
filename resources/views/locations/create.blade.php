@extends('layouts.master')

@section('title')
  Create a New Location
@endsection

@section ('content')

@include ('layouts.errors')

<form method="POST" action="/locations">

	{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" required="">
  </div>

  <div class="form-group">
    <label for="lat">Latitude</label>
    <input type="text" class="form-control" id="lat" name="lat" required="">
  </div>

  <div class="form-group">
    <label for="lon">Longitude</label>
    <input type="text" class="form-control" id="lon" name="lon" required="">
  </div>

  <div class="form-group">
    <label for="area">Area</label>
    <input type="text" class="form-control" id="area" name="area" required="">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection