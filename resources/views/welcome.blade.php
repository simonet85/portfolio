@extends('front.layouts.master')

@section('content')
     <!--Navbar Start-->
     @include('front.layouts.nav')
    <!-- Navbar End -->

    <!--Start Home-->
   @include('front.layouts.home')
    <!--End Home-->

    <!-- Start About -->
    @include('front.layouts.about')
    <!-- End About -->

    <!-- Start Services -->
    <!-- <section class="section bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3> <span class="font-weight-bold">Services</span></h3>
                        <div class="vr_line mx-auto d-block"></div>
                        <p class="sec_subtitle mx-auto text-muted pt-2">Vous recherchez des services supplémentaires ? Nous vous proposons une large gamme de services digitaux et graphiques supplémentaires.</p>
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
                            <h5 class="mb-0 font-weight-bold">Publicité Facebook</h5>
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
                            <h5 class="mb-0 font-weight-bold">SEO / SEA</h5>
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
                            <h5 class="mb-0 font-weight-bold">Conception graphique</h5>
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
                            <h5 class="mb-0 font-weight-bold">Google Analytics</h5>
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
                            <h5 class="mb-0 font-weight-bold">Conception de sites web</h5>
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
                            <h5 class="mb-0 font-weight-bold">Intégration</h5>
                            <p class="text-muted mb-0 mt-2">The standard chunk of Lorem Ipsum used since the is reproduced below for those interested.</p>
                        </div>                            
                        <div class="read_more">
                            <a href="#" class="text-custom"><i class="pe-7s-pen"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Services -->

    <!-- Start Education -->
    @include('front.layouts.education')
    <!-- End Education -->

    <!-- Start Cta -->
    @include('front.layouts.cta')
    <!-- End Cta -->

    <!-- Start Work -->
    @include('front.layouts.work')
    <!-- End Work -->
    @include('front.layouts.blog')
    <!-- End Blog --> 

    <!-- Start Contact -->
    @include('front.layouts.contact')
    <!-- End Contact -->

    <!-- Start Footer -->
   @include('front.layouts.footer')
    <!-- End Footer -->

    <!-- Back to top -->
    <a href="#" class="back_top" style="display: inline;"> <i class="pe-7s-up-arrow"> </i> </a>
@endsection