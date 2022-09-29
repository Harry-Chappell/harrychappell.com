<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<header class="header">
    <div id="branding">
        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <?php
            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
            echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
            if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
            ?>
        </div>
        <h3 class="detail1">1: This homepage is overly simple. <br> Use the slider on the left.</h3>
        <h3 class="detail2">2: This homepage could have more detail. <br> Use the slider on the left.</h3>
        <h3 class="detail3">3: Almost there… <br> Keep sliding.</h3>
        <h3 class="detail4">4: This homepage is just right.</h3>
        <h3 class="detail5">5: Too much detail!</h3>
        <h3 class="detail6">6: Now that's just ridiculous!</h3>
        <h3 class="detail7">7: Are you happy? You ruined it. <br> Turn that slider down now!</h3>
    </div>
</header>

<div class="entry-content" itemprop="mainContentOfPage">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>