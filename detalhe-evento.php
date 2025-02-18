<?php include('assets/master/cabecalho.php'); ?>
<body class="events-page">
<?php include('assets/master/menuTopo.php'); ?>

<?php
// Pega o valor da query string "e"
$imagem = isset($_GET['e']) ? $_GET['e'] : 'default'; // Se não houver query string "e", usa 'default'

// Define o caminho da imagem com base no valor da query string "e"
$caminho_imagem = "assets/eventos/{$imagem}/";
?>
  <main class="main">
    
  <style>
        .image-container {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.05);
        }
    </style>
    <!-- Page Title -->
    <picture class="banner-desktop"> <source media="(max-width: 575px)" srcset="assets/img/banner_eventos_site_mobile.jpg">
    <img class="banner-desktop" src="assets/img/banner_eventos_site_desktop.jpg" alt="Colégio Aliança" data-aos="fade-in">
    </picture><!-- End Page Title -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container mt-5" data-aos="fade-up">
        <div class="row galeria">

        </div>
    </div>
    </section><!-- /Events Section -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
           
            for (var i = 1; i <= 500; i++) {
                var caminhoImagem = "<?php echo $caminho_imagem; ?>" + i + ".jpg"; 
                var novaDiv = 
                    '<div class="col-md-3">' +
                        '<div class="image-container">' +
                            '<img src="' + caminhoImagem + '" alt="Imagem ' + i + '">' +
                        '</div>' +
                    '</div>';

                // Adiciona a nova div dentro da galeria
                $('.galeria').append(novaDiv);
            }

            $('img').each(function() {
                var img = $(this);

                // Adiciona um evento de erro para verificar se a imagem não existe
                img.on('error', function() {
                    // Quando a imagem não for encontrada, remove o elemento pai (a div da imagem)
                    img.closest('.image-container').remove();
                });
            });

        });
    </script>
  </main>
  <?php include('assets/master/rodape.php'); ?>
</body>
</html>