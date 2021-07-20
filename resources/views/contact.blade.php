@extends('layouts.app')

@section('content')

<div class="jumbotron mx-5 bg-light">
    <div class="container">
        <h1 class="display-4 text-center header-poppins-48">Contact US</h1>
        <p class="lead mt-4 roboto-18-medium text-center" style="width: 100%;">Ada Yang Perlu Ditanyakan? Silahkan Kami Akan Membantu Anda</p>
    </div>
</div>

{{-- why LearnIT --}}

<div class="jumbotron hero mx-5">

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <form action="{{ route('contact.post') }}" method="POST">
                @csrf
                <div class="form-group">
<<<<<<< HEAD
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap Anda" name="nama">
                  </div>
=======
                    <label for="exampleInputEmail1" class="roboto-medium-18">Nama Lengkap</label>
                    <input type="text" class="form-control roboto-medium-18" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Lengkap Anda">
                </div>
>>>>>>> 223826101eaeb2a66084181eba07929d73769a5f

                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
<<<<<<< HEAD
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email Anda" name="email">
                  </div>
=======
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email Anda">
                </div>
>>>>>>> 223826101eaeb2a66084181eba07929d73769a5f

                <div class="form-group">
                    <label for="exampleInputEmail1">No Telepon</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Telepon Anda" name="no_tlp">
                  </div>
=======
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Telepon Anda">
                </div>
>>>>>>> 223826101eaeb2a66084181eba07929d73769a5f

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pesan</label>
<<<<<<< HEAD
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Pesan Anda ..." name="pesan"></textarea>
                  </div>

                  <div class="form-group">
                      <button type="submit" class="btn btn-outline-primary">Send Message</button>
                  </div>

=======
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Pesan Anda ..."></textarea>
                </div>
>>>>>>> 223826101eaeb2a66084181eba07929d73769a5f

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block poppins-18-bold">Send Message</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 col-lg-6 d-flex justify-content-center">
            <img src="{{ URL('img/course/contact_hero.jpg') }}" alt="" style="width: 80%; height:100%;">
        </div>
    </div>
</div>

{{-- services --}}

<div class="jumbotron hero mx-5 my-5 contact-img contact-us">
    <div class="card text-center shadow-sm" style="width: 16rem;">
        <div class="card-body">
            <span class="material-icons md-48">
                call
            </span>
            <h6 class="card-subtitle mb-4 mt-2 poppins-18-semibold">Contact</h6>
            <div class="d-flex justify-content-center">
                <div class="bd-highlight mx-n4">
                    <a href="mailto:bagus.10118249@mahasiswa.unikom.ac.id" target="__blank" class="card-link">
                        <span class="material-icons">
                            email
                        </span>
                    </a>
                </div>
                <div class="bd-highlight mx-n4">
                    <a href="https://api.whatsapp.com/send?phone=6288214709338" target="__blank" class="card-link">
                        <box-icon name='whatsapp' type='logo'></box-icon>
                    </a>
                </div>
                <div class="bd-highlight mx-n4">
                    <a href="https://t.me/TextMe_bagus" class="card-link" target="__blank">
                        <box-icon name='telegram' type='logo'></box-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center shadow-sm" style="width: 16rem;">
        <div class="card-body">
            <span class="material-icons md-48">
                location_on
            </span>
            <h6 class="card-subtitle mb-4 mt-2 poppins-18-semibold">Address</h6>
            <div class="d-flex justify-content-center">
                <div class="bd-highlight mx-n4">
                    <a href="https://goo.gl/maps/jatUQRg3e5mxcLmy8" class="card-link" target="__blank">
                        <span class="material-icons">
                            my_location
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center shadow-sm style=" width: 16rem;"">
        <div class="card-body">
            <span class="material-icons md-48">
                schedule
            </span>
            <h6 class="card-subtitle mb-4 mt-2 poppins-18-semibold">Operational Hour</h6>
            <div class="d-flex justify-content-center">
                <div class="bd-highlight">
                    <p>Hari : Senin - Jum’at</p>
                    <p>Jam : 09:00 - 16:00 WIB </p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- end of service --}}

<!-- footer -->
<div class="bg-white footer-jumbotron shadow-sm">
    <div class="container py-5">
        <div class="row">
            <div class="col-5">
                <p class="logo-navbar">ITCourse</p>
                <p class="roboto-14-medium">
                    ITCourse adalah sebuah website belajar secara daring tentang pemrograman berupa sebuah video belajar
                </p>
                <p class="roboto-14-medium">© Copyright 2021 ITCourse</p>
            </div>

            <div class="col">
                <p class="poppins-18-bold">Perusahaan</p>
                <a href="{{ route('about') }}">
                    <p class="roboto-14-medium">About</p>
                </a>
                <a href="{{ route('contact') }}">
                    <p class="roboto-14-medium">Contact</p>
                </a>
                <a href="{{ route('about') }}#team">
                    <p class="roboto-14-medium">Our Team</p>
                </a>
            </div>

            <div class="col">
                <p class="poppins-18-bold">Komunitas</p>
                <a href="">
                    <p class="roboto-14-medium">Course</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Mentor</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Konsultasi</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Testimonial</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Become a Mentor</p>
                </a>
            </div>

            <div class="col">

                <p class="poppins-18-bold">Tautan Pengguna</p>
                <a href="">
                    <p class="roboto-14-medium">Support</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Kebijakan Privasi</p>
                </a>
                <a href="">
                    <p class="roboto-14-medium">Syarat dan Ketentuan</p>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection