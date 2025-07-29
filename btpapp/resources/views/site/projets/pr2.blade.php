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
            <img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/projects/project2.jpg') }}" alt="Image du projet Villa Duplex Ferkessédougou 1" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" src="{{ asset('assets/site/images/projects/project_detail_residential1.jpg') }}" alt="Image du projet Villa Duplex Ferkessédougou 2" />
          </div>
        </div></div><div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">TRAVAUX DE CONSTRUCTION D’UNE VILLA DUPLEX À FERKESSEDOUGOU</h3>
        <p>Ce projet de construction d'une villa duplex à usage d'habitation a couvert toutes les étapes, incluant le terrassement, le gros-œuvre, les installations électriques et de plomberie, la pose de carrelage, les faux plafonds, la climatisation et la peinture, pour un espace de vie moderne et confortable.</p>

        <ul class="project-info list-unstyled">
          <li>
            <p class="project-info-label">Client</p>
            <p class="project-info-content">M. SECONGO (particulier)</p>
          </li>
          <li>
            <p class="project-info-label">Localisation</p>
            <p class="project-info-content">Ferkessédougou</p>
          </li>
          <li>
            <p class="project-info-label">Année d'Achèvement</p>
            <p class="project-info-content">2021</p>
          </li>
          <li>
            <p class="project-info-label">Catégories</p>
            <p class="project-info-content">Résidentiel</p>
          </li>
          <li>
            <p class="project-link">
              <a class="btn btn-primary" target="_blank" href="#">Voir le Projet</a>
            </p>
          </li>
        </ul>

      </div></div></div></section>@endsection