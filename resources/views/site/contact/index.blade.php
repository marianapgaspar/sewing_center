@extends('layouts.site')

@section('content')
    <div class="gray-background">
        <section class="contact__block contact-wrapper">
            <h1 class="display-medium">Entre em contato conosco</h1>
            <section class="contact__options">

                <form class="contact__form" action="{{route('site.contact.form')}}" method="post">
                    @csrf
                    @if(session('success'))
                        <div>
                            {{session('message')}}
                        </div>
                    @endif
                    <div>
                    </div>
                    <label for="name">Nome completo</label>
                    <input id="name" name="name" type="text" tabindex="1" placeholder="Ex: José da Silva"
                           autofocus value="{{old('name')}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="text" tabindex="2" placeholder="Ex: email@email.com.br"
                           value="{{old('email')}}">
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="message">Mensagem</label>
                    <textarea id="message" name="message" tabindex="3" cols="20" rows="4"
                              placeholder="Digite aqui...">{{old('message')}}</textarea>
                    @error('message')
                    <div>{{ $message }}</div>
                    @enderror

                    <button class="button button_primary" type="submit">Enviar</button>
                </form>

                <div class="contact__infos">
                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/phone-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Telefone</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:(47) 3027-3289">(47) 3027-3289</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/pin-map-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Nossa localização </h3>
                        </div>
                        <a title="clique no endereço para traçar uma rota" target="_blank"
                           href="https://www.google.com/maps/dir//R.+Itaja%C3%AD,+125+-+Centro+Joinville+-+SC+89201-090/@-26.3045607,-48.8421517,12z/data=!4m5!4m4!1m0!1m2!1m1!1s0x94deb04c8866f491:0x274d0b5b7cb26eda">
                            Rua Itajaí, 125<br>
                            Joinville<br>
                            Centro - Joinville/SC<br>
                            CEP: 89201-090
                        </a>
                    </div>                    
                    <section class="contact__infos__social-media">
                    
                        <a href=" https://www.facebook.com/CentralDaCosturaJoinville/" target="_blank">Facebook</a>
                        <br>
                        <br>
                        <a href="https://web.whatsapp.com/send?phone=554791014745" target="_blank"></i>WhatsApp</a>
                        <br>
                        <br>
                        <a href="https://www.secure.instagram.com/central.da.costura/?hl=am-et" target="_blank">Instagram</a>
                    </section>
                </div>
            </section>
        </section>
    </div>
@endsection