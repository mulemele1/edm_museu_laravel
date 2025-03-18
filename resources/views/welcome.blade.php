@extends('layouts.app')

@section('title', 'Home 01 || Muzex || Museum and Artists HTML Template')

@section('content')
    <!-- Coloque aqui o conteúdo específico da sua página de boas-vindas -->
    <!-- Exemplo: -->
    <div class="banner-section">
        <div class="banner-carousel thm__owl-carousel owl-theme owl-carousel" data-options='{"loop": true, "items": 1, "margin": 0, "dots": false, "nav": true, "animateOut": "fadeOut", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 6000, "autoplayHoverPause": false}'>
            <div class="slide-item">
                <div class="image-layer lazy-image" style="background-image: url('{{ asset('assets/images/main-slider/bg-edm.jpg') }}');"></div>
                <div class="container">
                    <div class="content-box text-center">
                        <h3>Gerando corrente deste, 1977</h3>
                        <h2>Venha descobrir como era feita a <br> Geração da corrente na EDM.</h2>
                        <div class="btn-box"><a href="#" class="thm-btn btn-style-one">Leia Mais</a></div>
                    </div>
                </div>
            </div>
            <!-- Adicione mais slides conforme necessário -->
        </div>
    </div>
@endsection
