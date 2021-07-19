@extends('layouts.app')

@section('content')
<div class="jumbotron ml-auto bg-light mx-5" style="height: 70vh; width:80%; margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 col-12">
            <h1>Sign Up</h1>
            <h5>Sudah punya akun ? <a href="{{ route('login') }}">Login</a></h5>
            <form action="{{ route('register.postRegister') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="repeat">
                  </div>

                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Saya Setuju Ketentuan Syarat dan Kebijakan Privasi</label>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary"> Sign Up</button>
                  </div>
            </form>
        </div>

        <div class="col-md-6 col-12">
            <div class="hero-register d-flex align-items-center">
                <img src="{{ asset('images/hero_register.png') }}" alt="" style="width: 100%;">
            </div>
        </div>
    </div>

  </div>
@endsection

