            <footer class="l-footer">
                <div class="p-footer">
                    <div class="footer__navigation">
                        <?php get_template_part('template-parts/logo-title'); ?>
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
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/freedial.png') ); ?>" alt="フリーダイヤル">
                                <p class="tel">0120-012-345</p>
                            </div>
                            <div class="creditcard">
                                <p class="lead">現金払いはもちろん、各種クレジットカードがご利用いただけます</p>
                                <img src="<?php echo esc_url(get_theme_file_uri('/images/card-corp.png') ); ?>" alt="Visa,Mastercard,JCB,American Express,Diners Club,Discover">
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="p-copyright">
                    <small class="copy">© 2025 不用品回収エコレスキュー All Rights Reserved.</small>
                </div>
            </footer>
        </main>
    </div>
    <?php wp_footer(); ?>
</body>
</html>