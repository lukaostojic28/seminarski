<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Christmas Sweets
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'christmas-sweets' ); ?></a>
<header id="masthead" class="site-header" role="banner">
	<div class="header-wrap">
		<div class="site-branding">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
			if ( is_front_page() && ! is_paged() ) {
				echo '<h1 class="screen-reader-text">' . get_bloginfo( 'name' ) . '</h1>';
			}
		} else {

			if ( display_header_text() ) {
				if ( is_front_page() && ! is_paged() ) {
					?>
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					<?php
				} elseif ( is_front_page() && is_paged() ) {
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				} else {
					?>
					<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
					<?php
				}
			}

			if ( display_header_text() && get_bloginfo( 'description' ) ) {
				?>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php
			}
		}
		echo '</div>';

		if ( has_custom_header() ) {
			the_custom_header_markup();
		}

		christmas_sweets_header_nav();

		?>
	</div><!-- #header-wrap -->
</header><!-- #masthead -->
