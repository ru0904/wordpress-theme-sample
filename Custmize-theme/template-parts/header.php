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
$header_nav_menu = wp_get_nav_menu_items("menu-1");
?>
<a class="skip-link screen-reader-text" href="#content">
	<?php _e( 'Skip to content', 'hello-elementor' ); ?></a>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
	 <?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} elseif ( $site_name ) {
			?>

			 <a class="navbar-brand" href="#">Navbar</a>
			 <?php echo esc_html($site_name); ?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Home', 'hello-elementor' ); ?>" rel="home">
					<?php echo esc_html( $site_name ); ?>
				</a>
			</h1>
			<p class="site-description">
				<?php
				if ( $tagline ) {
					echo esc_html( $tagline );
				}
				?>
			</p>
		<?php } ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	</div>

	<?php if ( $header_nav_menu ) : ?>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	<div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
		<?php foreach ($headre_nav_menu as $item) :?>
			<li class="nav-item">
          <a class="nav-link"  href="<?php $item->url; ?>">"
		  <?php $item->title; ?>
		</a>
		</li>
			<?php endforeach; ?>
		</ul>
		</div>
	<?php endif; ?>
</nav>
