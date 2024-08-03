<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
            <header class="page-header">
              <?php if ( have_posts() ) : ?>
              <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
              <?php else : ?>
              <h1 class="page-title">
                <?php _e( 'Nothing Found', 'twentyseventeen' ); ?>
              </h1>
              <?php endif; ?>
            </header>
            <!-- .page-header -->
            
            <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/contentsearch', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>
            <p>
              <?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?>
            </p>
            <?php
				get_search_form();

		endif;
		?>
          </div>
          <div class="col-lg-3 col-md-3 sidebar">
           <!-- <h3>QUICK LINKS</h3>
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
    </main>
    <!-- #main --> 
  </div>
  <!-- #primary --> 
  <br>
  <br>

</div>
<!-- .wrap -->

<?php get_footer();

