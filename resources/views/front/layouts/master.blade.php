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
           $(document).ready(function(){
            
                $('#all').click(function(e){
                    //Prevent default link behaviour
                    e.preventDefault();
                    //Grab the href attribute
                    var url = $(this).attr('href');
                    //Initialise the variable to hold html
                    var bodydata = '';
                    // ajax setup
                    $.ajax({
                        url:url,
                        method:"GET",
                        dataType:"json",
                        success:function(response){
                            
                            for(var i = 0; i < response.length; i++){
                                var id = response[i].id;
                                var name = response[i].name;
                                var description = response[i].description;
                                var image = response[i].image;
                                bodydata +=`<div class="col-lg-4 vue node mb-4" >
                                <div class="work_img_box rounded" >
                                <a class="img-zoom" href="/assets/uploads/${image}"></a>
                                <div class="work_images">
                                    <img src="/assets/uploads/${image}" alt="image" class="img-fluid mx-auto d-block">
                                    <div class="work_overlay">
                                        <h4 class="mb-0">${description}</h4>
                                        <h6 class="mb-0">${name}</h6>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                           
                            }
                            $('#post').append(bodydata);
                            // console.log(bodydata)
                        }

                    })
                })

                $('#seo').click(function(e){
                    e.preventDefault();
                    // var elementId = $('#seo').attr('id');
                    var url = $(this).attr('href');
                    var bodydata = '';
                    // alert('href :'+getHref);
                    $.ajax({
                        url:url,
                        method:"GET",
                        dataType:"json",
                        success:function(response){
                            // console.log(response)
                            for(var i = 0; i < response.length; i++){
                                var id = response[i].id;
                                var name = response[i].name;
                                var description = response[i].description;
                                var image = response[i].image;
                                bodydata +=`<div class="col-lg-4 vue node mb-4" >
                                <div class="work_img_box rounded" >
                                <a class="img-zoom" href="/assets/uploads/${image}"></a>
                                <div class="work_images">
                                    <img src="/assets/uploads/${image}" alt="image" class="img-fluid mx-auto d-block">
                                    <div class="work_overlay">
                                        <h4 class="mb-0">${description}</h4>
                                        <h6 class="mb-0">${name}</h6>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                           
                            }
                            $('#post').empty();
                            $('#post').append(bodydata);
                            // console.log(bodydata)
                        }

                    })
                })

                $('#webdesign').click(function(e){
                    e.preventDefault();
                    // var elementId = $('#webdesign').attr('id');
                    var url = $(this).attr('href');
                    var bodydata = '';
                    // alert('href :'+getHref);
                    $.ajax({
                        url:url,
                        method:"GET",
                        dataType:"json",
                        success:function(response){
                            // console.log(response)
                            for(var i = 0; i < response.length; i++){
                                var id = response[i].id;
                                var name = response[i].name;
                                var description = response[i].description;
                                var image = response[i].image;
                                bodydata +=`<div class="col-lg-4 vue node mb-4" >
                                <div class="work_img_box rounded" >
                                <a class="img-zoom" href="/assets/uploads/${image}"></a>
                                <div class="work_images">
                                    <img src="/assets/uploads/${image}" alt="image" class="img-fluid mx-auto d-block">
                                    <div class="work_overlay">
                                        <h4 class="mb-0">${description}</h4>
                                        <h6 class="mb-0">${name}</h6>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                           
                            }
                            $('#post').append(bodydata);
                            // console.log(bodydata)
                        }

                    })
                })

                $('#project').click(function(e){
                    e.preventDefault();
                    // var elementId = $('#project').attr('id');
                    var url = $(this).attr('href');
                    var bodydata = '';
                    // alert('url :'+url);
                    $.ajax({
                        url:url,
                        method:"GET",
                        dataType:"json",
                        success:function(response){
                            // console.log(response)
                            for(var i = 0; i < response.length; i++){
                                var id = response[i].id;
                                var name = response[i].name;
                                var description = response[i].description;
                                var image = response[i].image;
                                bodydata +=`<div class="col-lg-4 vue node mb-4" >
                                <div class="work_img_box rounded" >
                                <a class="img-zoom" href="/assets/uploads/${image}"></a>
                                <div class="work_images">
                                    <img src="/assets/uploads/${image}" alt="image" class="img-fluid mx-auto d-block">
                                    <div class="work_overlay">
                                        <h4 class="mb-0">${description}</h4>
                                        <h6 class="mb-0">${name}</h6>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                           
                            }
                            $('#post').empty();
                            $('#post').append(bodydata);
                        }

                    })
                })
                $('#wordpress').click(function(e){
                    e.preventDefault();
                    // var elementId = $('#wordpress').attr('id');
                    var url = $(this).attr('href');
                    var bodydata = '';
                   
                    $.ajax({
                        url:url,
                        method:"GET",
                        dataType:"json",
                        success:function(response){
                            // console.log(response)
                            for(var i = 0; i < response.length; i++){
                                var id = response[i].id;
                                var name = response[i].name;
                                var description = response[i].description;
                                var image = response[i].image;
                                bodydata +=`<div class="col-lg-4 vue node mb-4" >
                                <div class="work_img_box rounded" >
                                <a class="img-zoom" href="/assets/uploads/${image}"></a>
                                <div class="work_images">
                                    <img src="/assets/uploads/${image}" alt="image" class="img-fluid mx-auto d-block">
                                    <div class="work_overlay">
                                        <h4 class="mb-0">${description}</h4>
                                        <h6 class="mb-0">${name}</h6>
                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>`;
                           
                            }
                            $('#post').empty();
                            $('#post').append(bodydata);
                            // console.log(bodydata)
                        }

                    })
                })
                
           })
       </script>
       
            
       
    </body>
</html>
