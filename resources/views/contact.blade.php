@extends('layout')

@section('title') Контакты @endsection

@section('main_content')

<main class="contact-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 offset-lg-2 contact-page-content-wrapper wow fadeInLeft">
                <div class="contact-page-content">
                    <h4 class="contact-page-title">Lets Talk</h4>
                    <p class="contact-page-street-address">9010 Varna, Bulgaria, <br> Breeze Borough, <br> Saint Nicholas, 26</p>
                    <p class="mb-3">UK: +44 567 637 0000 <br> hey@costomarl.com</p>
                    <ul class="nav contact-social-links">
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="assets/images/twitter@1x.svg" alt="twitter">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="assets/images/linkedin@1x.svg" alt="linkedin">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="assets/images/facebook@1x.svg" alt="facebook">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="assets/images/behance@1x.svg" alt="behance">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                <img src="assets/images/medium@1x.svg" alt="medium">
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-md-6 col-lg-4 contact-page-form-wrapper wow fadeInRight">
                <form action="index.html" method="post">
                    <div class="form-group">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <input type="text" class="form-control" id="message" name="message" placeholder="Message">
                    </div>
                    <div>
                        <button class="btn" type="Submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection

