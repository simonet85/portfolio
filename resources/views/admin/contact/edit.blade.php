@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Modifier le contact</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez ajouter des contact , vos projets récents et images à votre portofolio
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Modifier le Message
            </div>
            
            <div class="card-body">
                
                {{-- @include('inc.messages') --}}
               
            <form class="was-validated" action="{{route('contact.update',['contact'=>$contact->id])}}" method="POST" enctype="multipart/form-data" id="upload_form">
              @csrf
              @method("PUT")
                <div class="form-group">
                    <input type="text" name="nom" value="{{$contact->nom}}" class="form-control" placeholder="Nom" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le nom</small>
                </div> 

                <div class="form-group">
                    <input type="text" name="projet" value="{{$contact->projet}}" class="form-control" placeholder="Projet" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le projet</small>
                </div> 

                <div class="form-group">
                    <input type="text" name="email" value="{{$contact->email}}" class="form-control" placeholder="Email" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le mail</small>
                </div> 

                <div class="form-group">
                    <input type="text" name="numero" value="{{$contact->numero}}" class="form-control" placeholder="Numero (optionnel)" aria-describedby="helpId" >
                    <small class="invalid-feedback" >Modifier la numero</small>
                </div>
                <div class="form-group">
                    <textarea id="summary-ckeditor" class="form-control" name="message" id="" rows="3" placeholder="Message" aria-describedby="helpId" required>
                        {{$contact->message}}
                    </textarea>
                    <small class="invalid-feedback" >Modifier la message</small>
                </div>
               
                <div class="form-group">
                </div>
                    <div class="form-group mt-2">
                        <button type="sumit" class="btn btn-dark">Mis à jour</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</main>
 @endsection
