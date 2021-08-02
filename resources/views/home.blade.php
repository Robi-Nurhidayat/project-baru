@extends('layouts.app')
@section('title', 'Home')

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
<div class="jumbotron hero mx-5 my-4">
  <div class="row">
    <div class="col-sm-5">
      <h1 class="header-hero">Learn Programming Smart For Your Future</h1>

      <p class="lead mb-4 roboto-24-reguler text-hero"></p>

      <a class="btn btn-primary poppins-18-bold btn-hero" href="{{ route('register') }}" role="button">Get started</a>
    </div>

    <div class="col-sm-6 ml-4" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
      <img class="hero-image" src="{{ asset('img/home/hero.jpg') }}" alt="">
    </div>
  </div>

</div>

{{-- end of Hero --}}


{{-- Card plan --}}
<div class="jumbotron hero mx-5 my-4" id="pricing">
  <div class="row">
    <div class="col-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
      <div class="card p-2 card-pricing-main text-white shadow rounded" style="width: 20rem;">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Save More <br>
            With Good Plan </h5>
          <p class="card-text text-pricing">Kelas Premium mempunyai banyak benefits. Gabunglah Kelas Premium dengan metode belajar menggunakan studi kasus dan dapatkan sertifikat.</p>
          <p>Untuk Awal yang baru coba memilih kelas gratis terlebih dahulu. Jika suka anda bisa upgrade ke kelas premium kapan saja.</p>
        </div>
        <img src="{{ URL('img/home/saveplan.jpg') }}" class="card-img-top px-3 pb-3" alt="...">
      </div>
    </div>

    <div class="col-sm">
      <h2>
        Choose Your Plan
      </h2>
      <div class="card free-pricing-card shadow rounded " style="width: 20rem; height:89%;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-easing="ease-in-out">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Free</h5>
          <h6 class="roboto-pricing-medium">What You’ll Get?</h6>
          <div class="d-flex flex-row bd-highlight my-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#2541D7"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-free-pricing-reguler">
                Kesempatan belajar secara gratis
              </p>
            </div>
          </div>
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#2541D7"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-free-pricing-reguler">
                Akses selama nya
              </p>
            </div>
          </div>
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#2541D7"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-free-pricing-reguler">
                Ilmu yang bermanfaat
              </p>
            </div>
          </div>
          <a href="{{ route('register') }}" class="btn btn-primary btn-block pricing-button-primary">Get Started</a>
        </div>
      </div>
    </div>

    <div class="col-sm">
      <div class="card my-5 premium-pricing-card shadow rounded " style="width: 20rem; height:89%;" data-aos="fade-up" data-aos-duration="800" data-aos-easing="ease-in-out" data-aos-delay="200">
        <div class="card-body">
          <h5 class="card-title font-weight-bold">Premium</h5>
          <h6 class="roboto-pricing-medium">What You’ll Get?</h6>
          <div class="d-flex flex-row bd-highlight my-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#FFFFFF"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-premium-pricing-reguler">
                Kelas premium akses selamanya
              </p>
            </div>
          </div>

          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#FFFFFF"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-premium-pricing-reguler">
                Sertifikat Kelas
              </p>
            </div>
          </div>

          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#FFFFFF"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-premium-pricing-reguler">
                Bergabung dengan grup yang disediakan
              </p>
            </div>
          </div>

          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">
              <box-icon name="check" color="#FFFFFF"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-premium-pricing-reguler">
                Bertanya langsung ke mentor
              </p>
            </div>
          </div>

          <div class="d-flex flex-row bd-highlight mb-4">
            <div class="bd-highlight">
              <box-icon name="check" color="#FFFFFF"></box-icon>
            </div>
            <div class="p-1 bd-highlight">
              <p class="roboto-premium-pricing-reguler">
                Ilmu yang bermanfaat
              </p>
            </div>
          </div>
          <a href="{{ route('register') }}" class="btn btn-course-white btn-block">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- end of card plan --}}

{{-- card popular course --}}

<div class="jumbotron hero mx-5 my-4">
  <h4 class="popcourse-text">
    Popular Course
  </h4>
  <p class="popcourse-text roboto-18-bold">
    Top Course Demand in 2021
  </p>
  <div class="container ml-n3">
    <div class="row">
      <div class="col course-card">
        <div class="card shadow-sm">
          <img src="{{ URL('img/course/python.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title roboto-18-medium">Python Basic</h5>
            <p class="card-text roboto-14-reguler">Faqihza Mukhlis</p>
            <div class="d-flex flex-row bd-highlight">
              <div class="bd-highlight">
                <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              </div>
              <div class="px-1 bd-highlight">
                <p class="card-text roboto-16-medium">4.0 (1000)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col course-card">
        <div class="card shadow-sm">
          <img src="{{ URL('img/course/js.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title roboto-18-medium">Javascript</h5>
            <p class="card-text roboto-14-reguler">Faqihza Mukhlis</p>
            <div class="d-flex flex-row bd-highlight">
              <div class="bd-highlight">
                <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              </div>
              <div class="px-1 bd-highlight">
                <p class="card-text roboto-16-medium">4.0 (1000)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col course-card">
        <div class="card shadow-sm">
          <img src="{{ URL('img/course/react.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title roboto-18-medium">React JS</h5>
            <p class="card-text roboto-14-reguler">Anu</p>
            <div class="d-flex flex-row bd-highlight">
              <div class="bd-highlight">
                <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              </div>
              <div class="px-1 bd-highlight">
                <p class="card-text roboto-16-medium">4.0 (1000)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col course-card">
        <div class="card shadow-sm">
          <img src="{{ URL('img/course/laravel.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title roboto-18-medium">Laravel</h5>
            <p class="card-text roboto-14-reguler">Faqihza Mukhlis</p>
            <div class="d-flex flex-row bd-highlight">
              <div class="bd-highlight">
                <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              </div>
              <div class="px-1 bd-highlight">
                <p class="card-text roboto-16-medium">4.0 (1000)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

{{-- end of popular course --}}

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

{{-- testimonial students --}}


<div class="jumbotron hero mx-5 my-4">
  <div class="tetimonial-header mb-3">
    <h4 class="testi-text">Testimonial Students</h4>
    <p class="roboto-18-bold testi-text">Testimonial from students, What They Say? </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card ml-n3 mr-2 border-black testi-card">
          <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="bd-highlight">
                <img src="{{ URL('img/users/user1.jpg') }}" alt="" class="rounded rounded-circle" style="max-width: 4rem; height:4rem;">
              </div>
              <div class="py-2 px-3 bd-highlight">
                <p class="roboto-14-bold mb-n1">Aldi Taher</p>
                <p class="roboto-12-medium mt-1">Back-End Developer</p>
              </div>
            </div>
            <p class="card-text testimonial-text roboto-14-reguler">
              Asli Belajar disini asyik banget, mentornya ramah banget dibalas setiap bertanya
            </p>
            <p>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card ml-n3 mr-2 border-black testi-card">
          <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="bd-highlight">
                <img src="{{ URL('img/users/user1.jpg') }}" alt="" class="rounded rounded-circle" style="max-width: 4rem; height:4rem;">
              </div>
              <div class="py-2 px-3 bd-highlight">
                <p class="roboto-14-bold mb-n1">Putra Dzaki</p>
                <p class="roboto-12-medium mt-1">Flutter Developer</p>
              </div>
            </div>
            <p class="card-text testimonial-text roboto-14-reguler">
              Course Online paling recommended
            </p>
            <p>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card ml-n3 mr-2 border-black testi-card">
          <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="bd-highlight">
                <img src="{{ URL('img/users/user1.jpg') }}" alt="" class="rounded rounded-circle" style="max-width: 4rem; height:4rem;">
              </div>
              <div class="py-2 px-3 bd-highlight">
                <p class="roboto-14-bold mb-n1">Indah Nuraini</p>
                <p class="roboto-12-medium mt-1">Android Developer</p>
              </div>
            </div>
            <p class="card-text testimonial-text roboto-14-reguler">
              Tidak sia sia belajar disini, udah harganya terjangkau terus enak juga pengajarnya.
            </p>
            <p>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card ml-n3 mr-2 border-black testi-card">
          <div class="card-body">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="bd-highlight">
                <img src="{{ URL('img/users/user1.jpg') }}" alt="" class="rounded rounded-circle" style="max-width: 4rem; height:4rem;">
              </div>
              <div class="py-2 px-3 bd-highlight">
                <p class="roboto-14-bold mb-n1">Thoriq Maulana</p>
                <p class="roboto-12-medium mt-1">UI Designer</p>
              </div>
            </div>
            <p class="card-text testimonial-text roboto-14-reguler">
              Belajar disini Seru, pengajarnya baik juga. Karena sudah berpengalaman jadinya mudah dipahami. Intinya top dah ITCourse
            </p>
            <p>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
              <box-icon type='solid' name='star' color="#FFC107"></box-icon>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>

</div>


{{-- end of testimonial students --}}

<!-- Penawaran -->
<div class="jumbotron background-offer-image">

  <h4 class="text-white text-sm-center poppins-36-bold">
    Let’s Get Started <br>
    Your Education
  </h4>
  <div class="text-center p-2">
    <a class="btn btn-primary poppins-18-bold px-5 py-2" href="{{ route('register') }}" role="button">
      Get started
    </a>
  </div>

</div>
<!-- Akhir Penawaran -->

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