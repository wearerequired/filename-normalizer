<?php
/**
 * Plugin Name: Filename Normalizer
 * Description: Normalizes filenames before they are uploaded.
 * Version:     1.0.0
 * Author:      required
 * Author URI:  https://required.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package FilenameNormalizer
 */

namespace Required\FilenameNormalizer;

use Normalizer;

/**
 * Normalizes a filename before it is uploaded to WordPress.
 *
 * @param array $file An array of data for a single file.
 * @return array An array of data for a single file.
 */
function normalize_file_name( $file ) {
	if ( ! Normalizer::isNormalized( $file['name'], Normalizer::FORM_C ) ) {
		$file['name'] = Normalizer::normalize( $file['name'], Normalizer::FORM_C );
	}

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', __NAMESPACE__ . '\normalize_file_name', 1 );
