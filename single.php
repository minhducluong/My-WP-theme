<?php get_header(); ?>
<div class="col-sm-9 blog-main">

    <?php 
    if ( have_posts() ):
    while ( have_posts() ) : the_post();
    ?>

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
    </div><!-- /.blog-post -->

    <?php
    endwhile;
    endif;
    ?>

</div><!-- /.blog-main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>