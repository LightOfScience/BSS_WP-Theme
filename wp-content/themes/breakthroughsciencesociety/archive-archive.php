<?php get_header(); ?>
<h1>archive-archive.php </h1>

<?php 
if(have_posts()) : 
    while(have_posts()) : the_post();
        echo "<h1>";the_title();echo "</h1>";
        the_excerpt();
    endwhile; 
else: 
endif; 
?>

<?php get_footer(); ?>