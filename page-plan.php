<?php get_header(); ?>
            
    <?php get_template_part('template-parts/packplan'); ?>

    <?php get_template_part('template-parts/contact-banner'); ?>
    
    <section class="p-buy-service">
        <div class="p-section-title">
            <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イメージキャラクター「エコわんくん」">
            <hgroup class="title-group">
                <p class="head">高価買取も！</p>
                <p class="lead">回収料金からお値引きが可能な</p>
                <h2 class="heading">買取サービス</h2>
            </hgroup>
        </div>

        <div class="content-area">
            <p class="description">お片付けの際、状態のいいものや買取可能なものがあればお片付け料金からお値引きいたします。</p>

            <div class="content">
                <p class="intro">よくある買取品を紹介！</p>
                <div class="category-wrap">
                    <div class="category">
                        <p class="title">冷蔵庫</p>
                        <div class="detail">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/trade_01.png') ); ?>" alt="冷蔵庫のイメージ画像">
                            <p>2ドアタイプの冷蔵庫、3ドアタイプの冷蔵庫、4ドアタイプの冷蔵庫など</p>
                        </div>
                    </div>
                    <div class="category">
                        <p class="title">洗濯機</p>
                        <div class="detail">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/trade_02.png') ); ?>" alt="洗濯機のイメージ画像">
                            <p>縦型式の洗濯機、ドラム式の洗濯機など（業務用を除く）</p>
                        </div>
                    </div>
                    <div class="category">
                        <p class="title">生活家電製品</p>
                        <div class="detail">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/trade_03.png') ); ?>" alt="生活家電製品のイメージ画像">
                            <p>液晶テレビ、エアコン、電子レンジ、DVDプレイヤーなど</p>
                        </div>
                    </div>
                </div>
                <p class="note">物の状態によって買取金額が前後致しますので、まずは無料でお見積もりに伺います！<br><span>※買取のみのご依頼はお受けできませんのでご了承ください。</span></p>
            </div>
    </section>

    <?php get_template_part('template-parts/plan-contrast'); ?>
    
    <?php get_template_part('template-parts/contact-banner'); ?>
    
    <?php get_template_part('template-parts/area'); ?>

<?php get_footer(); ?>