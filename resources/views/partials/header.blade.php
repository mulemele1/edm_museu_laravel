<div class="topbar-one">
    <div class="container">
        <div class="topbar-one__left">
            <p>Venha explorar um pouco da nossa História.</p>
        </div>
        <div class="topbar-one__right">
            <a href="#"><i class="far fa-clock"></i> Seg - Sex 07.30 - 15.30</a>
            <a href="#"><i class="fa fa-phone-alt"></i> (+258) 235-3256</a>
            <a href="#" class="thm-btn topbar__btn">ACADEMIA</a>
        </div>
    </div>
</div>

<nav class="main-nav-one stricky">
    <div class="container">
        <div class="inner-container">
            <div class="logo-box">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo-musedm_1.png') }}" alt="" width="143">
                </a>
                <a href="#" class="side-menu__toggler"><i class="muzex-icon-menu"></i></a>
            </div>
            <div class="main-nav__main-navigation">
                <ul class="main-nav__navigation-box">
                    <li class="dropdown">
                        <a href="{{ url('/') }}">Museu</a>
                        <ul>
                            <li><a href="{{ url('/') }}">Apresentação da Empresa</a></li>
                            <li><a href="{{ url('/resources/views/Museu/Museu.blade.php') }}">Museu</a></li>
                            <li><a href="{{ url('/resources/views/Museu/Equipe.blade.php') }}">Equipe</a></li>
                            <li class="dropdown">
                                <a href="#">PLANO OPERACIONAL</a>
                                <ul>
                                    <li><a href="{{ url('/resources/views/Museu/Plano_operacional/Geracao.blade.php') }}">Geração</a></li>
                                    <li><a href="{{ url('/resources/views/Museu/Plano_operacional/Transporte.blade.php') }}">Transporte</a></li>
                                    <li><a href="{{ url('/resources/views/Museu/Plano_operacional/Distribuicao.blade.php') }}">Distribuição</a></li>
                                    <li><a href="{{ url('/resources/views/Museu/Plano_operacional/Comercial.blade.php') }}">Comercial</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/about') }}">Sobre</a>
                        <ul>
                            <li><a href="{{ url('/resources/views/Sobre EDM/Edm_MVV.blade.php') }}">EDM (Missão, Visão, Valores)</a></li>
                            <li><a href="{{ url('/resources/views/Sobre EDM/Producao.blade.php') }}">Produção</a></li>
                            <li><a href="{{ url('/resources/views/Sobre EDM/Transmissao.blade.php') }}">Transmissão</a></li>
                            <li><a href="{{ url('/resources/views/Sobre EDM/Distribuicao.blade.php') }}">Distribuição</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="Historia_da_eletrificacao.html">História de eletrificação</a>
                        <ul>
                            <li><a href="{{ url('/resources/views/Historia_eletrificacao/Geracoes.blade.php') }}">Geração</a></li>
                            <li><a href="{{ url('/resources/views/Historia_eletrificacao/Transporte.blade.php') }}">Transporte</a></li>
                            <li><a href="{{ url('/resources/views/Historia_eletrificacao/Distribuicao.blade.php') }}">Distribuição</a></li>
                            <li><a href="{{ url('/resources/views/Historia_eletrificacao/comercial.blade.php') }}">Comercial</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/eventos') }}">Eventos</a>
                        <ul>
                            <li><a href="{{ url('/resources/views/Eventos/Exposição_online.blade.php') }}">Exposição online</a></li>
                            <li><a href="{{ url('/resources/views/Eventos/Publicação_de_Narrativas.blade.php') }}">Publicação de Narrativas</a></li>
                            <li><a href="{{ url('/resources/views/Eventos/Historias_de_Vida.blade.php') }}">Historias de Vida</a></li>
                            <li><a href="{{ url('/resources/views/Eventos/Linha_de_Tempo.blade.php') }}">Linha de Tempo</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact') }}">Contactos</a></li>
                </ul>
            </div>
            <div class="main-nav__right">
                <a href="#" class="search-popup__toggler"><i class="muzex-icon-search"></i></a>
                <a class="sidemenu-icon side-content__toggler" href="#"><i class="muzex-icon-menu"></i></a>
            </div>
        </div>
    </div>
</nav>
