@extends('layouts.default')

@section('contenu')
<div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $role->title }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $role->body }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pied_page')
     <p>Pied de page de la page d'Accueil</p>
@stop