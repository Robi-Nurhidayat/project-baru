@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif

  {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}

{{-- Hero --}}
<div class="jumbotron hero mx-5 my-5">
  <div class="row">
    <div class="col-md-5">
      <h1>Learn Programming</h1>
      <h1 class="mb-4">Smart For Your Future</h1>

      <p class="lead mb-4 roboto-24-reguler">Belajar cerdas seputar programming bersama ITCourse dan dapatkan pengetahuan untuk membangun masa depan anda yang lebih terarah</p>

      <a class="btn btn-primary" href="#" role="button">Get started</a>
    </div>

    <div class="col-md-6 ml-4 ">
      <img src="{{ URL('images/hero_home.jpg') }}" alt="">
    </div>
  </div>

</div>

{{-- end of Hero --}}


{{-- Card plan --}}
<div class="jumbotron mx-5" id="pricing">
  <div class="row">
    <div class="col-md-4">
      <div class="card p-2 bg-dark text-white font-card1 shadow rounded" style="width: 20rem;">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Save More <br>
            With Good Plan </h5>
          <p class="card-text">Kelas Premium mempunyai banyak benefits. Gabunglah Kelas Premium dengan metode belajar menggunakan studi kasus dan dapatkan sertifikat.</p>
          <p>Untuk Awal yang baru coba memilih kelas gratis terlebih dahulu. Jika suka anda bisa upgrade ke kelas premium kapan saja.</p>
        </div>
        <img src="{{ URL('images/card1.jpg') }}" class="card-img-top px-3 pb-3" alt="...">
      </div>
    </div>

    <div class="col-md-4">
      <div class="card my-5 bg-secondary text-white shadow rounded" style="width: 20rem; height:90%;">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Free <br>What You’ll Get?</h5>
          <p> Kesempatan belajar secara gratis</p>
          <p> Akses selama nya</p>
          <p> Ilmu yang bermanfaat</p>
          <div class="text-center d-flex justify-content-center">
            <a href="#" class="btn btn-outline-info">View Course List</a>
          </div>

        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card my-5 bg-secondary text-white shadow rounded" style="width: 20rem; height:90%;">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Free <br>What You’ll Get?</h5>
          <p> Kesempatan belajar secara gratis</p>
          <p> Akses selama nya</p>
          <p> Ilmu yang bermanfaat</p>
          <div class="text-center d-flex justify-content-center">
            <a href="#" class="btn btn-outline-info">View Course List</a>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

{{-- end of card plan --}}

{{-- card popular course --}}

<div class="jumbotron bg-secondary mx-5 my-5">
  <h1 class="mx-3">Popular Course</h1>
  <p class="mx-3 font-weight-bold">Top Course Demand in 2021</p>
  <div class="row mx-2">
    <div class="col-md-3 my-2">
      <div class="card" style="width: 18rem;">
        <img src="{{ URL('images/pi1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Python Basic</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 my-2">
      <div class="card" style="width: 18rem;">
        <img src="{{ URL('images/JS.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 my-2">
      <div class="card" style="width: 18rem;">
        <img src="{{ URL('images/react.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 my-2">
      <div class="card" style="width: 18rem;">
        <img src="{{ URL('images/lara.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- end of popular course --}}

{{-- why LearnIT --}}

<div class="jumbotron bg-dark mx-5 my-5">

  <div class="content-why">
    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center"><img src="{{ URL('images/waktu.jpg') }}" alt="" class="rounded"></div>
      <div class="card-body">
        <h5 class="card-title">Waktu Fleksibel</h5>
        <p class="card-text">Kelas permanen tanpa ada batas waktu</p>
      </div>
    </div>

    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem;height:300px;">
      <div class="card-header text-center"><img src="{{ URL('images/uang.jpg') }}" alt="" class="rounded"></div>
      <div class="card-body">
        <h5 class="card-title">Biaya Yang Terjangkau</h5>
        <p class="card-text">Harga yang ditawarkan sangat bersahabat dengan dompet anda.</p>
      </div>
    </div>

    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem;height:300px;">
      <div class="card-header text-center"><img src="{{ URL('images/mentor.jpg') }}" alt="" class="rounded"></div>
      <div class="card-body">
        <h5 class="card-title">Pengajar Professional</h5>
        <p class="card-text">Pengajar sudah professional di bidang nya</p>
      </div>
    </div>
  </div>
</div>


{{-- end of LearnIT --}}

{{-- testimonial students --}}


<div class="jumbotron bg-dark mx-5 my-5">
  <div class="tetimonial-header mb-3 ml-4">
    <h2>Testimonial Students</h2>
    <h4>Testimonial from students, Our Say : </h4>
  </div>

  <div class="testi-section">
    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ URL('images/bagus.jpg') }}" alt="" class="rounded rounded-circle mt-3" style="max-width: 4rem; height:4rem;">
          </div>
          <div class="col-md-6 mt-3 ">
            <p>Bagus Perdana</p>
            <p>UI Designer</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Waktu Fleksibel</h5> --}}
        <p class="card-text">Penjelasan mudah dimengerti serta kualitas materi nya sangat bagus.</p>
      </div>
    </div>

    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ URL('images/fahrul.jpg') }}" alt="" class="rounded rounded-circle mt-3" style="max-width: 4rem; height:4rem;">
          </div>
          <div class="col-md-6 mt-3 ">
            <p>Raden Fachrul</p>
            <p>Web Developer</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Waktu Fleksibel</h5> --}}
        <p class="card-text">Penjelasan mudah dimengerti serta kualitas materi nya sangat bagus.</p>
      </div>
    </div>

    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ URL('images/robi.jpg') }}" alt="" class="rounded rounded-circle mt-3" style="max-width: 4rem; height:4rem;">
          </div>
          <div class="col-md-6 mt-3 ">
            <p>Robi Nurhidayat</p>
            <p>Full-Stack Developer</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Waktu Fleksibel</h5> --}}
        <p class="card-text">Penjelasan mudah dimengerti serta kualitas materi nya sangat bagus.</p>
      </div>
    </div>


    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ URL('images/akbar.jpg') }}" alt="" class="rounded rounded-circle mt-3" style="max-width: 4rem; height:4rem;">
          </div>
          <div class="col-md-6 mt-3 ">
            <p>Akbar Saleh</p>
            <p>Android Developer</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Waktu Fleksibel</h5> --}}
        <p class="card-text">Penjelasan mudah dimengerti serta kualitas materi nya sangat bagus.</p>
      </div>
    </div>


    <div class="card text-black mb-3 shadow-lg rounded" style="max-width: 18rem; height:300px;">
      <div class="card-header text-center">
        <div class="row">
          <div class="col-md-4">
            <img src="{{ URL('images/gaber.jpg') }}" alt="" class="rounded rounded-circle mt-3" style="max-width: 4rem; height:4rem;">
          </div>
          <div class="col-md-6 mt-3 ">
            <p>Adam Alfian</p>
            <p>IOS Developer</p>
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- <h5 class="card-title">Waktu Fleksibel</h5> --}}
        <p class="card-text">Penjelasan mudah dimengerti serta kualitas materi nya sangat bagus.</p>
      </div>
    </div>
  </div>
</div>


{{-- end of testimonial students --}}

{{-- footer --}}



<div class="jumbotron mx-5 my-5">
  <div class="footer">
    <div class="logo-footer">
      <img src="{{ URL('images/logo.jpg') }}" alt="">
    </div>

    <div class="footer-perusahaan">
      <h4>Perusahaan</h4>
      <h6>About</h6>
      <h6>Contact</h6>
      <h6>Our Team</h6>

    </div>

    <div class="footer-komunitas">
      <h4>Komunitas</h4>
      <h6>Course</h6>
      <h6>Mentor</h6>
      <h6>Konsultasi</h6>
      <h6>Testimonial</h6>
      <h6>Become a Mentor</h6>
    </div>

    <div class="footer-tautan">
      <h4>Tautan Pengguna</h4>
      <h6>Support</h6>
      <h6>Kebijakan Privasi</h6>
      <h6>Syarat dan Ketentuan</h6>
    </div>
  </div>
</div>


{{-- end of footer --}}

@endsection