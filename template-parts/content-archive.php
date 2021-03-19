
<div class="mt-5 mb-5 text-center card" <?php post_class(); ?>>

    <div class="top-img">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( array( 200, 200 ), ['class' => 'rounded shadow']  ); ?>
        </a>
    </div>

    <h5 class="mt-4">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h5>

    <div class="">
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <div class="p-2">
        <?php the_excerpt(); ?>
    </div>

</div>