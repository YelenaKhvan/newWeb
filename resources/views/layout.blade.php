<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css?v=1">


</head>

<body>
    <header class="hiro-header home-header" id="top">
        <nav>
            <div class="container">
                <div class="hiro-nav">
                    <a href="index.html" class="nav-brand">
                        <img src="/images/logo.svg" alt="Hiro" class="logo">
                        <img src="/images/kc.svg" alt="Hiro" class="logo">
                    </a>
                    <button class="hiro-nav-popup-toggle">
                        <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Hiro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="hiro-agency" transform="translate(-964.000000, -37.000000)" fill="#FFFFFF">
                                    <g id="Menu" transform="translate(964.000000, 37.000000)">
                                        <g id="menu">
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="7.50795322"
                                                width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="14.9964327"
                                                width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14"
                                                y="0.0194736842" width="19.9609942" height="2.4951462"></rect>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container wow fadeInUp">
            <div id="carouselExampleAutoplaying" class="hiro-header-carousel carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="01">
                                    <span>Вы сталкиваетесь с сложными решениями или неуверенностью 
                                        в своем следующем шаге?</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">
                                    Наши опытные эксперты готовы помочь вам!</p>
                                <a href="#!" class="carousel-item-link link-hover-fx"
                                    data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="/images/M13.jpg" alt="Remarkable Digital Products"
                                    class="img-fluid w-100 rounded">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="02">
                                    <span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum
                                    is placeholder text commonly used in the graphic, print, and publishing industries
                                    for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx"
                                    data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="/images/M11.jpg" alt="<span>Remarkable Digital Products</span>"
                                    class="img-fluid w-100 rounded">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight"
                                    data-number="03"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum
                                    is placeholder text commonly used in the graphic, print, and publishing industries
                                    for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx"
                                    data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="/images/M12.jpg" alt="Remarkable Digital Products"
                                    class="img-fluid w-100 rounded">
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Предыдущий</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Следующий</span>
                    </button>
                  </div>
             
            </div>
        </div>
    </header>
    
    <div class="hiro-nav-popup-modal">
        <div class="hiro-nav-popup-modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 menu-wrapper">
                        <ul class="nav hiro-main-nav">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="nav-link">Works</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 blog-posts text-white">
                        <h5 class="popup-blog-headng">Blog</h5>
                        <div class="media mb-4">
                            <img src="/images/Blog_small2.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">Ambitious <br> designs</h5>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="/images/Blog_small1.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">The Collection <br> Cover Archive</h5>
                            </div>
                        </div>
                        <p><a href="blog.html" class="text-white link-hover-fx text-decoration-none"
                                class="font-weight-medium">View more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
        @yield('main_content')

        <footer class="foi-footer text-white">
            
            <div class="container">
                <div class="row footer-content">
                    <div class="col-xl-6 col-lg-7 col-md-8">
                        <h2 class="mb-0">Do you want to know more or just have a question? write to us.</h2>
                    </div>
                    <div
                        class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                        <a href="contact.html" class="btn btn-danger btn-lg">Contact form</a>
                    </div>
                </div>
                <div class="row footer-widget-area">
                    <div class="col-md-3">
                        <div class="py-3">
                            <img src="/images/logo-white.svg" alt="FOI">
                        </div>
                        <p class="font-os font-weight-semibold mb3">Get our mobile app</p>
                        <div>
                            <button class="btn btn-app-download mr-2"><img src="/images/ios.svg"
                                    alt="App store"></button>
                            <button class="btn btn-app-download"><img src="/images/android.svg"
                                    alt="play store"></button>
                        </div>
                    </div>
                    <div class="col-md-3 mt-3 mt-md-0">
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">My tasks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Edit profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Activity</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 mt-3 mt-md-0">
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Careers <span
                                            class="badge badge-pill badge-secondary ml-3">Hiring</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link">Shop with us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 mt-3 mt-md-0">
                        <p>
                            &copy; foi. 2020 <a href="https://www.bootstrapdash.com" target="_blank"
                                rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.
                        </p>
                        <p>All rights reserved.</p>
                        <nav class="social-menu">
                            <a href="#!"><img src="/images/facebook.svg" alt="facebook"></a>
                            <a href="#!"><img src="/images/instagram.svg" alt="instagram"></a>
                            <a href="#!"><img src="/images/twitter.svg" alt="twitter"></a>
                            <a href="#!"><img src="/images/youtube.svg" alt="youtube"></a>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/main.js/main.js"></script>

</body>

</html>
