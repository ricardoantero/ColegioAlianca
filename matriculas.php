<?php
require 'config.php';
?>

<?php include('assets/master/cabecalho.php'); ?>
<body class="contact-page">
<?php include('assets/master/menuTopo.php'); ?>
  <main class="main">


      <!-- Page Title -->
      <picture class="banner-desktop"> <source media="(max-width: 575px)" srcset="assets/img/banner_matricula_site_mobile.jpg">
    <img class="banner-desktop" src="assets/img/banner_matricula_site_desktop.jpg" alt="Colégio Aliança" data-aos="fade-in">
    </picture><!-- End Page Title -->

<br>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

    
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-12">
            <form action="forms/matricula.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="phone" placeholder="Telefone" required id="phone">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Aguarde</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Sua solicitação de matricula foi efetuada com sucesso, aguarde em breve entraremos em contato!</div>

                  <button type="submit">Enviar Solicitação de Matricula</button>
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
});
</script>
</html>