@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Catégories</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">voir les catégories</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez modifier, supprimer des catégories et vos projets récents de votre portofolio.
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Catégories
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="voir"><i class="fas fa-eye"  aria-hidden="true" ></i></button>

                                    <button class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="modifier"><i class="fas fa-pencil-alt " aria-hidden="true"  ></i></button>

                                    <button class="btn btn-danger"  data-toggle="tooltip" data-placement="top" title="supprimer"> <i class="fas fa-trash-alt"  aria-hiden="true"></i></button>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
              