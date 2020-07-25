<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('assets/admin') }}/css/style.css">
    <link rel="stylesheet" href="{{ url('assets/admin') }}/css/components.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>

                    </ul>
                    <h4 style="color: white" class="mt-3">{{ $data_tampilan->judul }}</h4>
                </form>

            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/admin/dashboard">{{ $data_tampilan->judul }}</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/admin/dashboard">RA</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li><a class="nav-link" href="/admin/dashboard"><i class="fas fa-home"></i>
                                <span>Dashboard</span></a></li>

                        @if(auth()->user()->is_admin == 1)
                            <li class="menu-header">Data</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                        class="fas fa-folder"></i> <span>Data Master</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="/admin/tampilan"><i class="fas fa-folder"></i>
                                            Tampilan</a></li>
                                    <li><a class="nav-link" href="/admin/acara"><i class="fas fa-folder"></i> Acara</a>
                                    </li>

                                </ul>
                            </li>
                        @endif

                        @if (auth()->user()->is_admin == 0)
                        <li class="menu-header">Acara</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="fas fa-folder"></i> <span>Data Acara</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="/admin/daftarAcara"><i class="fas fa-folder"></i>
                                        Daftar Acara</a></li>
                            </ul>
                        </li>
                        @endif

                        <li class="menu-header">User</li>
                        <li><a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span></a></li>


                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('judul_laman')</h1>
                    </div>
                    @yield('content')


                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
    <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Template JS File -->
    <script src="{{ url('assets/admin') }}/js/scripts.js"></script>
    <script src="{{ url('assets/admin') }}/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="{{ url('assets/admin') }}/js/page/index.js"></script>
    <script src="{{ url('assets/admin') }}/js/page/bootstrap-modal.js"></script>
</body>

</html>
