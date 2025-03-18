@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Missão, Visão e Valores</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1@m uk-margin-remove" id="apresentacao">


            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Missão</h3>

            <p class="uk-text uk-margin-left uk-margin-remove-top uk-margin-right uk-text-justify">
                Produzir, transportar, distribuir e comercializar energia eléctrica de boa qualidade, de forma
                sustentável, para
                iluminar e potenciar a industrialização do país.
            </p>

            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Visão</h3>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Transformar a EDM numa Utilidade
                Inteligente e Sustentável, que dá acesso à energia eléctrica de qualidade a cada
                moçambicano e exerce liderança no Mercado Regional.</p>

            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Valores</h3>

            <p class="uk-text uk-margin-left uk-text-justify uk-margin-right ">Integridade, Transparência, Igualdade,
                Competitividade e Espírito de Equipa.</p>

        </div>

    </div>

</div>

@endsection


