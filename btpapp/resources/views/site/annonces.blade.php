@extends('layout.master')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Annonces</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Toutes les annonces</li>
                    </ol>
                </nav>
              </div></div></div></div></div></div><section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      {{-- Colonne latérale --}}
      <div class="col-lg-4 order-1 order-lg-0">
        <div class="sidebar sidebar-left">

          <div class="widget">
            <h3 class="widget-title">Catégories</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="#">Annonces générales</a></li>
              {{-- Ajoutez des boucles ici si vous avez des catégories dynamiques --}}
            </ul>
          </div><div class="widget">
            <h3 class="widget-title">Archives </h3>
            <ul class="arrow nav nav-tabs">
              {{-- Ajoutez des boucles ici si vous avez des archives dynamiques (ex: par mois/année) --}}
              <li><a href="#">Juillet 2025</a></li>
            </ul>
          </div><div class="widget widget-tags">
            <h3 class="widget-title">Tags </h3>
            <ul class="list-unstyled">
              <li><a href="#">Immobilier</a></li>
              <li><a href="#">Véhicules</a></li>
              {{-- Ajoutez des boucles ici si vous avez des tags dynamiques --}}
            </ul>
          </div></div></div>{{-- Colonne principale pour les annonces --}}
      <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
        @forelse ($annonces as $annonce)
          <div class="post">
            <div class="post-media post-image" style="height: 350px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
              @php
                  // Logique de gestion des photos inspirée de admin.annonces.index
                  $photos = is_array($annonce->photos) ? $annonce->photos : json_decode($annonce->photos, true);
                  $firstPhoto = (!empty($photos) && is_array($photos) && count($photos) > 0) ? $photos[0] : null;
              @endphp

              @if ($firstPhoto)
                <a href="{{ route('annonces.show', $annonce->id) }}" style="display: block; width: 100%; height: 100%;">
                    <img loading="lazy" src="{{ asset('storage/' . $firstPhoto) }}" class="img-fluid" alt="{{ $annonce->titre }}" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
              @else
                {{-- Placeholder si aucune photo n'est disponible, avec une icône comme pour la vue admin --}}
                <div class="img-fluid rounded shadow-sm d-flex flex-column align-items-center justify-content-center" style="height: 100%; width: 100%; background-color: #e9ecef; font-size: 1.5em; color: #6c757d;">
                    <i class="fas fa-image fa-3x mb-3"></i>
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
                  <a href="{{ route('annonces.show', $annonce->id) }}">{{ $annonce->titre }}</a>
                </h2>
              </div><div class="entry-content">
                <p>{{ Str::limit($annonce->introduction, 200) }}</p>
              </div><div class="post-footer">
                <a href="{{ route('annonces.show', $annonce->id) }}" class="btn btn-primary">Lire la suite</a>
              </div></div></div>@empty
          <p>Aucune annonce trouvée pour le moment.</p>
        @endforelse

        {{-- Pagination --}}
        @if ($annonces->hasPages())
          <nav class="paging" aria-label="Page navigation example">
            {{ $annonces->links('pagination::bootstrap-5') }}
          </nav>
        @endif

      </div></div></div></section>@endsection