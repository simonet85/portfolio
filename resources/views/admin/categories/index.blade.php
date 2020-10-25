@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Categories</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">voir les Categories</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez modifier, supprimer des articles et vos projets récents de votre portofolio.
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>Nom</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titre</th>
                               
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                
                                <td>
                                  
                                <a href="{{route('categories.edit', ['category'=>$category->id])}}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="modifier">
                                    <i class="fas fa-pencil-alt " aria-hidden="true"  ></i>
                                </a>

                                <a href="{{route('categories.destroy',['category'=>$category->id])}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer" onclick=" event.preventDefault(); document.getElementById('form-delete').submit(); return confirm('voulez-vous supprimer?');">
                                     <i class="fas fa-trash-alt"  aria-hiden="true"></i>
                                </a> 
                                </td>
                                <form id="form-delete" method="POST" action="{{route('categories.destroy',['category'=>$category->id])}}">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
