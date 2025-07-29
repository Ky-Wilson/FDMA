
@extends('layout.master')

@section('content')

{{-- Section Banner (si vous en avez une sur la page de détail) --}}
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">{{ $annonce->titre }}</h1> {{-- Titre de l'annonce --}}
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{-- {{ url('/') }} --}}">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="{{-- {{ route('annonces.index') }} --}}">Annonces</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($annonce->titre, 30) }}</li> {{-- Titre tronqué --}}
                    </ol>
                </nav>
              </div></div></div></div></div></div><section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single">
          <div class="post-media post-image">
            {{-- Affichage de la première image (principale) --}}
            @php
                $mainPhoto = is_array($annonce->photos) && count($annonce->photos) > 0 ? $annonce->photos[0] : null;
            @endphp

            @if ($mainPhoto)
              <img loading="lazy" src="{{ asset('storage/' . $mainPhoto) }}" class="img-fluid" alt="{{ $annonce->titre }}">
            @else
              <div class="img-fluid rounded shadow-sm d-flex align-items-center justify-content-center" style="height: 450px; background-color: #e9ecef; font-size: 1.5em; color: #6c757d;">
                  Aucune image disponible
              </div>
            @endif
          </div><div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> Admin</a> {{-- Ou $annonce->user->name si vous avez une relation --}}
                </span>
                {{-- Si vous avez des catégories pour les annonces, décommentez et adaptez --}}
                {{-- <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> {{ $annonce->category->name ?? 'Non classé' }}</a>
                </span> --}}
                <span class="post-meta-date"><i class="far fa-calendar"></i> {{ $annonce->created_at->format('d M, Y') }}</span>
                {{-- <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#" class="comments-link">Comments</a></span> --}}
              </div>
              <h2 class="entry-title">
                {{ $annonce->titre }} {{-- Titre de l'annonce --}}
              </h2>
            </div><div class="entry-content">
              {{-- Introduction de l'annonce --}}
              <p>{{ $annonce->introduction }}</p>

              {{-- Détails complets de l'annonce --}}
              <p>{!! nl2br(e($annonce->details)) !!}</p> {{-- nl2br pour les sauts de ligne, e() pour échapper le HTML --}}

              {{-- Si vous avez d'autres photos, vous pouvez les afficher ici --}}
              @if (is_array($annonce->photos) && count($annonce->photos) > 1)
                <h4 class="mt-4">Galerie d'images</h4>
                <div class="row">
                    @foreach (array_slice($annonce->photos, 1) as $photo) {{-- On commence à partir de la deuxième photo --}}
                        <div class="col-md-4 mb-3">
                            <img loading="lazy" src="{{ asset('storage/' . $photo) }}" class="img-fluid rounded shadow-sm" alt="Image de l'annonce" style="height: 150px; width: 100%; object-fit: cover;">
                        </div>
                    @endforeach
                </div>
              @endif

              {{-- Si vous avez un blockquote spécifique, vous pouvez l'ajouter ici --}}
              {{-- <blockquote>
                <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.<cite>- Auteur Citation</cite></p>
              </blockquote> --}}

              {{-- Plus de détails si nécessaire --}}
              {{-- <p>...</p> --}}
            </div><div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
                {{-- Si vous avez des tags, affichez-les ici --}}
                <a href="#">Annonce</a>
                <a href="#">Produit</a>
                <a href="#">Service</a>
              </div>
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                  <li class="social-icons-head">Partager:</li>
                  <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($annonce->titre) }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  {{-- Ajoutez d'autres options de partage si nécessaire --}}
                </ul>
              </div>
            </div></div></div>{{-- Section Auteur (si l'annonce est liée à un utilisateur) --}}
        {{-- Décommentez si vous avez une relation auteur/annonce et que vous voulez afficher l'auteur --}}
        {{-- <div class="author-box d-nlock d-sm-flex">
          <div class="author-img mb-4 mb-md-0">
            <img loading="lazy" src="{{ asset('images/news/avator1.png') }}" alt="author">
          </div>
          <div class="author-info">
            <h3>{{ $annonce->user->name ?? 'Nom de l\'auteur' }}<span>{{ $annonce->user->role ?? 'Rôle de l\'auteur' }}</span></h3>
            <p class="mb-2">Description de l'auteur de l'annonce.</p>
            <p class="author-url mb-0">Website: <span><a href="#">http://www.example.com</a></span></p>
          </div>
        </div>--}}

        {{-- Section Commentaires (commentée car moins courant pour les annonces simples, décommentez si besoin) --}}
        {{-- <div id="comments" class="comments-area">
          <h3 class="comments-heading">07 Commentaires</h3>

          <ul class="comments-list">
            <li>
              <div class="comment d-flex">
                <img loading="lazy" class="comment-avatar" alt="author" src="{{ asset('images/news/avator1.png') }}">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Michelle Aimber</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Répondre</a>
                  </div>
                </div>
              </div>

              <ul class="comments-reply">
                <li>
                  <div class="comment d-flex">
                    <img loading="lazy" class="comment-avatar" alt="author" src="{{ asset('images/news/avator2.png') }}">
                    <div class="comment-body">
                      <div class="meta-data">
                        <span class="comment-author mr-3">Tom Harnandez</span>
                        <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                      </div>
                      <div class="comment-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                          laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                      </div>
                      <div class="text-left">
                        <a class="comment-reply font-weight-bold" href="#">Répondre</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="comment d-flex last">
                <img loading="lazy" class="comment-avatar" alt="author" src="{{ asset('images/news/avator3.png') }}">
                <div class="comment-body">
                  <div class="meta-data">
                    <span class="comment-author mr-3">Genelia Dusteen</span>
                    <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span>
                  </div>
                  <div class="comment-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                      nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.</p>
                  </div>
                  <div class="text-left">
                    <a class="comment-reply font-weight-bold" href="#">Répondre</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>--}}


      </div>{{-- Colonne latérale droite (si nécessaire, comme pour les annonces récentes ou suggestions) --}}
      <div class="col-lg-4">
        <div class="sidebar sidebar-right">
          <div class="widget recent-posts">
            <h3 class="widget-title">Annonces Similaires</h3>
            <ul class="list-unstyled">
              {{-- Vous devrez passer $relatedAnnonces depuis le contrôleur si vous voulez cette fonctionnalité --}}
              {{-- @foreach ($relatedAnnonces as $relatedAnnonce)
              <li class="d-flex align-items-center">
                <div class="posts-thumb">
                  @php
                      $relatedPhoto = is_array($relatedAnnonce->photos) && count($relatedAnnonce->photos) > 0 ? $relatedAnnonce->photos[0] : null;
                  @endphp
                  @if ($relatedPhoto)
                    <a href="{{ route('annonces.show', $relatedAnnonce->id) }}">
                        <img loading="lazy" alt="{{ $relatedAnnonce->titre }}" src="{{ asset('storage/' . $relatedPhoto) }}" style="width: 70px; height: 70px; object-fit: cover;">
                    </a>
                  @endif
                </div>
                <div class="post-info">
                  <h4 class="entry-title">
                    <a href="{{ route('annonces.show', $relatedAnnonce->id) }}">{{ Str::limit($relatedAnnonce->titre, 40) }}</a>
                  </h4>
                </div>
              </li>
              @endforeach --}}
              <li><div class="post-info">Aucune annonce similaire trouvée.</div></li>
            </ul>
          </div>{{-- Vous pouvez ajouter d'autres widgets ici si pertinent pour une vue de détail --}}
          <div class="widget">
            <h3 class="widget-title">Contact Rapide</h3>
            <p>Besoin d'aide ou d'informations ?</p>
            <p><i class="fa fa-phone"></i> +225 07 00 00 00 00</p>
            <p><i class="fa fa-envelope"></i> contact@monsite.com</p>
          </div>

        </div></div></div></div></section>
@endsection