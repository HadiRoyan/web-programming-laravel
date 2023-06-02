<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->

                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color: aliceblue" class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: aliceblue" class="nav-link" href="/dosen">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: aliceblue" class="nav-link" href="/mata-kuliah">Mata Kuliah</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- About -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color: aliceblue" class="nav-link" href="/about">About</a>
                    </li>
                </ul>
            </div>
            <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    @yield('content')

    <!-- footer -->
    <footer class="text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container p-4 text-dark">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-8 col-md-12 mb-md-0">
                    <h5 class="text-uppercase fw-bold">Tentang Web</h5>
                    <p class="mt-2">Web ini dibuat untuk menyelesaikan tugas praktikum pemrograman berbasis web
                        menggunakan framework laravel</p>
                    <!-- Section: Social media -->
                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.instagram.com/hadiroyan3/" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="bi bi-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.linkedin.com/in/hadi-royan/" target="_blank" role="button"
                        data-mdb-ripple-color="dark"><i class="bi bi-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/HadiRoyan"
                        target="_blank" role="button" data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
                    <!-- Section: Social media -->
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="bi bi-house-door-fill me-3 text-secondary"></i> Kab. Karawang, Jawa Barat, Indonesia
                    </p>
                    <p>
                        <i class="bi bi-envelope-fill me-3 text-secondary"></i>
                        2110631170079@gmail.com
                    </p>
                    <p><i class="bi bi-telephone-fill me-3 text-secondary"></i> +62 87770109073</p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023:
            <a class="text-dark" href="https://github.com/HadiRoyan">HadiRoyan</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
