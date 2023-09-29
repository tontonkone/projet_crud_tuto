@extends("layouts.master")

@section('content')
    <h1> Liste des étudiants</h1>
    <div class="mt-4">
      <div class="d-flex justify-content-end mb-4">
        <a href="{{route('etudiant.create')}}" class="btn btn-primary"> Ajouter un nouvel étudiant</a>
      </div>
    </div>
          @if(session()->has("successDelete"))
      <div class="alert alert-success">
        {{session()->get('successDelete')}}
      </div>

      @endif
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
      <th scope="row">{{$loop->index + 1}}</th>
      <td>{{$etudiant->nom}}</td>
      <td>{{$etudiant->prenom}} </td>
      <td>{{$etudiant->classe->libelle}} </td>
      <td>
        <a href="#" class="btn btn-info">Editer </a>
        <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous supprimer  cet étudiant ?')){
          document.getElementById('form-{{$etudiant->id}}').submit()}" >Supprimer</a>
        <form id="form-{{$etudiant->id}}" action="{{route('etudiant.supprimer', ['etudiant'=>$etudiant->id ])}}" method="POST">
          @csrf
          <input type="hidden" name="_method" id="" value="delete">
        </form>
      </td>
    </tr>
  @endforeach
  </tbody>
  
</table>
{{ $etudiants->links()}}
    </div>
@endsection