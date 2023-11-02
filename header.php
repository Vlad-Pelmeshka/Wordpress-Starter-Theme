<?php
/**
 * HEADER
 *
 * @package admiral-sudies
 */

    $main_logo = get_field('main_logo','options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header">
	<div class="container">
		<div class="header-wrapper flex flex-center">
            <div class="header-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?= $main_logo ?>" alt="Logo"></a>
            </div>

            <div class="header-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu' => '',
                    'menu_class' => 'header-menu-list ',
                    'container' => false,
                    'menu_id' => 'header-menu',
                    'echo' => true,
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'items_wrap' => '<ul id="%1$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                )); ?>
            </div>

            <div class="header-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
	</div>
</header>

<main class="main">
