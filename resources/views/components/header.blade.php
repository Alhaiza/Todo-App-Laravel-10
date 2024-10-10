<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">TodoApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <p class="fs-6 d-inline">Welcome Back, <strong>{{ auth()->user()->name }}</strong></p>
                        </a>
                        <ul class="dropdown-menu">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-left mx-1"></i>Logout</button>
                            </form>
                        </ul>
                    </li>
                @else
                    <a class="btn btn-primary" aria-current="page" href="{{ route('login') }}">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
