<?php get_header(); ?>
<h1><?php echo get_the_archive_title(); ?></h1>
<?php 
if(have_posts()): 
    while(have_posts()): 
        the_post(); 
        get_template_part('template-parts/common/card', get_post_type());
    endwhile;
endif; 
?>
<?php get_footer(); 