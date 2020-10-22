<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Christian KIMOU | Fullstack Développeur</title>
        <meta name="csrf-token" content="{{csrf_token()}}">
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
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
            <div class="container">
                <!-- LOGO -->
                <a class="logo navbar-brand" href="index-2.html">
                    <img src="{{asset('assets/uploads/logo.png')}}" alt="" class="img-fluid logo-light"> 
                    <img src="{{asset('assets/uploads/logo-dark.png')}}" alt="" class="img-fluid logo-dark">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#resume" class="nav-link">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a href="#work" class="nav-link">Work</a>
                        </li>
                        <li class="nav-item">
                            <a href="#client" class="nav-link">Client</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!--Start Home-->
        <section class="home-bg-color section h-100vh" id="home">
            <div class="bg-overlay"></div>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                    <h1 class="header_title mb-0 mt-3 text-center text-white mx-auto">Creative By Landing Page</h1>
                                    <p class="header_subtitle text-white mx-auto mt-3 mb-0">It is a long established fact that a reader will be distracted by the.</p>
                                    <ul class="mb-0 list-inline text-center skill_home mt-5">
                                        <li class="list-inline-item mr-0">Living In Poland</li>
                                        <li class="list-inline-item mr-0">+78 123 654 78</li>
                                        <li class="list-inline-item mr-0">example@gmail.com</li>
                                    </ul>
                                    <ul class="social_home list-unstyled text-center pt-5">
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-google-plus"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                    </ul>
                                    <div class="header_btn">
                                        <a href="#" class="btn btn-outline-custom btn-rounded mt-4 mr-3">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Home-->

        <!-- Start About -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3><span class="font-weight-bold">About</span> Me</h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 vertical-content">
                    <div class="col-lg-6">
                        <div class="about_content mt-3">
                            <h6 class="mb-3">Hello & Welcome</h6>
                            <h3 class="mb-3 font-weight-bold text-custom">I'M Oskar Deo.</h3>
                            <ul class="mb-0 list-inline about-work">
                                <li class="list-inline-item mr-0 text-muted">UI/UX Designer</li>
                                <li class="list-inline-item mr-0 text-muted">Photographer</li>
                                <li class="list-inline-item mr-0 text-muted">Devloper</li>
                            </ul>
                            <p class="text-muted mt-3">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            <div class="progress-bars skill-custom mt-4">
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">Development</div>
                                    <div class="text-muted float-right">80%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">WordPress</div>
                                    <div class="text-muted float-right">59%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 59%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="clearfix">
                                    <div class="text-dark font-weight-bold float-left">Photoshop</div>
                                    <div class="text-muted float-right">88%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <img src="{{asset('assets/uploads/sign.gif')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img mt-3">
                            <img src="{{asset('assets/uploads/about.jpg')}}" alt="" class="img-fluid mx-auto d-block position-relative about-tween">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- Start Services -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>Our <span class="font-weight-bold">Services</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>01.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>02.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>03.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>04.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>05.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services_boxes bg-white mt-3 rounded p-4">
                            <div class="services_icon text-custom">
                                <h2>06.</h2>
                            </div>
                            <div class="services_content mt-3">
                                <h5 class="mb-0 font-weight-bold">Graphic Design</h5>
                                <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                            </div>                            
                            <div class="read_more">
                                <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services -->

        <!-- Start Education -->
        <section class="section" id="resume">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>Best <span class="font-weight-bold">Education & Experiance</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 pt-3 vertical-content">
                    <div class="col-lg-6">
                        <div class="futures_boxes mt-3">
                            <h3 class="font-weight-bold">Studied At Cambridge University</h3>
                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                            <div class="futures_icon pt-2">
                                <p><span>Start</span><b> 2010-2018</b></p>
                                <p><span><i class="mdi mdi-arrow-right"></i></span> Master In Computer Science.</p>
                                <p><span><i class="mdi mdi-arrow-right"></i></span> Bootstrap Html Css Design.</p>
                                <p><span><i class="mdi mdi-arrow-right"></i></span> Planing & Strategy.</p>
                            </div>
                            <div class="read_more_aero">
                                <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pt-2">
                            <img src="{{asset('assets/uploads/img1.png')}}" class="img-fluid mx-auto d-block" alt="">
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-4 vertical-content">
                    <div class="col-lg-6">
                        <div class="pt-2">
                            <img src="{{asset('assets/uploads/img2.png')}}" class="img-fluid mx-auto d-block" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="futures_boxes mt-3">
                            <h3 class="font-weight-bold">UI/UX Designer</h3>
                            <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                            <div class="futures_icon pt-2">
                                <p><span>Start</span><b> 2010-2018</b></p>
                                <p><span><i class="mdi mdi-arrow-right"></i></i></span> Senior Graphic Designer.</p>
                                <p><span><i class="mdi mdi-arrow-right"></i></i></span> Web Developer.</p>
                                <p><span><i class="mdi mdi-arrow-right"></i></i></span> Freelancer And Themeforest.</p>
                            </div>
                            <div class="read_more_aero">
                                <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Education -->

        <!-- Start Cta -->
        <section class="section bg-cta-img">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="font-weight-normal text-white">I Am Available For Freelancer.</h1>

                            <div class="mt-4 pt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-custom btn-rounded" data-toggle="modal" data-target="#exampleModalCenter">Hire Me!</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title mb-0 font-weight-bold" id="exampleModalLongTitle">I Am Available For Freelancer.</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="hire-form">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="fname" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="semail" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="cname" placeholder="Company Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="mnumber" placeholder="Mobile Name">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-custom w-100">Send Data</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Cta -->

        <!-- Start Work -->
        <section class="section" id="work">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>My Recent<span class="font-weight-bold"> Work</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <ul class="text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter">
                            
                            <li class="list-inline-item">
                                <a  class="active cat" data-filter="*" id="all">Tous</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="seo" class="cat" data-filter=".seo">Seo</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="webdesign" class="cat" data-filter=".webdesign">Webdesign</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="work" class="cat" data-filter=".work">Work</a>
                            </li>
                            <li class="list-inline-item">
                                <a id="wordpress" class="cat" data-filter=".wordpress">Wordpress</a>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="row mt-3 work-filter">
                    <div class="col-lg-4 webdesign wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-1.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-1.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4 class="mb-0">UI Elements, Icons</h4>
                                    <h6 class="mb-0">Studio &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-2.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-2.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations</h4>
                                    <h6>Creative &amp; Art</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-3.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-3.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Media, Icons</h4>
                                    <h6>Open Imagination</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo webdesign">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-4.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-4.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Graphics, UI Elements</h4>
                                    <h6>Locked Steel Gate</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 seo work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-5.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-5.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Illustrations, Graphics</h4>
                                    <h6>Mac Sunglasses</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wordpress">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work/work-6.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work/work-6.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>UI Elements, Media</h4>
                                    <h6>Backpack Contents</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work -->

        <!-- Start Client -->
        <section class="section bg-light" id="client">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3>Our <span class="font-weight-bold">Client's</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <div class="client_boxes mt-3 text-center">
                            <div class="mt-3">
                                <img src="{{asset('assets/uploads/client-1.jpg')}}" alt="" class="img-fluid rounded-circle ml-3">
                            </div>
                            <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                            <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                            <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="client_boxes mt-3 text-center">
                            <div class="mt-3">
                                <img src="{{asset('assets/uploads/client-2.jpg')}}" alt="" class="img-fluid rounded-circle ml-3">
                            </div>
                            <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                            <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                            <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="client_boxes mt-3 text-center">
                            <div class="mt-3">
                                <img src="{{asset('assets/uploads/client-3.jpg')}}" alt="" class="img-fluid rounded-circle ml-3">
                            </div>
                            <h6 class="text-muted font-weight-bold mb-0 mt-3">Laryy Matthews</h6>
                            <h5 class="font-weight-bold p-0 mt-2">CO-FOUNDER AND CTO</h5>
                            <p class="text-muted m-3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid Anim pariatur cliche reprehenderit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client -->

        <!-- Start Great People -->
        <section class="section bg-people">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center text-white">
                            <h3>Trusted By<span class="font-weight-bold"> Great People</span></h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/1.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/2.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/3.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/4.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/5.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="{{asset('assets/uploads/6.png')}}" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Great People -->

        <!-- Start Blog -->
        
        <!-- End Blog --> 

        <!-- Start Contact -->
        <section class="section_all bg-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title text-center">
                            <h3 class="font-weight-bold">Get In Tuch</h3>
                            <div class="vr_line mx-auto d-block"></div>
                            <p class="sec_subtitle mx-auto text-muted pt-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="contact_info_box">
                            <div class="contact_details_content bg-white p-3 mt-3">
                                <div class="contact_icon float-left  pull-left">
                                    <i class="pe-7s-map-marker text_custom mr-3"></i>
                                </div>
                                <div class="contact_detail">
                                    <h6 class="font-weight-bold">Address</h6>
                                    <p class="text-muted mb-0">1286 Willison Street <br>Minneapolis, MN 55415</p>
                                </div>
                            </div>
                            <div class="contact_details_content bg-white p-3 mt-3">
                                <div class="contact_icon float-left  pull-left">
                                    <i class="pe-7s-mail-open text_custom mr-3"></i>
                                </div>
                                <div class="contact_detail">
                                    <h6 class="font-weight-bold">Mail</h6>
                                    <p class="text-muted mb-0">Support@mail.com</p>
                                </div>
                            </div>
                            <div class="contact_details_content bg-white p-3 mt-3">
                                <div class="contact_icon float-left  pull-left">
                                    <i class="pe-7s-phone text_custom mr-3"></i>
                                </div>
                                <div class="contact_detail">
                                    <h6 class="font-weight-bold">Call</h6>
                                    <p class="text-muted mb-0">+386-202-1907, <br>+903-812-9462.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="business_form_custom">
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" id="subject" placeholder="Your Subject..">
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="col">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-custom" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact -->

        <!-- Start Footer -->
        <footer class="footer_detail">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-12">
                        <div class="text-center footer_about">
                            <h3 class="text-white font-weight-bold mb-0">Let's Get Started Oskar</h3>
                            <p class="mx-auto mt-4 mb-0">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="text-center mt-4">
                           <button type="button" class="btn btn-outline-custom btn-rounded" data-toggle="modal" data-target="#exampleModalCenter">Let's Get!</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Important Link</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Return Policy</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Our Pages</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Client</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Support</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Live Chat</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li><a href="#">Press Kit</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="mt-3 text-white text-uppercase">Locations</h6>
                        <ul class="list-unstyled footer_menu_list mt-3">
                            <li><a href="#">Melbourne</a></li>
                            <li><a href="#">London</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#">San Francisco</a></li>
                            <li><a href="#">Ontario</a></li>
                        </ul>
                    </div>
                </div>
                <div class="fot_bor"></div>
                <div class="row pt-3 pb-3">
                    <div class="col-lg-12">
                        <div class="float-left float_none">
                            <p class="copy-rights mb-0"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="float-right float_none">
                            <ul class="list-inline fot_social mb-0">
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="social-icon text-muted"><i class="mdi mdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Back to top -->
        <a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>
            
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
                $('#catId').click(function(e){
                    // e.preventDefault();
                    var elementId = $('#catId').attr('id');

                    $('.cat').on('click', 'a', function() {
                        alert($(this).attr('id'));
                    });

                    alert('ID :'+elementId);

                    // $.ajaxSetup({
                    //     headers:{
                    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    //     }
                    // });
                    // $.ajax({
                    //     url:"{{route('searcharticle')}}",
                    //     data:{elementId:elementId},
                    //     method:"POST",
                    //     success: function(data){
                    //         consol.log(result)
                    //     }

                    // })
                   
                })
                
           })
       </script>
       
            
       
    </body>
</html>
