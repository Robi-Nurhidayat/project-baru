@extends('halamanUser.app')


@section('content')

<div class="row">
    <div class="col-md-4 col-lg-2 bg-dark">
        <ul class="nav flex-column">
            @foreach ($kelasLink as $k)


            <li class="nav-item">
              <a class="nav-link active" href="">{{ $k->judul }}</a>
            </li>

            @endforeach
            {{-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> --}}
          </ul>
    </div>

    <div class="col-md-8 col-lg-10">
        <div class="">
            <h2>Laa</h2>
            {{-- <iframe src="" frameborder="0" allowfullscreen height="315" width="560"></iframe> --}}

            <video src="https://drive.google.com/file/d/1_cDvrBTLk6Xapz2ZoChv0I1z-4ihCNbn/view?usp=sharing"></video>
        </div>
    </div>
</div>

@endsection
