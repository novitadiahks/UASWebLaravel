@extends('master')
@section('title', 'Register Page')
@section('body')
<h3 style="text-align: center; margin: 20px">Login Page</h3>
<form action="/registerPost" method="POST" style="padding: 50px 100px;">
  @csrf
  <div class="form-group">
    <label for="alamat">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="alamat">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="alamat">Password Confirmation:</label>
    <input type="password" class="form-control" id="confirmation" name="confirmation">
</div>
  <center><button class="btn btn-primary" type="submit">Register</button></center>
</form>
@endsection