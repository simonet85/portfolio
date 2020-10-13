@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Categorie</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Modifier la catégorie</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez ajouter des catégorie , vos projets récents et images à votre portofolio
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Modifier catégorie
            </div>
            
            <div class="card-body">
                
                {{-- @include('inc.messages') --}}

            <form class="was-validated" action="{{route('categories.update',['category'=>$category->id])}}" method="POST" enctype="multipart/form-data" id="upload_form">
              @csrf
              @method('PUT')
                <div class="form-group">
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le titre</small>
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
