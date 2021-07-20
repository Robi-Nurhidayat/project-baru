<nav class="navbar navbar-expand-lg navbar-light shadow-md">
  <a class="navbar-brand font-weight-bold" href="#">ITCourse</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link active mx-5" href="#">Welcome {{ auth()->user()->name }} <span class="sr-only">(current)</span></a>
      <a class="nav-link active mx-5" href="{{ route('logout') }}" onclick="return confirm('Yakin ?')">Logout</a>
    </div>
</nav>