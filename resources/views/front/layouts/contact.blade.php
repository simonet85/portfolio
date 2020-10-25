<section class="section_all bg-light" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3 class="font-weight-bold">Contactez-moi</h3>
                    <div class="vr_line mx-auto d-block"></div>
                    <p class="sec_subtitle mx-auto text-muted pt-2">Prenez contact avec moi pour tout vos projets de conception de sites ou d'applications web.</p>
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
                            <h6 class="font-weight-bold">Adresse</h6>
                            <p class="text-muted mb-0">07 Chemin des Prunais <br>Villiers-sur-marne 94350</p>
                        </div>
                    </div>
                    <div class="contact_details_content bg-white p-3 mt-3">
                        <div class="contact_icon float-left  pull-left">
                            <i class="pe-7s-mail-open text_custom mr-3"></i>
                        </div>
                        <div class="contact_detail">
                            <h6 class="font-weight-bold">Mail</h6>
                            <p class="text-muted mb-0">christian.85@live.fr</p>
                        </div>
                    </div>
                    <div class="contact_details_content bg-white p-3 mt-3">
                        <div class="contact_icon float-left  pull-left">
                            <i class="pe-7s-phone text_custom mr-3"></i>
                        </div>
                        <div class="contact_detail">
                            <h6 class="font-weight-bold">Appel</h6>
                            <p class="text-muted mb-0">+33 07 52 45 99 75</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="hire-form was-validated" method="POST" action="{{route('contact.store')}}">
                    @csrf
                    <div class="form-group ">
                        <input type="text" class="form-control is-invalid" id="fname" name="name" placeholder="Prénom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control is-invalid" id="semail" 
                        name="email"  placeholder="johndoe@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control is-invalid" id="mnumber" placeholder="Votre projet" name="projet" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                          <textarea class="form-control is-invalid" name="message" id="cname" placeholder="Votre Message" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control is-invalid" id="mnumber" placeholder="Téléphone" name="numero" required>
                    </div>
                    <div>
                        <input type="submit" name="Envoyer" class="btn btn-custom w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>