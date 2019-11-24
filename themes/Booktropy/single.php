
<?php get_header(); ?>

<?php
    //Loop de wordpress
    while(have_posts()): the_post();
?>
<h1> <?php the_title(); ?> </h1>
<?php the_content(); ?>
<?php endwhile; ?> 

<?php get_footer(); ?>
