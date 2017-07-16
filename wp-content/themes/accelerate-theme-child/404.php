<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<!--<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'accelerate' ); ?></h1>
			</header>
    -->

			<div class="page-wrapper">
				<div class="error-page-content">
					<div class="error-map"></div>

					<div class="error-main-content">
					<h2> Whoops, Took a Wrong Turn... </h2>
					<p> Sorry, this page no longer exists, never existed or has <br>
              been moved.  We feel like complete jerks for totally <br>
              misleading you. <br> </br>
              Feel free to look around our <a href="<?php echo esc_attr( site_url('/blog/') ); ?>" ><span>blog</span></a> or some of our featured <a href="<?php echo esc_attr( site_url('/case-studies/') ); ?>" ><span>work</span></a>.</p>


					</div>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
