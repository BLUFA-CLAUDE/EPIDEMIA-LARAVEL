@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Liste des zones</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Pays</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_zones as $zones)
                                <tr>
                                    <td>{{$zones->id}}</td>
                                    <td>{{$zones->nom }}</td>
                                    <td>{{$zones->Pays->nom }}</td>
                                    <td>{{$zones->User->name }}</td>
                                    <td>
                                        <a class="btn btn-warning waves-effect waves-light" href="{{ route('getzone', ['id'=>$zones->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger waves-effect waves-light" href="{{ route('deletezone', ['id'=>$zones->id])}}" onclick="return confirm('Voulez-vous Supprimez ?');">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
</div>
@endsection
