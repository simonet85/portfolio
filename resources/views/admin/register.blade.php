@extends('front.layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-1">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Créer un compte</h3></div>
                <div class="card-body">
                    @include('inc.messages')
                    <form action="{{route('register')}}" method="POST" id="regForm">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label class="small mb-1" for="inputFirstName">Nom</label>
                            <input class="form-control py-2" id="inputFirstName" type="text" name="name" placeholder="Entrer votre nom" />
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif  
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-2" id="inputEmailAddress" type="email" aria-describedby="emailHelp" name="email" placeholder="Adresse email " />
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
                        <div class="form-group mt-4 mb-0">
                            <button class="btn btn-primary btn-block" type="submit">Créer Compte</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{route('login')}}">Vous avez un compte? Allez y connecter vous.</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
