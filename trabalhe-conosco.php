<?php include('assets/master/cabecalho.php'); ?>
<body class="contact-page">
  <?php include('assets/master/menuTopo.php'); ?>

  <main class="main">

      <!-- Page Title -->
      <picture class="banner-desktop"> <source media="(max-width: 575px)" srcset="assets/img/banner_trabalhe_site_mobile.jpg">
    <img class="banner-desktop" src="assets/img/banner_trabalhe_site_desktop.jpg" alt="Colégio Aliança" data-aos="fade-in">
    </picture><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.411854325626!2d-47.19681512502112!3d-23.553647261308164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf7274aa481bfd%3A0xbec0495e9de22cec!2sCol%C3%A9gio%20Alian%C3%A7a%20de%20Educa%C3%A7%C3%A3o%20Infantil%2C%20Ensino%20Fundamental%20e%20Ensino%20M%C3%A9dio!5e0!3m2!1spt-PT!2sbr!4v1739386673258!5m2!1spt-PT!2sbr" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>R. Miguel Ferreira Manão, 37 - Trigal, Mairinque - SP, 18120-000</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Contato</h3>
                <p>(11) 97358-1540</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>alianca@alianca.com.br</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Aguarde...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua mensagem foi enviada com sucesso!</div>

                  <button type="submit">Enviar Mensagem</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>
  <?php include('assets/master/rodape.php'); ?>
</body>

</html>