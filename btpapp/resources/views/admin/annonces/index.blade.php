@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="mb-4">Toutes les annonces</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($annonces->isEmpty())
        <p>Aucune annonce pour le moment.</p>
    @else
        <div class="row">
            @foreach ($annonces as $annonce)
                @php
                    // Utiliser tel quel si c'est déjà un tableau
                    $photos = is_array($annonce->photos) ? $annonce->photos : json_decode($annonce->photos, true);
                @endphp

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        @if (!empty($photos) && is_array($photos) && count($photos) > 0)
                            <img src="{{ asset('storage/' . $photos[0]) }}" class="card-img-top" alt="Image principale" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Pas d'image" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $annonce->titre }}</h5>
                            <p class="card-text">{{ $annonce->introduction }}</p>

                            <div class="mt-auto d-grid gap-2">
                                <a href="{{ route('admin.annonces.show', $annonce->id) }}" class="btn btn-outline-primary">Lire plus</a>
                                <a href="{{ route('admin.annonces.edit', $annonce->id) }}" class="btn btn-outline-warning">Éditer</a>

                                {{-- Formulaire de suppression --}}
                                <form action="{{ route('admin.annonces.destroy', $annonce->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
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
