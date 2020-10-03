<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Christian - Admin</title>
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}" crossorigin="anonymous"></script>
    </head>
    <body >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ __('Inscrption') }}</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">{{ __('Nom') }}</label>

                                                        <input class="form-control py-4  @error('name') is-invalid @enderror"        name="name" value="{{ old('name') }}" autocomplete="name"  id="inputFirstName" type="text" placeholder="Entrer votre nom" autofocus/>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">{{ __('Adresse E-Mail') }}</label>

                                                        <input  class="form-control py-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" id="inputLastName" type="text" placeholder="Entrer votre Email" />

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">{{ __('Mot de passe') }}</label>

                                                        <input class="form-control @error('password') is-invalid @enderror  py-4" name="password" autocomplete="new-password" id="inputPassword" type="password" placeholder="Mot de passe" />

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">{{ __('Confirmer le Mot de passe') }}</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirmer le mot de passe" name="password_confirmation" autocomplete="new-password"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary btn-block" >
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="{{route('login')}}">
                                                {{__('Avez-vous un compte ? Allez à la page de connexion')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{url('https://code.jquery.com/jquery-3.5.1.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{asset('admin/js/scripts.js')}}"></script>
    </body>
</html>
