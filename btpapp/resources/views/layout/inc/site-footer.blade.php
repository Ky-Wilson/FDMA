<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">À Propos de Nous</h3>
            <img loading="lazy" class="footer-logo" src="{{ asset('assets/site/images/logo.png') }}" alt="FDMA TRAVAUX BATIMENT">
            <p>FDMA TRAVAUX BATIMENT est une entreprise spécialisée en construction et rénovation résidentielle et commerciale. Nous mettons l'accent sur la construction moderne et les innovations technologiques.</p>
            <div class="footer-social">
              <ul>
                <li><a href="#" aria-label="Facebook"><i
                      class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="#" aria-label="Instagram"><i
                      class="fab fa-instagram"></i></a></li>
                <li><a href="#" aria-label="Github"><i class="fab fa-github"></i></a></li>
              </ul>
            </div></div><div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Heures d'Ouverture</h3>
            <div class="working-hours">
              Nous sommes disponibles du lundi au samedi pour vos projets. N'hésitez pas à nous contacter pour toute urgence ou demande de devis.
              <br><br> Lundi - Vendredi: <span class="text-right">08:00 - 17:00 </span>
              <br> Samedi: <span class="text-right">09:00 - 13:00</span>
              <br> Dimanche: <span class="text-right">Fermé</span>
            </div>
          </div><div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="{{ route('site.services') }}">Génie Civil et Structure</a></li>
              <li><a href="{{ route('site.services') }}">Travaux de Gros Œuvre</a></li>
              <li><a href="{{ route('site.services') }}">Installations Électriques</a></li>
              <li><a href="{{ route('site.services') }}">Plomberie Sanitaire</a></li>
              <li><a href="{{ route('site.services') }}">Pose de Revêtement</a></li>
            </ul>
          </div></div></div></div><div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Conçu &amp; Développé par FDMA TRAVAUX BATIMENT</span>
            </div>
          </div>

          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Distribué par FDMA TRAVAUX BATIMENT</span>
            </div>
          </div>

          <video controls autoplay loop muted class="img-fluid w-100 h-100" style="width: 100px; height: 100px; ">
                                    <source src="{{ asset('assets/img/video1.mp4') }}" type="video/mp4">
                                    Votre navigateur ne supporte pas la lecture de vidéos.
                                </video>
        </div><div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Retour en Haut">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>
      </div></div></footer>