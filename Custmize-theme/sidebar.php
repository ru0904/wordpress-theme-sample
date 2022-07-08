<?php
/**
 * The template for displaying sidebar.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * This file is here to avoid the Deprecated Message for sidebar by wp-includes/theme-compat/sidebar.php.
 */
?>
<aside class="col-4" role="aside">
			<div class="">
				<h4>月次アーカイブ</h4>
			  	<ul class="">
	  				<?php echo wp_get_archives( "type-monthly&show_post_count=true" ); ?>
			  	</ul>
			</div>
			<div class="pt-2">
				<h4>カテゴリアーカイブ</h4>
				<?php $categorise = get_categories(); ?>
			  	<ul class="">
	  				<?php foreach( $categories as $category ) : ?>
						<li>
							<a href="#"><?php echo $category->name; ?></a>
						</li>
			<?php endforeach; ?>
		</ul>
	</div>
</aside>