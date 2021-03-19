<?php get_header(); ?>
<article class="mt-5">
    <!-- <h2><?php the_title(); ?> </h2> -->
    <!-- <?php the_post_thumbnail('thumb'); ?> -->
    <h5 class="text-light"><span class="badge "><?php  the_category( ' ' ); ?></span></h5>
    <div class="mt-5">
        <?php the_content();?>
    </div>

    <!-- <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> </p> -->
    <!-- <p><?php the_category( ' ' ); ?> </p> -->
    <div class="badge"> <?php the_tags( 'Tags:', ' '  ); ?> </div>      

   
</article>