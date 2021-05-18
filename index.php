<?php get_header(); ?>
<main>
    <?php 
    if(have_posts()): 
        while(have_posts()): 
            the_post(); 
            get_template_part('template-parts/common/content', get_post_type());
        endwhile;
    endif; 
    ?>
</main>
<?php get_footer(); 