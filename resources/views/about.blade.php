@extends('layouts.app')
@section('title', 'About Us')

@section('content')

<div class="jumbotron mx-5 my-2 bg-light">
  <div class="container">
    <h1 class="display-4 text-center header-poppins-48">ABOUT US</h1>
    <p class="lead mt-4 roboto-18-medium" style="width: 100%;">
      ITCourse adalah sebuah website belajar secara daring atau online dengan menggunkan metode pembelajaran tentang pemrograman berupa sebuah video belajar dan user dapat memilih video belajar yang diinginkan.</p>
  </div>
</div>

{{-- why LearnIT --}}

<div class="jumbotron backgroud-primary unggulan">
  <h4 class="text-white text-sm-center text-unggulan">Why IT Course</h4>
  <p class="text-white text-sm-center roboto-18-bold text-unggulan">Alasan Mengapa anda harus memilih ITCourse</p>
  <div class="content-why mt-4">
    <div class="card mr-4 card-unggulan" style="width: 15rem;">
      <div class="card-body">
        <div class="card-body text-center mt-n3">
          <img src="{{ URL('img/home/icon_waktu.jpg') }}" alt="" class="rounded">
        </div>
        <h5 class="card-title roboto-14-bold">Waktu Fleksibel</h5>
        <p class="card-text roboto-12-reguler">Kelas permanen tanpa ada batas waktu</p>
      </div>
    </div>

    <div class="card mr-4 card-unggulan" style="width: 15rem;">
      <div class="card-body">
        <div class="card-body text-center mt-n3">
          <img src="{{ URL('img/home/icon_uang.png') }}" alt="" class="rounded">
        </div>
        <h5 class="card-title roboto-14-bold">Biaya Yang Terjangkau</h5>
        <p class="card-text roboto-12-reguler">Harga yang ditawarkan sangat bersahabat dengan dompet anda.u</p>
      </div>
    </div>

    <div class="card mr-4 card-unggulan" style="width: 15rem;">
      <div class="card-body">
        <div class="card-body text-center mt-n3">
          <img src="{{ URL('img/home/icon_mentor.png') }}" alt="" class="rounded">
        </div>
        <h5 class="card-title roboto-14-bold">Pengajar Professional</h5>
        <p class="card-text roboto-12-reguler">Pengajar sudah professional di bidang nya</p>
      </div>
    </div>

  </div>
</div>

{{-- end of LearnIT --}}

{{-- our team --}}

<div class="jumbotron hero mx-5 my-2" id="team">
  <h4 class="text-sm-center team-text">OUR TEAM</h4>
  <p class="text-sm-center roboto-18-bold team-text">Meet The ITCourse Team</p>
  <div class="our-team">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card card-transparent mt-3 team-card">
            <div class="images d-flex justify-content-center mt-3">
              <img src="{{ asset('img/team/akbar.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p class="poppins-14-bold">Akbar Saleh Alfian</p>
              <p class="roboto-12-medium">Quality assurance</p>
            </div>
            <div class="card-body shadow-sm mt-2">
              <p class="card-text roboto-14-reguler">
                Saya Akbar Saleh Alfian, Saya berasal dari Bekasi, saat ini saya sedang menempuh pendidikan di Universitas Komputer Indonesia dengan mengambil jurusan Teknik Informatika. Di Dalam Team Saya bertugas sebagai Quality Assurance.
              </p>
            </div>
            <div class="card-body socmed shadow-sm">
              <div class="d-flex justify-content-center">
                <div>
                  <a href="mailto:akbar.10118240@mahasiswa.unikom.ac.id" class="card-link mx-n4" target="__blank">
                    <span class="material-icons">
                      email
                    </span>
                  </a>
                </div>
                <div>
                  <a href="#" class="card-link mx-n4" target="__blank">
                    <box-icon name='linkedin' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
                <div>
                  <a href="#" class="card-link mx-n4" target="__blank">
                    <box-icon name='github' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-transparent mt-3 team-card">
            <div class="images d-flex justify-content-center mt-3">
              <img src="{{ asset('img/team/bagus.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p class="poppins-14-bold">Bagus Perdana Yusuf</p>
              <p class="roboto-12-medium">Front End Developer</p>
            </div>
            <div class="card-body shadow-sm mt-2">
              <p class="card-text roboto-14-reguler">
                Saya Bagus Perdana Yusuf, Saya berasal dari Karawang, saat ini saya sedang menempuh pendidikan di Universitas Komputer Indonesia dengan mengambil jurusan Teknik Informatika. Di Dalam Team Saya bertugas sebagai Front End Developer.
              </p>
            </div>
            <div class="card-body socmed shadow-sm">
              <div class="d-flex justify-content-center">
                <div>
                  <a href="mailto:bagus.10118249@mahasiswa.unikom.ac.id" class="card-link mx-n4" target="__blank">
                    <span class="material-icons">
                      email
                    </span>
                  </a>
                </div>
                <div>
                  <a href="https://www.linkedin.com/in/bagus-perdana-0310971a5/" class="card-link mx-n4" target="__blank">
                    <box-icon name='linkedin' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
                <div>
                  <a href="https://github.com/bagusperdanay7" class="card-link mx-n4" target="__blank">
                    <box-icon name='github' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-transparent mt-3 team-card">
            <div class="images d-flex justify-content-center mt-3">
              <img src="{{ asset('img/team/fachrul.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p class="poppins-14-bold">Raden Fachrul</p>
              <p class="roboto-12-medium">UI & UX Designer</p>
            </div>
            <div class="card-body shadow-sm mt-2">
              <p class="card-text roboto-14-reguler">
                Saya Raden Fachrul, asal Bandung, Jawa Barat, saat ini saya sedang menempuh pendidikan di Universitas Komputer Indonesia dengan mengambil jurusan Teknik Informatika. Di Dalam Team Saya bertugas sebagai UI UX Designer.
              </p>
            </div>
            <div class="card-body socmed shadow-sm">
              <div class="d-flex justify-content-center">
                <div>
                  <a href="mailto:raden.10118255@mahasiswa.unikom.ac.id" class="card-link mx-n4" target="__blank">
                    <span class="material-icons">
                      email
                    </span>
                  </a>
                </div>
                <div>
                  <a href="#" class="card-link mx-n4" target="__blank">
                    <box-icon name='linkedin' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
                <div>
                  <a href="" class="card-link mx-n4" target="__blank">
                    <box-icon name='github' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-transparent mt-3 team-card">
            <div class="images d-flex justify-content-center mt-3">
              <img src="{{ asset('img/team/robi.jpg') }}" class="card-img-top rounded-circle" style="width: 8rem; height:8rem;" alt="...">
            </div>
            <div class="text-center mt-2">
              <p class="poppins-14-bold">Robi Nurhidayat</p>
              <p class="roboto-12-medium">Project Manager</p>
            </div>
            <div class="card-body shadow-sm mt-2">
              <p class="card-text roboto-14-reguler">
                Saya Robi Nurhidayat, Saya berasal dari Bekasi, saat ini saya sedang menempuh pendidikan di Universitas Komputer Indonesia dengan mengambil jurusan Teknik Informatika. Di Dalam Team Saya Bertugas sebagai Project Manager dan Back-End Developer
              </p>
            </div>
            <div class="card-body socmed shadow-sm">
              <div class="d-flex justify-content-center">
                <div>
                  <a href="mailto:robi.10118252@mahasiswa.unikom.ac.id" class="card-link mx-n4" target="__blank">
                    <span class="material-icons">
                      email
                    </span>
                  </a>
                </div>
                <div>
                  <a href="#" class="card-link mx-n4" target="__blank">
                    <box-icon name='linkedin' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
                <div>
                  <a href="https://github.com/Robi-Nurhidayat" class="card-link mx-n4" target="__blank">
                    <box-icon name='github' type='logo' color="#82868B"></box-icon>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


{{-- end of our team --}}

<!-- Penawaran -->
<div class="jumbotron background-offer-image">

  <h4 class="text-white text-sm-center poppins-36-bold">
    Let’s Get Started <br>
    Your Education
  </h4>
  <div class="text-center p-2">
    <a class=" btn btn-primary poppins-18-bold px-5 py-2" href="{{ route('register') }}" role="button">
      Get started
    </a>
  </div>

</div>
<!-- Akhir Penawaran -->


{{-- footer --}}
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
          <p class="roboto-14-medium">Testimonial</p>
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
{{-- end of footer --}}
@endsection