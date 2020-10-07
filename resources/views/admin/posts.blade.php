@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Articles</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">articles</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez ajouter des articles , vos projets récents et images à votre portofolio
                <a target="_blank" href="#">visitez votre portofolio</a>
                .
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Ajouter un article
            </div>
            <div class="card-body">
                <form class="was-validated">
                    <div class="form-group">
                      <input type="text" name="" id="" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                      <small class="invalid-feedback" >Help text</small>
                    </div>
                    <div class="form-group">
                      <select class="custom-select" required>
                        <option value="">Choisissez un option</option>
                        <option value="1">Conception Web</option>
                        <option value="1">Intégration Web</option>
                        <option value="2">Projets Perso</option>
                        <option value="3">Wordpress</option>
                      </select>
                      <div class="invalid-feedback">Choisissez un option</div>
                    </div>
                  <div class="form-group">
                    <textarea class="form-control" name="" id="" rows="3" required placeholder="Décrivez votre projet"></textarea>
                    <div class="invalid-feedback">Décrivez le projet</div>
                  </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" required>
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