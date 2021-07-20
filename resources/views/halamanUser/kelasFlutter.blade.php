@extends('halamanUser.app')


@section('content')
<div class="body-user">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div>
                <h2>01 - Pengenalan Flutter</h2>
                <iframe width="950" height="500" src="https://www.youtube.com/embed/iA8lLwmtKQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div>
                <h2>01 - Pengenalan Python</h2>
                <iframe width="950" height="500" src="https://www.youtube.com/embed/iA8lLwmtKQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div>
                <h2>01 - Pengenalan Python</h2>
                <iframe width="950" height="500" src="https://www.youtube.com/embed/iA8lLwmtKQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div>
                <h2>01 - Pengenalan Python</h2>
                <iframe width="950" height="500" src="https://www.youtube.com/embed/iA8lLwmtKQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div>
                <h2>01 - Pengenalan Python</h2>
                <iframe width="950" height="500" src="https://www.youtube.com/embed/iA8lLwmtKQM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5 flex-wrap">
            <div class="card text-center mx-4 my-4" style="width: 18rem;">
                <img src="{{ asset('img/logotools/flutter.png') }}" class="align-self-center card-img-profile mt-4" width="80px" alt="...">
                <div class="card-body">
                    <h5 class="card-title head-card-tools">Flutter</h5>
                    <a href="https://flutter.dev/docs/get-started/install" target="__blank" class=" download-card-tools">Install</a>
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