@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Expériences</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">voir les expériences</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez modifier, supprimer des expériences et vos projets récents de votre portofolio.
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Expériences
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>Année</th>
                                <th>Taches </th>
                                <th>Desc.</th>
                                <th>Stack</th>
                                <th>Image</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                       
                        </tfoot>
                        <tbody>
                            @if(count($experiences->all()) > 0)
                                @foreach ($experiences as $experience)
                                <tr>
                                    <td>{{$experience->year}}</td>
                                    <td>{{$experience->tasks}}</td>
                                    <td>{{$experience->description}}</td>
                                    <td>{{$experience->stack}}</td>
                                    <td>
                                        <img src="{{ url('assets/uploads').'/'. $experience->image }}" alt="{{ $experience->name }}"
                                        class="img-thumbnail img-responsive" style="width: 70px; height:50px;"> 
                                    </td>
                                   
                                    <td >
                                        <a href="{{route('experiences.edit', ['experience'=>$experience->id])}}" class="btn btn-warning btn-sm"  data-toggle="tooltip" data-placement="top" title="modifier"><i class="fas fa-pencil-alt " aria-hidden="true"  ></i></a>
                                    </td>
                                    <td>   
                                        <form action="{{route('experiences.destroy', ['experience'=>$experience->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            
                                            <button onclick="return confirm('Voulez-vous vraiment supprimer?');" type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="supprimer"> <i class="fas fa-trash-alt"  aria-hiden="true"></i></button> 
                        
                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                  
                                    <h1 class="display-3">Vous n'avez d'experiences .</h1>
                                   
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
