<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress Practice</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container">
            <!-- Logo -->
            <div class="site-logo">
                <?php if (has_custom_logo()) : ?>
                    <a href="<?php echo home_url(); ?>">
                        <?php the_custom_logo(); ?>
                    </a>
                <?php else : ?>
                    <!-- Fallback to site name if no logo is set -->
                    <p><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
            </div>

            <!-- Navigation Menu -->
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-list',
                ));
                ?>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content">

    </div>

    <footer class="site-footer">
        <!-- Logo -->
        <div class="site-logo">
            <?php if (has_custom_logo()) : ?>
                <a href="<?php echo home_url(); ?>">
                    <?php the_custom_logo(); ?>
                </a>
            <?php else : ?>
                <!-- Fallback to site name if no logo is set -->
                <p><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
            <?php endif; ?>
        </div>
        <div class="footer-about">
            <p>Your all-in-one solution for web design and development services.</p>
        </div>
        <!-- Navigation Menu -->
        <nav class="footer-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'menu_class'     => 'nav-list',
            ));
            ?>
        </nav>
        <div>
            <p>© 2024 GridPixels. All Rights Reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>