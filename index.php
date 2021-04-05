<?php get_header(); ?>

<?php 

    while(have_posts()) {
        the_post();

        echo "hi<br>";
?>

        <h3><?php the_title(); ?></h3>

<?php
    }

?>

<?php get_footer(); ?>