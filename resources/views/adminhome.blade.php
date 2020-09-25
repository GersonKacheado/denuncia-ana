<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="UTF-8">
   
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

    <title>lista de denuncias</title>
</head>
<body>



@foreach ($posts as $post)

@endforeach
<section class="s-content">
        
    <div class="row masonry-wrap">
        <div class="masonry">
           

            <div class="grid-sizer"></div>

<article class="masonry__brick entry format-standard" data-aos="fade-up">
                        
    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
            <img src="{{asset('storage/'.$post->arquivo)}}" >
                    {{--srcset="images/thumbs/masonry/tulips-400.jpg 1x, images/thumbs/masonry/tulips-800.jpg 2x" alt="">--}}
        </a>
    </div>

    <div class="entry__text">
      
        <div class="entry__excerpt">
            <p>
                {{$post->mensagem}}
            </p>
        </div>
        <div class="entry__meta">
            <p>
                {{$post->email}}
            </p>
        </div>
    </div>


</article> <!-- end article -->
<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
            <img src="{{asset('storage/'.$post->arquivo)}}"
                    >
        </a>
    </div>

    <div class="entry__text">
        <div class="entry__header">
            
            <div class="entry__date">
                <a href="single-standard.html">December 10, 2017</a>
            </div>
            <h1 class="entry__title"><a href="single-standard.html">No Sugar Oatmeal Cookies.</a></h1>
            
        </div>
        <div class="entry__excerpt">
            <p>
                Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua...
            </p>
        </div>
        <div class="entry__meta">
            <span class="entry__meta-links">
                <a href="category.html">Cooking</a>
                <a href="category.html">Health</a>
            </span>
        </div>
    </div>

</article> <!-- end article -->


               
</div> <!-- end masonry -->
</div> <!-- end masonry-wrap -->
</section> <!-- s-content -->



   <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>