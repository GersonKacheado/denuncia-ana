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

<section class="s-content">
        
    
<article class="masonry__brick entry format-standard" data-aos="fade-up">
                        

       @foreach ($posts as $post)
       <div class="entry__text">
        
        <div class="filtr-item col-sm-3 " data-category="1" data-sort="white sample">
           {{-- <a href="" data-toggle="lightbox" data-title=""> --}}
           <img src="{{asset('storage/'.$post->arquivo)}}" class="img-thumbnail " alt="" />
             {{-- </a> --}}
           </div>
           
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


       @endforeach
      

   
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