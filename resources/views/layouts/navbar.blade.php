<nav class="navbar navbar-expand-lg main-navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container" id="navbarNav">
    <div class="row">
      <div class="col-sm">
        <a class="navbar-brand logo-navbar" href="/">IT Course</a>
      </div>

      <div class="col-sm col-menu">
        <div class="d-flex justify-content-center">
          <ul class="navbar-nav">
            <div class="p-2 bd-highlight">
              <li class="nav-item active">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
            </div>
            <div class="p-2 bd-highlight">
              <li class="nav-item">
                <a class="nav-link" href="/#pricing">Pricing</a>
              </li>
            </div>
            <div class="p-2 bd-highlight">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>
            </div>
            <div class="p-2 bd-highlight">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
              </li>
            </div>
          </ul>
        </div>
      </div>

      <div class="col-sm-1 login-button">
        <ul class="navbar-nav ul-button">
          <div class="p-2 bd-highlight btn-login">
            <li class="nav-item">
              <a href="{{ route('login') }}" class="px-3 btn">Login</a>
            </li>
          </div>
          <div class="p-2 bd-highlight signup-button">
            <li class="nav-item">
              <a href="{{ route('register') }}" class="px-4 btn btn-primary">Daftar</a>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </div>
</nav>