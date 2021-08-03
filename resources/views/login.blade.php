@extends('layouts.app')
@section('title', 'Login to ITCourse')

@section('content')
<div class="jumbotron bg-light m-auto" style="height: 70vh; width:80%; margin-top: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-md my-auto mr-5 login-form">
        <h1 class="header-poppins-48">Login</h1>
        <p class="poppins-18-reguler">Belum punya akun ? <a href="{{ route('register') }}">Sign Up</a></p>
        <p>Login Sebagai <a href="{{ route('adminLogin') }}">Admin</a></p>

        <form action="{{ route('login') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="email" class="roboto-18-medium">Email address</label>
            <input type="email" class="form-control roboto-14-reguler" id="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Alamat Email Anda" required>
          </div>

          <div class="form-group">
            <label for="password" class="roboto-18-medium">Password</label>
            <input type="password" class="form-control roboto-14-reguler" id="password" name="password" placeholder="Masukkan Kata Sandi" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block poppins-18-bold">Login</button>
          </div>
        </form>
        <div class="lupa-sandi text-xl-right poppins-18-reguler">
          <a href="#">Lupa Kata Sandi?</a>
        </div>

      </div>
      <div class="col-md mb-5">
        <img src="{{ asset('img/home/login.jpg') }}" alt="" style="max-width: 100%;">
      </div>
    </div>
  </div>
</div>
@endsection