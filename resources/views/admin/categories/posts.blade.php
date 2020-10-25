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
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Ajouter une catégorie
            </div>

            @include('inc.messages')
            
            <div class="card-body">
            <form class="was-validated" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                    <input type="text" name="name" id="" class="form-control" placeholder="Ajouter un nom" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Ajouter un nom</small>
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