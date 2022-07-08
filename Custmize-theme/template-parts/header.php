<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'echo' => false,
] );
$header_nav_menu = wp_get_nav_menu_items("menu1");
?>
<a class="skip-link screen-reader-text" href="#content">
	<?php _e( 'Skip to content', 'hello-elementor' ); ?></a>

<!-- <nav class="navbar navbar-dark bg-dark"> -->

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} elseif ( $site_name ) {
			?>
			
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
					<?php echo esc_html( $site_name ); ?>
				</a>
			<p class="site-description">
				<?php
				if ( $tagline ) {
					echo esc_html( $tagline );
				}
				?>
			</p>
		<?php } ?>

	<?php if ( $header_nav_menu ) : ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<?php foreach( $header_nav_menu as $item ) : ?>
					<li class="navbar-nav">
						<a class="nav-link" href="<?php echo $item->url; ?>">
							<?php echo $item->title; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
	</div>

</nav>
