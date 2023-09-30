@extends('layouts.master')

@section('content')

<div class="my-3 p-3 bg-body rouded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">
        Edition d'un étudiant
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
      <form method="post" action="{{route('etudiant.update', ['etudiant'=>$etudiant->id])}}" >

        @csrf

        <input type="hidden" name="_method" value="put">

        <div class="form-group">
          <label for="nom">Nom :</label>
          <input type="text" name="nom" class="form-control" id="nom" value="{{$etudiant->nom}}">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom :</label>
          <input type="text" name="prenom" class="form-control" id="prenom"  value="{{$etudiant->nom}}">
        </div>  
        <div class="form-group">
          <label for="classe">Classe : </label>
          <select class="form-control" name ="classe_id">
            @foreach ($classes as $classe)
              <option value=""></option>
              @if($classe->id == $etudiant->classe_id)
                <option  value="{{$classe->id}}" selected> {{$classe->libelle}}</option>
              @else
                <option  value="{{$classe->id}}"> {{$classe->libelle}}</option>
              @endif
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <a href="{{route('etudiant')}}" class="btn btn-danger mt-3">Annuler</a>
      </form>
    </div>
</div>
@endsection