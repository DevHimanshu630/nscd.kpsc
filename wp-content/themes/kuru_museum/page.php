<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container content_container">

				<div class="row">
					<div class="col-lg-9 col-md-9">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );
                //the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
			<div class="col-lg-3 col-md-3 sidebar">
				<!--<h3>QUICK LINKS</h3>
				<ul>
					<li><a href="">DINOSAUR ENCLAVE</a></li>
					<li><a href="">3-D FILM FANTACY</a></li>
					<li><a href="">SCIENCE PARK</a></li>
					<li><a href="">PLAN YOUR VISIT</a></li>
					<li><a href="">INDIAN SCIENTIFIC HERITAGE GALLERY</a></li>
					<li><a href="">INDIAN TECHNOLOGICAL HERITAGE GALLERY</a></li>
					<li><a href="">PANORAMA ON MAHABHARAT-BATTLE OF KURUKSHETRA</a></li>
					<li><a href="">FUN SCIENCE GALLERY</a></li>
					
				</ul>-->
				<?php get_sidebar();?>
			</div>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
