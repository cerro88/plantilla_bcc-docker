<?php
/*
Template Name: Pàgina de contacte
*/

get_header();

while (have_posts()) {
    the_post();
    the_content();
}
    

get_footer();