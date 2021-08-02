@extends('layouts.app')
@section('title', 'Login Admin ITCourse')

@section('content')
<div class="jumbotron bg-light m-auto admin-login-form" style="height: 70vh; width:80%; margin-top: 100px;">
  <div class="row">
    <div class="col-md-6 m-auto">
      <h1>Login Admin</h1>
      <p>Ingin Menjadi Admin?<a href="{{ route('registerAdmin') }}"> Daftar</a></p>
      <form action="{{ route('admin') }}" method="GET">
        @csrf


        <div class="form-group">
          <label for="email" class="roboto-18-medium">Email address</label>
          <input type="email" class="form-control roboto-14-reguler" id="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Alamat Email Anda" required>
        </div>

        <div class="form-group">
          <label for="password" class="roboto-18-medium">Password</label>
          <input type="password" class="form-control roboto-14-reguler" id="password" name="password" placeholder="Masukkan Kata Sandi " required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block poppins-18-bold">Login</button>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection