@extends("layouts.master")

@section('content')
    <h1> Liste des étudiants</h1>
    <div class="mt-4">
      <div class="d-flex justify-content-end mb-4">
        <a href="#" class="btn btn-primary"> Ajouter un nouvel étudiant</a>
      </div>
    </div>

    <div>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Classe</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($etudiants as $etudiant )
    <tr>
      <th scope="row">{{$etudiant->id}}</th>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}} </td>
      <td>{{$etudiant->classe->libelle}} </td>
      <td>
        <a href="#" class="btn btn-info">Editer </a>
        <a href="#" class="btn btn-danger">Supprimer</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
@endsection