@extends('layout.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Nos Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tous les Services</li>
                    </ol>
                </nav>
              </div>
          </div></div></div></div></div><section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service1.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon1.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Génie Civil et Structure</a></h3>
                  <p>Expertise complète en conception et exécution de fondations, structures porteuses et ouvrages de génie civil, assurant solidité et durabilité.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div><div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service2.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon2.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Terrassement</a></h3>
                  <p>Préparation des terrains par des travaux d'excavation, de remblaiement et de nivellement, étape fondamentale pour la stabilité de toute construction.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div><div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service3.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon3.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Gros Œuvre Bâtiment</a></h3>
                  <p>Réalisation de la structure principale des bâtiments, incluant maçonnerie, béton armé, charpente et couverture, formant l'ossature de l'édifice.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div><div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service4.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon4.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Installations Électriques</a></h3>
                  <p>Conception et mise en œuvre de systèmes électriques fiables et sécurisés, de la moyenne à la basse tension, pour tous types de bâtiments.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div><div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service5.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon5.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Plomberie et Climatisation</a></h3>
                  <p>Installation de réseaux de plomberie sanitaire, traitement des eaux, ainsi que des systèmes de climatisation et de ventilation pour un confort optimal.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div><div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="{{ asset('assets/site/images/services/service6.jpg') }}" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="{{ asset('assets/site/images/icon-image/service-icon6.png') }}" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Pose de Revêtements</a></h3>
                  <p>Application de revêtements de sols (carreaux, marbre, granito) et de murs, incluant les finitions et traitements pour une esthétique et une durabilité accrues.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> En savoir plus</a>
              </div>
            </div>
        </div></div></div></div></section>@endsection