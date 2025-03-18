@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Comercialização</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="blog-one blog-details-page">
    <div class="uk-container uk-margin-large-bottom uk-margin-large-top">

        <div uk-grid>
            <div uk-grid class="uk-margin-remove-top">
                <div class="uk-width-expand@m uk-width-1-1@m uk-margin-remove">
                    <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História da Comercialização
                    </h3>
    
    
                    <p class="uk-dropcap uk-text uk-text-justify">As actividades comerciais no tempo dos Serviços Municipalizados de Água e Electricidade (S.M.A.E), começaram por ser uma
                    secção que estava nos Serviços Administrativos, dirigidas pelo Chefe da 2ª Repartição, enquanto a secção de consumos era
                    gerida pelo 1º oficial José Augusto de Campos, com efeitos a 13 de Setembro de 1948.</p>
                    <p class="uk-text uk-text-justify uk-margin-remove-bottom">Com a emenda dada ao Regulamento dos S.M.A.E, ocorrida em 1954, a secção viria a ser transformada em Serviços,
                    associando-se aos Serviços Administrativos com a designação de Serviços Administrativos e Comerciais. Existiam na época
                    os Serviços de Água, Electricidade, Serviços Administrativos e Comerciais, e finalmente os Serviços Auxiliares.</p>
    
                </div>
    
                <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
                    <a class="uk-inline" href="{{ asset('images/EDM/Contador de energia pós-pago.png') }}"
                        data-caption="Contador de energia pós-pago">
                        <img style="margin-right: -19%;"src="{{ asset('images/EDM/Contador de energia pós-pago.png') }}" class="uk-border-rounded"
                            width="250px" height="50px" alt="" uk-img></a>
                    <p class="uk-text-meta">Contador de energia pós-pago</p>
                </div>
                <div class="uk-width-1-1">
                   <p class="uk-text uk-text-justify uk-margin-small-top">A emenda ao Regulamento deu nova redacção, sobretudo no artigo 8º, onde se
                        clarificava que a Comissão Administrativa (um
                        órgão com alto pendor decisório no SMAE) teria um secretário, sem voto que era o Chefe dos Serviços Comerciais,
                        denotando claramente o valor que o Comercial ganhava no interior dos SMAE.</p>
                    <p class="uk-text uk-text-justify uk-margin-small-top">A orgânica comercial contemplava a Secretaria, Departamento de Consumo, Departamento
                        de Contabilidade e Armazéns Gerais.
                        Paralelamente, o departamento de Consumo era compreendido pelas secções de Leituras, Facturação, Propaganda e
                        Vendas.</p>
                    <p class="uk-text uk-text-justify">Em 1950 o número de consumidores em Maputo era de 1.566, que evoluiu progressivamente aos 11.713 em 1957 e 62.911 em
                    1963, cuja facturação era manual, sendo alterada em 1954 com a introdução da mecanização com recurso aos perfuradores,
                    fornecidos pela firma Spanos Lda, que foram adaptados ao longo do tempo até ao sistema IBM em 1974.</p>
    
                    <p class="uk-text uk-text-justify">Quando foi criada a EDM em 27 de Agosto de 1977, o processo de Facturação era através de Cartões ICR de 80 colunas,
                    processados no IBM S3 que sofreu adaptação para cartões de 96 colunas processados ainda no IBM S70. Em 1980, com a
                    criação das Áreas Operacionais, Beira, Nampula e Nacala foram integrados naquele sistema, que viria a ser alterado em
                    1992 com aquisição do sistema Billing System da ICL.</p>
    
                    <p class="uk-text uk-margin-right uk-text-justify">A facturação de Áreas Operacionais de pequena dimensão, inicialmente era manual, porém, em 1995 foi implementado um
                    Sistema paralelo ao Billing System, através do ACCESS, que foi instalado nas Áreas Operacionais da Região Sul: Chokwe,
                    Xai-Xai e mais tarde Inhambane. O Sistema ACESS foi evoluindo gradualmente, de tal forma que nos anos de 1997 abarcava a
                    região. Devido as capacidades e potencialidades, associadas a simples operação, progrediu para Tete, Quelimane, Mocuba e
                    nos anos de 2000 atingiu as Áreas de Pemba, Lichinga e finalmente em Angoche e Cuamba. O ACCESS era gerido pelo Analista
                    de Sistemas informáticos, o saudoso Dr. Roberto Pereira.
                  </p>
    
                    <p class="uk-text uk-margin-right uk-text-justify">A Empresa na primeira estrutura não dispunha de Direcção comercial, facto que veio a fazê-lo em Outubro de 1994, na
                    mesma altura que foram criadas as Direcções Regionais. No mesmo cenário, estava em vista o Projecto de Redução de perdas
                    e melhoria de serviços ao cliente com os Projectos Nova Imagem e Sistema de Pré-pagamento, vulgo Credelec. Para alcançar
                    os resultados desejados foram criadas fases. A Fase I esteve na Karl Marx, actual Delegação Ka Mfumo, enquanto a Fase II
                    estava nas FPLM. A Matola acolheu a fase III e a IV na Agência do Jardim. Correlativamente, as Direcções Regionais
                    criaram uma estrutura organizativa que velava a geração, distribuição, comercial e administração. Foram as equipas
                    regionais que passaram a implementar as directrizes normativas comerciais no contexto das rotinas e procedimentos
                    comerciais fossem cumpridos nas Áreas, que eram replicadas nas ZD’s.
                    </p>
                </div>
    
            </div>
        </div>
    <hr>
    
    </div>
    </div>
</div>
</div>

@endsection