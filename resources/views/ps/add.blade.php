@extends('layouts.app')

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
                        <div class="alert alert-success">Point ajouté avec success</div>
                    @else
                        <div class="alert alert-danger">Point non ajouté</div>
                    @endif
            @endif
            <form method="POST" action="{{ route('persistps')}}" >
            @csrf
                <div class="form-group ">
                	<label class="control-label">Code</label>
                    <input type="text" name="code" class="form-control"  >
                </div>
                <div class="form-group ">
                	<label class="control-label">Coordonnées</label>
                    <input type="text" name="cordonnees" class="form-control"  >
                </div>
                <div class="form-group ">
                	<label class="control-label">Choisir une zone</label>
                    <select name="zone_id" class="form-control"  >
                        <option value="0">Faites votre choix</option>
                    @foreach($list_zones as $zones)
                        <option value="{{ $zones->id }}">{{ $zones->nom }}</option>
                    @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="enregistrer" value="Enregistrer"/>
                <input type="reset" value="Annuler" class="btn btn-danger "/>
            </form>
        </div>
    </div>
</div>
@endsection
