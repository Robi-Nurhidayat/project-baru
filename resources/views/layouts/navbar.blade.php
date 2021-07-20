<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand container" href="#">ITCourse</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto mx-5 mr-5">
        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="">Course</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="{{ route('about') }}">About</a>
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('login') }}" class="btn btn-outline-secondary mr-3 ml-3">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
      </div>
    </div>
  </nav>
