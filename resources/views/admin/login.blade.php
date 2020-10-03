@extends('front.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Connection</h3></div>
                <div class="card-body">  
                    @include('inc.messages')
                    <form action="{{route('login')}}" method="POST" id="logForm">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-2" id="inputEmailAddress" name="email" type="email" placeholder="adresse email" value="{{old('name')}}" />
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif 
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Mot de passe</label>
                            <input class="form-control py-2" id="inputPassword" type="password" name="password" placeholder="Mot de passe" />
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                <label class="custom-control-label" for="rememberPasswordCheck">Se souvenir de moi</label>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="#">Avez vous oublié votre mot de passe?</a>
                            <button class="btn btn-primary btn-sm" type="submit">Connexion</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{url('register')}}">Besoin d'un nouveau compte? S'inscrire ici!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection
              