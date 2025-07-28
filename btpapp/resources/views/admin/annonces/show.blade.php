@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mb-3">{{ $annonce->titre }}</h1>

    <p class="text-muted">Publié le {{ $annonce->created_at->format('d/m/Y à H:i') }}</p>

    {{-- Galerie photos --}}
    <div class="mb-4">
        <h4>Photos de l'annonce</h4>
        <div class="row">
            @php
                // Assurez-vous que $annonce->photos est un tableau
                $photos = $annonce->photos ?? [];
                if (!is_array($photos) && json_decode($annonce->photos)) {
                    $photos = json_decode($annonce->photos, true);
                }
                // Remplir avec des null si moins de 4 photos sont présentes
                while (count($photos) < 4) {
                    $photos[] = null;
                }
            @endphp

            @foreach ($photos as $index => $photoPath)
                <div class="col-md-3 mb-3">
                    @if ($photoPath)
                        <img src="{{ asset('storage/' . $photoPath) }}" class="img-fluid rounded shadow-sm" alt="Photo {{ $index + 1 }}">
                    @else
                        <div class="no-image-placeholder text-muted text-center border p-3 rounded d-flex align-items-center justify-content-center" style="height: 150px; background-color: #f8f9fa;">
                            Photo {{ $index + 1 }} manquante
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- Introduction --}}
    <h4>Introduction</h4>
    <p>{{ $annonce->introduction }}</p>

    {{-- Détails --}}
    <h4>Détails</h4>
    <p>{!! nl2br(e($annonce->details)) !!}</p>

    {{-- Bouton retour --}}
    <a href="{{ route('admin.annonces.index') }}" class="btn btn-secondary mt-3">← Retour à la liste</a>
</div>
@endsection