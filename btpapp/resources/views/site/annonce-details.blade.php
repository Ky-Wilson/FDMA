@extends('layout.master')

@section('content')

{{-- Section Banner (si vous en avez une sur la page de détail) --}}
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">{{ $annonce->titre }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('annonces.index') }}">Annonces</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($annonce->titre, 30) }}</li>
                    </ol>
                </nav>
              </div></div></div></div></div></div>
              
              <section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single">
          <div class="post-media post-image" style="height: 450px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
            {{-- Logique de gestion des photos inspirée de admin.annonces.detail --}}
            @php
                $photos = [];

                if (is_string($annonce->photos)) {
                    $decoded = json_decode($annonce->photos, true);
                    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                        $photos = $decoded;
                    }
                } elseif (is_array($annonce->photos)) {
                    $photos = $annonce->photos;
                }

                $mainPhoto = count($photos) > 0 ? $photos[0] : null;
            @endphp

            @if (!empty($mainPhoto))
              <img loading="lazy" src="{{ asset('storage/' . $mainPhoto) }}" class="img-fluid" alt="{{ $annonce->titre }}" style="width: 100%; height: 100%; object-fit: cover;">
            @else
              <div class="img-fluid rounded shadow-sm d-flex flex-column align-items-center justify-content-center" style="height: 100%; width: 100%; background-color: #e9ecef; font-size: 1.5em; color: #6c757d;">
                  <i class="fas fa-image fa-3x mb-3"></i> {{-- Icône plus grande pour l'image principale --}}
                  <span>Aucune image disponible</span>
              </div>
            @endif
          </div><div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> {{ $annonce->created_at->format('d M, Y') }}</span>
              </div>
              <h2 class="entry-title">
                {{ $annonce->titre }}
              </h2>
            </div><div class="entry-content">
              <p>{{ $annonce->introduction }}</p>
              <p>{!! nl2br(e($annonce->details)) !!}</p>

              {{-- Galerie d'images secondaires --}}
              @if (count($photos) > 1) {{-- Vérifie si plus d'une photo existe --}}
                <h4 class="mt-4">Galerie d'images</h4>
                <div class="row">
                    @foreach (array_slice($photos, 1) as $photo) {{-- Itère sur les photos après la première --}}
                        @if (!empty($photo))
                            <div class="col-md-4 col-sm-6 mb-3">
                                <img loading="lazy" src="{{ asset('storage/' . $photo) }}" class="img-fluid rounded shadow-sm" alt="Image de l'annonce" style="height: 150px; width: 100%; object-fit: cover;">
                            </div>
                        @endif
                    @endforeach
                </div>
              @endif
            </div><div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
                <a href="#">Annonce</a>
                <a href="#">Produit</a>
                <a href="#">Service</a>
              </div>
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                  <li class="social-icons-head">Partager:</li>
                  <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($annonce->titre) }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
            </div></div></div></div>{{-- Colonne latérale droite --}}
      <div class="col-lg-4">
        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Annonces Similaires</h3>
            <ul class="list-unstyled">
              <li><div class="post-info">Aucune annonce similaire trouvée.</div></li>
            </ul>
          </div><div class="widget">
            <h3 class="widget-title">Contact Rapide</h3>
            <p>Besoin d'aide ou d'informations ?</p>
            <p><i class="fa fa-phone"></i> +225 07 00 00 00 00</p>
            <p><i class="fa fa-envelope"></i> contact@monsite.com</p>
          </div></div></div></div></div></section>@endsection