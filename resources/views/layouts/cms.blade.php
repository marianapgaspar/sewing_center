<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
    <title>Plasmators assimilant in audax hamburgum! Sunt animalises perdere teres, altus calceuses. </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="Blue"/>
    <meta charset="UTF-8"/>
    <meta name="description" content="Camerarius, raptus devatios inciviliter anhelare de festus, clemens luna. "/>
    <meta name="author" itemprop="MMPX"/>

    <!-- Adicionar Favicon em todas as versões -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- Tags facebook -->
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:url" content="virundum"/>
    <meta property="og:title"
          content="Vortexs sunt byssuss de placidus visus. Potus diligenter ducunt ad alter navis. ">
    <meta property="og:site_name" content="Candidatus ">
    <meta property="og:description"
          content="Ubi est albus pars? Cum mortem favere, omnes habitioes promissio grandis, dexter elevatuses. ">
    <meta property="og:type" content="website"/>

    <!-- Links & Scripts -->
    <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>


    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.png')}}" sizes="16x16" type="image/png">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.png')}}" sizes="32x32" type="image/png">
    <link id="favicon" rel="shortcut icon" href="{{asset('images/Frame.png')}}" sizes="48x48" type="image/png">

    <link rel="apple-touch-icon" sizes="48x48" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="384x384" href="{{asset('images/Frame.png')}}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{asset('images/Frame.png')}}">
<!-- CSS only -->
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('lightbox/css/lightbox.css')}}"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
    <div class="main-wrapper">
        <div class="flex-container">
            <a class="logotipo" href="{{route('site.home')}}">
                <img src="{{asset('images/Frame.png')}}">
            </a>
            <ul class="navigation__itens" id="menu">
                
                <li>
                    <a href="{{route('site.category.list')}}">Categorias
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.products.list')}}">Produtos
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.products.list')}}">Sair
                        <span class="border-effect"></span>
                    </a>
                </li>
            </ul>
            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">
        <li><a class="title-medium" href="{{route('site.category.list')}}">Categorias</a></li>
        <li><a class="title-medium" href="{{route('site.products.list')}}">Produtos</a></li>
        <li><a class="title-medium" href="{{route('site.products.list')}}">Sair</a></li>
    </ul>
</div>

@yield('content')

<section class="sub__footer">
    <div class="main-wrapper flex-container">
        <a href="{{route('site.login')}}"><img src="{{asset('images/Lock-icon.svg')}}">CMS</a>
        <a href="#" target="_blank">Produzido por <strong>Mariana Pacheco Gaspar</strong></a>
    </div>
</section>

</body>


<!-- Scripts -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('lightbox/js/lightbox.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $("#toggle").click(function () {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    })
</script>
@yield('footer-scripts')

</html>

