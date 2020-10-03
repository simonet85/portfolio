<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Christian KIMOU | Fullstack Développeur</title>
        <meta name="description" content="portfolio, répresentant le profil , le travail et expérience de christian kimou" />
        <meta name="keywords" content="portofolio, christian kimou, fullstack, développeur web, web designer" />
        <meta name="author" content="Christian Kimou" />
        <link rel="shortcut icon" href="{{asset('front/img/fevicon.png')}}">
        <!--Bootstrap Css-->
        <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
        <!-- Animate Css -->
        <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
        <!-- Materialdesign icons Css -->
        <link href="{{asset('front/css/materialdesignicons.min.css')}}" rel="stylesheet">
        <!-- pe-icon-7 css -->
        <link href="{{asset('front/css/pe-icon-7.css')}}" rel="stylesheet">
        <!-- Owl Slider -->
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.css')}}" />
        <link rel="stylesheet" href="{{asset('front/css/owl.transitions.css')}}" />
        <!-- Custom style Css -->
        <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    </head>
    <body>

        @yield('content')
        
       <!-- JAVASCRIPTS -->
       <script src="{{asset('front/js/jquery.min.js')}}"></script>
       <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
       <script src="{{asset('front/js/popper.min.js')}}"></script>
       <script src="{{asset('front/js/jquery.easing.min.js')}}"></script>
       <!-- scrollspy js -->
       <script src="{{asset('front/js/scrollspy.min.js')}}"></script>
       <!-- isotope js -->
       <script src="{{asset('front/js/isotope.js')}}"></script>
       <!-- magnific js -->
       <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
       <!-- Particles Js -->
       <script src="{{asset('front/js/particles.js')}}"></script>  
       <script src="{{asset('front/js/particles.app.js')}}"></script>
       <!-- isotope js -->
       <script src="{{asset('front/js/isotope.js')}}"></script>

       <!-- custom js -->
       <script src="{{asset('front/js/custom.js')}}"></script>

       <script>
           $(".element").each(function() {
               var $this = $(this);
               $this.typed({
                   strings: $this.attr('data-elements').split(','),
                   typeSpeed: 100,
                   backDelay: 3000
               });
           });
       </script>
    </body>
</html>
