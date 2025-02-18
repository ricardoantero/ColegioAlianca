<?php
require 'config.php';
?>

<?php include('assets/master/cabecalho.php'); ?>
<body class="contact-page">
<?php include('assets/master/menuTopo.php'); ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Matrículas Abertas</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

    
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-12">
            <form action="forms/contato.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
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

</html>