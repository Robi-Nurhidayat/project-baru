@extends('layouts.app')

@section('content')
<div class="jumbotron ml-auto bg-light mx-5" style="height: 70vh; width:80%; margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 col-12">
            <a href="{{ route('registerAdmin') }}" class="btn btn-primary">Daftar</a>
            <h1>Login Admin</h1>
            <form action="{{ route('admin') }}" method="GET">
                @csrf

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password">
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Login</button>
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
