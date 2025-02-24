<?php
/**
 * Template Name: Plantilla de Blog Noticias
 * Template Post Type: pages
 */
?>

<?php get_header(); // Incluye el encabezado de la página desde header.php ?>

<!-- Contenedor de categorías de blog -->
<div class="blog-regular mt-5">
    <h2 class="topics mx-5 px-3">Popular topics</h2> 
    <div class="row mx-5">
        <!-- Filtros de categorías -->
        <div class="d-flex col-sm-12 col-md-6 filter">
            <p class="me-1 me-sm-2 me-md-3 all">All</p>
            <p class="me-1 me-sm-2 me-md-3">Adventure</p>
            <p class="me-1 me-sm-2 me-md-3">Travel</p>
            <p class="me-1 me-sm-2 me-md-3">Fashion</p>
            <p class="me-1 me-sm-2 me-md-3">Technology</p>
            <p class="me-1 me-sm-2 me-md-3">Branding</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <p class="text-end filter">View All</p> <!-- Enlace para ver todas las categorías -->
        </div>
    </div>
</div>
<!-- Fin del contenedor de categorías -->

<!-- Bloque de noticias -->
<div class="row d-flex align-items-stretch pt-3 px-5">

    <?php 
    // Se comprueba si hay publicaciones disponibles en la consulta de WordPress
    if (have_posts()) : 
        global $wp_query; // Obtiene la consulta global de publicaciones
    ?>

        <!-- Paginación antes del bucle -->
        <div class="pagination-container mt-4">
            <?php 
            the_posts_pagination(array(
                'mid_size' => 2, // Número de páginas visibles antes y después de la actual
                'prev_text' => __('Anterior', 'textdomain'), // Texto del botón "Anterior"
                'next_text' => __('Siguiente', 'textdomain'), // Texto del botón "Siguiente"
            )); 
            ?>
        </div>

        <!-- Bucle para recorrer todas las publicaciones -->
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-3"> <!-- Cada post ocupa 1/4 de la fila en pantallas medianas y grandes -->
                <div class="position-relative h-100">
                    
                    <!-- Imagen destacada de la publicación -->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-fluid img-row" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="ruta/a/imagen-por-defecto.jpg" class="img-fluid img-row" alt="Imagen por defecto">
                    <?php endif; ?>

                    <!-- Categoría de la publicación -->
                    <div class="position-absolute top-0 end-0 mt-1 me-2 d-flex gap-2">
                        <?php
                        $category = get_the_category();
                        if (!empty($category)) {
                            echo '<div class="p-2 text-white category text-center rounded">' . esc_html($category[0]->name) . '</div>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Contenido de la noticia -->
                <div class="box-texto h-100">
                    <div>
                        <!-- Fecha de la publicación -->
                        <p class="date my-3 px-5"><?php echo get_the_date('d.m.Y'); ?></p>
                    </div>
                    <div>
                        <!-- Título con enlace al post -->
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="title px-5"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div>
                        <!-- Extracto del contenido -->
                        <p class="paragraph px-5"><?php the_excerpt(); ?></p>
                    </div>
                    <div>
                        <img class="line3 ps-4" src="img/home2/Line3.png" alt="">
                    </div>
                    <div class="d-flex align-items-center">
                        <!-- Información del autor -->
                        <img class="" src="<?php echo get_template_directory_uri(); ?>/img/home2/Ellipse4.png">
                        <div class="ps-2">
                            <p class="mb-0 name">By <?php the_author(); ?></p>
                            <p class="mb-0 job">Author</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <!-- Paginación después del bucle -->
        <div class="pagination-container mt-4">
            <?php 
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('Anterior', 'textdomain'),
                'next_text' => __('Siguiente', 'textdomain'),
            )); 
            ?>
        </div>

        <?php else : ?>
            <!-- Si no hay publicaciones, se muestra este mensaje -->
            <p>No hay noticias disponibles.</p>
        <?php endif; ?>

</div>
<!-- Fin Bloque de noticias -->

        <!-- Contenedor Big Post -->
        <div class="big-post2 my-5">
            <div class="row ms-5">
                <div class="ms-5 col-5"></div>
                <div class="ms-2 col-2 text-center text-white fashion category p-2 rounded">
                    FASHION
                </div>
                <div class="col-5"></div>
            </div>
            <div class="contents text-center">
                <h2 class="text-white">Richird Norton photorealistic rendering as real photos</h2>
                <div class="text">
                    <p class="text-big-post">Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>img/Line 5.png" alt="">
                    <p class="mt-2">08.08.2021</p>
                </div>
            </div>
        </div>
        <!-- Fin del contenedor Big Post --> 

        <!-- Contenedor blog metro (Editor’s Pick) -->
        <div class="bolg-metro my-5 mx-5">
            <div class="py-5">
                <h2>Editor's Pick</h2>
            </div>

            <div class="row">
                <?php
                // Configurar la consulta para obtener los 2 posts más recientes de la categoría "destacados"
                $args = array(
                    'posts_per_page' => 2, // Mostrar solo 2 publicaciones
                    'post_type'      => 'post',
                    'orderby'        => 'date', // Ordenar por fecha
                    'order'          => 'DESC', // Más recientes primero
                    'category_name'  => 'destacados' // Slug de la categoría
                );

                $query = new WP_Query($args);

                // Verificar si hay publicaciones en la consulta
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); 
                ?>
                
                <!-- 🔹 Post destacado dinámico -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-5">
                    <div class="position-relative">
                        <!-- Imagen destacada del post -->
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid img-row" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid img-row" alt="Imagen por defecto">
                        <?php endif; ?>

                        <!-- Categoría principal del post -->
                        <div class="position-absolute top-0 end-0 mt-1 me-2 p-2 text-white category text-center rounded">
                            <?php
                            $category = get_the_category();
                            if (!empty($category)) {
                                echo esc_html($category[0]->name);
                            }
                            ?>
                        </div>

                        <!-- Contenido del post -->
                        <div class="position-absolute top-0 px-sm-1 p-md-3 p-xl-5 p-xxl-5 mt-lg-2 mt-xl-5 px-2">
                            <p class="date_picks col-12 col-sm-6 mt-2 mt-xl-3 mt-xxl-5"><?php echo get_the_date('d.m.Y'); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <p class="text-white title title-pick2 col-12 col-md-12 col-xl-12 col-xxl-8"><?php the_title(); ?></p>
                            </a>
                            <div class="paragraph_picks col-xl-12 col-xxl-8">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endwhile;
                    wp_reset_postdata(); // Restablecer la consulta de WP para evitar conflictos con otras consultas en la página
                else : 
                ?>
                    <p class="text-center">No hay publicaciones destacadas disponibles.</p>
                <?php endif; ?>
            </div>
        </div>
        <!-- Fin del contenedor blog metro -->


<?php get_footer(); // Incluye el pie de página desde footer.php ?>
