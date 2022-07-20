@extends('layouts.site')

@section('content')
    <div class="green-background">
        <div class="half-green-background"></div>

        <div class="main-wrapper split-content">
            <!-- Conteudo sobre a empresa -->
            <section class="about__content">
                <section class="about__history">
                    <h1 class="display-medium">Sobre nós</h1>
                    <p><strong>Compramos e vendemos: </strong>Compramos e vendemos máquinas novas e usadas </p>
                    <p><strong>Diversidades: </strong>Compramos e vendemos máquinas novas e usadas</p>
                    <p><strong>Autorizada: </strong> Somos uma loja autorizada das marcas Singer, Elgin e Siruba</p>
                </section>
                <section class="about__clients">
                    <div class="about__clients__logos">
                        <img src="{{asset('images/singer-3-logo-png-transparent.png')}}" alt="">
                        <img src="{{asset('images/elgin-logo-6.png')}}" alt="">
                        <img src="{{asset('images/SiRUBA-LOGO-RGB-1-1-1.png')}}" alt="">
                    </div>
                </section>
            </section>

            <!-- Imagem valores da empresa -->
            <section class="about__img__values">   
                <div class="cta__wrapper">
                    <h2 class="title-large">Nosso Endereço</h2>		
                    <h2  class="title-large">Rua Itajaí, 125 – Centro – Joinville – SC</h2>						
                </div>
                <div data-id="1667a528" data-element_type="widget" data-widget_type="google_maps.default">
                    <style>/*! elementor - v3.6.6 - 08-06-2022 */
                    .elementor-widget-google_maps .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps iframe{height:300px}</style>		
                    <div class="">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=joinville%2C%20rua%20itaja%C3%AD%20125%2C%20centro&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near" title="joinville, rua itajaí 125, centro" aria-label="joinville, rua itajaí 125, centro"></iframe>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
