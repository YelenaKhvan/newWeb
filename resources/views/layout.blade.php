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
                    <a href="{{ route('home') }}" class="nav-brand">
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
        @yield('header_carousel')
    </header>

    <div class="hiro-nav-popup-modal">
        <div class="hiro-nav-popup-modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 menu-wrapper">
                        <ul class="nav hiro-main-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">Home</a>
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
                            <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
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

    @include('/includes.footer')

</body>

</html>
