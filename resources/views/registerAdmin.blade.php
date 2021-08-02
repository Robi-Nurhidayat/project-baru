@extends('layouts.app')
@section('title', 'Sign Up Admin ITCourse')

@section('content')
<div class="jumbotron bg-light m-auto admin-login-form" style="height: 70vh; width:80%; margin-top: 100px;">
  <div class="row">
    <div class="col-md-6 m-auto">
      <h1>Sign Up Admin</h1>
      <p class="poppins-18-reguler">Sudah punya akun? <a href="{{ route('adminLogin') }}">Login</a></p>
      <form action="{{ route('adminLogin') }}" method="GET">
        @csrf

        <div class="form-group">
          <label for="username" class="roboto-18-medium">Username</label>
          <input type="text" class="form-control roboto-14-reguler" id="username" name="name" placeholder="Masukkan Username Anda" required>
        </div>

        <div class="form-group">
          <label for="email" class="roboto-18-medium">Email address</label>
          <input type="email" class="form-control roboto-14-reguler" id="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Alamat Email Anda" required>
        </div>

        <div class="form-group">
          <label for="password" class="roboto-18-medium">Password</label>
          <input type="password" class="form-control roboto-14-reguler" id="password" name="password" placeholder="Masukkan Kata Sandi" required>
        </div>

        <div class="form-group">
          <label for="confirmpassword" class="roboto-18-medium">Confirm Password</label>
          <input type="password" class="form-control roboto-14-reguler" id="confirmpassword" name="repeat" placeholder="Masukkan Konfirmasi Kata Sandi" required>
        </div>

        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="setuju" required>
          <label class="form-check-label roboto-14-reguler" for="setuju"> Saya Setuju <a href="">Syarat dan Ketentuan</a> & <a href="">Kebijakan Privasi</a></label>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block poppins-18-bold"> Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection