<?php get_header(); ?>

        <div class="page-header container">
          <h1>free style series – limited time only </h1>
        </div>

</header><!-- #masthead -->

<div id="content" class="site-content container">

<section>
    <div class="container box-head">
        <?php if ( dynamic_sidebar( 'front-banner' ) ); ?>
    </div>
</section>
<section class="container">
    <?php if ( dynamic_sidebar( 'front-widget-1' ) ); ?>
</section>
<section class="container">
    <?php if ( dynamic_sidebar( 'front-widget-2' ) ); ?>
</section>
    

<?php get_footer(); ?>