<?php get_header(); ?>
<h1>single.php [Default Single Post Page]</h1>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <?php the_content();?>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>