<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 印刷ページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'BRANDING',
    'title_jp' => 'ブランディング',
]); ?>
<div class="page-wrapper mt160--sp96">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul id="sidemenu">
                <li><a class="link" data-slug="merit" href="<?php echo home_url('/service/branding/#merit'); ?>">ブランディングの<br>メリット</a></li>
                <li><a class="link" data-slug="workflow" href="<?php echo home_url('/service/branding/#workflow'); ?>">ワークフロー</a></li>
                <li><a class="link" data-slug="support" href="<?php echo home_url('/service/branding/#support'); ?>">サポート内容</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">
            <div class="component-box-item">
                <div class="txt">
                    <p>ブランドとは、有名、無名、規模の大小に関わらず、消費者が特定の会社や商品、サービスとして識別する、そのイメージのこと。<br>ブランディングとは、ブランドの「らしさ」「持ち味」「魅力」を突き詰めてイメージを定め、その価値をターゲットである消費者に感じてもらい、ファンをふやすための活動のことです。</p>
                    <p class="mt32--sp10">つまりそれは、売れ続ける仕組みづくり。マーケティング戦略とともに、経営戦略から一貫して計画、実行していくことで、会社や商品、サービスが、多くの中から選ばれる存在になるのです。</p>
                </div>
            </div>

            <section class="component-box-item" id="merit">
                <h2 class="ttl-01">ブランディングのメリット</h2>
                <div class="txt mt32--sp20">
                    <p class="fsz20--sp18 lh2--sp1_8 ltsp05em">ブランドアイデンティティ（BI・企業の旗印）は、<br class="desktop">経営者が旗振り役となり、実行すべきです。</p>
                </div>

                <div class="txt mt24--sp20">
                    <p>ブランディングによって、下記のメリットが期待できます。</p>
                </div>

                <div class="branding-merit-list mt24">
                    <div class="branding-merit-list__item">
                        <div class="branding-merit-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/merit01.webp" alt="競合との差別化">
                        </div>
                        <h3 class="branding-merit-list__item-title">競合との<br class="mobile">差別化</h3>
                    </div>
                    <div class="branding-merit-list__item">
                        <div class="branding-merit-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/merit02.webp" alt="価格競争からの脱却">
                        </div>
                        <h3 class="branding-merit-list__item-title">価格競争<br>からの脱却</h3>
                    </div>
                    <div class="branding-merit-list__item">
                        <div class="branding-merit-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/merit03.webp" alt="顧客のロイヤル化">
                        </div>
                        <h3 class="branding-merit-list__item-title">顧客の<br>ロイヤル化</h3>
                    </div>
                    <div class="branding-merit-list__item">
                        <div class="branding-merit-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/merit04.webp" alt="社内モチベーションの向上">
                        </div>
                        <h3 class="branding-merit-list__item-title">社内<br>モチベーション<br>の向上</h3>
                    </div>
                    <div class="branding-merit-list__item">
                        <div class="branding-merit-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/merit05.webp" alt="優秀な人材の確保">
                        </div>
                        <h3 class="branding-merit-list__item-title">優秀な人材の<br class="mobile">確保</h3>
                    </div>
                </div>

                <div class="txt mt32--sp20">
                    <p>ブランディングによりブランドイメージが確立・向上してそのブランドに「付加価値」が得られると、他の類似商品やサービスとの差別化が図れます。<br>差別化は価格競争からの脱却につながります。<br>その「付加価値」に魅力を感じた消費者がファンとなり、ロイヤル化すると、リピート率が上昇し、長期的な利益が期待できます。<br>人気ブランドを保有する企業の社員は自然と業務に対するモチベーションも上がり、採用においても、優秀な人材が集まりやすくなるのです。</p>
                </div>
            </section>

            <section class="component-box-item" id="workflow">
                <h2 class="ttl-01">ワークフロー</h2>
                <div class="workflow">
                    <div class="workflow__items">
                        <div class="workflow__item">
                            <div class="workflow__item-header">
                                <div class="workflow__item-number">
                                    <span>01</span>
                                </div>
                                <h3 class="workflow__item-title">Share（課題のシェア）</h3>
                            </div>
                            <p class="workflow__item-text mt8 pl46--sp44">念密なヒアリングのもと、お客様と現状の課題を共有します。</p>
                            <div class="workflow__item-tags mt16 pl46--sp44">
                                <span class="workflow__item-tag">ヒアリング</span>
                                <span class="workflow__item-tag">リサーチ</span>
                                <span class="workflow__item-tag">マーケティング</span>
                            </div>
                        </div>

                        <div class="workflow__item">
                            <div class="workflow__item-header">
                                <div class="workflow__item-number">
                                    <span>02</span>
                                </div>
                                <h3 class="workflow__item-title">Planning（コンセプトと計画）</h3>
                            </div>
                            <p class="workflow__item-text mt8 pl46--sp44">課題解決の指針を提示し、プロジェクトのゴールを設定します。<br>計画に必要な外部ブレーンとチーム編成を行います。</p>
                            <div class="workflow__item-tags mt16 pl46--sp44">
                                <span class="workflow__item-tag">プランニング</span>
                                <span class="workflow__item-tag">コンセプトワーク</span>
                            </div>
                        </div>

                        <div class="workflow__item">
                            <div class="workflow__item-header">
                                <div class="workflow__item-number">
                                    <span>03</span>
                                </div>
                                <h3 class="workflow__item-title">Creative（デザインの可視化）</h3>
                            </div>
                            <p class="workflow__item-text mt8 pl46--sp44">最適なアウトプットメディアを選定し、機能するクリエイティブを行います。</p>
                            <div class="workflow__item-tags mt16 pl46--sp44">
                                <span class="workflow__item-tag">グラフィック</span>
                                <span class="workflow__item-tag">Webサイト</span>
                                <span class="workflow__item-tag">動画</span>
                            </div>
                        </div>

                        <div class="workflow__item">
                            <div class="workflow__item-header">
                                <div class="workflow__item-number">
                                    <span>04</span>
                                </div>
                                <h3 class="workflow__item-title">Promotion（ひきつける仕組み）</h3>
                            </div>
                            <p class="workflow__item-text mt8 pl46--sp44">ユーザーに効果的に伝えるためのプロモーション戦略を行います。</p>
                            <div class="workflow__item-tags mt16 pl46--sp44">
                                <span class="workflow__item-tag">プロモーション</span>
                            </div>
                        </div>

                        <div class="workflow__item">
                            <div class="workflow__item-header">
                                <div class="workflow__item-number">
                                    <span>05</span>
                                </div>
                                <h3 class="workflow__item-title">Make Fan（ファンを増やす）</h3>
                            </div>
                            <p class="workflow__item-text mt8 pl46--sp44">SNSなどで、ユーザーと持続的なコミュニケーションを行います。</p>
                            <div class="workflow__item-tags mt16 pl46--sp44">
                                <span class="workflow__item-tag">SNS</span>
                            </div>
                        </div>

                        <div class="workflow__item">
                            <div class="workflow__item-header workflow__item-header--06">
                                <div class="workflow__item-number">
                                    <span>06</span>
                                </div>
                                <h3 class="workflow__item-title">このプロセスを継続し、<br class="mobile">お客様と一緒に長く愛される<br class="mobile">"ブランド"に育てる</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="component-box-item" id="support">
                <h2 class="ttl-01">サポート内容</h2>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp24">トータルブランディング</h3>
                <div class="txt-01">
                    <p>ブランディングは提供する製品、サービス、商品に対する信頼や共感を通じて自社の価値向上や他社との差別化などを目指すマーケティング戦略の1つです。</p>
                </div>
                <div class="img-list img-list--3column row-gap20--sp12 mt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/support01.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/support02.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/support03.webp" alt="">
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp40">コーポレートマーク・<br class="mobile">ブランドロゴマーク作成</h3>
                <div class="txt-01">
                    <p>企業や製品が伝えたいイメージを象徴的に表現することで記憶に残りやすく認知度向上につながります。</p>
                </div>
                <div class="img-list img-list--3column row-gap20--sp16 column-gap23--sp15 img-list--sp2column mt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo01.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo01-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo02.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo02-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo03.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo03-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo04.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo04-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo05.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo05-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo06.webp" media="(min-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/logo06-sp.webp" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp40">公式キャラクター作成</h3>
                <div class="txt-01">
                    <p>親しみやすいキャラクターは企業や団体の好感度向上にもつながります。<br>親近感を持てるキャラクターは話題性や集客効果を高めます。</p>
                </div>
                <div class="img-list img-list--3column row-gap20--sp16 mt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/character01.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/character02.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/character03.webp" alt="">
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp40">ブランドブック・コンセプトブック作成</h3>
                <div class="txt-01">
                    <p>社内外に一貫したイメージを浸透させることでブランドの価値を最大化し、持続的な成長を支えるための重要なツールとなります。</p>
                </div>
                <div class="img-list img-list--3column mt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/concept01.webp" alt="">
                        </div>
                    </div>
                </div>
                <h3 class="ttl-02 ttl-02--triangle mt32--sp40">商品ラベル作成</h3>
                <div class="txt-01">
                    <p>商品の特徴や魅力を分かりやすく伝えて訴求力を高め、他の商品との差別化や消費者の購買意欲を高めるなどブランド価値向上に貢献します。</p>
                </div>
                <div class="img-list img-list--3column row-gap20--sp12 mt20 pl21--sp20">
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/label01.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/label02.webp" alt="">
                        </div>
                    </div>
                    <div class="img-list__item">
                        <div class="img-list__item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/label03.webp" alt="">
                        </div>
                    </div>
                </div>
                <div class="component-box-btn mt48">
                    <a href="<?php echo esc_url(home_url('/works/?works-cat=ブランディング')); ?>" class="btn inview">
                        <span class="btn__text">製作実績を見る</span>
                        <span class="btn__icon">
                            <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_40_1378)">
                                    <path
                                        d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
                                        fill="#0068B6" />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
            </section>


        </div><!-- / -->
    </div>
</div>

<div class="component-box section">
    <div class="component-box-item">
        <div class="link-01-component">
            <div class="link-01-head">
                <h3 class="link-01-title">SERVICE</h3>
                <a href="<?php echo esc_url(home_url('/service')); ?>" class="link-01-link">
                    <?php get_template_part('template-parts/parts/link-01-link-icon'); ?>
                    <span class="link-01-link-text">サービストップへ戻る</span>
                </a>
            </div>
            <div class="btn-list-01">
                <a href="<?php echo esc_url(home_url('/service/printing')); ?>" class="btn-02">
                    <span class="btn__text btn__text--newspaper">印刷</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/degital')); ?>" class="btn-02">
                    <span class="btn__text">デジタル</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/newspaper')); ?>" class="btn-02">
                    <span class="btn__text">彦根経済新聞</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/service/promotion')); ?>" class="btn-02">
                    <span class="btn__text btn__text--branding">プロモーション</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
                <a href="#" class="btn-02">
                    <span class="btn__text">NICE CREW</span>
                    <?php get_template_part('template-parts/parts/btn-icon--blue'); ?>
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/footer'); ?>