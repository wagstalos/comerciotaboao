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
			<?php	the_archive_title( '<h4 class="archive-title text-center text-light">', '</h4>' ); ?>
    </div>
</div>
    <div class="mt-5">
        <main>
            <section>
                <div class="container">
                    <div class="row">

                        <div class="archive col-md-6">
                            <?php 
													// the_archive_title( '<h4 class="archive-title">', '</h4>' );
													the_archive_description();

													// Se houver algum post
													if( have_posts() ):
														// Enquanto houver posts, mostre-os pra gente
														while( have_posts() ): the_post();
												?>
                            <?php get_template_part( 'template-parts/content', 'archive' ); ?>

                            <?php 
								endwhile;

								?>
                            <div class="row">
                                <div class="pages text-left col-6">
                                    <?php previous_posts_link( "<< Newer posts" ); ?>
                                </div>
                                <div class="pages text-right col-6">
                                    <?php next_posts_link( "Older posts >>" ); ?>
                                </div>
                            </div>


                            <?php
							else:
							?>

                            <p>There's nothing yet to be displayed...</p>

                            <?php endif; ?>

                        </div>
                        <?php get_sidebar( 'home' ); ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php get_footer(); ?>