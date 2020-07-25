<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon"
        href="{{ asset("assets/home/img/")."/".$data['img_title_browser'] }}"
        type="image/png" />
    <title>{{ $data['title_browser'] }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url("assets/home") }}/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ url("assets/home") }}/css/flaticon.css" />
    <link rel="stylesheet" href="{{ url("assets/home") }}/css/themify-icons.css" />
    <link rel="stylesheet"
        href="{{ url("assets/home") }}/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="{{ url("assets/home") }}/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ url("assets/home") }}/css/style.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <blade
include|(%26%2339%3Bsweetalert%3A%3Aalert%26%2339%3B%2C%20%5B%26%2339%3Bcdn%26%2339%3B%20%3D%3E%20%26%2334%3Bhttps%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2Fsweetalert2%409%26%2334%3B%5D)%0D />
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between" method="" action="">
                        <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                        <button type="submit" class="btn"></button>
                        <span class="ti-close" id="close_search" title="Close Search"></span>
                    </form>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img
                            src="{{ url("assets/home/img/")."/".$data['logo'] }}" style="width: 300px !important"
                            type="image/png" alt="" /></a>
                            
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.html">About</a>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="courses.html">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="course-details.html">Course Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="elements.html">Elements</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link search" id="search">
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">

                            <h2 class="text-uppercase mt-4 mb-5">
                                {{ $data['judul'] }}
                            </h2>
                            <div>
                                <a href="#" class="primary-btn2 mb-3 mb-sm-0">DAFTAR REUNI AKBAR</a>
                                <a href="#" class="primary-btn ml-sm-3 ml-0">DAFTRA IKA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->



    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">{{ $data['judul_acara'] }}</h2>
                        <p>
                            {{ $data['deskripsi_judul_acara'] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single course -->
                <div class="col-lg-12">
                    <div class="owl-carousel active_course">

                        @foreach ($acara as $item)

                        <div class="single_course">
                            <div class="course_head">
                                <img class="img-fluid" src="{{ url("assets/home/img/courses")."/".$item['img'] }}" alt="" />
                            </div>
                            <div class="course_content">
                                <span class="price">{{ $item['harga'] }}</span>
                                
                                <span class="tag mb-4 d-inline-block">Tanggal : {{ $item['tanggal'] }}</span>
                                <h4 class="mb-3">
                                    <a href="course-details.html">{{ $item['judul_acara'] }}</a>
                                </h4>
                                <p>
                                    {{ $item['deskripsi_acara'] }}
                                </p>
                                <div
                                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="authr_meta">
                                 
                                        <span class="d-inline-block ml-2">Kuota :{{ $item['kuota'] }}</span>
                                    </div>
                                    <div class="mt-lg-0 mt-3">
                                        <span class="meta_info mr-4">
                                            <a href="#"> <i class="ti-user mr-2"></i>{{ $item['jumlah_daftar'] }} </a>
                                        </span>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Popular Courses Area =================-->

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 style="color: white !important" class="mb-3">{{ $data['judul_login'] }}</h2>
                        <p>
                            {{ $data['deskripsi_judul_login'] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-4 ">
                    <div class="register_form">
                        <h3>LOGIN</h3>
                        <p>It is high time for learning</p>
                        <form  action="/login" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="email" id="s" placeholder="Email Anda" required="" type="text" />
                                    <input name="password" placeholder="Password Anda" required="" type="password" />                   
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="primary-btn">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="register_form">
                        <h3>REGISTER UMUM</h3>
                        <p>It is high time for learning</p>
                        <form action="/register_umum" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="Email" placeholder="Email Anda" required="" type="text" />
                                    <input name="Password" placeholder="Password Anda" required="" type="password" />
                                    <input name="Nama Lengkap (gelar)" placeholder="Nama Lengkap (gelar) Anda" required="" type="text" />
                                    <input name="Hp" placeholder="Telp/Hp Anda" required="" type="text" />
                                    <input name="Institusi" placeholder="Institusi Anda" required="" type="text" />
                                    <input name="Provinsi" placeholder="Provinsi" required="" type="tel" />
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="register_form">
                        <h3>REGISTER ANGGOTA APTIKOM</h3>
                        <p>It is high time for learning</p>
                        <form action="/register_aptikom" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 form_group">
                                    <input name="no_anggota" id="no_anggota" placeholder="Nomor Anggota Anda" required="" type="text" />
                                    <input name="Password" placeholder="Password Anda" required="" type="password" />   
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button class="primary-btn" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Registration Area =================-->



   

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="main_title">
                        <h2 class="mb-3">{{ $data['judul_testimoni'] }}</h2>
                        <p>
                            {{ $data['deskripsi_judul_testimoni'] }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="testi_slider owl-carousel">
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t1.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t2.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t1.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t2.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t1.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Elite Martin</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <img src="{{ url("assets/home") }}/img/testimonials/t2.jpg"
                                    alt="" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Davil Saden</h4>
                                    <p>
                                        Him, made can't called over won't there on divide there
                                        male fish beast own his day third seed sixth seas unto.
                                        Saw from
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================ End Testimonial Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer_new">
        <div class="container">
         
            
        </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url("assets/home") }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ url("assets/home") }}/js/popper.js"></script>
    <script src="{{ url("assets/home") }}/js/bootstrap.min.js"></script>
    <script src="{{ url("assets/home") }}/vendors/nice-select/js/jquery.nice-select.min.js">
    </script>
    <script src="{{ url("assets/home") }}/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ url("assets/home") }}/js/owl-carousel-thumb.min.js"></script>
    <script src="{{ url("assets/home") }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ url("assets/home") }}/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ url("assets/home") }}/js/gmaps.min.js"></script>
    <script src="{{ url("assets/home") }}/js/theme.js"></script>
</body>

</html>
