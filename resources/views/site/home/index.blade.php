@extends('layouts.site')

@section('content')
<header>
    <div class="hero">
        <div class="main-wrapper">
            <div class="hero__content">
                <h1 class="display-large">Máquinas de costura novas, usadas e retrô.</h1>
            </div>
            <section class="docked-bar flex-container">
                <div class="hero__information">
                    <p>Entre em contanto conosco pelo Whatsapp ou por nossas Redes Sociais.</p>
                </div>
                <div class="talk-to-us">
                    <img src="{{asset('images/Phone-Icon.svg')}}" alt="Phone">
                    <a title="Clique no número do telefone para ligar" href="tel:(47) 3027-3289">(47) 3027-3287</a>
                </div>
            </section>
        </div>
    </div>
</header>


<div class="gray-background testimonials__mobile">
    <div class="main-wrapper flex-container">
        <section class="testimonials">
            <h2 class="title-large">Sobre nossa história</h2>
            <section class="flex-container">
                <article class="quote">
                    Com 24 anos de história em Joinville, a loja Central da Costura
                    se especializou na venda e assistência técnica de máquinas de 
                    costura novas e usadas, tanto industriais quanto domésticas. 
                    Além disso, conta com uma grande variedade de peças e acessórios para costura.
                </article>
                <article class="quote">
                    A loja Central da Costura está constantemente em busca de excelência
                    em atendimento aos seus clientes, oferecendo sempre os melhores produtos 
                    para as mais variadas necessidades em costura.
                    <footer>
                        <h4 class="title-medium">Quer conhecer melhor a loja? </h4>
                        <p>Venha nos fazer uma visita!</p>
                    </footer>
                </article>
            </section>
        </section>
    </div>
</div>

<section class="cta__home">
    <div class="cta__wrapper">
        <h2 class="title-large">O que fazemos</h2>
        <p>Somos uma loja autorizada das marcas Singer, Elgin e Siruba
        <br>Compramos e vendemos máquinas novas e usadas
        <br>Vendemos utensílios e variedades para auxiliar na sua costura</p>
        <a href="{{route('site.products')}}" role="button" class="button button_accent">Veja nossos produtos. </a>
    </div>
    <div class="pattern"></div>
</section>
@endsection
