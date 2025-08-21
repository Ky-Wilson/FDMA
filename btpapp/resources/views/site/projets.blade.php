@extends('layout.master')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Nos Projets</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="#">Projets</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Toutes les Réalisations</li>
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
      <div class="col-12">
        <!-- Filtres améliorés -->
        <div class="shuffle-btn-group text-center mb-5">
          <div class="filter-container">
            <label class="filter-btn active me-2 mb-2" for="all">
              <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">
              <span class="btn btn-outline-primary">Afficher Tout</span>
            </label>
            @foreach ($categories as $categorie)
            <label class="filter-btn me-2 mb-2" for="{{ $categorie }}">
              <input type="radio" name="shuffle-filter" id="{{ $categorie }}" value="{{ $categorie }}">
              <span class="btn btn-outline-primary">{{ ucfirst($categorie) }}</span>
            </label>
            @endforeach
          </div>
        </div>

        <!-- Grid des projets avec cards uniformes -->
        <div class="row shuffle-wrapper">
          @foreach ($projets as $projet)
          <div class="col-lg-4 col-md-6 col-sm-12 shuffle-item mb-5" data-groups="[&quot;{{ $projet->categorie }}&quot;]">
            <div class="project-card card h-100 shadow-sm border-0">
              <!-- Image avec dimensions fixes -->
              <div class="card-img-wrapper">
                <img class="card-img-top" src="{{ asset('storage/' . $projet->image_principale) }}" alt="{{ $projet->titre }}">
                <div class="card-overlay">
                  <div class="overlay-content">
                    <a href="{{ route('site.projets.show', $projet->id) }}" class="btn btn-light btn-sm">
                      <i class="fas fa-eye me-1"></i>Voir détails
                    </a>
                  </div>
                </div>
              </div>
              
              <!-- Contenu de la card -->
              <div class="card-body d-flex flex-column p-4">
                <div class="category-badge mb-2">
                  <span class="badge bg-primary bg-opacity-10">{{ ucfirst($projet->categorie) }}</span>
                </div>
                <h5 class="card-title mb-3 project-title">{{ $projet->titre }}</h5>
                <p class="card-text text-muted flex-grow-1">
                  {{ Str::limit($projet->description ?? 'Description du projet...', 100) }}
                </p>
                <div class="card-footer-custom mt-auto pt-3 border-top">
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                      <i class="fas fa-calendar-alt me-1"></i>
                      {{ $projet->created_at ? $projet->created_at->format('M Y') : 'Récent' }}
                    </small>
                    <a href="{{ route('site.projets.show', $projet->id) }}" class="btn btn-primary btn-sm">
                      En savoir plus
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* Styles pour les cards uniformes */
.project-card {
  transition: all 0.3s ease;
  border-radius: 12px;
  overflow: hidden;
  margin: 0; /* Retire les margins par défaut */
  width: 100%;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.project-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
}

.card-img-wrapper {
  position: relative;
  height: 250px;
  overflow: hidden;
}

.card-img-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.project-card:hover .card-img-wrapper img {
  transform: scale(1.05);
}

.card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.7);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.project-card:hover .card-overlay {
  opacity: 1;
}

.overlay-content .btn {
  border-radius: 20px;
  padding: 8px 20px;
}

.card-body {
  min-height: 200px;
}

.project-title {
  font-size: 1.1rem;
  font-weight: 600;
  line-height: 1.3;
  height: 2.6em;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.category-badge .badge {
  font-size: 0.75rem;
  font-weight: 500;
  padding: 6px 12px;
  border-radius: 20px;
}

.card-footer-custom {
  background: transparent;
  border-color: rgba(0,0,0,0.1) !important;
}

/* Styles pour les filtres */
.shuffle-btn-group {
  margin-bottom: 2rem;
}

.filter-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 0.5rem;
}

.filter-btn {
  opacity: 1 !important;
  visibility: visible !important;
  position: relative !important;
}

.filter-btn input[type="radio"] {
  display: none;
}

.filter-btn .btn {
  border-radius: 25px;
  padding: 10px 20px;
  font-size: 0.9rem;
  font-weight: 500;
  transition: all 0.3s ease;
  cursor: pointer;
  opacity: 1 !important;
  visibility: visible !important;
  display: inline-block !important;
  position: relative;
  z-index: 10;
  background-color: white;
  border: 2px solid var(--bs-primary);
  color: var(--bs-primary);
}

.filter-btn.active .btn {
  background-color: var(--bs-primary) !important;
  color: white !important;
  border-color: var(--bs-primary) !important;
}

.filter-btn:hover .btn {
  background-color: var(--bs-primary) !important;
  color: white !important;
  border-color: var(--bs-primary) !important;
  transform: translateY(-1px);
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Responsive */
@media (max-width: 768px) {
  .card-img-wrapper {
    height: 200px;
  }
  
  .project-title {
    font-size: 1rem;
  }
  
  .filter-btn .btn {
    padding: 8px 16px;
    font-size: 0.85rem;
  }
}

/* Grid fixes pour éviter la superposition */
.shuffle-wrapper {
  margin-left: -15px;
  margin-right: -15px;
}

.shuffle-item {
  opacity: 1;
  transform: translateY(0);
  transition: all 0.3s ease;
  position: relative;
  padding-left: 15px;
  padding-right: 15px;
}

.shuffle-item.filtering {
  transition: all 0.3s ease;
}

/* Cards avec espacement */
.project-card {
  transition: all 0.3s ease;
  border-radius: 12px;
  overflow: hidden;
  width: 100%;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

/* Media queries pour responsive */
@media (min-width: 992px) {
  .shuffle-wrapper {
    margin-left: -20px;
    margin-right: -20px;
  }
  
  .shuffle-item {
    padding-left: 20px;
    padding-right: 20px;
  }
}

@media (max-width: 767.98px) {
  .shuffle-wrapper {
    margin-left: -10px;
    margin-right: -10px;
  }
  
  .shuffle-item {
    padding-left: 10px;
    padding-right: 10px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des filtres
    const filterBtns = document.querySelectorAll('.filter-btn');
    const shuffleItems = document.querySelectorAll('.shuffle-item');
    
    function filterItems(filter) {
        shuffleItems.forEach((item, index) => {
            try {
                const itemCategories = JSON.parse(item.dataset.groups);
                const shouldShow = filter === 'all' || itemCategories.includes(filter);
                
                // Ajouter classe pour les transitions
                item.classList.add('filtering');
                
                if (shouldShow) {
                    // Réinitialiser les styles
                    item.style.display = '';
                    item.style.position = '';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    item.style.visibility = 'visible';
                } else {
                    // Masquer l'élément
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(-20px)';
                    setTimeout(() => {
                        item.style.display = 'none';
                        item.style.visibility = 'hidden';
                    }, 300);
                }
                
                // Retirer la classe après la transition
                setTimeout(() => {
                    item.classList.remove('filtering');
                }, 300);
                
            } catch (e) {
                // Fallback si le JSON est malformé
                const shouldShow = filter === 'all' || item.dataset.groups.includes(`"${filter}"`);
                
                if (shouldShow) {
                    item.style.display = '';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                    item.style.visibility = 'visible';
                } else {
                    item.style.display = 'none';
                    item.style.opacity = '0';
                    item.style.visibility = 'hidden';
                }
            }
        });
    }
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Retirer la classe active de tous les boutons
            filterBtns.forEach(b => b.classList.remove('active'));
            // Ajouter la classe active au bouton cliqué
            this.classList.add('active');
            
            const filter = this.querySelector('input').value;
            filterItems(filter);
        });
    });
    
    // Initialiser sans filtre au chargement
    setTimeout(() => {
        filterItems('all');
    }, 100);
});
</script>
@endsection