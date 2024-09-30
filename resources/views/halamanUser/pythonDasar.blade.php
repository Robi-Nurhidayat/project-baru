@extends('halamanUser.app')
@section('title', 'Python')

@section('content')
<div class="body-user">
    <div class="container">
        @foreach ($pythondasar as $py)
        <div class="d-flex justify-content-center mb-5">
            <div>
                <h2>{{ $py->judul }}</h2>
                <iframe width="950" height="500" src="{{ $py->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <div class="card text-center mx-4 my-4" style="width: 18rem;">
                <img src="{{ asset('img/logotools/pythonlogo.png') }}" class="align-self-center card-img-profile mt-4" width="80px" alt="...">
                <div class="card-body">
                    <h5 class="card-title head-card-tools">Python</h5>
                    <a href="https://www.python.org/downloads/" target="__blank" class=" download-card-tools">Download</a>
                </div>
            </div>
            <div class="card text-center mx-4 my-4" style="width: 18rem;">
                <img src="{{ asset('img/logotools/vscodelogo.png') }}" class="align-self-center card-img-profile mt-4" width="80px" alt="...">
                <div class="card-body">
                    <h5 class="card-title head-card-tools">Visual Studio Code</h5>
                    <a href="https://code.visualstudio.com/download" target="__blank" class="download-card-tools">Download</a>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection