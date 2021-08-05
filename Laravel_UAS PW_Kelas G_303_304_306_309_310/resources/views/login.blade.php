@extends('master')
@section('title', 'Login Page')
@section('body')
<h3 style="text-align: center; margin: 20px">Login Page</h3>
<form action="/loginPost" method="POST" style="padding: 50px 100px;">
  @csrf
  <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="form-row" style="justify-content: center;">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
  </div>
  <br>
  <center><button class="btn btn-primary" type="submit">Login</button>
  <a href="/register" class="btn btn-md btn-secondary">Register</a></center>
</form>
@endsection