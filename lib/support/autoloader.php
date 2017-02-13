<?php
/**
 * Description
 *
 * @package     ${NAMESPACE}
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */
namespace KnowTheCode\GenStarter\Support;

/**
 * Load all of the theme's files.
 *
 * @since 1.0.0
 *
 * @param string $src_root_dir Theme's root directory for the source files
 *
 * @return void
 */
function autoload_theme_files( $src_root_dir ) {
	$filenames = array(
		'support/config-helpers.php',
		'support/assets.php',

		'components/author-box.php',

		'structure/archive.php',
		'structure/comments.php',
		'structure/footer.php',
		'structure/header.php',
		'structure/menu.php',
		'structure/post.php',
		'structure/sidebar.php',

		'setup.php',
	);

	load_specified_files( $filenames, $src_root_dir );
}

/**
 * Load each of the specified files.
 *
 * @since 1.0.0
 *
 * @param array $filenames Array of filenames to load
 * @param string $folder_root
 *
 * @return void
 */
function load_specified_files( array $filenames, $folder_root = '' ) {
	$folder_root = $folder_root ?: CHILD_THEME_DIR . '/lib/';

	foreach ( $filenames as $filename ) {
		require_once( $folder_root . $filename );
	}
}