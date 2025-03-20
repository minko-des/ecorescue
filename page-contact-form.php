<?php get_header(); ?>
            
    <section class="p-contact-form">
        <div class="p-section-title">
            <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イメージキャラクター「エコわんくん」">
            <hgroup class="title-group">
                <p class="head">まずは無料相談！</p>
                <p class="lead">不用品回収に関する</p>
                <h2 class="heading">お見積り・お問合せ</h2>
            </hgroup>
        </div>
        <div class="content-area">
            <p class="description">どのような内容でも構いません、まずはお気軽にご相談ください。</p>
            <?php echo do_shortcode('[contact-form-7 id="626a816" title="お問合せ"]'); ?>
        </div>
    </section>

    <?php get_template_part('template-parts/contact-banner'); ?>
    
    <?php get_template_part('template-parts/area'); ?>

<?php get_footer(); ?>