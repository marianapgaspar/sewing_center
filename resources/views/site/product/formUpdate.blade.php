@extends('layouts.cms')

@section('content')
    <header class="common-header">
        <div class="header-wrapper">
            <h1 class="title-large">Editr produto </h1>
        </div>
        <div class="pattern__header"></div>
    </header>
        <section class="contact-wrapper">
            <form class="" action="{{route('site.products.update')}}" method="post" style="margin-bottom: 30px;">
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
                           autofocus value="{{$product->name}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="description">Descrição</label>
                    <input id="description" name="description" type="text" tabindex="1" placeholder=""
                           autofocus value="{{$product->description}}">
                    @error('description')
                    <div>{{ $message }}</div>
                    @enderror
                    <div>
                    <label for="category_id">Categoria</label>
                        <select class="form-control form-control-sm" name="category_id">
                            <option value="">-- Selecione --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}> {{ $category->id }} - {{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                    <div>{{ $message }}</div>
                    @enderror
                    <label for="exclusive">Exclusivo</label>
                    <select class="form-control form-control-sm" name="exclusive">
                        <option value=0>Não</option>
                        <option value=1>Sim</option>
                    </select>
                    <input type="hidden" value="{{$product->id}}" name="id">
                    <button class="button button_primary" type="submit" style="margin-top: 10px;">Salvar</button>
                    <a class="button button_secondary" style="margin-top: 10px" href="{{route('site.products.list')}}" role="button">Lista</a>

                </form>
            <!-- </section> -->
    </section>
    
@endsection

