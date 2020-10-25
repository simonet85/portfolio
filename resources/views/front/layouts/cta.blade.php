<section class="section bg-cta-img">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="font-weight-normal text-white">Je suis disponible pour des Freelances.</h1>

                    <div class="mt-4 pt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-custom btn-rounded" data-toggle="modal" data-target="#exampleModalCenter"> Engagez-moi !
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mb-0 font-weight-bold" id="exampleModalLongTitle">Evoyez-moi votre projet & Informations.</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>