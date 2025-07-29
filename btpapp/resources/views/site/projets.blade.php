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
          </div></div></div></div></div><section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Afficher Tout
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Résidentiel
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Santé
          </label>
        </div><div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project1.jpg') }}" aria-label="Construction Bâtiment Administratif BMI Finances">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project1.jpg') }}" alt="Construction Bâtiment Administratif BMI Finances">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Bâtiment Administratif BMI Finances</a>
                  </h3>
                  <p class="project-cat">Commercial</p>
                  <p class="project-cat"><a href="{{ route('site.projets.pr1') }}">Details du projet</a></p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project2.jpg') }}" aria-label="Construction Villa Duplex Ferkessédougou">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project2.jpg') }}" alt="Construction Villa Duplex Ferkessédougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Duplex à Ferkessédougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                  <p class="project-cat"><a href="{{ route('site.projets.pr2') }}">Details du projet</a></p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project3.jpg') }}" aria-label="Construction Villa Basse Ferkessédougou">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project3.jpg') }}" alt="Construction Villa Basse Ferkessédougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Basse à Ferkessédougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project4.jpg') }}" aria-label="Travaux Seconde Œuvre Villa Duplex Bingerville">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project4.jpg') }}" alt="Travaux Seconde Œuvre Villa Duplex Bingerville">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Travaux Seconde Œuvre Villa Duplex à Bingerville</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project5.jpg') }}" aria-label="Construction Villa Basse 3 Pièces Niakaramadougou">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project5.jpg') }}" alt="Construction Villa Basse 3 Pièces Niakaramadougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Basse 3 Pièces à Niakaramadougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project6.jpg') }}" aria-label="Construction Bâtiment Kinésithérapie Yopougon">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project6.jpg') }}" alt="Construction Bâtiment Kinésithérapie Yopougon">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Bâtiment Kinésithérapie Yopougon</a>
                  </h3>
                  <p class="project-cat">Santé</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project3.jpg') }}" aria-label="Construction Villa Triplex Ferkessédougou">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project4.jpg') }}" alt="Construction Villa Triplex Ferkessédougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Triplex à Ferkessédougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project1.jpg') }}" aria-label="Construction Villa Duplex Korhogo">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project1.jpg') }}" alt="Construction Villa Duplex Korhogo">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Duplex à Korhogo</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project1.jpg') }}" aria-label="Construction Villa Duplex Ferkessédougou">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project1.jpg') }}" alt="Construction Villa Duplex Ferkessédougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="projects-single.html">Construction Villa Duplex à Ferkessédougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div></div></div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">Voir Toutes Nos Réalisations</a>
        </div>
      </div>

    </div></div></section>```
@endsection