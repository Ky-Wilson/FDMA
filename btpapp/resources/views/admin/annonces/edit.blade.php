@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Modifier l’annonce</h1>

    {{-- Erreurs --}}
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
    <form action="{{ route('admin.annonces.update', $annonce->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Titre --}}
        <div class="form-group mb-3">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre', $annonce->titre) }}" required>
        </div>

        {{-- Introduction --}}
        <div class="form-group mb-3">
            <label for="introduction">Introduction</label>
            <textarea name="introduction" id="introduction" class="form-control" rows="3" required>{{ old('introduction', $annonce->introduction) }}</textarea>
        </div>

        {{-- Détails --}}
        <div class="form-group mb-3">
            <label for="details">Détails</label>
            <textarea name="details" id="details" class="form-control" rows="6" required>{{ old('details', $annonce->details) }}</textarea>
        </div>

        {{-- Photos --}}
        <div class="mb-4">
            <h4>Photos de l'annonce (1 à 4 max.)</h4>
            <small class="text-muted mb-3 d-block">Remplacez une photo en en sélectionnant une nouvelle.</small>

            @php
                $existingPhotos = is_array($annonce->photos) ? $annonce->photos : json_decode($annonce->photos, true) ?? [];
            @endphp

            @for ($i = 1; $i <= 4; $i++)
                <div class="form-group mb-3 photo-slot">
                    <label for="photo_{{ $i }}">Photo {{ $i }} {{ $i == 1 ? '(Obligatoire)' : '(Optionnel)' }}</label>
                    <div class="row align-items-center">
                        <div class="col-md-3 mb-2">
                            @php
                                $currentPhotoPath = $existingPhotos[$i - 1] ?? null;
                            @endphp
                            @if ($currentPhotoPath)
                                <img src="{{ asset('storage/' . $currentPhotoPath) }}"
                                     class="img-fluid rounded shadow-sm current-image-preview"
                                     alt="Photo actuelle {{ $i }}"
                                     data-slot="{{ $i }}">
                                <p class="text-muted small mt-1">Actuelle</p>
                            @else
                                <div class="no-image-placeholder text-muted text-center border p-3 rounded" 
                                     style="height: 100px; display: flex; align-items: center; justify-content: center;" 
                                     data-slot="{{ $i }}">
                                    Aucune photo
                                </div>
                            @endif
                        </div>
                        <div class="col-md-9">
                            <input type="file" name="photo_{{ $i }}" id="photo_{{ $i }}"
                                   class="form-control photo-input" accept="image/*" data-slot="{{ $i }}"
                                   >
                            <small class="text-muted">Formats autorisés : JPG, JPEG, PNG. Max : 2Mo.</small>
                            <img src="#" class="img-fluid rounded shadow-sm mt-2 new-image-preview"
                                 alt="Nouvelle photo {{ $i }}" style="display: none; max-width: 150px; height: auto;"
                                 data-slot="{{ $i }}">
                            @error('photo_' . $i)
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        {{-- Boutons --}}
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('admin.annonces.index') }}" class="btn btn-secondary">Annuler</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const photoInputs = document.querySelectorAll('.photo-input');

        photoInputs.forEach(input => {
            input.addEventListener('change', function() {
                const slot = this.dataset.slot;
                const newImagePreview = document.querySelector(`.new-image-preview[data-slot="${slot}"]`);
                const currentImagePreview = document.querySelector(`.current-image-preview[data-slot="${slot}"]`);
                const noImagePlaceholder = document.querySelector(`.no-image-placeholder[data-slot="${slot}"]`);

                if (this.files && this.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        newImagePreview.src = e.target.result;
                        newImagePreview.style.display = 'block';
                        if (currentImagePreview) currentImagePreview.style.display = 'none';
                        if (noImagePlaceholder) noImagePlaceholder.style.display = 'none';
                    };

                    reader.readAsDataURL(this.files[0]);
                } else {
                    newImagePreview.style.display = 'none';
                    if (currentImagePreview) currentImagePreview.style.display = 'block';
                    if (noImagePlaceholder) noImagePlaceholder.style.display = 'flex';
                }
            });
        });
    });
</script>
@endsection
