@extends('layouts.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Tous les projets</h1>
        <a href="{{ route('admin.projets.create') }}" class="btn btn-primary">Ajouter un projet</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($projets->isEmpty())
        <p>Aucun projet pour le moment.</p>
    @else
        <div class="row">
            @foreach ($projets as $projet)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        @if ($projet->image_principale)
                            <img src="{{ asset('storage/' . $projet->image_principale) }}" class="card-img-top" alt="Image principale du projet" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Pas d'image" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $projet->titre }}</h5>
                            <p class="card-text">{{ Str::limit($projet->description, 100) }}</p>
                            <p><small class="text-muted">Catégorie: {{ $projet->categorie }}</small></p>

                            <div class="mt-auto d-grid gap-2">
                                <a href="{{ route('admin.projets.show', $projet->id) }}" class="btn btn-outline-primary">Voir les détails</a>
                                <a href="{{ route('admin.projets.edit', $projet->id) }}" class="btn btn-outline-warning">Éditer</a>
                                
                                <form action=" {{ route('admin.projets.destroy', $projet->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger w-100">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection