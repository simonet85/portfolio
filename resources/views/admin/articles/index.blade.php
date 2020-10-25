@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Articles</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">voir les articles</li>
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
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Images</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->name}}</td>
                                <td>{{$article->description}}</td>
                                <td>
                                    <img src="{{ url('assets/uploads').'/'. $article->image }}" alt="{{ $article->name }}"
                                    class="img-thumbnail img-responsive" style="width: 70px; height:50px;"> 
                                </td>
                                <td>
                                    {{-- {{link_to_route('articles.show', '',$article->id, ['class'=>''])}} --}}
                                    <a href="{{route('articles.show',['article'=>$article->id])}}" class="btn btn-primary" data-toggle="tooltip modal" data-placement="top" title="voir" >
                                        <i class="fas fa-eye"  aria-hidden="true" ></i>
                                    </a>

                                    <a href="{{route('articles.edit', ['article'=>$article->id])}}" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="modifier" >
                                        <i class="fas fa-pencil-alt " aria-hidden="true" ></i>
                                    </a>

                                    <a  href="{{route('articles.destroy', ['article'=>$article->id])}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="supprimer" onclick=" event.preventDefault(); 
                                    document.getElementById('form-delete').submit(); 
                                    return confirm('Do you want to delete');"> 
                                        <i class="fas fa-trash-alt"  aria-hiden="true"></i>
                                    </a> 

                                </td>
                              
                                <form id="form-delete" method="POST" action="{{route('articles.destroy', ['article'=>$article->id])}}">
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
