<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <?php get_header();?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Memorial do TJRS</title>
</head>

<body>
<main>
    <div class="row">
        <div class="col mb-5">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Carrosseis/Carrossel 1.png" class="d-block w-100" alt="Visite o Memorial">
            </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Carrosseis/Carrossel 2.png" class="d-block w-100" alt="Lendas e Folclore">
            </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Carrosseis/Carrossel 3.png" class="d-block w-100" alt="Visita Memorial">
            </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Carrosseis/Carrossel 4.png" class="d-block w-100" alt="O que rolou em Setembro">
            </div>
                <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/Imagens/Carrosseis/Carrossel 5.png" class="d-block w-100" alt="Palácio em Foco">
            </div>
        </div>
        </div>
    </div>
        <button class="carousel-control-prev" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Anterior</span>
                    </button>
                        <button class="carousel-control-next" role="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    </div>
                    </div>
                </main>
            </body>

<?php get_footer();?>
</html>