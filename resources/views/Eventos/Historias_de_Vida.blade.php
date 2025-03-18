@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Histórias de vida</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->



<section class="membership-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="{{ asset('images/EDM/Trabalhadores/antonio_chamusso.png') }}" alt="Descrição da imagem" class="membership-one__image">
                    <h3>António Chamusso</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="{{ asset('images/EDM/Trabalhadores/joao_cumbe.png') }}" alt="Descrição da imagem" class="membership-one__image">
                    <h3>João Cumbe</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="{{ asset('images/EDM/Trabalhadores/fatima_artur.png') }}" alt="Descrição da imagem" class="membership-one__image">
                    <h3>Fátima Artur</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="{{ asset('images/EDM/Trabalhadores/samuel_checo.png') }}" alt="Descrição da imagem" class="membership-one__image">
                    <h3>Samuel Checo</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="https://via.placeholder.com/300" alt="Descrição da imagem" class="membership-one__image">
                    <h3>Exemplo</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-one__single">
                    <img src="https://via.placeholder.com/300" alt="Descrição da imagem" class="membership-one__image">
                    <h3>Exemplo</h3>
                    <p>Invitations to members-only events, priority registration and program discounts, and more.</p>
                    <a href="#" class="thm-btn membership-one__btn">Ler mais</a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.membership-one -->

<section class="cta-one" style="background-image: url(assets/images/shapes/cta-bg-1-1.jpg);">
    <div class="container text-center">
        <h3>More Than 1250 Exhibits!</h3>
        <p>
            Every day more exhibits arrive in our museum. Do not <br />
            wait and buy a ticket now.
        </p>
        <div class="cta-one__btn-block">
            <a href="#" class="thm-btn cta-one__btn-one">Become A Member</a><!-- /.thm-btn cta-one__btn-one -->
            <a href="#" class="thm-btn cta-one__btn-two">Buy Online</a><!-- /.thm-btn cta-one__btn-two -->
        </div>
        <!-- /.cta-one__btn-block -->
    </div>
    <!-- /.container -->
</section>

@endsection