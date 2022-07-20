@extends('layouts.cms')

@section('content')
<header>
    <div class="hero">
        <div class="main-wrapper">
            <div class="hero__content">
                <h1 class="display-large">Varius, noster devatios etiam imperium de velox, fortis adiurator.</h1>
                <a class="button button_sublte button_large" href="javascript:;" role="button">Cur triticum potus? </a>
            </div>
            <section class="docked-bar flex-container">
                <div class="hero__information">
                    <p>Rusticus, barbatus pess sed mire tractare de pius, camerarius lixa.</p>
                </div>
                <div class="talk-to-us">
                    <img src="{{asset('images/Phone-Icon.svg')}}" alt="Phone">
                </div>
            </section>
        </div>
    </div>
</header>


<div class="gray-background testimonials__mobile">
    <div class="main-wrapper flex-container">
        <section class="testimonials">
            <h2 class="title-large">Est placidus orexis, cesaris. <br>nunquam aperto vortex.</h2>
            <section class="flex-container">
                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        Sunt zeluses visum secundus, gratis barcases. Pius caesium solite magicaes mons est. Consilium
                        messiss, tanquam altus epos. Sunt fluctuies tractare salvus, festus byssuses. Cum calcaria
                        accelerare, omnes luraes manifestum alter, dexter rationees.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Nunquam talem stella. </h4>
                        <p>Cur ratione observare? </p>
                    </footer>
                </article>

                <article class="quote">
                    <div class="avatar__testimonial">
                        <img src="{{asset('images/Avatar-testimonial.png')}}">
                    </div>
                    <blockquote>
                        Sunt zeluses visum secundus, gratis barcases. Pius caesium solite magicaes mons est. Consilium
                        messiss, tanquam altus epos. Sunt fluctuies tractare salvus, festus byssuses. Cum calcaria
                        accelerare, omnes luraes manifestum alter, dexter rationees.
                    </blockquote>
                    <footer>
                        <h4 class="title-medium">Nunquam talem stella. </h4>
                        <p>Cur ratione observare? </p>
                    </footer>
                </article>
            </section>
        </section>
    </div>
</div>

<section class="cta__home">
    <div class="cta__wrapper">
        <h2 class="title-large">Cum luna favere, omnes gabaliumes captis brevis</h2>
        <p>Equisos mori! A falsis, stella festus itineris tramitem. Brodiums cadunt in placidus brigantium! Cum
            assimilatio persuadere, omnes cursuses imitari raptus, alter planetaes.</p>
        <a href="{{route('site.products')}}" role="button" class="button button_accent">Nunquam imperium plasmator. </a>
    </div>
    <div class="pattern"></div>
</section>
@endsection
