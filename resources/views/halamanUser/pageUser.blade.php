@extends('halamanUser.app')
@section('title', 'Dashboard User')

@section('content')
<div class="body-user">
  <div class="container-sm">
    <h2>Dashboard</h2>
    <div class="row mt-4">
      <div class="col-sm-3">
        <a href="{{ route('piton') }}" class="">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/python.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Python</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('php') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/php.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">PHP</h5>
              <p class="card-text mentor-text-card">Sekolah Koding</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('ci') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/ci.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Codeigniter</h5>
              <p class="card-text mentor-text-card">Framework Indonesia</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('laravel') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/laravel.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Laravel</h5>
              <p class="card-text mentor-text-card">Padang Tekno</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm-3">
        <a href="{{ route('js') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/js.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Javascript</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('vue') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/vue.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Vue Js</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('react') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/react.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">React Js</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('reactnative') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/reactnative.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">React Native</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm-3">
        <a href="{{ route('flutter') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/flutter.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Flutter</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('css') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/css.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">CSS</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('html') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/html.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">HTML</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-3">
        <a href="{{ route('androidjava') }}">
          <div class="card card-kelas rounded-lg shadow-sm">
            <img src="{{ asset('img/course/androidjava.jpg') }}" class="card-img-top img-profile" alt="...">
            <div class="card-body">
              <h5 class="card-title judul-card">Android Java</h5>
              <p class="card-text mentor-text-card">Faqihza Mukhlis</p>
              <p class="card-text status-kelas">Kelas Premium</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- <div class="d-flex justify-content-around flex-wrap" style="width:70%; margin:0 auto;">
    --{{-- @foreach ($kelas as $k)


        <div class="card rounded mx-3 my-3" style="width: 20rem;">
            <img src="{{ asset('storage/movies/'. $k->images) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $k->namaKelas }}</h5>
      <p class="card-text">Rp. {{ $k->hargaKelas }}</p>
      <a href="{{ route('halaman.user.kelas',$k->id) }}" class="btn btn-primary">Masuk</a>
    </div>
  </div>

  @endforeach --}}
@endsection