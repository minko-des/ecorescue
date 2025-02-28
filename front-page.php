<?php get_header(); ?>
            
            <section class="p-main-visual">
                <p class="catch-copy"><span class="undermarker">大阪府エリア</span>の<span class="u-nowrap"><strong>不用品•粗大ゴミ</strong>回収は</span><br><span class="nowrap">お任せ下さい「最短即日対応」</span></p>
                <div class="card-unit">
                    <div class="point-card-wrap">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/main_point01.png') ); ?>" alt="サービスポイントバナー01">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/main_point02.png') ); ?>" alt="サービスポイントバナー02">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/main_point03.png') ); ?>" alt="サービスポイントバナー03">
                    </div>
                    <div class="free-card">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/main_free.png') ); ?>" alt="無料サービスバナー">
                    </div>
                    <img class="main-character" src="<?php echo esc_url(get_theme_file_uri('/images/character_unit.png') ); ?>" alt="キャラクター画像">
                    <p class="note">どのような内容でも構いません、まずはお気軽にご相談ください</p>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-banner'); ?>
            
            <section class="p-campaign">
                <h2><img src="<?php echo esc_url(get_theme_file_uri('/images/campaign-title.png') ); ?>" alt="特割キャンペーン実施中"></h2>
                <p>ホームページを見て不用品回収をご依頼くださった方に特別価格!<br><strong>最大10,000円お得</strong>に!</p>
                <div class="item-wrap">
                    <picture class="campaign__item">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/campaign-ss.png') ); ?>" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/campaign-ss_sp.png') ); ?>" alt="キャンペーンSSプラン">
                    </picture>
                    <picture class="campaign__item">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/campaign-s.png') ); ?>" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/campaign-s_sp.png') ); ?>" alt="キャンペーンSプラン">
                    </picture>
                    <picture class="campaign__item">
                        <source srcset="<?php echo esc_url(get_theme_file_uri('/images/campaign-m.png') ); ?>" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_theme_file_uri('/images/campaign-m_sp.png') ); ?>" alt="キャンペーンMプラン">
                    </picture>
                </div>
            </section>

            <section class="p-service-points">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">知って納得！</p>
                        <p class="lead">エコレスキューが選ばれる</p>
                        <h2 class="heading">6つの理由</h2>
                    </hgroup>
                </div>
                <div class="service-points__content">
                    <div class="service-point-card__container">
                        <article class="p-service-point-card">
                            <div class="card-number">1</div>
                            <h3 class="card__title">業界<span class="u-txt-red">最安値</span>に挑戦</h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_01.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>当社では他業者さんの価格をチェックし、常に最安値を目指しています。もし１円でも高い場合はお気軽にご相談ください。</figcaption>
                            </figure>
                        </article>
                        <article class="p-service-point-card">
                            <div class="card-number">2</div>
                            <h3 class="card__title"><span class="u-txt-red">まるごと</span>お任せ</h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_02.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>当社では、不用品１点からゴミ屋敷まで、規模に関わらず対応させていただきます。</figcaption>
                            </figure>
                        </article>
                        <article class="p-service-point-card">
                            <div class="card-number">3</div>
                            <h3 class="card__title"><span class="u-txt-red">高価買取り</span>サービス</h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_03.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>買取り可能なものはできる限り高く買取りいたします。ベテランスタッフが現地にてしっかり対応させていただきます。</figcaption>
                            </figure>
                        </article>
                        <article class="p-service-point-card">
                            <div class="card-number">4</div>
                            <h3 class="card__title">最速<span class="u-txt-red">即日回収</span></h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_04.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>トラックも多数保有しているため、お電話1本で担当が駆け付けます。</figcaption>
                            </figure>
                        </article>
                        <article class="p-service-point-card">
                            <div class="card-number">5</div>
                            <h3 class="card__title">最大賠償<span class="u-txt-red">3,000万円</span></h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_05.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>最大賠償3,000万円補償いたします。
                                    万が一のことが起きても補償付きなので安心です。</figcaption>
                            </figure>
                        </article>
                        <article class="p-service-point-card">
                            <div class="card-number">6</div>
                            <h3 class="card__title"><span class="u-txt-red">女性も</span>安心</h3>
                            <figure class="card__thumbnail">
                                <div class="card__thumbnail__img">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/point_06.png') ); ?>" alt="イメージ画像">
                                </div>
                                <figcaption>当社サービスご利用の約70%が女性のお客様です。女性もご安心してご利用いただけます。</figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-banner'); ?>

            <section class="p-strengths">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">こんなに違う！</p>
                        <p class="lead">当社と他社さんを</p>
                        <h2 class="heading">徹底比較</h2>
                    </hgroup>
                </div>

                <div class="content-area">
                    <p class="description">他にもたくさん 不用品回収業者 があります。<br>どこに頼んだらいいいか分からないという方はこちらをご覧ください。</p>
                    <div class="article-wrap">
                        <article class="strengths__article">
                            <hgroup class="title-group">
                                <p class="c-number-tag">POINT <strong>1</strong></p>
                                <h3 class="heading">当社のパックプランは
                                    他社ではかかる追加費用が含まれてます。</h3>
                            </hgroup>
                            <div class="content-row">
                                <div class="our-content">
                                    <p class="title">当社の場合</p>
                                    <div class="detail">
                                        <div class="label">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/character-face_01.png') ); ?>" alt="イラスト">
                                            <p>パックプラン</p>
                                        </div>
                                        <p class="note">パックプランの料金に含まれています。</p>
                                        <ul class="plan-item__container">
                                            <li class="c-plan-item">搬出作業</li>
                                            <li class="c-plan-item">階段料金<br>（２階まで込）</li>
                                            <li class="c-plan-item">スタッフ追加料金</li>
                                            <li class="c-plan-item">車両費</li>
                                            <li class="c-plan-item">エアコン取外し<br>（１台まで込）</li>
                                            <li class="c-plan-item">出張費</li>
                                            <li class="c-plan-item">梱包作業費</li>
                                            <li class="c-plan-item">分別作業費</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="other-content">
                                    <div class="content">
                                        <p class="title">A社さんの場合</p>
                                        <div class="other-content__detail__point1">
                                            <div class="label">
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/character-face_03.png') ); ?>" alt="イラスト">
                                                <p>パックプラン</p>
                                            </div>
                                            <div class="mark">
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/plus-mark.png') ); ?>" alt="+マーク">
                                                <p>追加費用発生</p>
                                            </div>
                                            <ul class="plan-item__container">
                                                <li class="c-plan-item">エアコン取外し<br>（１台まで込）</li>
                                                <li class="c-plan-item">分別作業費</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="title">B社さんの場合</p>
                                        <div class="other-content__detail__point1">
                                            <div class="label">
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/character-face_03.png') ); ?>" alt="イラスト">
                                            <p>パックプラン</p>
                                            </div>
                                            <div class="mark">
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/plus-mark.png') ); ?>" alt="+マーク">
                                            <p>追加費用発生</p>
                                            </div>
                                            <ul class="plan-item__container">
                                                <li class="c-plan-item">スタッフ追加料金</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="strengths__article">
                            <hgroup class="title-group">
                                <p class="c-number-tag">POINT <strong>2</strong></p>
                                <h3 class="heading">地域密着で、スタッフの人数とトラックの台数を
                                    しっかり確保しているので即日対応が可能。</h3>
                            </hgroup>
                            <div class="content-row">
                                <div class="our-content">
                                    <p class="title">当社の場合</p>
                                    <div class="detail our-content__detail__point2">
                                        <div class="detail__top">
                                            <p>最短即日対応！</p>
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_01.png') ); ?>" alt="イメージ画像">
                                        </div>
                                        <div class="detail__under">
                                            <p>早朝でも深夜でもご相談対応！</p>
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_02.png') ); ?>" alt="イメージ画像">
                                        </div>
                                    </div>
                                </div>
                                <div class="other-content">
                                    <div class="content">
                                        <p class="title">A社さんの場合</p>
                                        <div class="other-content__detail__point2">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_03.png') ); ?>" alt="イメージ画像">
                                            <p>すでに予約が埋まっていて回収日が先送りになってしまった。</p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="title">B社さんの場合</p>
                                        <div class="other-content__detail__point2">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_04.png') ); ?>" alt="イメージ画像">
                                            <p>営業時間外は受け付けていない。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="strengths__article">
                            <hgroup class="title-group">
                                <p class="c-number-tag">POINT <strong>3</strong></p>
                                <h3 class="heading">自社スタッフ、リサイクル環境の整備が整っているため、<br>
                                    不用品回収では低価格、買取では高価買取が可能。</h3>
                            </hgroup>
                            <div class="content-row">
                                <div class="our-content">
                                    <p class="title">当社の場合</p>
                                    <div class="detail our-content__detail__point3">
                                        <div class="detail-top">
                                            <p class="detail__title">不用品回収が安い理由</p>
                                            <div class="unit-top">
                                                <div class="left-unit">
                                                    <p>すべて自社スタッフ</p>
                                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_05.png') ); ?>" alt="イメージ画像">
                                                </div>
                                                <div class="right-unit">
                                                    <p>広告は口コミ、ご紹介</p>
                                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_06.png') ); ?>" alt="イメージ画像">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="detail-under">
                                            <p class="detail__title">高価買取ができる理由</p>
                                            <div class="unit-under">
                                                <p>国内販売に加え海外販売も対応</p>
                                                <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_07.png') ); ?>" alt="イメージ画像">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="other-content">
                                    <div class="content">
                                        <p class="title">A社さんの場合</p>
                                        <div class="other-content__detail__point2">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_08.png') ); ?>" alt="イメージ画像">
                                            <p>外注スタッフを手配しているため人件費がかかり、費用が高値になってしまう。</p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p class="title">B社さんの場合</p>
                                        <div class="other-content__detail__point2">
                                            <img src="<?php echo esc_url(get_theme_file_uri('/images/hikaku_09.png') ); ?>" alt="イメージ画像">
                                            <p>高額な広告費を使用しているため、高値になってしまう。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-banner'); ?>
            
            <?php get_template_part('template-parts/packplan'); ?>

            <?php get_template_part('template-parts/contact-banner'); ?>
            
            <?php get_template_part('template-parts/plan-contrast'); ?>

            <section class="p-flow">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">最短即日対応！</p>
                        <p class="lead">ご相談からお見積りまで無料</p>
                        <h2 class="heading">お片付けまでの流れ</h2>
                    </hgroup>
                </div>
                <div class="content-area">
                    <p class="description">お問合せいただいてから、作業開始、お支払いまでの流れをご紹介します。</p>

                    <div class="flow__item-wrap">
                        <div class="flow__item">
                            <p class="number">STEP<br><strong>1</strong></p>
                            <div class="content">
                                <p class="head">無料お問合せ</p>
                                <p class="text">「フリーダイヤル」「お問合せフォーム」からお問合せ下さい。</p>
                            </div>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                        </div>
                        <div class="flow__item">
                            <p class="number">STEP<br><strong>2</strong></p>
                            <div class="content">
                                <p class="head">お見積り日時の決定</p>
                                <p class="text">お客様のご都合の良い日時をお伝えください。</p>
                            </div>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                        </div>
                        <div class="flow__item">
                            <p class="number">STEP<br><strong>3</strong></p>
                            <div class="content">
                                <p class="head">無料出張お見積り</p>
                                <p class="text">ご指定いただいた日に出張見積もりに伺います、電話でも無料見積もりのご案内をいたしておりますが、伺った際に物量が少なければお値下げも可能です。</p>
                            </div>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                        </div>
                        <div class="flow__item">
                            <p class="number">STEP<br><strong>4</strong></p>
                            <div class="content">
                                <p class="head">片付け作業開始</p>
                                <p class="text">お見積もり内容にご納得いただけましたら作業開始となります。分別や梱包作業も行いますので、担当スタッフまで気軽にお申し付けください！</p>
                            </div>
                        </div>
                        <div class="arrow">
                            <img src="<?php echo esc_url(get_theme_file_uri('/images/arrow.png') ); ?>" alt="下矢印">
                        </div>
                        <div class="flow__item">
                            <p class="number">STEP<br><strong>5</strong></p>
                            <div class="content">
                                <p class="head">お支払い</p>
                                <p class="text">作業終了後、現金にてスタッフにお支払いください。事前振込も可能です。詳しくはお問い合わせください。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-service-list">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">柔軟に対応！</p>
                        <p class="lead">こんな場面でお役立て下さい</p>
                        <h2 class="heading">サービス紹介</h2>
                    </hgroup>
                </div>
                <div class="content-area">
                    <div class="service-item__wrap">
                        <div class="service-item">
                            <p class="title">不用品回収、粗大ゴミの処分</p>
                            <p class="text">ご家庭やオフィスなどで不要となった粗大ごみを回収致します。量やサイズに限りはありませんので、1点からでもご依頼ください。</p>
                        </div>
                        <div class="service-item">
                            <p class="title">引越しに伴う粗大ごみ</p>
                            <p class="text">引越しを決めたが不用品をどうするか決めていなかったり、急に捨てなければならなくなった時なども対応致します。最短即日からお客様の希望の日を指定していただければ指定日に回収に伺うことも可能です。</p>
                        </div>
                        <div class="service-item">
                            <p class="title">ゴミ屋敷の片付け</p>
                            <p class="text">自分だけでは手がつけられなくなってしまった大量のゴミでもお任せください！分別する必要も無くそのままの状態でもお気軽にご相談ください。</p>
                        </div>
                        <div class="service-item">
                            <p class="title">遺品整理</p>
                            <p class="text">故人の思いの詰まった遺品についても不用品回収サービスでは責任をもって回収致します。遺品整理の進め方や仕分けについても我々にお任せください。</p>
                        </div>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-banner'); ?>

            <section class="p-trouble">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_02.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">必ずチェック！</p>
                        <p class="lead">不用品回収でよくある</p>
                        <h2 class="heading">トラブル事例</h2>
                    </hgroup>
                </div>
                <div class="content-area">
                    <p class="description">最近よく見かけるのが「不用品回収のトラブル」です。<br>当社にもご質問・ご相談いただくことが多い内容を一部紹介させていただきます。</p>

                    <div class="trouble-list">
                        <div class="trouble-item">
                            <p class="c-number-tag">トラブル <strong>1</strong></p>
                            <p class="text">無料回収のはずが高額請求をされてしまった…</p>
                        </div>
                        <div class="trouble-item">
                            <p class="c-number-tag">トラブル <strong>2</strong></p>
                            <p class="text">正式見積もり後に追加料金を請求されてしまった…</p>
                        </div>
                        <div class="trouble-item">
                            <p class="c-number-tag">トラブル <strong>3</strong></p>
                            <p class="text">不法投棄によって個人情報が流失してしまった…</p>
                        </div>
                    </div>
                    <div class="text-wrap">
                        <p class="text-top">当社では、リサイクル・不用品回収に積極的に力を入れていて、環境に配慮した活動を行なっております。</p>
                        <p class="text-middle">個人情報につきましても徹底した管理・取扱いをしておりますのでご安心ください。</p>
                        <p class="text-bottom">また、女性でも安心して不用品回収サービスをご利用いただけるよう、サービスの品質向上や、社員教育にも力を入れております。</p>
                    </div>
                </div>
            </section>

            <section class="p-response">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">喜びの声続々！</p>
                        <p class="lead">利用されたお客様の声を紹介</p>
                        <h2 class="heading">お客様の声</h2>
                    </hgroup>
                </div>
                <div class="content-area">

                    <div class="response-list">
                        <div class="response-item">
                            <div class="response-item__head">
                                <div class="profile">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/response_01.png') ); ?>" alt="人物イラスト">
                                    <div class="info">
                                        <p class="live">大阪府</p>
                                        <p class="cat">50代 男性</p>
                                    </div>
                                </div>
                                <div class="score">
                                    <div class="score-item">
                                        <p class="title">スタッフの対応</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">不用品回収の料金</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">お客様満足度</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <p class="head">とても安心してお願いできる業者さんだと思います。</p>
                                <p class="text">追加請求がないという口コミを見て、こちらにお願いしました。他の業者さんでは、アパートの2階でだと伝えると追加料金だと言われたので、こちらは定額パックの料金の中に含まれていてとても嬉しかったです。来てくださったスタッフさんは丁寧な作業をしてくださって、しかも早かったので、これがプロだなあという感想です。</p>
                            </div>
                        </div>
                        <div class="response-item">
                            <div class="response-item__head">
                                <div class="profile">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/response_02.png') ); ?>" alt="人物イラスト">
                                    <div class="info">
                                        <p class="live">大阪府</p>
                                        <p class="cat">20代 男性</p>
                                    </div>
                                </div>
                                <div class="score">
                                    <div class="score-item">
                                        <p class="title">スタッフの対応</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">不用品回収の料金</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">お客様満足度</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <p class="head">一番安い業者さんでした。</p>
                                <p class="text">定額パックなら、その面積分は乗せ放題。と言うことでこちらに依頼しました。定額パックの業者は他にもあるけれど、ここが一番安かったです。思い切って断捨離することを決心したので、不必要な大きな家具や、細かいものだと3年以上着ていない服など。捨てるのももったいないと思うものはあったけど、結果とても気持ちがすっきりしたのでお願いしてよかったです。</p>
                            </div>
                        </div>
                        <div class="response-item">
                            <div class="response-item__head">
                                <div class="profile">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/response_03.png') ); ?>" alt="人物イラスト">
                                    <div class="info">
                                        <p class="live">大阪府</p>
                                        <p class="cat">30代 女性</p>
                                    </div>
                                </div>
                                <div class="score">
                                    <div class="score-item">
                                        <p class="title">スタッフの対応</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">不用品回収の料金</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                    <div class="score-item">
                                        <p class="title">お客様満足度</p>
                                        <p class="star">★★★★★</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <p class="head">口コミ通りのステキな対応に感謝です。</p>
                                <p class="text">口コミを見てとても印象がよかったのでお願いしました。来てくださったスタッフさんは非常にテキパキ作業を進めていただき、ものの20分ほどで全て終わりました。作業の説明もしていただき、大変丁寧な対応をしてくれたので、口コミ通りでとても好印象です。追加の請求ももちろんなくて、見積もり通りのお支払いでした。安心してお任せできる業者さんを探している人におすすめです。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="p-works" id="works-section">
                <div class="p-section-title">
                    <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
                    <hgroup class="title-group">
                        <p class="head">実績多数！</p>
                        <p class="lead">当社の不用品回収サービス</p>
                        <h2 class="heading">回収事例</h2>
                    </hgroup>
                </div>
                <div class="content-area">
                    <div class="article-wrap">
                        <article class="works__article">
                            <p class="c-number-tag">CASE <strong>1</strong></p>
                            <div class="image__wrap">
                                <div class="before">
                                    <p class="head">BEFORE</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case1_before.jpg') ); ?>" alt="ビフォア画像">
                                    </div>
                                </div>
                                <div class="after">
                                    <p class="head">AFTER</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case1_after.jpg') ); ?>" alt="アフター画像">
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <div class="img-container">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/character_06.png') ); ?>" alt="イメージキャラクター">
                                </div>
                                <p>高齢の親御様が長年住まわれていたご実家の片付けをご依頼いただきました。リビングには思い出の詰まった家具や雑貨が数多くあり、丁寧に扱いながら回収作業を心がけました。お客様のご希望で、大切な品物を確認しながら不要品を分別しながら作業を進めさせていただきました。</p>
                            </div>
                        </article>
                        <article class="works__article">
                            <p class="c-number-tag">CASE <strong>2</strong></p>
                            <div class="image__wrap">
                                <div class="before">
                                    <p class="head">BEFORE</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case2_before.jpg') ); ?>" alt="ビフォア画像">
                                    </div>
                                </div>
                                <div class="after">
                                    <p class="head">AFTER</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case2_after.jpg') ); ?>" alt="アフター画像">
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <div class="img-container">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/character_06.png') ); ?>" alt="イメージキャラクター">
                                </div>
                                <p>お客様から大きな棚の廃棄に関するご依頼を受けました。新しい家具の購入に伴い、古くなった大きな棚をどうにかしなければならなくなったとのことでした。大きくて重たい家具の搬出は、壁や床を傷つけないよう特に注意が必要です。家具を安全に運び出すための適切な機材と技術を駆使して棚を運び出しました。</p>
                            </div>
                        </article>
                        <article class="works__article">
                            <p class="c-number-tag">CASE <strong>3</strong></p>
                            <div class="image__wrap">
                                <div class="before">
                                    <p class="head">BEFORE</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case3_before.jpg') ); ?>" alt="ビフォア画像">
                                    </div>
                                </div>
                                <div class="after">
                                    <p class="head">AFTER</p>
                                    <div class="img-container">
                                        <img src="<?php echo esc_url(get_theme_file_uri('/images/case3_after.jpg') ); ?>" alt="アフター画像">
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <div class="img-container">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/character_06.png') ); ?>" alt="イメージキャラクター">
                                </div>
                                <p>退去日が迫っているにも関わらず、引越し準備が進んでいないお客様からの緊急のご依頼がありました。時間が非常に限られている状況だったので、即日で対応させていただきました。</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <?php get_template_part('template-parts/contact-banner'); ?>
            
            <?php get_template_part('template-parts/area'); ?>
            
        <?php get_footer(); ?>