@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Distribuição</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <div uk-grid>
        <div uk-grid class="uk-margin-remove">
            <div class="uk-width-1-1@m">
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Distribuição</h4>

                <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A função de distribuição de energia eléctrica é coordenada centralmente pela Direcção de Distribuição, cuja responsabilidade é definir políticas e harmonizar os procedimentos de instalação, operação, manutenção, automação e gestão de uma maneira uniforme dos activos do segmento Distribuição da EDM, que compreende os seguintes níveis de tensão: 0.23/0.4kV, 6.6kV, 11kV, 19.1kV (SWER), 22kV e 33kV.
                </p>

                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A infra-estrutura de distribuição é composta por Mini-subestações, linhas aéreas, linhas subterrâneas, postos de transformação, armários e quadros de distribuição.
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A Direcção de Distribuição tutela 5 Direcções Regionais, nomeadamente, Norte, Centro, Sul, Cidade de Maputo e Província de Maputo e 23 Delegações.
                </p>
                <p class="uk-text uk-text-italic uk-margin-left uk-margin-right uk-text-italic uk-text-justify">
                    O mapa ao lado apresenta as províncias e delegações sob jurisdição de cada Direcção Regional
                </p>

            </div>

            <div class="uk-width-1-2@m uk-align-center uk-grid-margin uk-first-column" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ asset('images/EDM/final/provincias_delegacoes.png') }}"
                    data-caption="Fonte: Plano de Negócio da EDM 2020 – 2024">
                    <img src="{{ asset('images/EDM/final/provincias_delegacoes.png') }}" class="uk-border-rounded" alt="" uk-img></a>
                        <p class="uk-text-primary ">Províncias e delegações sob jurisdição de cada Direcção Regional. <br>Fonte: Plano de Negócio da EDM 2020 – 2024</p>

            </div>

            <div class="uk-width-1-2@m uk-align-center uk-grid-margin uk-first-column" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ asset('images/EDM/final/infraestrutura_rede_distribuicao.png') }}"
                    data-caption="Fonte: Plano de Negócio da EDM 2020 – 2024">
                    <img src="{{ asset('images/EDM/final/infraestrutura_rede_distribuicao.png') }}" class="uk-border-rounded"
                        width="500px" height="300px" alt="" uk-img></a>
                        <p class="uk-text-primary uk-text-center">Infraestrutura da Rede de Distribuição <br>Fonte: Plano de Negócio da EDM 2020 - 2024</p>
            </div>


        </div>

        <div class="uk-width-1-1@m">

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                O facto de a maior parte da população moçambicana residir nas zonas rurais é evidenciado pelos rácios de densificação que constam da tabela acima.
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Com a excepção da Região da Cidade de Maputo, outras regiões têm uma média de 80 clientes por quilómetro de rede de distribuição em baixa tensão e menos de 1 (um) posto de transformação por quilómetro de rede de média tensão. Assim, para a universalização do acesso de energia à população, a EDM irá apostar, não só na expansão da rede para novos centros de consumos, mas também na densificação, que consiste em maximizar a exploração das infra-estruturas existentes
            </p>
        </div>
    </div>
    <hr>
</div>

@endsection


