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
              <h1>Matriculas Abertas</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.413529013605!2d-47.19674492467022!3d-23.553587078805194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf7273579355cd%3A0x65386d1183b8fa93!2sR.%20Miguel%20Ferreira%20Man%C3%A3o%2C%2037%20-%20Trigal%2C%20Mairinque%20-%20SP%2C%2018120-000!5e0!3m2!1spt-PT!2sbr!4v1729704545130!5m2!1spt-PT!2sbr" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

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