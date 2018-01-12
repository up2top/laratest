@extends ('layouts.master')

@section ('content')

<h1>Login</h1>

<form method="POST" action="/login">

  {{ csrf_field() }}

  <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" required>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>

</form>

@endsection