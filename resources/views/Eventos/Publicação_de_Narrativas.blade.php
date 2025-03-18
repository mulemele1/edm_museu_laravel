@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Narrativas</h2>
    </div>
</section><!-- /.page-header -->
<section class="videos">
    <div class="container">
        <div class="row">
            <!-- Video 1 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Wa0jCpYfdkg?list=UUudTOtr3VxfqpoN2M8aySmg" allowfullscreen></iframe>
                </div>
                <p>Boas praticas - Processo de manutenção de Equipamentos de Potência</p>
            </div>
            <!-- Video 2 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nvkrBwIshjo?list=UUudTOtr3VxfqpoN2M8aySmg" allowfullscreen></iframe>
                </div>
                <p>Boas praticas - Processo de manutenção de Linhas e Infraestruturas Elétricas</p>
            </div>
            <!-- Video 3 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5hioegIWokg" allowfullscreen></iframe>
                </div>
                <p>Ismael Aly Valy - Chefe da manutenção ASC KaMubukwana</p>
            </div>
            <!-- Video 4 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cEX2C2j24N4" allowfullscreen></iframe>
                </div>
                <p>Felecidade Tembe</p>
            </div>
            <!-- Video 5 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/99jn0pKOb-c" allowfullscreen></iframe>
                </div>
                <p>Valdemar Luis Lifanica</p>
            </div>
            <!-- Video 6 -->
            <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9 mb-2">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YWbaR2j3O_E" allowfullscreen></iframe>
                </div>
                <p>Elisabete Balango</p>
            </div>
        </div>
    </div>
</section>

<section class="cta-one" style="background-image: url(assets/images/shapes/cta-bg-1-1.jpg);">
    <div class="container text-center">
        <h3>More Than 1250 Exhibits!</h3>
        <p>Every day more exhibits arrive in our museum. Do not wait and buy a ticket now.</p>
        <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn-one">Become A Member</a>
            <a href="#" class="thm-btn cta-one__btn-two">Buy Online</a>
        </div>
    </div>
</section>



@endsection