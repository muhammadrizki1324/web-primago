<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="beranda.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: brown">
        <nav class="navbar bg-light">
            <div class="container">
                <img src="img/Primagologo.png" alt="Bootstrap" width="150" height="50">
            </div>
        </nav>
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav text">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="program">Program Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="visimisi">Visi Misi</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="/login" class="btn btn-light me-md-2">Login</a>
                        <a href="/register" class="btn btn-light me-md-2">Register</a>
                    </div>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div>
        @yield('beranda')
        @yield('sejarah')
        @yield('visimisi')
        @yield('program')
    </div>



    <div class="card text-center">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
