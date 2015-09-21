@extends('layout')

@section('title', 'Registro de usuario')

@section('content')

<form  method="POST" action="/auth/register">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password Confirmation">
  </div>
  {!! csrf_field() !!}
  <button type="submit" class="btn btn-default">Register</button>
</form>

@endsection
