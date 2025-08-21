@extends('layouts.master')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Détails du projet: {{ $projet->titre }}</h1>
        <a href="{{ route('site.projets') }}" class="btn btn-secondary">← Retour</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h4>Informations générales</h4>
                    <p><strong>Titre:</strong> {{ $projet->titre }}</p>
                    <p><strong>Description:</strong> {{ $projet->description ?? 'N/A' }}</p>
                    <p><strong>Détails:</strong> {!! nl2br(e($projet->details)) ?? 'N/A' !!}</p>
                </div>
                <div class="col-md-4">
                    <h4>Informations clés</h4>
                    <ul class="list-unstyled">
                        <li><strong>Catégorie:</strong> {{ ucfirst($projet->categorie) }}</li>
                        <li><strong>Lieu:</strong> {{ $projet->lieu ?? 'N/A' }}</li>
                        <li><strong>Statut:</strong> {{ ucfirst($projet->statut) }}</li>
                        <li><strong>Client:</strong> {{ $projet->client ?? 'N/A' }}</li>
                        <li><strong>Budget:</strong> {{ number_format($projet->budget, 2, ',', ' ') }} $</li>
                        <li><strong>Date de début:</strong> {{ $projet->date_debut ? \Carbon\Carbon::parse($projet->date_debut)->format('d/m/Y') : 'N/A' }}</li>
                        <li><strong>Date de fin:</strong> {{ $projet->date_fin ? \Carbon\Carbon::parse($projet->date_fin)->format('d/m/Y') : 'N/A' }}</li>
                        <li><strong>Mis en avant:</strong> {{ $projet->featured ? 'Oui' : 'Non' }}</li>
                        <li><strong>Actif:</strong> {{ $projet->actif ? 'Oui' : 'Non' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h4>Images du projet</h4>
            <div class="row">
                {{-- Image principale --}}
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-header text-center">Image principale</div>
                        @if ($projet->image_principale)
                            <img src="{{ asset('storage/' . $projet->image_principale) }}" class="card-img-top" alt="Image principale" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="d-flex align-items-center justify-content-center" style="height: 200px; background-color: #f8f9fa;">
                                Pas d'image
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Galerie d'images --}}
                @if ($projet->galerie_images)
                    @foreach (json_decode($projet->galerie_images) as $imagePath)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-header text-center">Galerie</div>
                                <img src="{{ asset('storage/' . $imagePath) }}" class="card-img-top" alt="Image de la galerie" style="height: 200px; object-fit: cover;">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection