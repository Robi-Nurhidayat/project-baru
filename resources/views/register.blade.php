@extends('layouts.app')

@section('content')
<div class="jumbotron bg-light m-auto signup-form" style="height: 70vh; width:80%; margin-top: 100px;">
  <div class="row">
    <div class="col-md mr-5">
      <h1 class="header-poppins-48">Sign Up</h1>
      <p class="poppins-18-reguler">Sudah punya akun ? <a href="{{ route('login') }}">Login</a></p>
      <form action="{{ route('register.postRegister') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="username" class="roboto-18-medium">Username</label>
          <input type="text" class="form-control roboto-14-reguler" id="username" name="name" placeholder="Masukkan Username Anda" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="email" class="roboto-18-medium">Email address</label>
          <input type="email" class="form-control roboto-14-reguler" id="email" aria-describedby="emailHelp" name="email" placeholder="Masukkan Alamat Email Anda" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="password" class="roboto-18-medium">Password</label>
          <input type="password" class="form-control roboto-14-reguler" id="password" name="password" placeholder="Masukkan Kata Sandi" required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="confirmpassword" class="roboto-18-medium">Confirm Password</label>
          <input type="password" class="form-control roboto-14-reguler" id="confirmpassword" name="repeat" placeholder="Masukkan Konfirmasi Kata Sandi" required autocomplete="off">
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

    <div class="col-md img-fluid mb-5">
      <img src="{{ asset('img/home/login.jpg') }}" alt="" style="width: 100%;">
    </div>
  </div>

</div>
@endsection
