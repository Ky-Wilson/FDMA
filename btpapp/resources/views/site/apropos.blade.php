@extends('layout.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Notre Histoire, Notre Expertise</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="#">L'Entreprise</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Qui Sommes-Nous</li>
                    </ol>
                </nav>
              </div>
          </div></div></div></div></div><section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">L'Excellence au Service de Vos Projets</h3>
          <p>Chez FDMA TRAVAUX BATIMENT, nous sommes plus qu'une entreprise de construction. Nous sommes des bâtisseurs passionnés, dédiés à transformer vos visions en réalités solides et durables. Forts d'une expertise reconnue dans le génie civil et la rénovation, nous apportons des solutions innovantes pour chaque projet, qu'il soit résidentiel, commercial ou institutionnel.</p>
          <blockquote><p>Notre engagement est clair : fournir des solutions de construction durables, alliant innovation et respect des normes les plus strictes. La satisfaction de nos clients est au cœur de notre démarche, de la conception à la livraison.</p></blockquote>
          <p>Notre équipe, composée de professionnels hautement qualifiés et constamment formés aux dernières technologies, est le pilier de notre succès. Nous utilisons des matériaux de pointe et des méthodes éprouvées pour garantir la robustesse, l'esthétisme et la pérennité de chaque structure. Nous sommes fiers de bâtir des relations de confiance à travers l'ensemble du territoire ivoirien, accompagnant nos partenaires vers la réussite de leurs ambitions.</p>

        </div><div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url({{ asset('assets/site/images/slider-pages/slide-page1.jpg') }})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Notre Leadership : L'Innovation à Votre Service</h2>
                      </div>    
                    </div>
                </div>
              </div><div class="item" style="background-image:url({{ asset('assets/site/images/slider-pages/slide-page2.jpg') }})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Des Partenariats Solides : Bâtir Ensemble</h2>
                      </div>    
                    </div>
                </div>
              </div><div class="item" style="background-image:url({{ asset('assets/site/images/slider-pages/slide-page3.jpg') }})">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">L'Excellence à Chaque Étape : Votre Garantie</h2>
                      </div>    
                    </div>
                </div>
              </div></div></div></div></div></section>
              <section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact1.png') }}" alt="Projets Accomplis">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="9">0</span></h2>
                <h3 class="ts-facts-title">Projets Accomplis</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact2.png') }}" alt="Experts Qualifiés">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="20">0</span></h2>
                <h3 class="ts-facts-title">Experts Qualifiés</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact3.png') }}" alt="Clients Satisfaits">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="500">0</span></h2>
                <h3 class="ts-facts-title">Clients Satisfaits</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact4.png') }}" alt="Pays d'Opération">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1">0</span></h2>
                <h3 class="ts-facts-title">Pays d'Opération</h3>
              </div>
          </div></div> </div>
    </div>
  </section><section id="ts-team" class="ts-team">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">L'Excellence au Cœur de Notre Équipe</h2>
          <h3 class="section-sub-title">Une Équipe Dévouée et Spécialisée</h3>
        </div>
    </div><div class="row">
        <div class="col-lg-12">
          <div id="team-slide" class="team-slide">
              <div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team1.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Jean Dupont</h3>
                      <p class="ts-designation">Directeur des Opérations</p>
                      <p class="ts-description">Avec une vaste expérience, Jean assure la coordination et l'efficacité de tous nos projets sur le terrain.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div><div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team2.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Marie Dubois</h3>
                      <p class="ts-designation">Responsable Innovation</p>
                      <p class="ts-description">Marie est à la pointe de la recherche de nouvelles technologies pour des solutions de construction durables et modernes.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div><div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team3.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Marc Lefevre</h3>
                      <p class="ts-designation">Chef de Projet Senior</p>
                      <p class="ts-description">Avec son expertise, Marc supervise chaque étape des projets pour assurer la qualité et le respect des délais.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div><div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team4.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Sophie Martin</h3>
                      <p class="ts-designation">Ingénieure en Structure</p>
                      <p class="ts-description">Sophie conçoit des structures robustes et sécurisées, garantissant la stabilité et la durabilité de nos constructions.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div><div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team5.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">David Moreau</h3>
                      <p class="ts-designation">Responsable Sécurité</p>
                      <p class="ts-description">David veille à ce que toutes nos opérations respectent les normes de sécurité les plus strictes pour le bien de tous.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div><div class="item">
                <div class="ts-team-wrapper">
                    <div class="team-img-wrapper">
                      <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/team/team6.jpg') }}" alt="Équipe FDMA">
                    </div>
                    <div class="ts-team-content">
                      <h3 class="ts-name">Léa Dubois</h3>
                      <p class="ts-designation">Architecte Designer</p>
                      <p class="ts-description">Léa apporte une touche esthétique et fonctionnelle à nos constructions, créant des espaces harmonieux et innovants.</p>
                      <div class="team-social-icons">
                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>
                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                      </div></div>
                </div></div></div></div>
    </div></div></section>
@endsection