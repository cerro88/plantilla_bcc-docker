<?php
// Agrega los scripts y estilos al template
function bcc_add_theme_scripts() {
    // Carga el archivo de estilos principal del tema
    wp_enqueue_style('style', get_stylesheet_uri() .'?v=1.0.2');

    // Cargar fuentes de Google Fonts
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', false, null, 'all');

    // Carga Bootstrap desde CDN
    wp_enqueue_style('bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'bcc_add_theme_scripts');





/// Estilos dinámicos para el header en cada página
function add_custom_dynamic_styles() {
    // Verifica si estamos en una página específica y asigna la imagen de fondo correspondiente
    if (is_home()) {
        $background_img = get_template_directory_uri() . '/img/home2/blog-sider2.png';
    } elseif (is_page('contacte')) {
        $background_img = get_template_directory_uri() . '/img/contacte/calas-y-playas-de-la-sierra-de-tramuntana.jpg';
    } elseif (is_single()) {
        $background_img = get_template_directory_uri() . '/img/article/Rectangle9.png';
    } else {
        $background_img = get_template_directory_uri() . '/img/Image_blog_slider.png';
    }
    ?>
    <style>
        .imgblog1 {
            background-image: url('<?php echo esc_url($background_img); ?>');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            min-height: 600px; /* Asegurar que el header tenga altura */
            display: block;
        }
    </style>
    <?php
}
add_action('wp_head', 'add_custom_dynamic_styles');






// Habilitar soporte para imágenes destacadas
add_theme_support('post-thumbnails');





// Registrar un menú en WordPress
function bcc_register_my_menu() {
    register_nav_menu('primary', __('Menú de capçelera'));
}
add_action('init', 'bcc_register_my_menu');
?>
