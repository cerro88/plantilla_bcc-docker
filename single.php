<?php
/**
 * Template Name:Single Post
 * Plantilla para enseñar una entrada del blog
 */
?>



<?php 
get_header(); 

// Verifica si hay una publicación para mostrar
if (have_posts()) :
    while (have_posts()) : the_post(); 
?>

<!-- Blog Post -->
<div class="blog-post mt-5 mx-5 pt-5">
    <div class="row">
        <div class="col-xl-3">
            <div class="d-flex">
                <p class="ps-xxl-3 ms-xxl-5 ps-xxl-5 data-art">
                    <?php echo get_the_date('d.m.Y'); // Fecha dinámica ?>
                </p>
                <img class="line-art mt-2 mx-3" src="<?php echo get_template_directory_uri(); ?>/img/article/line-art.png" alt="separator">
            </div>
        </div>
        <div class="col-xl-7">
            <h1><?php the_title(); ?></h1> <!-- Título de la noticia -->
            <p class="text-justify text-art"><?php the_content(); ?></p> <!-- Contenido dinámico -->
        </div>
        <div class="col-2"></div>
    </div>
</div>


<!-- Información del autor -->
<div class="post-info">
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-7 ms-5">
            <div class="row">
                <div class="col-xl-12 mt-5">
                    <p class="mb-0 name">By <?php the_author(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Publicaciones relacionadas -->
<div class="related-post">
    <div class="mx-5 mt-5 pt-5">
        <p class="mt-5 mx-5 px-2">Related Posts</p>
        <div class="row mx-5">
            <?php
            // Obtiene 3 publicaciones relacionadas (mismo categoría)
            $related = new WP_Query(array(
                'category__in'   => wp_get_post_categories($post->ID),
                'posts_per_page' => 3,
                'post__not_in'   => array($post->ID)
            ));
            if ($related->have_posts()) :
                while ($related->have_posts()) : $related->the_post(); 
            ?>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 mb-4">
                    <div class="position-relative">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid img-row')); ?>
                        </a>
                        <div class="position-absolute top-0 end-0 mt-1 me-2 p-2 text-white category text-center rounded">
                            <?php the_category(', '); ?>
                        </div>
                    </div>
                    <div>
                        <p class="date my-3"><?php echo get_the_date('d.m.Y'); ?></p>
                    </div>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <p class="title-related"><?php the_title(); ?></p>
                        </a>
                    </div>
                    <div>
                        <p class="paragraph"><?php the_excerpt(); ?></p>
                    </div>
                </div>
            <?php 
                endwhile; 
                wp_reset_postdata();
            endif; 
            ?>
        </div>
    </div>
</div>

<?php 
    endwhile; 
endif;

get_footer(); 
?>