@extends('acceuil')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Ajouter un point de surveillance</h2>
            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
        </div>
        <div class="card-body">
            @if(isset($confirmation))
                    @if($confirmation==1)
                        <div class="alert alert-success">Point Modifié avec success</div>
                    @else
                        <div class="alert alert-danger">Point non Modifié</div>
                    @endif
            @endif
            <form method="POST" action="{{ route('updateps')}}" >
            @csrf
                <div class="form-group ">
                	<label class="control-label">ID</label>
                    <input type="text" readonly="true" name="id" class="form-control" value="{{$ps->id}}" >
                </div>
                <div class="form-group ">
                	<label class="control-label">Code</label>
                    <input type="text" name="code" class="form-control" value="{{$ps->code}}" >
                </div>
                <div class="form-group ">
                	<label class="control-label">Coordonnées</label>
                    <input type="text" name="cordonnees" class="form-control" value="{{$ps->cordonnees}}" >
                </div>
                <div class="form-group ">
                	<label class="control-label">Choisir une zone</label>
                    <select name="zone_id" class="form-control"  >
                        <option value="{{ $ps->Zone->id }}">{{ $ps->Zone->nom }}</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer"/>
                <a class="btn btn-danger" href="{{ route('getAllps')}}">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection
