@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-bg-1-1.jpg);">
    <div class="container">
        <h2>Linha de Tempo</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="collection-grid">
    <div class="container">
        <div class="collection-grid__top">
            <div class="block-title-two text-center">
                <p>Linha de Tempo</p>
                <h3>Linha <br> de Tempo</h3>
            </div><!-- /.block-title-two -->

            <ul class="collection-filter post-filter list-unstyled">
                <li data-filter=".year-1977"><span>1977</span></li>
                <li data-filter=".year-1995"><span>1995</span></li>
                <li data-filter=".year-1997"><span>1997</span></li>
                <li data-filter=".year-1998"><span>1998</span></li>
                <li data-filter=".year-2000"><span>2000</span></li>
                <li data-filter=".year-2003"><span>2003</span></li>
                <li data-filter=".year-2005"><span>2005</span></li>
                <li data-filter=".year-2010"><span>2010</span></li>
                <li data-filter=".year-2011"><span>2011</span></li>
                <li data-filter=".year-2012"><span>2012</span></li>
                <li data-filter=".year-2017"><span>2017</span></li>
                <li data-filter=".year-2018"><span>2018</span></li>
            </ul><!-- /.collection-filter list-unstyled -->
        </div><!-- /.collection-grid__top -->
        
        <div class="row high-gutter filter-layout">
            <div class="col-lg-6 col-md-12 filter-item year-1977">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>1977</h3>
                        <p>Criação da Electricidade de Moçambique, através do Decreto nº 38/1977, de 27 de Agosto, resulta da fusão de diversos serviços isolados de geração e vários níveis de serviços Municipalizados de electricidade, bem como de Empresas privadas de exploração de electricidade.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 col-md-12 filter-item year-1995">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>1995</h3>
                        <p>Através do Decreto nº 28/1995, de 17 de Julho, a EDM transforma-se em Empresa Pública, tendo ganho autonomia financeira, administrativa, jurídica e patrimonial.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 col-md-12 filter-item year-1997">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>1997</h3>
                        <p>
                            Promulgada a Lei de Electricidade, a qual aplica-se à produção, transporte, distribuição e comercialização de energia eléctrica no território da República de Moçambique bem como à sua importação e exploração para ou do território nacional, abrindo o mercado à participação do sector privado.
                            <br> Criado o Conselho Nacional de Electricidade, também designado por CNELEC, com uma função consultiva, de defesa do interesse público, servindo também como fórum de auscultação da opinião pública sobre assuntos relevantes da política nacional de energia eléctrica.
                        </p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 col-md-12 filter-item year-1998">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>1998</h3>
                        <p>
                            Aprovada a Política Energética através da Resolução 05/98 de 03 de Março, onde, de entre várias atribuições, define:
                            <ul>
                                <li>A melhoria da fiabilidade de energia a fornecer</li>
                                <li>O aumento da disponibilidade doméstica</li>
                                <li>O reforço da capacidade institucional</li>
                                <li>Promoção de novas centrais e empreendimentos eléctricos, destacando-se o Vale do Zambeze, etc</li>
                            </ul>
                        </p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 col-md-12 filter-item year-2000">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2000</h3>
                        <p>Através do Decreto nº 25/2000, aprovado o estatuto orgânico do Conselho Nacional de Electricidade, designado por CNELEC.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
            
            <div class="col-lg-6 col-md-12 filter-item year-2003">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2003</h3>
                        <p>Através do Decreto nº 29/2003 de 23 de Junho é aprovado o Sistema Tarifário de venda de energia eléctrica da Electricidade de Moçambique, E.P.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2005">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2005</h3>
                        <p>Decreto nº42/2005: Aprova o Regulamento que estabelece as normas referentes à Planificação, Financiamento, Construção, Posse, Manutenção e Operação de Instalações de Produção, Transporte, Distribuição e Comercialização de energia eléctrica, bem assim as normas e os procedimentos relativos à gestão, operação e desenvolvimento global da rede Nacional de Transporte de Energia.</p>
                        <p>Promulgado o decreto nº 43/2005 que designa a empresa Electricidade de Moçambique, Empresa Pública, para realizar o serviço público de Gestor da rede Nacional de Transporte de Energia Eléctrica e do respectivo Centro de despacho.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2010">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2010</h3>
                        <p>Através do Diploma Ministerial nº105/2010 foram aprovados os procedimentos para o acesso à tarifa Agrícola em Média Tensão.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2011">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2011</h3>
                        <p>Lei 15/2011: A presente Lei tem por objectivo estabelecer as normas orientadoras do processo de contratação, implementação e monitoria de empreendimentos de parcerias público-privadas, de projectos de grande dimensão e concessões empresariais.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2012">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2012</h3>
                        <p>Lei 6/2012: Aprovada a Lei das Empresas Públicas.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2017">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2017</h3>
                        <p>Lei 11/2017: Cria a Autoridade Reguladora de Energia, abreviadamente designada por ARENE.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->

            <div class="col-lg-6 col-md-12 filter-item year-2018">
                <div class="collection-grid__single">
                    <div class="collection-grid__content">
                        <h3>2018</h3>
                        <p>NES - Lançamento de Estratégia Nacional de Electrificação,```html
                        <p>NES - Lançamento de Estratégia Nacional de Electrificação, na qual são definidos os papéis da EDM, MIREME e FUNAE no processo de expansão do acesso doméstico à energia elétrica.</p>
                    </div><!-- /.collection-grid__content -->
                </div><!-- /.collection-grid__single -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.collection-grid -->



@endsection