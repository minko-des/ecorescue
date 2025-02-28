<div class="l-sidebar">
    <nav class="p-sidebar__nav">
        <?php
            wp_nav_menu(array(
            'theme_location' => 'sidebar-nav',
            'menu_class'     => 'nav-menu',
            'container'      => false,
            ));
        ?>
    </nav>
    <div class="btn-wrap">
    <?php get_template_part('template-parts/link-btn__contact--narrow'); ?>
    <?php get_template_part('template-parts/link-btn__line--narrow'); ?>
    </div>
</div>