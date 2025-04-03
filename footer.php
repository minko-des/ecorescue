            <footer class="l-footer">
                <div class="p-footer">
                    <div class="footer__navigation">
                        <?php get_template_part('template-parts/site-title'); ?>
                        <nav class="footer__nav">
                            <?php
                                wp_nav_menu(array(
                                'theme_location' => 'footer-nav',
                                'menu_class'     => 'nav-menu',
                                'container'      => false,
                                ));
                            ?>
                        </nav>
                    </div>
                    <div class="footer__contact-group">
                        <div class="btn__row-wrap">
                            <?php get_template_part('template-parts/link-btn__contact--narrow'); ?>
                            <?php get_template_part('template-parts/link-btn__line--narrow'); ?>
                        </div>
                        <div class="info">
                            <p class="title">お問合せ・お見積り <span class="u-nowrap">２４時間３６５日いつでも受付中です</span></p>
                            <div class="freedial">
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/phone.png') ); ?>" alt="フリーダイヤル">
                                <a class="tel-link" href="tel:080-7848-7520">
                                    <p class="tel">080-7848-7520</p>
                                </a>
                            </div>
                            <div class="creditcard">
                                <p class="lead">現金払いはもちろん、各種クレジットカードがご利用いただけます</p>
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/card-corp.png') ); ?>" alt="Visa,Mastercard,JCB,American Express,Diners Club,Discover">
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="p-copyright">
                    <small class="copy">© 2025 不用品回収エコワン All Rights Reserved.</small>
                </div>
            </footer>

            <?php get_template_part('template-parts/cta-banner'); ?>

        </main>
    </div>
    <?php wp_footer(); ?>
</body>
</html>