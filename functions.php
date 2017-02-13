<?php
/**
 * Genesis Starter Child Theme - Developer's Edition
 *
 * This is the theme's bootstrap, which is responsible to initialize
 * the child theme.
 *
 * @package     KnowTheCode\GenStarter
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/genstarter-dev-edition
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter;

/**
 * Initialize the theme's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$child_theme = wp_get_theme();

	define( 'CHILD_THEME_NAME', $child_theme->get( 'Name' ) );
	define( 'CHILD_THEME_URL', $child_theme->get( 'ThemeURI' ) );
	define( 'CHILD_THEME_VERSION', $child_theme->get( 'Version' ) );
	define( 'CHILD_TEXT_DOMAIN', $child_theme->get( 'TextDomain' ) );
	define( 'CHILD_THEME_DIR', get_stylesheet_directory() );
	define( 'CHILD_CONFIG_DIR', CHILD_THEME_DIR . '/config/' );

	define( 'CHILD_THEME_IN_DEV_MODE', defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG );
}

/**
 * Kick off the theme by initializing its files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_autoloader() {
	require_once( __DIR__ . '/lib/support/autoloader.php' );

	Support\autoload_files( __DIR__ . '/lib/' );
}

add_action( 'genesis_init', __NAMESPACE__ . '\init_child_theme' );
/**
 * Initialize the theme.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_child_theme() {
	init_constants();

	init_autoloader();
}
