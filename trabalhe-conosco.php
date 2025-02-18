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

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>curriculos.colegioalianca@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="full_name" class="form-control" placeholder="Nome Completo" required>
                    </div>

                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" title="Por favor, insira um email válido">
                    </div>

                    <div class="col-md-6">
                    <input type="text" class="form-control" name="phone" placeholder="Telefone" required id="phone">
                    </div>

                    <div class="col-md-6">
                        <select name="area" class="form-control" required style="appearance: auto;">
                            <option value="" disabled selected>Escolha a Área</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Recepção">Recepção</option>
                            <option value="Limpeza">Limpeza</option>
                            <option value="Estágio">Estágio</option>
                            <option value="Professor">Professor</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                    </div>

                    <div class="col-md-12 text-center">
                        <div class="loading">Aguarde...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Sua mensagem foi enviada com sucesso!</div>
                        <button type="submit">Cadastrar</button>
                    </div>

                </div>
            </form>
        </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function() {
              $('#phone').on('input', function() {
                  var x = $(this).val().replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
                  $(this).val(!x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : ''));
              });
          });
      </script>
    </section><!-- /Contact Section -->

  </main>
 
  <?php include('assets/master/rodape.php'); ?>
</body>

</html>