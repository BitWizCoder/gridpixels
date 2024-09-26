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