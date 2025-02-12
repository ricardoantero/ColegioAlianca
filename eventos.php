<?php include('assets/master/cabecalho.php'); ?>
<body class="events-page">
<?php include('assets/master/menuTopo.php'); ?>
  <main class="main">

    <!-- Page Title -->
    <picture class="banner-desktop"> <source media="(max-width: 575px)" srcset="assets/img/banner_eventos_site_mobile.jpg">
    <img class="banner-desktop" src="assets/img/banner_eventos_site_desktop.jpg" alt="Colégio Aliança" data-aos="fade-in">
    </picture><!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/eventos-escola-1.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="/detalhe-evento?e=dia-das-criancas">Dia das Crianças no Aliança</a></h5>
              
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/eventos-escola-2.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="/detalhe-evento?e=feira-de-ciencias">Feira de Ciências</a></h5>
              
              </div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Events Section -->

  </main>
  <?php include('assets/master/rodape.php'); ?>
</body>
</html>