<?php
/*
Template Name: Pàgina de contacte
*/

get_header(); // Llama al header de WordPress
?>

<!-- Contenedor principal -->
<div class="container-fluid">
    
    <!-- Mapa (Encima del contenido) -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3075.2569462138554!2d2.6516117114806135!3d39.57635910623977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129792543edf1a89%3A0x7de2edbbf5e9e346!2sIntermodal!5e0!3m2!1ses!2ses!4v1735973591227!5m2!1ses!2ses"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

    <!-- Contenido de la página (Formulario de contacto de WordPress) -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content(); // Esto muestra el formulario de Contact Form 7
                }
                ?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
