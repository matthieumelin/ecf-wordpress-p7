<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon.png" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="header">
        <nav class="navbar">
            <div class="navbar_brand">
                <a href="/" class="navbar_brand_link"><img src="http://hl.local/wp-content/uploads/2021/05/logo.png" alt="Logo" class="navbar_brand_logo"></a>
            </div>
            <a href="/" class="navbar_link"><?php wp_title(); ?></a>
            <ul class="navbar_menu">
                <li class="navbar_menu_item">
                    <a href="#" class="navbar_menu_link">Accueil</a>
                </li>
            </ul>
        </nav>
    </header>