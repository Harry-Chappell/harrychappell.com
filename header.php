<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?> >
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        
        <?php wp_head(); ?>
    
    </head>
    
    <body <?php body_class( "detail1" ); ?>>
        <?php wp_body_open(); ?>

        <button class="btn-toggle">Toggle Dark-Mode</button>

        <script>
            const btn = document.querySelector(".btn-toggle");
            const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

            btn.addEventListener("click", function () {
            if (prefersDarkScheme.matches) {
                document.body.classList.toggle("light-theme");
            } else {
                document.body.classList.toggle("dark-theme");
            }
            });

        </script>

        <div id="wrapper" class="hfeed">

            <header id="header" role="banner">
                <div id="branding">
                    <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                        <?php
                        if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                        if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                        ?>
                    </div>
                    <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
                </div>
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                </nav>
            </header>

            <div id="container">
                <main id="content" role="main">

                <input id="detail-slider" type="range" min="1" max="7" value="1" list="tickmarks">
                <output></output>
                <datalist id="tickmarks">
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
                <option value="6"></option>
                <option value="7"></option>
                </datalist>

                <script>
                    const slider = document.querySelector("#detail-slider");

                    slider.addEventListener("input", function () {
                        document.body.classList.remove("detail1");
                        document.body.classList.remove("detail2");
                        document.body.classList.remove("detail3");
                        document.body.classList.remove("detail4");
                        document.body.classList.remove("detail5");
                        document.body.classList.remove("detail6");
                        document.body.classList.remove("detail7");
                        document.body.classList.add("detail" + slider.value);
                    });
                </script>
