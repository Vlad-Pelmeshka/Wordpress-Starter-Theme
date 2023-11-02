<?php
/**
 * Imports
 */

/* Include shortcodes */
require get_template_directory() . '/inc/shortcodes.php';

/* General settings */
require get_template_directory() . '/inc/general.php';

/* Adding SVG */
require get_template_directory() . '/inc/add_svg.php';

/* Connecting standard scripts and CSS */
require get_template_directory() . '/inc/wp_enqueue.php';

/* ACF Settings section */
require get_template_directory() . '/inc/acf-settings.php';

/* Special embedded scripts */
require get_template_directory() . '/inc/inline-scripts.php';