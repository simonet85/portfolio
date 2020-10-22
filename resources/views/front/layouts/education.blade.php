<section class="section" id="resume">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3> <span class="font-weight-bold">Education et expérience</span></h3>
                    <div class="vr_line mx-auto d-block"></div>
                    <p class="sec_subtitle mx-auto text-muted pt-2">Je crois beaucoup à la chance, et plus je travaille dur, plus j'en ai. </p>
                </div>
            </div>
        </div>
        <div class="row mt-3 pt-3 vertical-content">
            <div class="col-lg-6">
                <div class="futures_boxes mt-3">
                    <h3 class="font-weight-bold">Expériences Professionnelles</h3>
                   {{-- @foreach($experiences as $experience) --}}
                    <div class="futures_icon pt-2">
                        <p><span>Année</span><b> 2019 - 2020</b></p>
                        <p class="font-weight-bold"><span><i class="mdi mdi-arrow-right "></i></span>
                            Développeur Web
                        </p>
                        <p ><span><i class="mdi mdi-arrow-right "></i></span>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. At aspernatur tempora rerum ad alias, facere laboriosam vel provident fuga dignissimos nostrum voluptatum quos delectus consequuntur, earum natus consequatur iure officiis.
                        </p>
                        <p ><span><i class="mdi mdi-arrow-right "></i></span>Php -Laravel</p>
                        {{-- <p><span>Année</span><b> 2018 - 2019</b></p>
                        <p class="font-weight-bold"><span><i class="mdi mdi-arrow-right "></i></span>Développeur Fullstack - Markegest </p>
                        <p ><span><i class="mdi mdi-arrow-right "></i></span>Conception et développement de site  Web de commerce électronique pour le commerce de viande de volaille et de boucherie.
                        </p>
                        <p ><span><i class="mdi mdi-arrow-right "></i></span>Stack Technologique: PHP/Laravel - Mysql </p> --}}
                    </div>
                    {{-- @endforeach --}}
                    <div class="read_more_aero">
                        <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pt-2">
                    <img src="{{url('front/img/img2.png')}}"  class="img-fluid mx-auto d-block" alt="">
                </div>
            </div>
        </div>
        <h3 class="font-weight-bold text-rigth">Education</h3>

        <div class="row mt-4 pt-4 vertical-content">

            <div class="col-lg-6">
               
                <div class="pt-2">
                    <img src="{{url('front/img/img1.png')}}" class="img-fluid mx-auto d-block" alt="">
                </div>
            </div>
           
            <div class="col-lg-6">
                {{-- @foreach($educations as $education) --}}
                <div class="futures_boxes mt-3">
                    <h3 class="font-weight-bold">Intech _ france</h3>
                    <div class="futures_icon pt-2">
                        <p><span>Année</span><b> 2019 - 2020</b></p>
                        <p ><span><i class="mdi mdi-arrow-right "></i></span>
                            Ingenierie Logiciel
                        </p>
                        <p class="text-muted mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aliquam itaque porro nihil aut, enim blanditiis aliquid assumenda est laudantium nobis esse voluptatum illum aperiam omnis. Molestiae ex aperiam officia.
                        </p>
                    </div>
                    <div class="read_more_aero">
                        <a href="#" class="text-custom"><i class="mdi mdi-arrow-right"></i></a>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
           
        </div>
       
    </div>
</section>