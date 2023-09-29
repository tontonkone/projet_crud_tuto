@extends('layouts.master')

@section('content')

<div class="my-3 p-3 bg-body rouded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">
        Liste des étudiants inscrits
    </h3>
    <div class="mt-4">
      @if(session()->has("success"))
      <div class="alert alert-success">
        {{session()->get('success')}}
      </div>

      @endif

      @if ($errors->any())
        <div>
          @foreach ($errors->all() as $error)


          <div class="alert alert-danger">{{$error}}</div>
            
          @endforeach
        </div>
      @endif
      <form method="post" action="{{route('etudiant.ajouter')}}">

        @csrf

        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" name="nom" class="form-control" id="nom" placeholder="prenom">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" class="form-control" id="prenom" placeholder="prenom">
        </div>  
        <div class="form-group">
          <label for="classe">Classe : </label>
          <select class="form-control" name ="classe_id">
            @foreach ($classes as $classe)
              <option value=""></option>
              <option  value="{{$classe->id}}"> {{$classe->libelle}}</option>
              
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <a href="{{route('etudiant')}}" class="btn btn-danger mt-3">Annuler</a>
      </form>
    </div>
</div>
@endsection