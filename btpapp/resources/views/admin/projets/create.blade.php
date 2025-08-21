@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Créer un nouveau projet</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Titre --}}
            <div class="form-group mb-3">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
            </div>

            {{-- Description --}}
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            </div>

            {{-- Catégorie --}}
            <div class="form-group mb-3">
                <label for="categorie">Catégorie</label>
                <select name="categorie" id="categorie" class="form-control" required>
                    <option value="commercial" {{ old('categorie') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                    <option value="residential" {{ old('categorie') == 'residential' ? 'selected' : '' }}>Résidentiel</option>
                    <option value="healthcare" {{ old('categorie') == 'healthcare' ? 'selected' : '' }}>Santé</option>
                </select>
            </div>

            {{-- Lieu --}}
            <div class="form-group mb-3">
                <label for="lieu">Lieu</label>
                <input type="text" name="lieu" id="lieu" class="form-control" value="{{ old('lieu') }}">
            </div>

            {{-- Image principale --}}
            <div class="form-group mb-3">
                <label for="image_principale">Image principale</label>
                <input type="file" name="image_principale" id="image_principale" class="form-control" accept="image/*" required>
            </div>

            {{-- Galerie d'images (pour plusieurs images) --}}
            <div class="form-group mb-3">
                <label for="galerie_images">Galerie d'images (sélection multiple)</label>
                <input type="file" name="galerie_images[]" id="galerie_images" class="form-control" multiple accept="image/*">
            </div>

            {{-- Détails --}}
            <div class="form-group mb-3">
                <label for="details">Détails</label>
                <textarea name="details" id="details" class="form-control" rows="6">{{ old('details') }}</textarea>
            </div>

            {{-- Dates --}}
            <div class="row">
                <div class="col-md-6 form-group mb-3">
                    <label for="date_debut">Date de début</label>
                    <input type="date" name="date_debut" id="date_debut" class="form-control" value="{{ old('date_debut') }}">
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="date_fin">Date de fin</label>
                    <input type="date" name="date_fin" id="date_fin" class="form-control" value="{{ old('date_fin') }}">
                </div>
            </div>

            {{-- Statut --}}
            <div class="form-group mb-3">
                <label for="statut">Statut</label>
                <select name="statut" id="statut" class="form-control" required>
                    <option value="en_cours" {{ old('statut') == 'en_cours' ? 'selected' : '' }}>En cours</option>
                    <option value="termine" {{ old('statut') == 'termine' ? 'selected' : '' }}>Terminé</option>
                    <option value="suspendu" {{ old('statut') == 'suspendu' ? 'selected' : '' }}>Suspendu</option>
                </select>
            </div>

            {{-- Budget --}}
            <div class="form-group mb-3">
                <label for="budget">Budget ($)</label>
                <input type="number" name="budget" id="budget" class="form-control" step="0.01" value="{{ old('budget') }}">
            </div>

            {{-- Client --}}
            <div class="form-group mb-3">
                <label for="client">Client</label>
                <input type="text" name="client" id="client" class="form-control" value="{{ old('client') }}">
            </div>

            {{-- Featured --}}
            <div class="form-check mb-3">
                <input type="checkbox" name="featured" id="featured" class="form-check-input" value="1" {{ old('featured') ? 'checked' : '' }}>
                <label class="form-check-label" for="featured">Projet mis en avant</label>
            </div>

            {{-- Actif --}}
            <div class="form-check mb-3">
                <input type="checkbox" name="actif" id="actif" class="form-check-input" value="1" {{ old('actif', true) ? 'checked' : '' }}>
                <label class="form-check-label" for="actif">Projet actif</label>
            </div>

            {{-- Bouton --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Créer le projet</button>
                <a href="{{ route('admin.projets.index') }}" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </div>
@endsection
