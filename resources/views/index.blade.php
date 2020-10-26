<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>SistDenuncia</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

</head>

<body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                        <img src="images/logoDEN.svg" alt="Homepage">
                    </a>
                </div> <!-- end header__logo -->

               <!-- <ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class="header__search-trigger" href="#0"></a>

                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Pesquisar:</span>
                            <input type="search" class="search-field" placeholder="Pesquisar" value="" name="s" title="Pesquisas:" autocomplete="off">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
        
                    <a href="#0" title="Close Search" class="header__overlay-close">pesquisa</a>

                </div>  <!-- end header__search -->


                <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Barra de navegação</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="{{route('index')}}" title="">Início</a></li>
                        <li class="current"><a href="{{route('home')}}" title="">Fazer Denuncia</a></li>

                       
                       {{-- <li class="has-children">
                        <a  title="">Fazer Denuncia</a>
                            <ul class="sub-menu">
                            <li><a href="single-video.html">Videos</a></li>
                            <li><a href="single-gallery.html">Imagens</a></li>
                            </ul>
                        </li>--}}
                       
                       
                        <li><a href="#contato" title="">Contato</a></li>
                        <li><a href="#somos" title="">Quem Somos</a></li>
                    <li><a href="{{route('register')}}" title="">Cadastra-Se</a></li>
                         <li><a href="{{route('login')}}" title="">Login</a></li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->

        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-guitarman1.jpg');">
                            
                            <div class="entry__content">
                               

                                <h1><a href="#0" title="">O Programa Meio Dia é um jornal que já existe no mercado Amapaense há mais de 30 anos, levando informação de maneira simples ao telespectador.</a></h1>

                              
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                  
                    <div class="featured__column featured__column--small">
                      {{--  <form  id="cForm" method="POST" action="{{ route('register') }}">
                             <h3>CADASTRE-SE.</h3>
                        @csrf

                        <div class="form-field">
                            <label for="name">Nome:</label>

                          
                                <input  id="cName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-field">
                            <label for="idade">Idade:</label>

                            
                                <input  id="cName" type="integer" class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ old('idade') }}" required autocomplete="idade" autofocus>

                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-field">
                            <label for="contato">Contato:</label>

                          
                                <input  id="cName" type="text" class="form-control @error('contato') is-invalid @enderror" name="contato" value="{{ old('contato') }}" required autocomplete="contato" autofocus>

                                @error('contato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                       

                        <div class="form-field">
                            <label for="email">Email:</label>


                            
                                <input  id="cWebsite" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-field">
                            <label for="email">Digite sua Senha:</label>

                            
                                <input id="cWebsite" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-field">
                            <label for="email">Confirme sua Senha:</label>
                            

                            
                                <input id="cWebsite" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                        <div class="form-field">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                        </div>
                
                    </form> <!-- end form --> -- }} ------- FORMULARIO_ANA
                    

                        {{-- <div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">Management</a></span>

                                <h1><a href="#0" title="">The Pomodoro Technique Really Works.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 27, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->--}}
{{--
                        <div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">

                            <div class="entry__content">
                                <span class="entry__category"><a href="#0">LifeStyle</a></span>

                                <h1><a href="#0" title="">Throwback To The Good Old Days.</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="#0">John Doe</a></li>
                                        <li>December 21, 2017</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->

                        </div> <!-- end entry -->--}}

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> <!-- end pageheader-content row -->

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content" id="denuncia">
        
        <div class="row masonry-wrap" >
            <div class="masonry">
               

                <div class="grid-sizer"></div>
                
                   
        </div>
               

            <!--    <article class="masonry__brick entry format-standard" data-aos="fade-up"> -->
                   {{-- @foreach ($posts as $post)
                    <article class="masonry__brick entry format-standard" data-aos="fade-up" >

                    <div class="entry__thumb"  >
                        <a href="" class="entry__thumb-link">
                            <img src="{{asset('storage/'.$post->arquivo)}}" />
                        </a>
                        <div class="entry__text">
                       
                            <div class="entry__excerpt">
                                <p>
                                    {{$post->mensagem}}
                                </p>
                            </div>
                            <div class="entry__meta">
                               
                                <span class="entry__meta-links">
                                    <a href="category.html"> {{$post->email}}</a> 
                                   
                                </span>
                            </div>
                        </div>
                          @endforeach
                    </div>--}}
                  
                    
    
                  
            
                   
             

               

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img1.png" >
                                    {{--srcset="images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x" alt="">--}}
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                           
                            <h3 class="entry__title"><a href="single-standard.html">Denuncia de Rua intrafegável.</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                              A nossa rua está completamente abandonada, quando chove não conseguimos passar, é uma calamidade o poder publico não faz nada para resolver está situação !!!
                
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Maria de Jesus</a>
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img2.jpg" 
                                    >
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                          
                            <h3 class="entry__title"><a href="single-standard.html">Denuncia de Lama na Água da CAESA.</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                               Não é primeira vez que isso acontece, de sair agua barrenta na minha torneira, eu peço que a caesa dê uma explicação porque isso acontece.
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Marcio da Silva</a>
                                
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img4.jpg" 
                                  >
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                           
                            <h3 class="entry__title"><a href="single-standard.html">Denuncia de falta de saneamento básico.</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                               Nois moradores deste bairro sofremos diaramente com falta de agua em nossas residencias, fora a nossa rua que está péssima não dando pra passar.
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="#">Camila Soares</a> 
                                
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article --->

                <article class="masonry__brick entry format-video" data-aos="fade-up">
                        
                    <div class="entry__thumb video-image">
                        
                            <img src="images/thumbs/masonry/img8.jpg" 
                                  >
                        </a>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            
                            <h3 class="entry__title"><a href="single-video.html">Denuncia de Esgoto ao Cêu-Aberto.</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                               Temos que suportar um mau- cheiro constante que vem desse esgoto, não aguentamos mais isso, é uma grande falta de respeito com a gente.
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">André Rodrigues</a> 
                               
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->


               {{--- <article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        
                    <div class="entry__thumb slider">
                        <div class="slider__slides">
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/img1.jpg" 
                                        >
                            </div>
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/img2.jpg" 
                                        >
                            </div>
                            <div class="slider__slide">
                                <img src="images/thumbs/masonry/gallery/img3.jpg" 
                                      >
                            </div>
                        </div>
                    </div>
    
                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-gallery.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Work</a> 
                                <a href="category.html">Management</a>
                            </span>
                        </div>
                    </div>
    
                </article> <!-- end article -->  ---}}
                

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img9.jpg" 
                                   >
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                        
                            <h3 class="entry__title"><a href="single-standard.html">Denuncia de buraqueira na rua.</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                              Na rua onde eu moro não há mais condição de ultrapassar carro e nem moto, por que a situação está bem feia, cada buraco grande que destroí o veiculo de qualquer pessoa, eu cobro cade os nossos governantes para viram olhar pela gente aqui. 
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Icaro Mendes</a>
                                
                            </span>
                        </div>
                    </div>

                </article> <!-- end article --->

                <article class="masonry__brick entry format-standard" data-aos="fade-up">
                {{--    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img10.jpg" 
                                   >
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">Throwback To The Good Old Days.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Lifestyle</a>
                            </span>
                        </div>
                    </div>

                </article> <!-- end article --->--}}

                <article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img12.jpg" 
                                    >
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
        
                            <h3 class="entry__title"><a href="single-standard.html">Denuncia de Lixo-Acumulado .</a></h3>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                             As pessoas do nosso bairro não tem consideração de deixar limpa nossas ruas, as pessoas que moram aqui já estão acostumadas a jogar lixo nessa região se tornou uma grande lixeira viciada, atraindo doenças e bichos peçonhentos.
                            </p>
                        </div>
                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Raimundo Pereira</a> 
                               
                            </span>
                        </div>
                    </div>

                </article>
                 <!-- end article -->

               {{--<article class="masonry__brick entry format-standard" data-aos="fade-up">

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="entry__thumb-link">
                            <img src="images/thumbs/masonry/img5.jpg" 
                                   >
                        </a>
                    </div>

                    <div class="entry__text">
                        <div class="entry__header">
                            
                            <div class="entry__date">
                                <a href="single-standard.html">December 10, 2017</a>
                            </div>
                            <h1 class="entry__title"><a href="single-standard.html">Planning Your First Trip to Sydney.</a></h1>
                            
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
                            </p>
                        </div>


                        <div class="entry__meta">
                            <span class="entry__meta-links">
                                <a href="category.html">Travel</a> 
                                <a href="category.html">Vacation</a>
                            </span>
                        </div>
                    </div>

                </article> 
              <!--  end article -->
             ---}}
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

      <!--  <--<div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <ul>
                        <li><a class="pgn__prev" href="#0">Prev</a></li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li><a class="pgn__next" href="#0">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div> -->

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
    <!--<section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Popular Posts</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/wheel-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/shutterbug-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/cookies-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                        <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/beetle-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/tulips-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">10 Interesting Facts About Caffeine.</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                        </section>
                    </article>
                    <article class="col-block popular__post">
                        <a href="#0" class="popular__thumb">
                            <img src="images/thumbs/small/salad-150.jpg" alt="">
                        </a>
                        <h5><a href="#0">Healthy Mediterranean Salad Recipes</a></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                            <span class="popular__date"><span>on</span> <time datetime="2017-12-12">Dec 12, 2017</time></span>
                        </section>
                    </article>
                </div>  end popular_posts -->
         <!--   </div>  end popular -->
            
           <!-- <div class="col-four md-six tab-full about">
                <h3>About Philosophy</h3>

                <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                </p>

                <ul class="about__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul>  end header__social -->
         <!--   </div>  end about -->

      <!---  </div>  end row -->

       <!-- <div class="row bottom tags-wrap">
            <div class="col-full tags">
                <h3>Tags</h3>

                <div class="tagcloud">
                    <a href="#0">Salad</a>
                    <a href="#0">Recipe</a>
                    <a href="#0">Places</a>
                    <a href="#0">Tips</a>
                    <a href="#0">Friends</a>
                    <a href="#0">Travel</a>
                    <a href="#0">Exercise</a>
                    <a href="#0">Reading</a>
                    <a href="#0">Running</a>
                    <a href="#0">Self-Help</a>
                    <a href="#0">Vacation</a>
                </div>  end tagcloud -->
           <!-- </div> < end tags -->
        <!--</div>  end tags-wrap -->

  <!--  </section> end s-extra -->


    <!-- s-footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main" id="contato">
            <div class="row">
                
                <div class="col-two md-four mob-full s-footer__sitelinks">
                        
                    <h4>Menu</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">Styles</a></li>
                        <li><a href="#0">About</a></li>
                        <li><a href="#0">Contact</a></li>
                     
                    </ul>
                    </div>

           <!--     </div>  end s-footer__sitelinks 

                <div class="col-two md-four mob-full s-footer__archives">
                        
                    <h4>Archives</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">January 2018</a></li>
                        <li><a href="#0">December 2017</a></li>
                        <li><a href="#0">November 2017</a></li>
                        <li><a href="#0">October 2017</a></li>
                        <li><a href="#0">September 2017</a></li>
                        <li><a href="#0">August 2017</a></li>
                    </ul>

                </div> <!-- end s-footer__archives -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4> Redes Sociais</h4>

                    <ul class="s-footer__linklist">
                        <li><a href="#0">Facebook : PROGRAMAMEIODIA</a></li>
                        <li><a href="#0">Google+ : TV Amazônia-SBT</a></li>
                        <li><a href="#0">Youtube: SBT AMAPÁ</a></li>
                        <li><a href="#0">Contato:96 99199-5810 </a></li>
                      
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class="col-two md-four mob-full s-footer__social">
                        
                    <h4>Endereço</h4>
                    <ul class="s-footer__linklist">
                        <li><a href="#0">Rua:Hildemar Maia,2135- Buritizal.</a></li>
                      
                      
                    </ul>
                   

                </div>   

                <div class="col-five md-full end s-footer__subscribe">
                        
                    <h4>Fale Conosco</h4>

                    <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                    <div class="subscribe-form">
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe 

            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="col-full">
                    <div class="s-footer__copyright">
                        <span>© Copyright Philosophy 2018</span> 
                        <span>Site Template by <a href="https://colorlib.com/">Colorlib</a></span>
                    </div>

                    <div class="go-top">
                        <a class="smoothscroll" title="Back to Top" href="#top"></a>
                    </div>
                </div>
            </div>
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>