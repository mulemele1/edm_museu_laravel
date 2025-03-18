@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('{{ asset('images/main-slider/bg-edm.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Gerando corrente desde 1977</h3>
                        <h2>Venha descobrir como era feita a <br> Geração da corrente na EDM.</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Leia Mais</a></div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('{{ asset('images/main-slider/bg-edm.jpg') }}');"></div>
                <div class="image-layer lazy-image" style="background-image: url('{{ asset('images/main-slider/bg-edm-jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Transportando corrente desde 1977</h3>
                        <h2>Venha descobrir como era feita a<br> Transporte da corrente
                        na EDM.</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Leia Mais</a></div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('{{ asset('images/main-slider/bg-edm.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Distribuindo a corrente desde 1977</h3>
                        <h2>Venha descobrir como era feita a<br> Distribuição da corrente na EDM.</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Leia Mais</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <div class="about-cta__wrapper">
        <section class="cta-two">
            <div class="container">
                <div class="inner-container wow fadeInUp" data-wow-duration="1500ms">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-clock"></i>
                                </div>
                                <h3>Open Hours</h3>
                                <p>Daily: 9.30 AM–6.00 PM <br>
                                    Sunday & Holidays: Closed</p>
                                <a href="contact.html" class="thm-btn">All Hours</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-location"></i>
                                </div>
                                <h3>Exposições</h3>
                                <p>Campus da UEM, Edifício Moçambique & China<br>
                                15 a 17 de maio, das 9h30 às 16h. <br>
                                Street Cambridge, MA</p>
                                <a href="contact.html" class="thm-btn">Venha nos visitar.</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cta-two__box">
                                <div class="cta-two__icon">
                                    <i class="muzex-icon-ticket"></i>
                                </div>
                                <h3>Get Ticket</h3>
                                <p>Muszex Museums 32 Quincy <br>
                                    Street Cambridge, MA</p>
                                <a href="contact.html" class="thm-btn">Buy Online</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-one">
            <div class="container">
                <img src="{{ asset('images/backgrounds/GrayMinimalist2.png') }}" alt="" class="about-one__moc">
                <div class="block-title">
                    <p>Sobre MUSEDM</p>
                    <h3>O Museu da Eletricidade de Moçambique</h3>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <p class="about-one__highlighted-text">
                            MISSÃO do MUSEU VIRTUAL da EDM é de promover a Electricidade de Moçambique, enquanto conceito, imagem e paradigma de Electrificação e valor histórico das suas Infraestruturas.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <p>O Museu da ELECTRICIDADE DE MOÇAMBIQUE pretende mostrar o percurso da empresa, participando na criação de uma identidade comum, ser usado como meio auxiliar do ensino das ciências e das técnicas nos níveis básico e secundário, na pós-graduação da história das ciências e técnicas e da museologia.</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Considerando que a instalação do Museu Permanente é um processo a médio ou longo prazo, a EDM decidiu, a curto prazo, desenvolver ações com vista a tornar o Museu conhecido, tanto ao nível da EDM, assim como pelo público em geral e, simultaneamente, fazer a sensibilização para as questões da salvaguarda e proteção do Patrimônio do Setor de Eletricidade.</p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-lg-8">
                        <div class="about-one__feature">
                            <h3>Áreas de Exposição do Museu da EDM</h3>
                            <p>O Museu da EDM foi criado com o objetivo de mostrar ao público a evolução histórica das diversas áreas de atuação da Eletricidade de Moçambique (EDM), destacando-se entre elas as seguintes:</p>
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li><h4>Geração</h4></li>
                                    </ul>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li><h4>Transmissão</h4></li>
                                    </ul>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-4">
                                    <ul class="list-unstyled about-one__feature-list">
                                        <li><h4>Distribuição</h4></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="exhibition-one">
        <div class="container">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span>
                <p>agenda</p>
                <h3>Exposições Agendadas</h3>
            </div>
            <div class="row high-gutter">
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('images/exhibition/Proposta-de-Cartaz.jpg') }}" alt="">
                        </div>
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">The Exhibits Civilization.</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('images/exhibition/Proposta-de-Cartaz.jpg') }}" alt="">
                        </div>
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">English Landscape Painting</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="exhibition-one__single">
                        <div class="exhibition-one__image">
                            <img src="{{ asset('images/exhibition/Proposta-de-Cartaz.jpg') }}" alt="">
                        </div>
                        <div class="exhibition-one__content">
                            <h3><a href="event-details.html">Classicita of Greece and Italy</a></h3>
                            <p>Oct 20, 2019 - Oct 25, 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="collection-one" style="background-image: url('{{ asset('images/shapes/collection-bg-1-1.jpg') }}');">
        <div class="container">
            <div class="collection-one__top">
                <div class="block-title">
                    <p>Galeria</p>
                    <h3>Momentos chaves das exposições passadas</h3>
                </div>
                <div class="more-post__block">
                    <a class="more-post__link" href="#">
                        View More
                        <span class="curved-circle">View More &nbsp;&emsp;View More &nbsp;&emsp;View More View More View More &nbsp;&emsp;View &nbsp;&emsp; </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="collection-one__carousel thm__owl-carousel owl-theme owl-carousel" data-options='{
        "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "smartSpeed": 700, "items": 3, "margin": 100, "dots": false, "nav": false, "responsive": { 
            "0": { "items": 1, "margin": 0 },
            "625": { "items": 2, "margin": 30 },
            "767": { "items": 2
, "margin": 30 },
            "991": { "items": 2, "margin": 30 },  
            "1199": { "margin": 30, "items": 3 }, 
            "1366": { "margin": 50, "items": 3 }, 
            "1440": { "margin": 50, "items": 3 }, 
            "1750": { "items": 3, "margin": 70 }, 
            "1920": { "items": 3, "margin": 100 }
        }
    }'>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-1.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">St. Catherine Alexandria in Prison</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-2.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">English Landscape Painting</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-3.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">Alexandria in Prison</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-1.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">Tower of Babel (Babylon)</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-2.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">St. Catherine Alexandria in Prison</a></h3>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="collection-one__single">
                    <img src="{{ asset('images/collection/collection-1-3.jpg') }}" alt="">
                    <div class="collection-one__content">
                        <h3><a href="event-details.html">English Landscape Painting</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-collection">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="featured-collection__left">
                        <div class="featured-collection__image">
                            <img src="{{ ('images/resources/featured-collection-1-1.jpg') }}" alt="">
                        </div>
                        <p>Man face fruit divided seasons herb from herb moveth whose. Dominion gathered winged morning, man won’t had fly beginning. Winged have saying behold.</p>
                        <a href="collection-grid.html" class="thm-btn featured-collection__btn">Explore Collection</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="featured-collection__right">
                        <div class="block-title">
                            <p>Collection</p>
                            <h3>Featured Collection</h3>
                        </div>
                        <p>Welcome to the World’s Leading Museum of Modern Art. It includes works of art created during the period stretching.</p>
                        <div class="featured-collection__image">
                            <img src="{{ asset('images/resources/featured-collection-1-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-one">
        <img src="{{ asset('images/shapes/event-sculpture-1-1.png') }}" alt="" class="event-one__moc">
        <div class="container">
            <div class="block-title-two text-center">
                <span class="block-title-two__line"></span>
                <p>What’s Going on</p>
                <h3>Our Upcoming Event</h3>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                                <span>31</span>
                                Oct
                            </div>
                            <div class="event-one__image-box">
                                <div class="event-one__image-inner">
                                    <img src="{{ asset('images/event/event-1-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h3><a href="event-details.html">Weekend Drop-In Sessions</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose.</p>
                        </div>
                        <div class="event-one__btn-block">
                            <a href="event-details.html" class="thm-btn event-one__btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="event-one__single">
                        <div class="event-one__image">
                            <div class="event-one__date">
                            <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul>
                            <h3><a href="news-details.html">Celebrating at Our Egypt Museum</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged morning man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('images/blog/blog-1-2.jpg') }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul>
                            <h3><a href="news-details.html">6 Reasons Create Playdate is Great for Little Ones</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged morning man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-one__single">
                        <div class="blog-one__image">
                            <img src="{{ asset('images/blog/blog-1-3.jpg') }}" alt="">
                            <div class="blog-one__date">
                                <i class="far fa-calendar-alt"></i>
                                Oct 25, 2020
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <ul class="blog-one__meta list-unstyled">
                                <li><a href="#">By Diana Leach</a></li>
                                <li><a href="#">03 Comments</a></li>
                            </ul>
                            <h3><a href="news-details.html">This List has been Turned into a Web App</a></h3>
                            <p>Man face fruit divided seasons herb from herb moveth whose dominion gathered winged morning man.</p>
                            <a href="news-details.html" class="blog-one__link">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-one">
        <div class="container">
            <div class="brand-one__carousel thm__owl-carousel owl-carousel owl-theme" data-options='{
            "items": 5, "margin": 150, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": false, "nav": false, "dots": false, "responsive": {
                "0": { "margin": 20, "items": 2 },
                "575": { "margin": 30, "items": 3 },
                "767": { "margin": 40, "items": 4 },
                "991": { "margin": 70, "items": 4 },
                "1199": { "margin": 150, "items": 5 }
            }}'>
                <div class="item">
                    <img src="{{ asset('images/brand/brand-1-1.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/brand/brand-1-2.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/brand/brand-1-3.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/brand/brand-1-4.png') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('images/brand/brand-1-5.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
