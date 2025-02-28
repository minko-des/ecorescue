<?php get_header(); ?>
            
    <section class="p-privacypolicy">
        <div class="p-section-title">
            <img class="section-title__Illust" src="<?php echo esc_url(get_theme_file_uri('/images/character_05.png') ); ?>" alt="イラスト">
            <hgroup class="title-group">
                <p class="lead">個人情報の保護に万全を尽くします</p>
                <h2 class="heading">プライバシーポリシー</h2>
            </hgroup>
        </div>
        <div class="content-area">
            <p class="description">当社は、以下の内容に基づき、個人情報を適切に取り扱い、
                保護することをお約束します。</p>

            <div class="article-wrap">
                <article class="article__item">
                    <p class="title">個人情報の収集方法</p>
                    <p class="text">本サイトでは、お問い合わせフォームを通じてお名前、住所、電話番号、メールアドレスなどの個人情報をご登録いただく場合がございます。</p>
                </article>
                <article class="article__item">
                    <p class="title">個人情報を収集し利用する目的</p>
                    <p class="text">本サイトが収集した個人情報は、以下の目的で利用します。
                        <br>・当社サービスの提供と運営のため
                        <br>・お問い合わせへの対応
                        <br>・サービスや情報提供に関する連絡
                        <br>・お問い合わせ内容の確認や記録
                        <br>・上記の利用目的に付随する目的
                    </p>
                </article>
                <article class="article__item">
                    <p class="title">個人情報の第三者提供</p>
                    <p class="text">当社は、以下の場合を除き個人情報を第三者に開示・提供することはありません。
                        <br>・お客様の同意がある場合
                        <br>・法令に基づき開示が必要である場合
                    </p>
                </article>
                <article class="article__item">
                    <p class="title">個人情報の管理</p>
                    <p class="text">当社は、個人情報の漏洩、紛失、改ざんを防止するため、セキュリティシステムの維持・管理体制の整備等の適切な安全対策を講じます。また、不要となった個人情報は適切に廃棄・削除します。</p>
                </article>
                <article class="article__item">
                    <p class="title">法令遵守と見直し</p>
                    <p class="text">当社は、法令や運用状況の変更に応じて、本プライバシーポリシーを適宜見直し、改訂します。本プライバシーポリシーは、事前の予告なく変更することがあります、当サイトに掲載された時点で有効になるものとします。</p>
                </article>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/contact-banner'); ?>
    
    <?php get_template_part('template-parts/area'); ?>

<?php get_footer(); ?>