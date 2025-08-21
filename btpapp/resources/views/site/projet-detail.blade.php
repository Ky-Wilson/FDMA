@extends('layout.master')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Détails du projet</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ route('site.projets') }}">Projets</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{ $projet->titre }}</li>
                    </ol>
                </nav>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                {{-- Image principale en haut --}}
                @if ($projet->image_principale)
                <div class="mb-4">
                    <img loading="lazy" class="img-fluid" src="{{ asset('storage/' . $projet->image_principale) }}" alt="Image principale du projet">
                </div>
                @endif
                
                {{-- Informations du projet --}}
                <div class="project-info-box">
                    <h3 class="column-title">Détails du projet</h3>
                    <p>{{ $projet->description }}</p>
                    <p>{!! nl2br(e($projet->details)) !!}</p>
                </div>

                {{-- Galerie d'images sous la description --}}
                @if ($projet->galerie_images && !empty(json_decode($projet->galerie_images)))
                <h3 class="mt-4">Galerie</h3>
                <div class="row">
                    @foreach (json_decode($projet->galerie_images) as $image)
                    <div class="col-md-6 mb-4">
                        <img loading="lazy" class="img-fluid rounded shadow-sm" src="{{ asset('storage/' . $image) }}" alt="Image de la galerie" style="height: 250px; width: 100%; object-fit: cover;">
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <h3 class="column-title">Informations clés</h3>
                <ul class="project-info list-unstyled">
                    <li>
                        <p class="project-info-label">Client</p>
                        <p class="project-info-content">{{ $projet->client ?? 'N/A' }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Lieu</p>
                        <p class="project-info-content">{{ $projet->lieu ?? 'N/A' }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Catégorie</p>
                        <p class="project-info-content">{{ ucfirst($projet->categorie) }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Statut</p>
                        <p class="project-info-content">{{ ucfirst($projet->statut) }}</p>
                    </li>
                    <li>
                        <p class="project-info-label">Période</p>
                        <p class="project-info-content">
                            @if($projet->date_debut && $projet->date_fin)
                                {{ \Carbon\Carbon::parse($projet->date_debut)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($projet->date_fin)->format('d/m/Y') }}
                            @elseif($projet->date_debut)
                                À partir de {{ \Carbon\Carbon::parse($projet->date_debut)->format('d/m/Y') }}
                            @else
                                Non spécifiée
                            @endif
                        </p>
                    </li>
                    <li>
                        <p class="project-info-label">Budget</p>
                        <p class="project-info-content">{{ number_format($projet->budget, 2, ',', ' ') }} $</p>
                    </li>
                </ul>
                <div class="mt-4">
                    <a href="{{ route('site.projets') }}" class="btn btn-primary">Retour à la liste des projets</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection