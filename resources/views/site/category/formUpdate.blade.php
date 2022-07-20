@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Editar categoria</h1>
        </div>
        <div class="pattern__header"></div>
    </header>
        <section class="contact-wrapper">
            <form class="" action="{{route('site.categories.update')}}" method="post" style="margin-bottom: 30px;" enctype="multipart/form-data">
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
                           autofocus value="{{$category->name}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror
                    
                    <label for="description">Descrição</label>
                    <input id="description" name="description" type="text" tabindex="1" placeholder=""
                           autofocus value="{{$category->description}}">
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror


                    <label for="image">Imagem</label>
                   
                    <input id="image" name="image" type="file" tabindex="1" placeholder=""
                           autofocus value="{{$category->image}}" accept="image/png, image/jpeg"  class="form-control">
                    @error('image')
                    <div>{{ $message }}</div>
                    @enderror
                    <div class='container'>
                    @if($category->image)
                    <img src="{{asset($category->image)}}" style="width: 322px;">
                    @endif
                    </div>
                    <input type="hidden" value="{{$category->id}}" name="id">
                    <button class="button button_primary" type="submit" style="margin-top: 10px;">Salvar</button>
                    <a class="button button_secondary" style="margin-top: 10px" href="{{route('site.category.list')}}" role="button">Lista</a>

                </form>
            <!-- </section> -->
    </section>
    
@endsection

