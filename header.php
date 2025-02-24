<?php
/**
 * Header Template
 * 
 * Plantilla del header utilizada en todas las páginas del sitio.
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!--Aqui se cargarán los cdn y la hoja de estilos que se han definido en la hoja de functions-->
    <?php  wp_head(); ?>

</head>
<body>
     <!-- Contenedor principal (se han reseteado a 0 margin y padding) -->
     <div class="container-fluid">

        <header>
            <!-- Contenedor slider -->
            <div class="blog-slider imgblog1">
                
                <!-- Menú de navegación -->
                <nav class="navbar navbar-expand-md text-center navbar-custom">
                    <div class="container">
                        <!-- Marca del sitio "Aquí se podría poner una imagen o logo del sitio" -->
                        <a class="navbar-brand fw-bold runo" href="#">RUNO</a>
                        <!-- Botón hamburguesa para dispositivos pequeños -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Contenedor de enlaces de navegación -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary', 
                                // Debe coincidir con el registrado en functions.php
                                'container' => 'ul', 
                                // Define que el contenedor será un <ul>
                                'menu_class' => 'navbar-nav ms-auto', 
                                // Clases Bootstrap para estilizar el menú
                                'add_li_class' => 'nav-item mx-2', 
                                // Clases a cada <li>
                                'link_class' => 'nav-link' 
                                // Clases para los enlaces <a>
                            ));
                            ?>
                        </div>

                    </div>
                </nav>
                <!-- Fin del menú de navegación -->



                <!-- Sección principal de texto del blog-text -->
                <div class="blog-text ms-sm-5 ps-sm-5 ms-md-5 ps-md-5 ms-lg-5 ps-lg-5">
                    <!-- Contenedor principal para la fila del texto -->
                    <div class="row">
                        
                        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-6 col-xxl-4">
                            <!-- Category -->
                            <div class="category text-white text-center p-2 position-absolute">
                                ADVENTURE
                            </div>
                            <!-- Contenedor para el título -->
                            <div>
                                <h1 class="text-white mt-5 mt-sm-5 mt-md-5 mt-lg-5 mt-xl-5">Richird Norton photorealistic rendering as real photos</h1>
                            </div>
                            <!-- Contenedor flex para la fecha, imagen y texto -->
                            <div class="d-flex text text_slider">
                                <p class="me-4">08.08.2021</p>
                                <img class="line4 mt-2 me-4" src="<?php echo get_template_directory_uri(); ?>img/Line 4.png" alt="">
                                <p class="">Progressively incentivize cooperative systems through technically sound<br> functionalities. The credibly productivate seamless data.</p>
                            </div>

                            <!-- Contenedor flex para las imágenes de los puntos -->
                            <div>
                                <div class="d-flex ellipse mt-5">
                                    <img class="" src="<?php echo get_template_directory_uri(); ?>/img/Ellipse 5.png" alt="">
                                    <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/img/Ellipse 6.png" alt="">
                                    <img class="ms-4" src="<?php echo get_template_directory_uri(); ?>/img/Ellipse 7.png" alt="">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Fin del primer bloque 'blog-text' -->
                 
            </div>
            <!-- Fin del contenedor slider -->
        </header>