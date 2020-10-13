@extends('admin.layouts.master')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Expérience</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
            <li class="breadcrumb-item active">Modifier l'expérience</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                A partir de cet espace vous pourez ajouter des expérience , vos projets récents et images à votre portofolio
                <a target="_blank" href="#">visitez votre portofolio</a>.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Modifier l'Expérience
            </div>
            
            <div class="card-body">
                
                @include('inc.messages')
               
            <form class="was-validated" action="{{route('experiences.update',['experience'=>$exp->id])}}" method="POST" enctype="multipart/form-data" id="upload_form">
              @csrf
              @method("PUT")
                <div class="form-group">
                    <input type="text" name="year" value="{{$exp->year}}" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le titre</small>
                </div> 

                <div class="form-group">
                    <input type="text" name="tasks" value="{{$exp->tasks}}" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le titre</small>
                </div> 

                <div class="form-group">
                    <input type="text" name="stack" value="{{$exp->stack}}" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
                    <small class="invalid-feedback" >Modifier le titre</small>
                </div> 
               
                  <div class="form-group">
                    <textarea class="form-control" name="description" id="" rows="3" required placeholder="Décrivez votre projet">{{$exp->description}}</textarea>
                    <div class="invalid-feedback">Décrivez le projet</div>
                  </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="validatedCustomFile" name="image_file" required>
                      <label class="custom-file-label" for="validatedCustomFile">Choisir un fichier...</label>
                      <div class="invalid-feedback">Choisissez un fichier</div>
                    </div>
                    <div class="form-group">
                    <label for="article-image">Image</label>
                    {{-- <td><img src="{{url('assets/uploads').'/'.$article->image}}" alt="{{$article->name}}" class="img-thumbnail" style="width: 150px;"></td> --}}
                    <td><span id="uploaded_image" style="width: 150px;"></span></td>
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
