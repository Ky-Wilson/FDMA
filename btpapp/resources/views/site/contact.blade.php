@extends('layout.master')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{ asset('assets/site/images/banner/banner1.jpg') }})">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contact</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('site.apropos') }}">L'entreprise</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Nous Contacter</li>
                    </ol>
                </nav>
              </div>
          </div></div></div></div></div>

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Nous joindre</h2>
        <h3 class="section-sub-title">Trouvez notre emplacement</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visitez notre bureau</h4>
            <p>04 BP Abidjan 04</p>
          </div>
        </div>
      </div><div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Envoyez-nous un e-mail</h4>
            <p>Ouattarasouleymane474@gmail.com</p>
          </div>
        </div>
      </div><div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Appelez-nous</h4>
            <p>+225 07 08 95 83 26</p>
            <p>+225 01 02 68 02 70</p>
            <p>+225 05 06 42 29 79</p>
          </div>
        </div>
      </div></div><div class="gap-60"></div>
    <div class="gap-60"></div>

    <div class="google-map">
      <div id="map" class="map" data-latitude="5.35824" data-longitude="-4.02046" data-marker="{{ asset('images/marker.png') }}" data-marker-name="Votre Entreprise"></div>
    </div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">We love to hear</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
        @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form id="contact-form" action="{{ route('contact.send') }}" method="POST" role="form">
  @csrf
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="name">Nom</label>
        <input class="form-control" name="name" id="name" value="{{ old('name') }}" type="text" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" id="email" value="{{ old('email') }}" type="email" required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="subject">Sujet</label>
        <input class="form-control" name="subject" id="subject" value="{{ old('subject') }}" required>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" rows="10" required>{{ old('message') }}</textarea>
  </div>

  <div class="text-right"><br>
    <button class="btn btn-primary solid blank" type="submit">Envoyer le message</button>
  </div>
</form>

      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection