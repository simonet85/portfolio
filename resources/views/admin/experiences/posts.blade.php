@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Expériences</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Expériences</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez ajouter des Expériences , vos projets récents et images à votre portofolio
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Ajouter une Expérience
            </div>

            {{-- @include('inc.messages') --}}
            
            <div class="card-body">
            <form class="was-validated" action="{{route('experiences.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              
                    <div class="form-group">
                        <input type="text" name="year" id="" class="form-control" placeholder="Ajouter une année" aria-describedby="helpId" required>
                        <small class="invalid-feedback" >Ajouter une année</small>
                    </div>

                    <div class="form-group">
                      <input type="text" name="titre" id="" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                      <small class="invalid-feedback" >Ajouter un titre</small>
                    </div>

                      <div class="form-group">
                        <input type="text" name="stack" id="" class="form-control" placeholder="Stack" aria-describedby="helpId" required>
                        <small class="invalid-feedback" >Ajouter une stack</small>
                      </div>
                   
                  <div class="form-group">
                    <textarea class="form-control" name="description" id="" rows="3" required placeholder="Décrivez les taches accomplies"></textarea>
                    <div class="invalid-feedback">Décrivez les taches</div>
                  </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagefile" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choisir un fichier...</label>
                      <div class="invalid-feedback">Choisissez un fichier</div>
                    </div>
                    <div class="form-group mt-2">
                        <button type="sumit" class="btn btn-dark">Soumettre</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</main>
 @endsection