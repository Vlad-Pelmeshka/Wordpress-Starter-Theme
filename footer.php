<?php
/**
 * FOOTER
 *
 */

$footer_logo        = get_field('footer_logo', 'options');
$subfooter_text     = get_field('subfooter_text', 'options');
$banking_systems    = get_field('banking_systems', 'options');

?>

</main>



<footer class="footer">
    <div class="wrapper-container">
        <div class="footer-wrapper">
            <div class="footer-logo">
                <a href="/"><img src="<?php echo $footer_logo; ?>" alt="Footer Logo"></a>
            </div>

            <div class="footer-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'menu' => 'footer_menu',
                        'menu_class' => 'footer_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'container' => 'nav',
                        'container_class' => 'footer-navigation',
                        'link_class' => 'btn-link'
                    ));
                ?>
            </div>

            <?php get_social_shares('footer-social'); /* inc/general.php */ ?>
        </div>

        <div class="subfooter-wrapper">
            <div class=""><a href="/privacy-policy/">Договір Оферти</a></div>

            <div class=""><?php echo $subfooter_text; ?></div>

            <?php if($banking_systems): ?>

                <div class="subfooter-banking_systems">
                    <?php foreach($banking_systems as $key => $banking_system): ?>
                        <div class="banking_system">
                            <img src="<?php echo $banking_system['icon'] ?>" alt="Banking system">
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
        </div>
    </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>
