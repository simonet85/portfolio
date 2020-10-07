@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Articles</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Voir</li>
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
                Voir l'article
            </div>
            
            <div class="card-body">
    <div class="content table-responsive table-full-width">
        <table class="table table-striped">
        
            <tbody>

                <tr>
                    <th>ID :</th>
                <td>{{$article->id}}</td>
                </tr>

                <tr>
                    <th>Titre :</th>
                    <td>{{$article->name}}</td>
                </tr>

                <tr>
                    <th>Description :</th>
                    <td>{{$article->description}}</td>
                </tr>

                <tr>
                    <th>Posté :</th>
                    <td>{{$article->created_at->diffForHumans()}}</td>
                </tr>

                <tr>
                    <th>Mis à jour :</th>
                    <td>{{$article->updated_at->diffForHumans()}}</td>
                </tr>

                <tr>
                    <th>Image :</th>
                <td><img src="{{url('assets/uploads').'/'.$article->image}}" alt="{{$article->name}}" class="img-thumbnail" style="width: 150px;"></td>
                </tr>

            </tbody>
            
        </table>
    </div>
</div>

</main>
@endsection