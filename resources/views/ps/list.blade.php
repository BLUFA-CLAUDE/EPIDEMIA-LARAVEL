@extends('acceuil')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Liste des Points</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Coordonnées</th>
                                <th>Zone</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_ps as $ps)
                                <tr>
                                    <td>{{$ps->id}}</td>
                                    <td>{{$ps->code }}</td>
                                    <td>{{$ps->cordonnees }}</td>
                                    <td>{{$ps->Zone->nom }}</td>
                                    <td>{{$ps->User->name }}</td>
                                    <td>
                                        <a class="btn btn-warning waves-effect waves-light" href="{{ route('getps', ['id'=>$ps->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger waves-effect waves-light" href="{{ route('deleteps', ['id'=>$ps->id])}}" onclick="return confirm('Voulez-vous Supprimez ?');">Supprimer</a>
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
