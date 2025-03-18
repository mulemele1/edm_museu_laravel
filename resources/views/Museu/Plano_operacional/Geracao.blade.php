@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
            <div class="container">
                <h2>Geração</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->
        <section class="blog-one blog-details-page">
            <div class="uk-container uk-margin-large-bottom uk-margin-large-top">

                <div uk-grid>
                    <div uk-grid class="uk-margin-remove-top">
                        <div class="uk-width-expand@m uk-width-1-1@m uk-margin-remove">
                            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Geração
                            </h3>
                        </div>
                        <div class="uk-width-1-1">
                            <p class="uk-text uk-text-justify uk-margin-small-top">Função Geração tem como missão,
                                coordenar e implementar a gestão, exploração e manutenção dos meios de produção de
                                energia eléctrica, gestão sustentável da capacidade de produção de energia, em função da
                                demanda, assessorar as Delegações na exploração das centrais de emergência e, em
                                coordenação com outras Direcções, desenvolver estudos visando a implementação de novas
                                centrais de geração própria.</p>
                            <p class="uk-text uk-text-justify uk-margin-small-top">No presente quinquénio, no parque
                                produtor, prevê-se a recuperação de cerca de 78MW de capacidade produtiva que se
                                encontra indisponível por motivos de avarias de vária ordem. Desta capacidade, 22 MW
                                serão recuperados na Central Hídrica de Chicamba, 15.8MW na Central Hídrica de Mavuzi,
                                40MW na Central Térmica a Gás Natural de Maputo (CTM).</p>
                            <p class="uk-text uk-text-justify">Esta recuperação da capacidade produtiva vai melhorar, em
                                grande medida, os níveis de resposta à demanda nos diferentes subsistemas de transporte
                                de energia ao longo do País.</p>

                            <p class="uk-text uk-text-justify">Para além desta recuperação, prevê-se o aumento da
                                capacidade produtiva em cerca de 45MW, resultante da montagem da central de emergência
                                de 40MW em Nacala, aumento da capacidade instalada em Temaninho em mais 3 MW e a
                                ampliação da Mini-hídrica de Cuamba em mais 2.5MW.</p>

                            <p class="uk-text uk-margin-right uk-text-justify">Importa referenciar que, pelo facto de a
                                geração ter centrais a funcionar em regimes diferentes, nomeadamente (Pick, Base load e
                                Mied-merid), o valor global do factor de carga (GLF) e de utilização de energia (EUF),
                                vai situar-se nos 52% e 53%, respectivamente de 2021 em diante.
                            </p>
                            <p class="uk-text uk-margin-right uk-text-justify">Importa referenciar que, pelo facto de a
                                geração ter centrais a funcionar em regimes diferentes, nomeadamente (Pick, Base load e
                                Mied-merid), o valor global do factor de carga (GLF) e de utilização de energia (EUF),
                                vai situar-se nos 52% e 53%, respectivamente de 2021 em diante.
                            </p>
                            <p class="uk-text uk-margin-right uk-text-justify">A geração da EDM está presente nas três
                                regiões do País, nomeadamente Sul, Centro e Norte. Esta realidade impõe que sejam
                                alocados recursos, não só humanos, mas também materiais e equipamentos para a gestão das
                                centrais.
                            </p>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="uk-width-2-5@m uk-align-center" uk-lightbox="animation: slide">
                    <a class="uk-inline" href=""
                        data-caption="Contador de energia pós-pago">
                        <img src=" {{ asset('images/EDM/final/A tabela acima apresenta a capacidade de geração instalada e disponível por central..png') }} " class="uk-border-rounded"
                            width="500px" height="50px" alt="" uk-img></a>
                    <p class="uk-text-meta">A tabela acima apresenta a capacidade de geração instalada e disponível por central.</p>
                </div>

            </div>
    </div>
    </div>
    </div>

@endsection


