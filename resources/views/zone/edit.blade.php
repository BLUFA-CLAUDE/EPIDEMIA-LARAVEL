@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold text-primary">Ajouter une zone</h2>
            <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
        </div>
        <div class="card-body">
            @if(isset($confirmation))
                    @if($confirmation==1)
                        <div class="alert alert-success">Zone ajouté avec success</div>
                    @else
                        <div class="alert alert-danger">Zone non ajouté</div>
                    @endif
            @endif
            <form method="POST" action="{{ route('updatezone')}}" >
            @csrf
                <div class="form-group ">
                	<label class="control-label">ID</label>
                    <input type="text" readonly="true" name="id" class="form-control" value="{{$zone->id}}"  >
                </div>
                <div class="form-group ">
                	<label class="control-label">Nom</label>
                    <input type="text" name="nom" class="form-control" value="{{$zone->nom}}" >
                </div>
                <div class="form-group ">
                	<label class="control-label">Choisir un pays</label>
                    <select name="pays_id" class="form-control">
                    
                        <option value="{{ $zone->Pays->id }}">{{ $zone->Pays->nom }}</option>
                  
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer"/>
                <a class="btn btn-danger" href="{{ route('getAllzone')}}">Annuler</a>
            </form>
        </div>
    </div>
</div>
@endsection
