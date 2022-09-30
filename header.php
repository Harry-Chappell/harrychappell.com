<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?> >
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        
        <?php wp_head(); ?>

        <!-- <script src="https://kit.fontawesome.com/9764a321e0.js" crossorigin="anonymous"></script> -->
    
    </head>
    
    <body <?php body_class( "detail5" ); ?>>
        <?php wp_body_open(); ?>

        <button class="btn-dark-mode"><i class="fa-solid fa-sun light-hide"></i><i class="fa-solid fa-moon dark-hide"></i></button>

        <script>
            const btn = document.querySelector(".btn-dark-mode");
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
                <nav class="detail1-hide" id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
                </nav>
            </header>

            <div id="container">
                <main id="content" role="main">

                <input id="detail-slider" type="range" min="1" max="7" value="5" list="tickmarks">
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
