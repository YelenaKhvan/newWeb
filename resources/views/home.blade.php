@extends('layout')

@section('title') Главная страница @endsection

@section ('header_carousel')

@include('/includes.carousel1')
@endsection

@section('main_content')
 

    <section class="bg-primary hiro-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex flex-column justify-content-center wow fadeInUp">
                    <h2 class="section-title mb-3">Что вы получите?</h2>
                    <ul class="section-text-ct">
                        <li class="mb-2 mt-2">Конкретные и применимые рекомендации</li>
                        <li class="mb-2">Развернутый анализ вашей ситуации</li>
                        <li class="mb-2">Стратегии для достижения ваших целей</li>
                    </ul>
                    <h2 class="section-title mb-3 mt-3">Как это работает?</h2>
                    <ul class="section-text-ct">
                        <li class="mb-2 mt-2">Выберите нужного эксперта</li>
                        <li class="mb-2">Выберите доступный формат консультации</li>
                        <li class="mb-2">Ваш запрос будет обработан и передан эксперту</li>
                        <li class="mb-2">Получите персональную консультацию и ответ от эксперта</li>
                    </ul>
                </div>
                <div class="col-md-6 wow fadeInUp">
                    {{-- <img src="/images/img_3.png" class="w-100 mb-2" alt="Digital Product Design"> --}}
                    <h2 class="section-title mb-3 mt-3">Почему это выгодно?</h2>
                    <p class="section-text-light">В условиях дефицита квалифицированных специалистов 
                        мы предлагаем решение в виде платных консультаций. Вместо полного трудоустройства экспертов, 
                        мы предоставляем доступ к их опыту по мере необходимости, с более доступными ценами. 
                        
                        Этот гибкий подход позволяет компаниям эффективно использовать знания выдающихся профессионалов 
                        без долгосрочных обязательств. Вы оплачиваете только 
                        за консультации, получая максимальную ценность 
                        и избегая постоянных затрат на зарплату. 
                        
                        Такой формат работы позволяет быстро усвоить ключевые аспекты и постепенно интегрировать их внутренние процессы, обеспечивая стоимостную эффективность 
                        без избыточных финансовых затрат.
                        
                        Преобразуйте свои идеи в успех с нашими экспертами. Доверьтесь лучшим, достигните большего!
                        </p>
                    <button class="hiro-btn-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section class="hiro-section" id="services">
        <div class="container">
            <div class="service-section">
                <h2 class="section-title career-section-title">Our Services</h2>
                <div class="row">
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Strategy</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Design</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4 mb-md-0 wow fadeInUp">
                        <h6 class="service-category-title">Development</h6>
                        <ul class="service-list list-group list-group-flush">
                            <li class="list-group-item">UI & UX design</li>
                            <li class="list-group-item">Graphic Design & identity</li>
                            <li class="list-group-item">Video Production</li>
                            <li class="list-group-item">Market Analysis</li>
                            <li class="list-group-item">Deep Campaign Strategy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projects-section hiro-section" id="works">
        <div class="container">
            <div class="row">
                <div class="col-md-6wow fadeInUp">
                    <div class="project-card wow fadeInUp">
                        <img src="/images/Works4.png" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                    <div class="project-card wow fadeInUp">
                        <img src="/images/Works2.png" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                </div>
                <div class="col-md-6 project-column-indented">
                    <div class="project-card wow fadeInUp">
                        <img src="/images/Works3.png" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                    <div class="project-card wow fadeInUp">
                        <img src="/images/Works1.png" alt="Project" class="project-thumbnail">
                        <h6 class="project-title">See what we do</h6>
                        <p class="Project-category">Branding system / Motion design </p>
                    </div>
                </div>
                <div class="col-12">
                    <a href="#!" class="load-more-link">VIEW ALL PROJECTS</a>
                </div>
            </div>
        </div>
    </section>
    <section class="team-section hiro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 wow fadeInUp">
                    <h2 class="section-title">Meet <br> The Team</h2>
                    <p class="section-text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <div>
                        <a class="carousel-control-prev" href="#hiroTeamCarousel" role="button" data-slide="prev">
                            <img src="/images/arrow_left.png" alt="left arrow" width="20px">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#hiroTeamCarousel" role="button" data-slide="next">
                            <img src="/images/Arrow_right.png" alt="right arrow" width="20px">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 wow fadeInRight">
                    <div id="hiroTeamCarousel" class="hiro-team-carousel carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="/images/img_5.png" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-member-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="team-card featured" data-animation="animated flipInY">
                                            <img src="/images/img_4.png" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-member-title">CTO, Co-Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="/images/img_5.png" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-meber-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="team-card featured" data-animation="animated flipInY">
                                            <img src="/images/img_4.png" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-meber-title">CTO, Co-Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="team-card" data-animation="animated flipInY">
                                            <img src="/images/img_5.png" alt="Paulina Gayoso" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Paulina Gayoso</h6>
                                                <p class="team-meber-title">Project Manager</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6" data-animation="animated flipInY">
                                        <div class="team-card featured">
                                            <img src="/images/img_4.png" alt="Edwards" class="team-member-thumbnail">
                                            <div class="team-member-details">
                                                <h6 class="team-member-name">Edwards</h6>
                                                <p class="team-meber-title">CTO, Co-Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="career-section hiro-section bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title wow fadeInLeft">
                        Career <br> Work with us
                    </h2>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <p class="section-text-ct mb-5">Our work transforms how customers experience your business – creating distinction, shifting perceptions and driving growth.</p>
                    <button class="hiro-btn-outline">VIEW MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section hiro-section">
        <div class="container wow fadeInUp">
            <h6 class="font-weight-semibold mb-4 mb-md-0">At Explose, it’s always storytelling time. Swing by & share yours.</h6>
            <h2 class="section-title">Let’s talk</h2>
            <div class="contact-address">
                <div class="row">
                    <div class="col-md-5">
                        <p class="font-weight-medium">9010 Varna, Bulgaria, <br> Breeze Borough, <br> Saint Nicholas, 26</p>
                    </div>
                    <div class="col-md-5 mb-4 mb-md-0">
                        <p class="font-weight-medium">UK: +44 567 637 0000 <br> hey@costomarl.com</p>
                        <ul class="nav contact-social-links">
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="/images/twitter@1x.svg" alt="twitter">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="/images/linkedin@1x.svg" alt="linkedin">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="/images/facebook@1x.svg" alt="facebook">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="/images/behance@1x.svg" alt="behance">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#!" class="nav-link">
                                    <img src="/images/medium@1x.svg" alt="medium">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <a href="#top" class="go-top-btn">
                            <img src="/images/arrow_up@1x.svg" alt="arrow up">
                            <span class="sr-only">Go to top</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection