<?php
/**
 * Template Name: Plantilla de Home
 * Template Post Type: pages
 */
?>

<?php get_header(); ?>


        <!-- Contenedor blog regular -->
        <div class="blog-regular mt-5">
            <h2 class="topics mx-5 px-3">Popular topics</h2>
            <div class="row mx-5">
              
                <div class="d-flex col-sm-12 col-md-6 filter">
                    <a href=""> <p class="me-1 me-sm-2 me-md-3 all">All</p></a>
                    <a href=""><p class="me-1 me-sm-2 me-md-3">Adventure</p></a>
                    <a href=""><p class="me-1 me-sm-2 me-md-3">Travel</p></a>
                    <a href=""><p class="me-1 me-sm-2 me-md-3">Fashion</p></a>
                    <a href=""><p class="me-1 me-sm-2 me-md-3">Technology</p></a>
                    <a href=""><p class="me-1 me-sm-2 me-md-3">Branding</p></a>
                </div>
                
                <div class="col-sm-12 col-md-6">
                    <a href=""><p class="text-end filter">View All</p></a>
                </div>
            </div>

            <!-- Fila de tarjetas del blog 1-->
            <div class="row mx-5">
            <?php 
            // Configurar la consulta de publicaciones para mostrar 4 posts en la portada
            $args = array(
                'posts_per_page' => 4, // Número de posts a mostrar en la home
                'post_type'      => 'post', // Tipo de contenido (post)
                'orderby'        => 'date', // Ordenar por fecha
                'order'          => 'DESC' // Mostrar los más recientes primero
            );

            $query = new WP_Query($args);

            // Verificar si hay publicaciones
            if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post(); 
            ?>

            
            
            <!--Post dinámico -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="position-relative">
                    <!-- Imagen destacada -->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-fluid img-row" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid img-row" alt="Imagen por defecto">
                    <?php endif; ?>

                    <!-- Categoría principal -->
                    <div class="position-absolute top-0 end-0 mt-1 me-2 p-2 text-white category text-center rounded">
                        <?php
                        $category = get_the_category();
                        if (!empty($category)) {
                            echo esc_html($category[0]->name);
                        }
                        ?>
                    </div>
                </div>

                <div>
                    <!-- Fecha de publicación -->
                    <p class="date my-3"><?php echo get_the_date('d.m.Y'); ?></p>
                </div>
                <div>
                    <!-- Título con enlace al post -->
                    <a href="<?php the_permalink(); ?>">
                        <p class="title"><?php the_title(); ?></p>
                    </a>
                </div>
                <div>
                    <!-- Extracto del post -->
                    <p class="paragraph"><?php the_excerpt(); ?></p>
                </div>
            </div>
            
            <?php 
                endwhile;
                wp_reset_postdata(); // Restablecer la consulta de WordPress
            else : 
            ?>
                <p>No hay publicaciones disponibles.</p>
            <?php endif; ?>

            </div>
            <!--Fin de la fila de posts -->

            </div>
            <!--Fin del contenedor principal -->

            
        

            <!-- Fila de tarjetas del blog 2-->
            <div class="row mx-5">
            <?php 
            // Configurar la consulta de publicaciones para mostrar 4 posts en la portada
            $args = array(
                'posts_per_page' => 4, // Número de posts a mostrar en la home
                'post_type'      => 'post', // Tipo de contenido (post)
                'orderby'        => 'date', // Ordenar por fecha
                'order'          => 'ASC' // Mostrar los más antiguas primero
            );

            $query = new WP_Query($args);

            // Verificar si hay publicaciones
            if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post(); 
            ?>
            
            <!-- Post dinámico -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="position-relative">
                    <!-- Imagen destacada -->
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="img-fluid img-row" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid img-row" alt="Imagen por defecto">
                    <?php endif; ?>

                    <!-- Categoría principal -->
                    <div class="position-absolute top-0 end-0 mt-1 me-2 p-2 text-white category text-center rounded">
                        <?php
                        $category = get_the_category();
                        if (!empty($category)) {
                            echo esc_html($category[0]->name);
                        }
                        ?>
                    </div>
                </div>

                <div>
                    <!-- Fecha de publicación -->
                    <p class="date my-3"><?php echo get_the_date('d.m.Y'); ?></p>
                </div>
                <div>
                    <!-- Título con enlace al post -->
                    <a href="<?php the_permalink(); ?>">
                        <p class="title"><?php the_title(); ?></p>
                    </a>
                </div>
                <div>
                    <!-- Extracto del post -->
                    <p class="paragraph"><?php the_excerpt(); ?></p>
                </div>
            </div>
            
            <?php 
                endwhile;
                wp_reset_postdata(); // Restablecer la consulta de WordPress
            else : 
            ?>
                <p>No hay publicaciones disponibles.</p>
            <?php endif; ?>

            </div>
            <!--Fin de la fila de posts -->

        </div>
         <!--Fin del contenedor blog regular -->


        <!-- Contenedor Big Post -->
        <div class="big-post my-5">
            <div class="row ms-5">
                
                <div class="ms-2 col-2 text-center text-white fashion category p-2 rounded">
                    FASHION
                </div>
                <div class="col-5"></div>
            </div>
            <div class="contents text-center">
                <h2 class="text-white">Richird Norton photorealistic rendering as real photos</h2>
                <div class="text">
                    <p class="text-big-post">Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Line 5.png" alt="">
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
                // Argumentos para obtener los 3 posts destacados
                $args = array(
                    'posts_per_page' => 3, // Mostrar solo 3 publicaciones
                    'post_type'      => 'post',
                    'orderby'        => 'date', // Ordenar por fecha
                    'order'          => 'DESC', // Más recientes primero
                    'category_name'  => 'destacados' // Solo de la categoría "destacados" (puedes cambiar el slug)
                );

                $query = new WP_Query($args);

                // Verificar si hay publicaciones
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); 
                ?>
                
                <!-- Post destacado dinámico -->
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-5">
                    <div class="position-relative">
                        <!-- Imagen destacada -->
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid img-row" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid img-row" alt="Imagen por defecto">
                        <?php endif; ?>

                        <!-- Categoría principal -->
                        <div class="position-absolute top-0 end-0 mt-1 me-2 p-2 text-white category text-center rounded">
                            <?php
                            $category = get_the_category();
                            if (!empty($category)) {
                                echo esc_html($category[0]->name);
                            }
                            ?>
                        </div>

                        <!-- Contenido del post -->
                        <div class="position-absolute top-0 px-sm-1 p-md-3 p-xl-5 p-xxl-5 mt-5 mt-lg-2 mt-xl-5 px-2">
                            <p class="date_picks col-12 col-sm-6 mt-2 mt-xl-3 mt-xxl-5"><?php echo get_the_date('d.m.Y'); ?></p>
                            <a href="<?php the_permalink(); ?>">
                                <p class="text-white title title-pick col-12 col-md-12 col-xl-12 col-xxl-8"><?php the_title(); ?></p>
                            </a>
                            <div class="paragraph_picks col-xl-12 col-xxl-8">
                               <?php the_excerpt(); ?> 
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    endwhile;
                    wp_reset_postdata(); // Restablecer la consulta
                else : 
                ?>
                    <p class="text-center">No hay publicaciones destacadas disponibles.</p>
                <?php endif; ?>
            </div>
        </div>
        <!-- Fin del contenedor blog metro -->


<?php get_footer(); ?>
