@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Editr usuário </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
        <section class="contact-wrapper">
            <form class="" action="{{route('site.users.update')}}" method="post" style="margin-bottom: 30px;">
                    @csrf
                    @if(session('success'))
                        <div>
                            {{session('message')}}
                        </div>
                    @endif
                    <div>
                    </div>
                    <label for="name">Nome</label>
                    <input id="name" name="name" type="text" tabindex="1" placeholder=""
                           autofocus value="{{$users->name}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" tabindex="1" placeholder=""
                           autofocus value="{{$users->email}}">
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="password">Senha</label>
                    <input id="password" name="password" type="password" tabindex="1" placeholder=""
                           autofocus >
                    @error('password')
                    <div>{{ $message }}</div>
                    @enderror

                    
                    <input type="hidden" value="{{$users->id}}" name="id">
                    <button class="button button_primary" type="submit" style="margin-top: 10px;">Salvar</button>
                    <a class="button button_secondary" style="margin-top: 10px" href="{{route('site.users.list')}}" role="button">Lista</a>

                </form>
            <!-- </section> -->
    </section>
    
@endsection

