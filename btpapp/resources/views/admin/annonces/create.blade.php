@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Créer une nouvelle annonce</h1>

        {{-- Messages d'erreur --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulaire --}}
        <form action="{{ route('admin.annonces.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Titre --}}
            <div class="form-group mb-3">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
            </div>

            {{-- Introduction --}}
            <div class="form-group mb-3">
                <label for="introduction">Introduction</label>
                <textarea name="introduction" id="introduction" class="form-control" rows="3" required>{{ old('introduction') }}</textarea>
            </div>

            {{-- Détails --}}
            <div class="form-group mb-3">
                <label for="details">Détails</label>
                <textarea name="details" id="details" class="form-control" rows="6" required>{{ old('details') }}</textarea>
            </div>

            {{-- Photos individuelles --}}
            <div class="mb-3">
                <h4>Photos de l'annonce</h4>

                {{-- Photo 1 (Obligatoire) --}}
                <div class="form-group mb-3">
                    <label for="photo_1">Photo principale (Obligatoire)</label>
                    <input type="file" name="photo_1" id="photo_1" class="form-control" accept="image/*" required>
                    <small class="text-muted">Formats autorisés : JPG, JPEG, PNG. Max : 2Mo.</small>
                    @error('photo_1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Photo 2 (Optionnelle) --}}
                <div class="form-group mb-3">
                    <label for="photo_2">Photo 2 (Optionnel)</label>
                    <input type="file" name="photo_2" id="photo_2" class="form-control" accept="image/*">
                    <small class="text-muted">Formats autorisés : JPG, JPEG, PNG. Max : 2Mo.</small>
                    @error('photo_2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Photo 3 (Optionnelle) --}}
                <div class="form-group mb-3">
                    <label for="photo_3">Photo 3 (Optionnel)</label>
                    <input type="file" name="photo_3" id="photo_3" class="form-control" accept="image/*">
                    <small class="text-muted">Formats autorisés : JPG, JPEG, PNG. Max : 2Mo.</small>
                    @error('photo_3')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Photo 4 (Optionnelle) --}}
                <div class="form-group mb-3">
                    <label for="photo_4">Photo 4 (Optionnel)</label>
                    <input type="file" name="photo_4" id="photo_4" class="form-control" accept="image/*">
                    <small class="text-muted">Formats autorisés : JPG, JPEG, PNG. Max : 2Mo.</small>
                    @error('photo_4')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            {{-- Bouton --}}
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enregistrer l’annonce</button>
                <a href="{{ route('admin.annonces.index') }}" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </div>
@endsection

{{-- Pas besoin de section scripts ici car pas de JS complexe nécessaire pour cette approche --}}