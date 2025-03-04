<?php
/**
 * The template for displaying archive pages
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

	<?php //if ( have_posts() ) : ?>
		<header class="page-header">
			<?php 
			 echo '<h1 class="page-title">'.str_replace("Category:", "", get_the_archive_title()).'</h1>'; 
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header><!-- .page-header -->
	<?php //endif; ?>

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif; ?>
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
