<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body class="">
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <div class="sidebar-header">
                    <div class="sidebar-brand">
                        <p href="#">Gudang Saya</p>
                    </div>
                </div>
                <li><a href="#home"><i class="fas fa-user-circle me-1"></i>Profile</a></li>
                <li><a href="/dashboard"><i class="fas fa-home me-1"></i>Home</a></li>
                <li class="dropdown">
                    <a href="#works" class="dropdown-toggle" id="tes" data-toggle="dropdown"><i
                            class="fas fa-plus me-1"></i>Tambah<span class="caret"></span></a>
                    <ul class="dropdown-menu animated fadeInLeft" role="menu">
                        <li><a href="/tambahData"><i class="fas fa-plus-circle me-1"></i>Tambah Data Produk</a></li>
                    </ul>
                </li>
                <li><a href="#contact"><i class="fas fa-comment me-1"></i>Contact</a></li>
                <li><a href="#followme"><i class="fab fa-instagram me-1"></i>Follow me</a></li>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="fas fa-sign-out-alt me-1"></i>Log Out</a>
                    <form id="logout-form" action="/logout" method="post" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        {{-- Navbar --}}
        <div class="navbar navbar-light bg-dark nav-atas fixed-top">
            <div class="container-fluid">
                <p class="navbar-brand ms-5">Produk</p>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        {{-- Navbar Penutup --}}

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>



            @yield('content')

            {{-- form logout --}}
            <form action="/logout">
                <button type="submit" class="btn btn"></button>
            </form>

        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://cdn.tailwindcss.com') }}"></script>
</body>

</html>
