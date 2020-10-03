<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}" crossorigin="anonymous"></script>
    </head>
    <body >
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Connexion</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                    
                                            <div class="form-group">
                                                <label for="email" class="small mb-1">{{ __('Adresse E-Mail') }}</label>
                                               
                                                <input id="inputEmailAddress" type="email" class="form-control
                                                 @error('email') is-invalid @enderror py-4" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Entrer votre email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="small mb-1">{{ __('Mot de passe') }}</label>
                                                
                                                <input id="inputPassword" type="password" class="form-control py-4 @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Mot de passe">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }} />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">{{ __('Se souvenir de moi') }}</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               
                                                @if (Route::has('password.request'))
                                                <a class="small" href="{{ route('password.request') }}">
                                                    {{ __('Avez-vous oublié votre mot de passe?') }}
                                                </a>
                                                @endif

                                                <button type="submit" class="btn btn-primary" > {{ __('Connexion') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{route('register')}}">{{__('Besoin d\'un compte ? Inscrivez-vous !')}}</a></div>
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
                            <div class="text-muted">Copyright &copy; Christian portfolio 2020</div>
                            <div>
                                <a href="#">Politique de confidentialité</a>
                                &middot;
                                <a href="#">Conditions &amp;  générales</a>
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
