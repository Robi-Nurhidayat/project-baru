<ul class="nav flex-column mt-4 nav-sidebar">
    <li class="nav-link mb-3">
        <div class="logo-sidebar text-xl-center">
            IT Course
        </div>
    </li>
    <li class="nav-link ml-4">
        <div class="d-flex flex-column bd-highlight">
            <div class="">
                <img src="{{ URL('img/users/',auth()->user()->images) }}" width="60px" alt="" class="rounded-circle rounded mx-auto d-block">
            </div>
            <div class="text-center mt-2">
                <span class="poppins-14-semibold">{{auth()->user()->name}}</span>
            </div>
        </div>
    </li>
    <li class="nav-item mt-3">
        <a class="nav-link" href="{{ route('user') }}">
            <div class="d-flex flex-row bd-highlight menu-icon">
                <div class="p-1 bd-highlight">
                    <span class="material-icons">home</span>
                </div>
                <div class="p-1 bd-highlight">
                    <span class="poppins-16-medium">Home</span>
                </div>
            </div>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="#">

            <div class="d-flex flex-row bd-highlight">
                <div class="p-1 bd-highlight">
                    <span class="material-icons">school</span>
                </div>
                <div class="p-1 bd-highlight">
                    <span class="poppins-16-medium">My Course</span>
                </div>
            </div>
        </a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link" href="">
            <div class="d-flex flex-row bd-highlight menu-icon">
                <div class="p-1 bd-highlight">
                    <span class="material-icons">book</span>
                </div>
                <div class="p-1 bd-highlight">
                    <span class="poppins-16-medium">Course List</span>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('setting') }}">
            <div class="d-flex flex-row bd-highlight menu-icon">
                <div class="p-1 bd-highlight">
                    <span class="material-icons">settings</span>
                </div>
                <div class="p-1 bd-highlight">
                    <span class="poppins-16-medium">Settings</span>
                </div>
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="return confirm('Apakah Anda Yakin?')">
            <div class="d-flex flex-row bd-highlight">
                <div class="p-1 bd-highlight">
                    <span class="material-icons">logout</span>
                </div>
                <div class="p-1 bd-highlight">
                    <span class="poppins-16-medium">Log Out</span>
                </div>
            </div>
        </a>
    </li>
</ul>

<div class="fixed-bottom bg-white">
    <div class="mobile-sidebar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="p-1 bd-highlight">
                        <img src="{{ URL('img/users/',auth()->user()->images) }}" width="24px" alt="" class="rounded-circle rounded mx-auto d-block">
                    </div>
                </div>

                <div class="col">
                    <a class="" href="{{ route('user') }}">
                        <div class="p-1 bd-highlight">
                            <span class="material-icons">home</span>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a class="" href="{{ route('setting') }}">
                        <div class="p-1 bd-highlight">
                            <span class="material-icons">settings</span>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a class="" href="{{ route('logout') }}" onclick="return confirm('Apakah Anda Yakin?')">
                        <div class="p-1 bd-highlight">
                            <span class="material-icons">logout</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>