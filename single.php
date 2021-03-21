<?php get_header(); ?>
<div class="banner-stores">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon back-arrow icon-tabler-arrow-back-up" width="56"
                height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2BB7DA" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
            </svg>
            
        </a>
        <div class="text-center">
            <?php the_post_thumbnail(array( 100, 100 ), ['class' => 'rounded shadow']); ?>
            <h2 class="text-light mt-2"><?php the_title(); ?> </h2>
        </div>

    </div>

</div>
<div id="primary">
    <div id="main">
        <div class="container">
            <?php 

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'single' );

					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				?>
        </div>
    </div>
</div>
<?php get_footer(); ?>