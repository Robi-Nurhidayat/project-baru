@extends('layouts.app')

@section('content')

<div class="jumbotron mx-5 my-5 bg-light">
    <div class="container">
      <h1 class="display-4 text-center">ABOUT US</h1>
      <p class="lead mt-4" style="width: 100%;">ITCourse adalah sebuah website belajar secara daring atau online dengan menggunkan metode pembelajaran tentang pemrograman berupa sebuah video belajar dan user dapat memilih video belajar yang diinginkan.</p>
    </div>
</div>

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

{{-- our team --}}

<div class="jumbotron bg-dark mx-5 my-5">
    <div class="our-team">
      <div class="card mt-3" style="width: 18rem;">
        <div class="images d-flex justify-content-center mt-2">
          <img src="{{ URL('images/bagus.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
        </div>
        <div class="text-center mt-2">
          <p>Bagus Perdana Yusuf</p>
          <p>Front End Developer</p>
        </div>
        <div class="card-body bg-secondary mt-2">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>


          <div class="card mt-3" style="width: 18rem;">
            <div class="images d-flex justify-content-center mt-2">
              <img src="{{ URL('images/bagus.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p>Bagus Perdana Yusuf</p>
              <p>Front End Developer</p>
            </div>
            <div class="card-body bg-secondary mt-2">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card mt-3" style="width: 18rem;">
            <div class="images d-flex justify-content-center mt-2">
              <img src="{{ URL('images/bagus.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p>Bagus Perdana Yusuf</p>
              <p>Front End Developer</p>
            </div>
            <div class="card-body bg-secondary mt-2">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <div class="card mt-3" style="width: 18rem;">
            <div class="images d-flex justify-content-center mt-2">
              <img src="{{ URL('images/bagus.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p>Bagus Perdana Yusuf</p>
              <p>Front End Developer</p>
            </div>
            <div class="card-body bg-secondary mt-2">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

    </div>

</div>


{{-- end of our team --}}

{{-- lets get started --}}

<div class="jumbotron mx-5 my-5">
  <div class="container text-center">
    <h1 class="display-4">Let’s Get Started <br>
      Your Education</h1>
    <a href="#" class="btn btn-outline-success">Get Started</a>
  </div>
</div>

{{-- end of get started --}}


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
