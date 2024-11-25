@extends('layouts.default')

@section('contenu')
<div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
            <h3>Modifier le rôle</h3>
            <form action="{{ route('roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Champ ID (lecture seule) -->
                <div class="form-group">
                    <label for="id">ID du rôle</label>
                    <input type="text" class="form-control" id="id" name="id" 
                           value="{{ $role->id }}" readonly>
                </div>
                
                <!-- Champ pour modifier le libellé du rôle -->
                <div class="form-group">
                    <label for="label">Libellé du rôle</label>
                    <input type="text" class="form-control" id="label" name="label"
                           value="{{ old('label', $role->label) }}" required>
                </div>

                <!-- Bouton de soumission -->
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
             </div>
        </div>
    </div>
@stop

@section('pied_page')
     <p>Pied de page de la page d'Accueil</p>
@stop