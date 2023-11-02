<?php
/* The embedded script is displayed in the header */
add_action('wp_head', 'custom_inline_scripts_header');
function custom_inline_scripts_header() {
    ?>

	

<?php }

/* The embedded script is displayed after the opening body tag */
add_action('wp_body_open', 'custom_inline_scripts_body');
function custom_inline_scripts_body() {
    ?>
    


    <?php
}

/* The embedded script is displayed in the footer */
add_action('wp_footer', 'custom_inline_scripts_footer');
function custom_inline_scripts_footer() {
    ?>
    

	
    <?php
}