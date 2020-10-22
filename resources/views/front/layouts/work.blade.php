
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
               
                <div class="row mt-3" >
                    <div class="col-lg-12">
                        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto" style="width: 50%">  --}}
                            <ul class=" text-center list-unstyled list-inline mb-0 text-capitlize work_menu" id="menu-filter" >
                                <li class="list-inline-item ">
                                    <a href="{{route('work')}}"
                                        class="active " data-filter="*" id="all" 
                                        >
                                    All</a></li>
                                <li class="list-inline-item ">
                                    <a class="" href="{{route('articlepost.show',['articlepost'=>'seo'])}}" data-filter=".seo" id="seo" >Seo</a>
                                </li>
                                <li class="list-inline-item ">
                                    <a id="webdesign" class="" href="{{route('articlepost.show',['articlepost'=>'webdesign'])}}" data-filter=".webdesign">Webdesign</a>
                                </li>
                                
                                <li class="list-inline-item ">
                                    <a id="project" class="" href="{{route('articlepost.show',['articlepost'=>'work'])}}" data-filter=".work">Work</a></li>

                                <li class="list-inline-item ">
                                    <a id="wordpress" class="" href="{{route('articlepost.show',['articlepost'=>'wordpress'])}}" data-filter=".wordpress">Wordpress</a>
                                </li>
                            </ul>
                        {{-- </nav> --}}
                    </div>
                </div>
                <div class="row mt-3"  id="post"></div>
                {{-- <div class="row mt-3 work-filter " > --}}
                  
                     {{--  <div class="col-lg-4 work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work-3.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work-3.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Projets personnels</h4>
                                    <h6>Laravel - Mysql</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 laravel vue">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work-4.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work-4.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Fullstack Laravel</h4>
                                    <h6>Vue -Laravel</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 laravel work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work-6.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work-6.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Projets personnels</h4>
                                    <h6>Intégration web -html -css</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 node work">
                        <div class="work_img_box rounded">
                            <a class="img-zoom" href="{{asset('assets/uploads/work-6.jpg')}}"></a>
                            <div class="work_images">
                                <img src="{{asset('assets/uploads/work-6.jpg')}}" alt="image" class="img-fluid mx-auto d-block">
                                <div class="work_overlay">
                                    <h4>Fullstack application using Node - MongoDB</h4>
                                    <h6>Node - MongoDB</h6>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                   
                {{-- </div> --}}
              
            </div>
        </section>
        <!-- End Work -->
