@extends('base')
@section('content')

<a href="liste-formations">👉Ici pour la liste des formations</a>
<div class="text-center  mt-4 col-md-5 offset-3  fw:bold"
              style="padding: 10px;padding-top: 10px;border-radius:5px;font-weight:bold">LISTE DES APPRENANTS      
          </div>
<div class="container  mt-4">
        <table class="table table-striped table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">prenom</th>
        <th scope="col">nom</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($liste as $apprenant)

    <tr>
        <th scope="row">{{$apprenant->id}}</th>
        <td>{{$apprenant->prenom}}</td>
        <td>{{$apprenant->nom}}</td>
        <td>{{$apprenant->email}}</td>
        <td class="text-center">
        <button type="button" class="btn btn-warning " data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">Modifier</button>      
        <button type="button" class="btn btn-danger " data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">Supprimer</button>      

        </td>
        </tr>
        @endforeach 
    </tbody>
    </table>
</div>

@endsection


