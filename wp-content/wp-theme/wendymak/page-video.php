<?php
/*
  Template Name: Video Template
*/

?>
<?php get_header(); ?>

<div class="page-header container">
          <h1>dress yourself for life – no matter what your size!</h1>
        </div>

</header><!-- #masthead -->

<div id="content" class="site-content container">

        <?php if ( dynamic_sidebar( 'video-banner' ) ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <?php if ( dynamic_sidebar( 'video-widget' ) ); ?>
    
    </div>

<?php
get_footer();
?>