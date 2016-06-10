<?php
/*
  Template Name: member-login-2
*/
?>



<?php

    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) {
        //self::redirect('member-login-2');
    } else {
    ?>
        <script>
          document.location = 'http://www.notaboutsize.com/membership/';
        </script>
    <?php
    }


?>

<?php
get_header(); ?>

        <div class="page-header container">
          <h1><?php wp_title(''); ?></h1>
        </div>

</header><!-- #masthead -->

<div id="content" class="site-content container">

	<div id="primary" class="content-area col-md-9">
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
<div class="col-md-3">
<?php
get_sidebar(); ?>

    </div>

<?php
get_footer();
