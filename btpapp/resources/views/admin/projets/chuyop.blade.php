@extends('layout.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Détail du Projet</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="#">Projets</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Détail du Projet</li>
                    </ol>
                </nav>
              </div>
          </div></div></div></div></div><section id="main-container" class="main-container">
  <div class="container">

    <div class="row">
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/Duplex-korogho/') }}" alt="Project Image BMI Finances 1" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/Duplex-korogho/') }}" alt="Project Image BMI Finances 2" />
          </div>
        </div></div><div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">TRAVAUX DE CONSTRUCTION D’UN BÂTIMENT ADMINISTRATIF À BMI FINANCES II PLATEAUX</h3>
        <p>Un projet de grande envergure pour la construction d'un bâtiment administratif complet. Les travaux ont inclus le terrassement, le gros-œuvre, l'installation électrique, la plomberie, la pose de carrelage, l'installation de faux plafonds, les systèmes de climatisation et la peinture. Ce projet a permis la réalisation d'un espace moderne et fonctionnel pour BMI Finances.</p>

        <ul class="project-info list-unstyled">
          <li>
            <p class="project-info-label">Client</p>
            <p class="project-info-content">BMI FINANCES</p>
          </li>
          <li>
            <p class="project-info-label">Localisation</p>
            <p class="project-info-content">II PLATEAUX, Abidjan</p>
          </li>
          <li>
            <p class="project-info-label">Année d'Achèvement</p>
            <p class="project-info-content">2021</p>
          </li>
          <li>
            <p class="project-info-label">Catégories</p>
            <p class="project-info-content">Commercial</p>
          </li>
          <li>
            <p class="project-link">
              <a class="btn btn-primary" target="_blank" href="#">Voir le Projet</a>
            </p>
          </li>
        </ul>

      </div></div></div></section>```
@endsection