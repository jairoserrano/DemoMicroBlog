@extends('layout')

@section('title', 'Ingreso de usuario')

@section('content')

  @if (Session::has('errors'))
     <ul class="alert alert-warning" role="alert">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
	@endif

<form  method="POST" action="/auth/login">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember"> Remember Me
    </label>
  </div>
  {!! csrf_field() !!}
  <button type="submit" class="btn btn-default">Login</button>
</form>

@endsection
