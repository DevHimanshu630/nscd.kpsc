<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container content_container">

				<div class="row">
					<div class="col-lg-9 col-md-9">
                    <br />
			<?php
			while ( have_posts() ) : the_post();
              the_title( '<h1 class="entry-title_template">', '</h1>' );
				//get_template_part( 'template-parts/page/content', 'page' );
                the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
			<div class="col-lg-3 col-md-3 sidebar">
			
				<?php get_sidebar();?>
			</div>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>



<?php get_footer();?>