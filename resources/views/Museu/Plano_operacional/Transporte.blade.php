@extends('layouts.app')

@section('title', 'Home Page')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Transporte</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->
<section class="blog-one blog-details-page">
    <div class="uk-container uk-margin-large-bottom uk-margin-large-top">
        <div uk-grid>
            <div uk-grid>
                
            </div>
            <div class="uk-width-expand@m uk-width-1-1@m">
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transporte</h4>
                <p class="uk-text uk-margin-left uk-text-justify">
                    Tem como missão dirigir, de forma eficiente e eficaz, as actividades de exploração e manutenção da Rede Nacional de Transporte, que compreendem:
                </p>
                <ol class="uk-text uk-margin-large-left uk-margin-remove-top uk-text-justify" type="a">
                    <li class="uk-margin-small">Instalações de interligação para os produtores de electricidade e para a importação de electricidade, </li>
                    <li class="uk-margin-small"><a class="uk-tex-normal">Infra-estruturas de transporte</a> de energia eléctrica, para fornecer energia para exportação, clientes de grande porte e redes de distribuição conectadas a Rede de Transporte; </li>
                    <li class="uk-margin-small"><a >Centro de Despacho</a>; e
                    </li>
                    <li class="uk-margin-small">Infra-estruturas de telecomunicações, telemetria e controle remoto para a gestão eficaz e eficiente  da<a> Rede Nacional de
                            Transporte</a> de acordo com as disposições do código de Rede, acordos e regulamentos da SAPP (Southern African Power Pool); </li>
                </ol>
                <div>

                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        A Rede Nacional de Transporte de Energia é constituída por dois subsistemas isolados, nomeadamente, Centro - Norte e Sul.
                    </p>
                    <p class="uk-text uk-margin-left uk-text-justify">
                        A interconexão destes subsistemas é feita via países vizinhos, nomeadamente, Zimbabwe, através da rede de Transporte da ZESA e África do Sul, através da rede de Transporte da Eskom, esta última conecta-se à rede de Transporte Nacional (REN), através da rede da Motraco. Vide no mapa
                        </span>.
                    </p>
                </div>
            </div>
            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="assets/images/EDM/final/mapa_transporte.png"
                    data-caption="Rede Transporte Energia. Fonte: Plano de Negócio da EDM 2020 - 2024">
                    <img src="assets/images/EDM/final/mapa_transporte.png" class="uk-border-rounded" width="350px"
                        height="50px" alt="" uk-img></a>
                        <p>Rede Transporte Energia. Fonte: Plano de Negócio da EDM 2020 - 2024</p>

            </div>
    
            <div uk-grid class="uk-margin-remove uk-padding-remove">
                    <div class="uk-margin-remove">
                        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Infra-estrutura de
                            Transporte
                        </h4>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                           O sistema de Transporte de Energia da EDM, é constituído por quatro níveis de tensão, nomeadamente, 66kV, 110kV, 220kV e 275kV.
                        </p>
                        <div class="uk-width-1-1@m uk-flex uk-flex-center" uk-lightbox="animation: slide">
                            <a class="uk-inline uk-margin-right uk-margin-top"
                                href="{{ asset('images/EDM/final/elementos_da_rede (1).png') }}"
                                data-caption="Descrição dos elementos da rede. Fonte: Plano de Negócio da EDM 2020 - 2024">
                                <img src="{{ asset('images/EDM/final/elementos_da_rede (1).png') }}" class="uk-border-rounded uk-margin-large-left" width="500px"
                                    height="100px" alt="" uk-img></a>
    
                        </div>
                        <p class="uk-text-center uk-text-primary">Descrição dos elementos da rede. Fonte: Plano de Negócio da EDM 2020 - 2024</p>
    
                    </div>
    
    
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Na <b>Região Sul</b>, das 37 subestações em funcionamento, 12 estão a operar no limite da sua capacidade, 6 linhas de transporte de energia a 66kV operam no seu limite de transferência e carecem de intervenção urgente para evitar a sobrecarga dos equipamentos, que se pode traduzir no seu envelhecimento precoce e/ou colapso.
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Com a implementação dos projectos de reforço da rede nomeadamente: PERIP, JICA, Hyousung, STIP e Emergência, o número de subestações sobrecarregadas a nível da Rede de Transporte Sul irá reduzir para 4, nomeadamente, Marracuene, Salamanga, SE10 e Kongolote.
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Na <b>Região Centro</b>, a Direcção de Transporte funciona com um total de 32 Subestações, das quais 27 pertencem à EDM, sendo que 3 são móveis, localizadas em Tete, Quelimane e Casa Nova. As restantes 24 são fixas, das quais 5 subestações são privadas (JINDAL, CIM Dondo, CIM Beira, Vale e ICVL).
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Actualmente, na região não há registo de subestações a operar no limite da sua capacidade. Não obstante tal facto, 2 linhas de transferência de potência, nomeadamente, DL3 (Matambo - Tete) e CL71 (Dondo - Munhava)) estão a operar no seu limite térmico.
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            No triénio 2019-2021, está planificada a ligação de cerca de 362.000 novos clientes, no âmbito da universalização do acesso, o que resultará na sobrecarga de 8 Subestação da rede de Transporte Centro. <br>Se a implementação dos projectos de reforço da rede (PERIP, HYOUSUNG, STIP) for bem-sucedida, o quadro melhora, contudo, permanecendo críticas as subestações da Munhava, Chimoio 1 e Chimoio2.
    
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Na <b>Região Norte</b>, com o plano de universalização do acesso doméstico à rede, prevê-se para os próximos dois anos ligar cerca de 250 mil novos clientes, o que resultará no incremento da demanda e consequente sobrecarga de 7 Subestações.
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Mesmo com a implementação dos projectos em curso de reforço da rede nesta região (PERIP, HYOUSUNG, MARRUPA, STATCOM CUAMBA, LINHA CAIA-NACALA), irá prevalecer a necessidade de se proceder a um aumento da capacidade de transferência das linhas CL31 e CL32, para evitar restrições e garantir o fornecimento de energia eléctrica de qualidade às Cidade de Nampula e Nacala e aos distritos de Monapo, Ilha de Moçambique e Mussoril, em caso da indisponibilidade da central flutuante (Karpower) e ou de uma das linhas (CL31 ou CL35).
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                            Para o quinquénio 2020 - 2024, estão previstos diversos projectos visando, por um lado, garantir a disponibilidade de potência para suprir a demanda e, por outro, garantir a segurança na exploração do sistema. Igualmente estão previstos projectos de melhoria dos processos de gestão dos activos da rede de transporte, modernização dos meios de diagnóstico de incidentes e consolidação dos procedimentos de O&M.
                        </p>
            </div>
    
    
            <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
                <ul class="uk-nav uk-nav-default uk-align-left">
                    <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
                    <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                                    >Centro Nacional do Despacho </a></li>
    
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>




</div><!-- /.container -->
</section><!-- /.blog-one blog-grid-page -->
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


