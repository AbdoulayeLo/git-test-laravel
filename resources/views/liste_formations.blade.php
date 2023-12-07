@extends ('base')
    @section('content')

    <a href="liste-apprenants">👉 Cliquez ici pour voir la liste des Apprenants</a>
<div class="text-center  mt-4 col-md-5 offset-3  fw:bold"
              style="padding: 10px;padding-top: 10px;border-radius:5px;font-weight:bold">LISTE DES FORMATIONS      
          </div>
    <div class="container  mt-4">
        <table class="table table-striped table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom Formation</th>
        <th scope="col">Departement</th>
        <th scope="col">Date debut</th>
        <th scope="col">Date fin</th>
        <th scope="col" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($forma as $form)

    <tr>
        <th scope="row">{{$form->id}}</th>
        <td>{{$form->NomFormation}}</td>
        <td>{{$form->departement}}</td>
        <td>{{$form->dateDebut}}</td>
        <td>{{$form->dateFin}}</td>
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