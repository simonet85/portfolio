@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">voir les contact</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez modifier, supprimer des contact et vos projets récents de votre portofolio.
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Contacts
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0" >
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Projets </th>
                                <th>Email</th>
                                <th>Numero</th>
                                <th>Messages</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                       
                        </tfoot>
                        <tbody>
                            @if(count($contacts->all()) > 0)
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{$contact->nom}}</td>
                                    <td>{{$contact->projet}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->numero}}</td>
                                    {{-- <td class="text-left">{{$contact->description}}</td> --}}
                                    <td class="text-left">{{$contact->message}}</td>
                                   
                                    <td >
                                        <a href="{{route('contacts.edit', ['contact'=>$contact->id])}}" class="btn btn-warning btn-sm"  data-toggle="tooltip" data-placement="top" title="modifier"><i class="fas fa-pencil-alt " aria-hidden="true"  ></i></a>
                                    </td>
                                    <td>   
                                        <form action="{{route('contacts.destroy', ['contact'=>$contact->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            
                                            <button onclick="return confirm('Voulez-vous vraiment supprimer?');" type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="supprimer"> <i class="fas fa-trash-alt"  aria-hiden="true"></i></button> 
                        
                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                  
                                    <h1 class="display-3">Vous n'avez pas de contacts .</h1>
                                   
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
