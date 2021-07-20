@extends('layouts.app')

@section('content')

<div class="jumbotron mx-5 my-5 bg-light">
    <div class="container">
      <h1 class="display-4 text-center">Contact US</h1>
      <p class="lead mt-4" style="width: 100%; text-align:center;">Ada Yang Perlu Ditanyakan? Silahkan Kami Akan Membantu Anda</p>
    </div>
</div>

{{-- why LearnIT --}}

<div class="jumbotron bg-white mx-5 my-5">

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <form action="">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap Anda">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email Anda">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Telepon Anda">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Pesan Anda ..."></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-outline-primary">Send Message</button>
                  </div>


            </form>
        </div>
        <div class="col-md-6 col-lg-6 d-flex justify-content-center">
            <img src="{{ URL('img/course/contact_hero.jpg') }}" alt="" style="width: 80%; height:100%;">
        </div>
    </div>
</div>

{{-- services --}}

<div class="jumbotron bg-white mx-5 my-5 contact-img">
    <div class="">
        <img src="{{ URL('img/course/Contact.jpg') }}" alt="">
    </div>

    <div class="">
        <img src="{{ URL('img/course/Add.jpg') }}" alt="">
    </div>

    <div class="">
        <img src="{{ URL('img/course/operasi.jpg') }}" alt="">
    </div>
</div>


{{-- end of service --}}


{{-- footer --}}



<div class="jumbotron mx-5 my-5">
  <div class="footer">
    <div class="logo-footer" style="width: 40%">
        <h4>ITCourse</h4>
        <h4>ITCourse adalah sebuah website belajar secara daring <br> tentang pemrograman berupa sebuah video belajar </h4>
        <h4>© Copyright 2021 ITCourse</h4>
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
