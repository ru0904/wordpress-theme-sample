<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
while ( have_posts() ) :
	the_post();
	?>
	  <main id="content" class="col-8" role="main">
	  		<header class="pege-header">
		  		<?php the_title( '<h1 class="entry-title">','</h1>' ); ?>
	  		</header>
			<div class="page-content">
				<?php the_content(); ?>
			</div>	
		</main>
	<?php
endwhile;
