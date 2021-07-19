@extends('layouts.app')


@section('content')

<div class="jumbotron jumbotron-fluid bg-white">
    <div class="container">
      <h1 class="text-center ">COURSE LIST</h1>
      <p class="lead text-center">Selamat Datang di Daftar Kursus cari kelas yang anda inginkan dan gabung</p>
        <div class="d-flex justify-content-center">
            <form class="form-inline text-center">
                <input class="form-control mr-sm-2 " size="70" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 text-center" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<div class="jumbotron bg-white mx-5">
    <h1 class="mb-5">Category </h1>
    <div class="d-flex justify-content-around">

        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Frontend Developer</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Back-End Developer</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Mobile Developer</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Full-Stack Developer</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Data Science</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

    </div>
</div>


<div class="jumbotron">
    <h2>All  Course</h2>

    <div class="d-flex justify-content-around">
        @foreach ($kelas as $k)



        <div class="card rounded" style="width: 18rem;">
            <img src="{{ asset('storage/movies/'. $k->images) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $k->namaKelas }}</h5>
              <p class="card-text">Rp. {{ $k->hargaKelas }}</p>
              <a href="" class="btn btn-primary">Beli Kelas</a>
            </div>
        </div>

        @endforeach
    </div>

</div>

@endsection
