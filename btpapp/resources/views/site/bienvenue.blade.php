@extends('layout.master')
@section('content')

<div class="banner-carousel banner-carousel-1 mb-0">

  <!-- Slide 1 -->
  <div class="banner-carousel-item" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
    <!-- Overlay noir -->
    <div class="overlay"></div>

    <div class="slider-content">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12 text-center">
            <h2 class="slide-title" data-animation-in="slideInLeft">Expertise et Innovation</h2>
            <h3 class="slide-sub-title" data-animation-in="slideInRight">Construction et Rénovation de Qualité</h3>
            <p data-animation-in="slideInLeft" data-duration-in="1.2">
              <a href="services.html" class="slider btn btn-primary">Nos Prestations</a>
              <a href="contact.html" class="slider btn btn-primary border">Contactez-nous</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="banner-carousel-item" style="background-image:url({{ asset('assets/site/images/banner/banner2.jpg') }})">
    <div class="overlay"></div>

    <div class="slider-content text-left">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12">
            <h2 class="slide-title-box" data-animation-in="slideInDown">Solutions Durables</h2>
            <h3 class="slide-title" data-animation-in="fadeIn">Terrassement, Gros Œuvre, Finitions</h3>
            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Pour Particuliers et Entreprises</h3>
            <p data-animation-in="slideInRight">
              <a href="services.html" class="slider btn btn-primary border">Voir Nos Références</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="banner-carousel-item" style="background-image:url({{ asset('assets/site/images/banner/banner3.jpg') }})">
    <div class="overlay"></div>

    <div class="slider-content text-right">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-md-12">
            <h2 class="slide-title" data-animation-in="slideInDown">Engagés pour votre Projet</h2>
            <h3 class="slide-sub-title" data-animation-in="fadeIn">Des Équipes Formées et Expérimentées</h3>
            <p class="slider-description lead" data-animation-in="slideInRight">Nous bâtissons des espaces modernes et durables partout en Côte d’Ivoire.</p>
            <div data-animation-in="slideInLeft">
              <a href="contact.html" class="slider btn btn-primary" aria-label="contact-with-us">Demander un Devis</a>
              <a href="about.html" class="slider btn btn-primary border" aria-label="learn-more-about-us">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<style>
  .banner-carousel-item {
  position: relative;
}

.banner-carousel-item .overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.4); /* Opacité à ajuster selon ton goût */
  z-index: 1;
}

.banner-carousel-item .slider-content {
  position: relative;
  z-index: 2;
}

</style>


<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
      <div class="row align-items-center">
        <div class="col-md-8 text-center text-md-left">
          <div class="call-to-action-text">
            <h3 class="action-title">Nous comprenons vos besoins en construction</h3>
          </div>
        </div><!-- Col end -->
        <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
          <div class="call-to-action-btn">
            <a class="btn btn-dark" href="{{ route('site.contact') }}">Demander un devis</a>
          </div>
        </div><!-- col end -->
      </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->


<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
      <!-- Col gauche -->
      <div class="col-lg-6">
        <div class="ts-intro">
          <h2 class="into-title">Qui sommes-nous ?</h2>
          <h3 class="into-sub-title">Nous réalisons vos projets de construction</h3>
          <p>FDMA TRAVAUX BÂTIMENT est une entreprise spécialisée dans la construction et la rénovation de bâtiments résidentiels et commerciaux en Côte d'Ivoire. Notre expertise couvre le gros œuvre, l’électricité, la plomberie, le carrelage, la climatisation, la menuiserie et bien plus. Nous mettons un point d’honneur à utiliser des techniques modernes et des matériaux de qualité pour garantir la durabilité de vos projets.</p>
        </div><!-- Intro box end -->

        <div class="gap-20"></div>

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-trophy"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Excellence reconnue</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-handshake"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Partenariats solides</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 1 end -->

        <div class="row">
          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-thumbs-up"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Engagement durable</h3>
              </div>
            </div><!-- Service 1 end -->
          </div><!-- col end -->

          <div class="col-md-6">
            <div class="ts-service-box">
              <span class="ts-service-icon">
                <i class="fas fa-users"></i>
              </span>
              <div class="ts-service-box-content">
                <h3 class="service-box-title">Équipe qualifiée</h3>
              </div>
            </div><!-- Service 2 end -->
          </div><!-- col end -->
        </div><!-- Content row 2 end -->
      </div><!-- Col gauche end -->

      <!-- Col droite -->
      <div class="col-lg-6 mt-4 mt-lg-0">
        <h3 class="into-sub-title">Nos valeurs</h3>
        <p>Nous plaçons la satisfaction client, l’innovation et la qualité au cœur de chacun de nos chantiers. Notre équipe est formée aux dernières technologies et respecte les normes de durabilité.</p>

        <div class="accordion accordion-group" id="our-values-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Qualité
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
              <div class="card-body">
                Nous garantissons des projets réalisés dans le respect des normes les plus strictes, avec des matériaux de haute qualité.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Innovation
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
              <div class="card-body">
                Nous utilisons des techniques de construction modernes et innovantes pour assurer la performance et la durabilité.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Satisfaction client
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
              <div class="card-body">
                Notre priorité est de livrer chaque projet en dépassant les attentes de nos clients grâce à une écoute active et un suivi rigoureux.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

      </div><!-- Col droite end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Features end -->


<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact1.png') }}" alt="faits-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="9">0</span></h2>
                <h3 class="ts-facts-title">Projets Réalisés</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact2.png') }}" alt="faits-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="20">0</span></h2>
                <h3 class="ts-facts-title">Personnel Qualifié</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact3.png') }}" alt="faits-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="500">0</span></h2>
                <h3 class="ts-facts-title">Clients Satisfaits</h3>
              </div>
          </div><div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/fact4.png') }}" alt="faits-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1">0</span></h2>
                <h3 class="ts-facts-title">Zone d'Opération (Pays)</h3>
              </div>
          </div></div> </div>
    </div>
</section>

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Nos Spécialisations</h2>
          <h3 class="section-sub-title">Ce Que Nous Faisons</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon1.png') }}" alt="Génie Civil">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Génie Civil et Structure</a></h3>
                <p>Conception et exécution des fondations et structures porteuses pour des bâtiments solides et durables.</p>
              </div>
          </div><div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon2.png') }}" alt="Gros Œuvre">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Travaux de Gros Œuvre</a></h3>
                <p>Réalisation des fondations, maçonnerie, béton armé et charpente pour l'ossature de votre construction.</p>
              </div>
          </div><div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon3.png') }}"  alt="Électricité">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Installations Électriques</a></h3>
                <p>Mise en place de réseaux électriques (moyenne et basse tension) conformes aux normes de sécurité.</p>
              </div>
          </div></div><div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/services/service-center.jpg') }}" alt="Image centrale services">
        </div><div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon4.png') }}" alt="Plomberie">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Plomberie & Traitement des Eaux</a></h3>
                <p>Installation sanitaire complète et solutions de traitement des eaux pour piscines et usages divers.</p>
              </div>
          </div><div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon5.png') }}" alt="Revêtement">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Pose de Revêtement</a></h3>
                <p>Expertise en pose de carreaux, marbre, granite, incluant ponçage et vitrification pour des finitions soignées.</p>
              </div>
          </div><div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon6.png') }}" alt="Sécurité">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="{{ route('site.services') }}">Systèmes de Sécurité et Réseaux</a></h3>
                <p>Installation de systèmes anti-incendie, contrôle d'accès, vidéosurveillance et infrastructures réseaux.</p>
              </div>
          </div></div></div></div>
  </section>

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Nos Réalisations d'Excellence</h2>
        <h3 class="section-sub-title">Projets Récents</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Afficher Tout
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="commercial">Commercial
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="education">Éducation
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Gouvernemental
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="infrastructure">Infrastructure
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="residential">Résidentiel
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="healthcare">Santé
          </label>
        </div><div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project1.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project1.jpg') }}" alt="Réhabilitation Bureau Chef Canton">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Réhabilitation Bureau Chef Canton de TAABO</a>
                  </h3>
                  <p class="project-cat">Gouvernemental</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;infrastructure&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project2.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project2.jpg') }}" alt="Construction Mur Clôture Centre Protection">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Construction Mur de Clôture Centre Protection Dabou</a>
                  </h3>
                  <p class="project-cat">Gouvernemental, Infrastructure</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;commercial&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project3.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project3.jpg') }}" alt="Construction Bureaux SICIM">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Construction Bureaux SICIM</a>
                  </h3>
                  <p class="project-cat">Commercial</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;education&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project4.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project4.jpg') }}" alt="Extension & Réhabilitation Lycée Grand-Bassam">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Extension & Réhabilitation Lycée Grand-Bassam</a>
                  </h3>
                  <p class="project-cat">Éducation</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project5.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project5.jpg') }}" alt="Construction Centre de Santé Koumassi">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Construction Centre de Santé Koumassi</a>
                  </h3>
                  <p class="project-cat">Santé</p>
                </div>
              </div>
            </div>
          </div><div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="{{ asset('assets/site/images/projects/project6.jpg') }}" aria-label="project-img">
                <img class="img-fluid" src="{{ asset('assets/site/images/projects/project6.jpg') }}" alt="Construction Villa Triplex Ferkessédougou">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Construction Villa Triplex Ferkessédougou</a>
                  </h3>
                  <p class="project-cat">Résidentiel</p>
                </div>
              </div>
            </div>
          </div></div></div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="#">Voir Tous les Projets</a>
        </div>
      </div>

    </div></div>
  </section>

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Témoignages</h3>

          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      "FDMA TRAVAUX BATIMENT a su répondre à nos attentes avec professionnalisme et efficacité. La qualité des travaux est irréprochable et le respect des délais a été parfait. Nous sommes très satisfaits de leur engagement."
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/site/images/clients/testimonial1.png') }}" alt="Témoignage client">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Client Satisfait 1</h3>
                          <span class="quote-subtext">Partenaire Commercial</span>
                      </div>
                    </div>
                </div></div>
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      "Nous avons apprécié la rigueur et l'expertise de l'équipe de FDMA TRAVAUX BATIMENT. Leur approche innovante et leur souci du détail ont fait la différence sur notre projet de rénovation. Une collaboration réussie !"
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/site/images/clients/testimonial2.png') }}" alt="Témoignage client">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Client Satisfait 2</h3>
                          <span class="quote-subtext">Maître d'Ouvrage Public</span>
                      </div>
                    </div>
                </div></div>
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      "Du début à la fin, le projet s'est déroulé sans accroc grâce à la planification minutieuse et la communication transparente de FDMA TRAVAUX BATIMENT. Nous recommandons vivement leurs services pour tout projet de construction."
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{ asset('assets/site/images/clients/testimonial3.png') }}" alt="Témoignage client">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Client Satisfait 3</h3>
                          <span class="quote-subtext">Développeur Immobilier</span>
                      </div>
                    </div>
                </div></div>
              </div>
          </div><div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Nos Clients Satisfaits</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client1.png') }}" alt="Ministère de la Modernisation" /></a>
                </figure>
              </div><div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client2.png') }}" alt="Ministère de la Femme" /></a>
                </figure>
              </div><div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client3.png') }}" alt="SICIM" /></a>
                </figure>
              </div><div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client4.png') }}" alt="Ministère de l'Éducation Nationale" /></a>
                </figure>
              </div><div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client5.png') }}" alt="Ministère de la Santé" /></a>
                </figure>
              </div><div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#"><img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/clients/client6.png') }}" alt="CLUB ROTARY Abidjan" /></a>
                </figure>
              </div></div></div></div>
    </div>
  </section>```


@endsection