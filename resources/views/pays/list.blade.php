@extends('acceuil')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Liste des pays</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Utilisateur</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_pays as $pays)
                                <tr>
                                    <td>{{$pays->id}}</td>
                                    <td>{{$pays->nom }}</td>
                                    <td>{{$pays->User->name }}</td>
                                    <td>
                                        <a class="btn btn-warning waves-effect waves-light" href="{{ route('getpays', ['id'=>$pays->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger waves-effect waves-light" href="{{ route('deletepays', ['id'=>$pays->id])}}" onclick="return confirm('Voulez-vous Supprimez ?');">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                        </table>
                    {{ $list_pays->links() }}
                </div>
            </div>
        </div>
</div>
@endsection
