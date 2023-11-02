<?php
/**
 * This file is used to register ACF Gutenberg blocks
 *
 * @package Admiral
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'acf/init', 'pr_register_acf_gutenberg_block_types' , 10 );
add_filter( 'block_categories_all', 'pr_add_custom_block_category' , 10, 2 );


function pr_add_custom_block_category( $categories, $post ) {
    $desired_position = 0;
    $pr_category = array(
        'slug'  => 'admiral-custom-blocks',
        'title' => 'Admiral Blocks',
        'icon'  => 'block-default',
    );

    array_splice( $categories, $desired_position, 0, array( $pr_category ) );

    return $categories;
}


function pr_register_acf_gutenberg_block_types() {
    
    $blocks_title = array(
        'accordion',
        'slider',
    );

    if ( function_exists( 'acf_register_block_type' ) ) {

        foreach ( $blocks_title as $name ) {
            acf_register_block_type(
                array(
                    'name'            => $name . '-block',
                    'title'           => __( ' Admiral', 'admiral' ) . ' | ' . ucwords( str_replace( '-', ' ', $name ) ),
                    'description'     => ucwords( str_replace( '-', ' ', $name ) ) . __( ': ACF block for Gutenberg Editor', 'admiral' ),
                    'render_template' => 'template-parts/blocks/block-' . $name . '.php',
                    'render_callback' => 'block_render',
                    'category'        => 'admiral-custom-blocks',
                    'icon'            => 'wordpress',
                    'mode'            => 'edit',
                    'supports'        => array(
                        'mode' => false,
                    ),
                    'example' => array(
                        'attributes' => array(
                            'mode' => 'preview',
                            'data' => array(
                                'image' => '<img src="' . get_template_directory_uri() . '/template-parts/blocks/previews/' . ucwords( str_replace( '-', ' ', $name ) ) . '.png' . '" style="width:100%;display: block; margin: 0 auto;">'
                            ),
                        ),
                    ),
                )
            );
        }
    }
}


function block_render( $block, $content = '', $is_preview = false ) {
  
    if ( $is_preview && ! empty( $block['data'] ) ) {
        echo $block['data']['image'];
        return;
    } else {
        if ( $block ) :
            $template = $block['render_template'];
            $template = str_replace( '.php', '', $template );
            get_template_part( '/' . $template );
        endif;
    }
}