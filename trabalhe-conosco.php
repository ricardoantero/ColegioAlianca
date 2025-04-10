<?php include('assets/master/cabecalho.php'); ?>
<body class="contact-page">
  <?php include('assets/master/menuTopo.php'); ?>

  <main class="main">
  <style>
  .btn-custom-upload {
    background-color: #3e6cc6;
    color: #fff;
    border: none;
  }

  .btn-custom-upload:hover {
    background-color: #345bb0;
    color: #fff;
  }
</style>
      <!-- Page Title -->
      <picture class="banner-desktop"> <source media="(max-width: 575px)" srcset="assets/img/banner_trabalhe_site_mobile.jpg">
    <img class="banner-desktop" src="assets/img/banner_trabalhe_site_desktop.jpg" alt="Colégio Aliança" data-aos="fade-in">
    </picture><!-- End Page Title -->
    <br>
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
            <form action="forms/trabalheconosco.php" enctype="multipart/form-data" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Nome Completo" required>
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

                    <div class="mb-3">
                      <label class="form-label fw-bold">Currículo (PDF, DOC, DOCX)</label>
                      
                      <div class="input-group">
                        <button type="button" class="btn btn-custom-upload" id="custom-upload-btn">
                           Selecionar Currículo
                        </button>
                        <span id="file-name" class="form-control bg-light text-muted">Nenhum arquivo selecionado</span>
                      </div>

                      <input type="file" id="curriculo" name="curriculo" accept=".pdf,.doc,.docx" class="d-none" required>
                   </div>
                    <div class="col-md-12 text-center">
                        <div class="loading">Aguarde...</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Seu contato foi recebido com sucesso!</div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
$(document).ready(function() {
  var maskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  };

  var options = {
    onKeyPress: function(val, e, field, opts) {
      field.mask(maskBehavior.apply({}, arguments), opts);
    }
  };

  $('#phone').mask(maskBehavior, options);

  $('#custom-upload-btn').on('click', function () {
      $('#curriculo').click();
    });

    $('#curriculo').on('change', function () {
      let fileName = $(this).val().split('\\').pop();
      $('#file-name').text(fileName ? fileName : 'Nenhum arquivo selecionado');
    });
});
</script>
</html>