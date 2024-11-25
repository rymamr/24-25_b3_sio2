@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
        <div class="row">
            @foreach ($roles as $role)
                <div class="col-sm">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $role->id }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $role->label }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('roles.edit', $role->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('roles.show', $role->id) }}"
                                        class="btn btn-primary btn-sm">Show</a>    
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop

@section('pied_page')
     <p>Pied de page de la page d'Accueil</p>
@stop