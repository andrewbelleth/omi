<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: 入稿ガイド
*/
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'GUIDE',
    'title_jp' => '入稿ガイド',
]); ?>
<div class="page-wrapper mt160--sp96">
    <div class=" section section__col">
        <div class="page-printing__side section__side">
            <ul>
                <li><a data-slug="preparation" href="<?php echo home_url('/guide/#preparation'); ?>">ご準備いただくもの</a></li>
                <li><a data-slug="preparation-adobe" href="<?php echo home_url('/guide/#preparation-adobe'); ?>">データの準備<br><span class="sp--fz12">（Adobe社）</span><!-- /.fz12 --></a></li>
                <li><a data-slug="preparation-microsoft" href="<?php echo home_url('/guide/#preparation-microsoft'); ?>">データの準備<br><span class="sp--fz12">（Microsoft Office系）</span><!-- /.fz12 --></a></li>
                <li><a data-slug="submission" href="<?php echo home_url('/guide/#submission'); ?>">データの入稿方法</a></li>
                <li><a data-slug="correction" href="<?php echo home_url('/guide/#correction'); ?>">校正について</a></li>
                <li><a data-slug="submission-contact" href="<?php echo home_url('/guide/#submission-contact'); ?>">お問い合わせ窓口</a></li>
            </ul>
        </div>
        <div class="section__main wrapper-136">

            <section class="component-box-item preparation" id="preparation">
                <h2 class="ttl-01">ご準備いただくもの</h2>

                <ul class="preparation-list mt32--sp24">
                    <li>
                        <p>データ</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon01.webp" alt="" width="121" height="121" loading="lazy">
                    </li>
                    <li>
                        <p>出力見本</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon02.webp" alt="" width="121" height="121" loading="lazy">
                    </li>
                    <li>
                        <p>仕上がり見本</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon03.webp" alt="" width="121" height="121" loading="lazy">
                        <p class="mt12--sp8 fw-400 fz10">※加工、製本がある<br class="sp-only">印刷物の場合のみ</p>
                    </li>
                </ul>

                <div class="mt40 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque">
                        入稿データ
                    </h3>
                    <div class="pl21--sp0 pt8--sp0 txt mt12">
                        <p>
                            【推奨形式】<br>
                            <span class="marker">
                                PDF X-1a / PDF X-4
                            </span>
                            <br>
                            <span class="marker">illustrator（2020まで）
                            </span><!-- /.marker --><!-- /.fz13 --><br>
                            <span class="fz13">※ほかの形式については、一度ご相談ください。</span>
                        </p>
                        <ul class="bluesque-list mt8--sp20">
                            <li>【データのまとめ方】</li>
                            <li>
                                <p>
                                    <span class="dot">・&nbsp;</span>
                                    <span class="txt">
                                        フォルダ名、ファイル名にはスペースとスラッシュを使用しないでください。エラーの原因になります。
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot">・&nbsp;</span>
                                    <span class="txt">
                                        各データには必ず拡張子をつけてください。
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot">・&nbsp;</span>
                                    <span class="txt">
                                        データはひとつのフォルダにまとめ、圧縮してください。
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt40 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque">
                        出力見本
                    </h3>
                    <div class="pl21--sp0 pt8--sp0 txt mt12">
                        <p>
                            <span class="marker">入稿データを、お客様の制作環境でプリンター出力したもの。</span><!-- /.marker --><br>
                            入稿データの確認に使用いたします。印刷色の指定を受けるものではありません。<br>
                            下記「メディアおよび見本の送付先」までご送付ください。
                        </p>
                    </div>
                </div>
                <div class="mt40 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque">
                        仕上がり見本
                    </h3>
                    <div class="pl21--sp0 pt8--sp0 txt mt12">
                        <p>
                            <span class="marker">折り方、穴位置、ページ順など、加工や製本の際の仕様を示したもの。</span><!-- /.marker --><br>
                            加工、製本時の仕様の確認に使用いたします。<br>
                            下記「メディアおよび見本の送付先」までご送付ください。<br>
                            <span class="fz13">※加工、製本がある印刷物の場合のみ</span><!-- /.fz13 -->
                        </p>
                    </div>
                    <div class="light-blue-box mt40">
                        <h2>メディアおよび見本の送付先</h2>
                        <p class="text-flex mt8--sp12">
                            <span>住所</span>
                            <span>:</span>
                            <span>〒529-1302<br>
                                滋賀県愛知郡愛荘町川原771-1&nbsp;<br class="sp-only">近江印刷株式会社&nbsp;データ入稿係&nbsp;宛
                            </span>
                        </p>
                        <p class="text-flex mt8--sp12">
                            <span>電話</span>
                            <span>:</span>
                            <span>0749-42-8400</span>
                        </p>
                        <p class="text-flex mt8--sp12">
                            <span>受取可能日時</span>
                            <span>:</span>
                            <span>月曜 ～ 金曜&nbsp;9:00～17:00<br>
                                <span class="fz13">(※当社規定の休業日は受け取りが出来ませんのでご了承ください)</span><!-- /.fz13 -->
                            </span>
                        </p>
                    </div>
                </div>
            </section>

            <section class="component-box-item preparation-adobe" id="preparation-adobe">
                <h2 class="ttl-01">データの準備<br class="sp-only"><span class="fz22--sp16">（Adobe社製品でデータを作成した場合）</span><!-- /.fz22 --></h2>

                <div class="item-inner">
                    <div class="txt">
                        <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">カラー（スウォッチ）の処理について</h2>
                        <p class="pl21--sp20 pt8--sp10">
                            スウォッチ内の<span class="marker">「特色」は全て「プロセスカラー」に変換</span><!-- /.marker -->してください。<br>
                            「特色」が残っているとエラーの原因となり、製版・印刷を行うことができません。
                        </p>
                    </div>
                    <div class="swatch-list__wrapper">
                        <ul class="swatch-list">
                            <li>
                                <p>スウォッチを確認</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img01.webp" alt="" width="166" height="214" loading="lazy">
                        </li>
                        <li>
                            <p>カラータイプを確認</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img02.webp" alt="" width="166" height="214" loading="lazy">
                        </li>
                        <li>
                            <p class="fz12">特色からプロセスカラーへ変換</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img03.webp" alt="" width="166" height="214" loading="lazy">
                        </li>
                        <li>
                            <p>全てプロセスカラーに</p>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img04.webp" alt="" width="166" height="214" loading="lazy">
                            </li>
                        </ul>
                    </div>
                    <div class="txt">
                        <p class="pl21--sp20 pt8--sp10">
                            PDF-X-1a または PDF-X4 でのご入稿の場合でも、プロセスカラーへ変換してください。<br>
                            プロセスカラーへ変換してから、PDFに書き出しを行ってください。
                        </p>
                    </div>
                </div><!-- /.inner -->
                <div class="item-inner">
                    <div class="txt">
                        <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                            Ai（Illustrator）ファイル保存時、「PDF互換ファイルを作成」にチェック</h2>
                        <p class="pl21--sp20 pt8--sp10">
                            Aiファイル保存時に<span class="marker">「PDF互換ファイルを作成」</span><!-- /.marker -->にチェックを入れてください。
                        </p>
                    </div>
                    <div class="img-wrapper pl20 mt20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img05.webp" alt="" width="739" height="372" loading="lazy">
                    </div>
                </div><!-- /.inner -->
                <div class="item-inner">
                    <div class="txt">
                        <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                            Ai（Illustrator）ドキュメントの「裁ち落とし」を3mmに
                        </h2>
                        <p class="pl21--sp20 pt8--sp10">
                            「ドキュメント設定」の「裁ち落とし」設定は<span class="marker">「天・地・左・右&nbsp;3mm」</span><!-- /.marker -->に設定してください。
                        </p>
                    </div>
                    <div class="img-wrapper pl20 mt20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img06.webp" alt="" width="739" height="307" loading="lazy">
                    </div>
                </div><!-- /.inner -->
                <div class="item-inner">
                    <div class="txt">
                        <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                            Ai（Illustrator）・InDesign&nbsp;配置画像のパッケージ
                        </h2>
                        <p class="pl21--sp20 pt8--sp10">
                            配置画像は「埋め込み」ではなく「リンク」で行い、<span class="marker">リンク切れを防ぐために「パッケージ」でリンク画像を収集</span><!-- /.marker -->してください。
                        </p>
                    </div>
                    <div class="img-wrapper pl20 mt20">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-img07.webp" alt="" width="739" height="440" loading="lazy">
                    </div>
                </div><!-- /.inner -->
            </section>

            <section class="component-box-item preparation-microsoft" id="preparation-microsoft">
                <h2 class="ttl-01">データの準備<br class="sp-only"><span class="fz22--sp16">（Microsoft Office系ソフトでデータを作成した場合）</span><!-- /.fz22 --></h2>

                <div class="txt">
                    <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        PDF（高品質設定）で書き出してください</h2>
                    <p class="pl21--sp20 pt8--sp10">
                        ExcelやWordで作成した原稿は、PDF（高品質設定）で書き出してください。<br>
                        また、念の為元ファイル（ExcelやWordの元ファイル）と、PDFを一緒にご入稿ください。</p>
                </div>

                <div class="txt">
                    <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        レイアウト崩れや色の誤差が発生する場合があります
                    </h2>
                    <p class="pl21--sp20 pt8--sp10">
                        Word・Excel・PowerPointで作成されたデータは、PC環境の違いによりレイアウトの崩れ等の不具合が発生する可能性が高いので、必ずPDF校正を確認いただいております。 </p>
                    <p class="pl21--sp20 pt8--sp10">
                        PDFファイルの閲覧ソフト Adobe Acrobat Reader&nbsp;の<a class="link-blue" href="https://www.adobe.com/jp/acrobat/pdf-reader.html" target="_blank" rel="noopener noreferrer">ダウンロードはこちらから</a>
                    </p>
                </div>
                <div class="txt">
                    <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        「裁ち落とし」をご希望の場合
                    </h2>
                    <p class="pl21--sp20 pt8--sp10">
                        「裁ち落とし（上下左右に余白の無いデザイン）」の場合「塗り足し」が必要となります。<br>
                        Excel・WordなどOffice系ソフトでデータを作成され、「塗り足し」を設定する事が難しい場合は事前にご相談ください。
                    </p>
                </div>
                <div class="txt">
                    <h2 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        OS、バージョンをお知らせください
                    </h2>
                    <p class="pl21--sp20 pt8--sp10">
                        お使いのパソコンのOS、Office系ソフトのバージョン（アプリ情報）を、データご入稿時にお知らせください。
                    </p>
                </div>
                <div class="txt">
                    <p class="pl21--sp20 pt8--sp10 fz13">
                        ※データご入稿後、チェックをさせていただき、不具合などありましたら担当よりご連絡させていただきます。
                    </p>
                </div>
            </section>

            <section class="component-box-item submission" id="submission">
                <h2 class="ttl-01">
                    データの入稿方法
                </h2>
                <div class="txt mt40--sp24">
                    <p class="">
                        以下のいずれかの方法で、弊社にデータを送付してください。
                    </p>
                </div>
                <div class="txt">
                    <h3 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        メールに添付して送付
                    </h3>
                    <p class="pl21--sp20 pt8--sp10">
                        <span class="marker fw700">●圧縮して５MB程度まで受信可能です。</span><!-- /.marker --><br>
                        環境により、5MB未満でも受信エラーになる場合があります。<br>
                        その場合は、お手数ですが他の入稿方法をご利用ください。
                    </p>
                    <p class="pl21--sp20 pt8--sp10">
                        <span class="fw700">●送信先アドレス</span><!-- /.fw700 --><br>
                        <a class="link-blue" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>よりご連絡ください。
                    </p>
                </div>
                <div class="txt">
                    <h3 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        ストレージサービスを利用し、DL用URLをメールにて送付
                    </h3>
                    <p class="pl21--sp20 pt8--sp10">
                        <span class="fw700">●おすすめのストレージサービス</span><!-- /.fw700 --><br>
                       <span class="u-flex"><span class="txt-blue">・&nbsp;</span><a class="link-blue db" href="https://datadeliver.net/" target="_blank" rel="noopener noreferrer">データ便</a></span>
                       <span class="u-flex"><span class="txt-blue">・&nbsp;</span><a class="link-blue db" href="https://gigafile.nu/" target="_blank" rel="noopener noreferrer"> ギガファイル便</a></span>
                       <span class="u-flex"><span class="txt-blue">・&nbsp;</span><a class="link-blue db" href="https://okurin.bitpark.co.jp/" target="_blank" rel="noopener noreferrer">おくりん坊</a></span>
                    </p>
                    <p class="pl21--sp20 pt8--sp10">
                        <span class="fw700">●送信先アドレス</span><!-- /.fw700 --><br>
                        <a class="link-blue" href="<?php echo home_url('/contact/'); ?>">お問い合わせ</a>よりご連絡ください。
                    </p>
                </div>
                <div class="txt">
                    <h3 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        メディアに保存し、当社まで宅配便等で送付
                    </h3>
                    <p class="pl21--sp20 pt8--sp10">
                        万が一に備え、データは送付いただくメディア以外に、<span class="marker">ご自身でバックアップをお取りいただきますよう</span><!-- /.marker -->お願いいたします。<br>
                        <span class="fz13">※送付先は、メディアおよび見本の送付先をご覧ください。</span><!-- /.fz13 -->
                    </p>
                </div>
                <div class="light-blue-box mt32--sp36 txt">
                    <h2>データチェックについて</h2>
                    <p class="text-flex mt8">
                        当社では、ご注文前にデータを入稿していただき、専任のスタッフがチェックするサービスを行っております。（1案件につき1回分無料。2回目以降は有料）<br>
                        「手持ちのデータが印刷可能か知りたい」「作成方法が間違っていないかチェックしてほしい」など、入稿データに少しでも不安のあるお客様は、ぜひご活用ください。
                    </p>
                    <div class="component-box-btn mt24">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn inview">
                            <span class="btn__text">入稿前データチェック<br class="sp-only">サービスを申し込む</span>
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
                </div>
                <div class="txt">
                    <h3 class="mt32--sp24 ttl-02 ttl-02--triangle">
                        入稿に関する注意事項
                    </h3>

                    <ul class="bluesque-list pl21--sp20 pt8--sp10">
                        <li>
                            <p>
                                <span class="dot mr7">・&nbsp;</span>
                                <span class="txt">
                                    当社ではお客様のデータを保存しません。必ずお客様自身でバックアップをお取りいただきますようお願いします。
                                </span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="dot mr3">・&nbsp;</span>
                                <span class="txt">
                                    データのみのご入稿では、受け取ったデータに不備がないか等の確認作業が十分にできません。
                                </span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="dot mr7">・&nbsp;</span>
                                <span class="txt">
                                    確認用のプリンター出力紙をお送りいただけない場合は、データ通りに作業を進めさせていただきます。発生した不具合については、弊社では責任を負いかねます。
                                </span>
                            </p>
                        </li>
                        <li>
                            <p>
                                <span class="dot mr7">・&nbsp;</span>
                                <span class="txt">
                                    加工、製本がある印刷物のご発注で、仕上がり見本をお送りいただけない場合、それにより発生した加工、製本上の製品不備については、弊社では責任を負いかねます。
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="component-box-item correction" id="correction">
                <h2 class="ttl-01">校正について</h2>
                <div class="txt">
                    <p class="">
                        当社では、３つの方法の校正サービスをご用意しております。ご注文の際に確認させていただきますので、お申し付けください。<br>
                        校正サービスをご利用の場合、『OK』のお返事を確認させていただいてから印刷工程に進みます。万が一、そのお返事が遅くなりますと、納期もずれこみます。ご了承ください。
                    </p>
                </div>

                <ul class="preparation-list mt32--sp24">
                    <li>
                        <p>PDF校正</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon04.webp" alt="" width="121" height="121" loading="lazy">
                        <p>無料</p>
                    </li>
                    <li>
                        <p>プリンター校正</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon05.webp" alt="" width="121" height="121" loading="lazy">
                        <p>有料</p>
                    </li>
                    <li>
                        <p>本機校正</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/guide-icon06.webp" alt="" width="121" height="121" loading="lazy">
                        <p>有料</p>
                    </li>
                </ul>

                <div class="mt64--sp48 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque u-flex-aic g12">
                        PDF校正
                        <span class="white-tag">
                            無料
                        </span><!-- /.white-circle -->
                    </h3>
                    <div class="txt mt24">
                        <p class="">
                            確認用のPDFファイルを送信いたします。データが正しく出力されるか、RGBの色がどのように変化するのかなどを確認いただけます。
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            仕様
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            ファイル形式 ： PDF形式<br>
                            推奨する閲覧ビューア ： Adobe Acrobat Reader<br>
                            お渡し方法 ： メール
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            注意事項
                        </h4>
                        <ul class="bluesque-list pl21--sp20 pt8--sp10">
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        Word・Excel・PowerPointで作成されたデータは、PC環境の違いによりレイアウトの崩れ等の不具合が発生する可能性が高いので、必ずPDF校正を確認いただいております。
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        Adobe Acrobat Readerのバージョンは6.0以降をご利用ください。それ以前のバージョンは、アウトライン化された文字が太って見えてしまうことがあります。（「環境設定」⇒「表示」⇒「スムージング」で、「ラインアートのスムージング」にチェックを入れることで解消します）
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        PDFファイルの閲覧ソフトAdobe Acrobat Readerの<a class="link-blue" href="https://www.adobe.com/jp/acrobat/pdf-reader.html" target="_blank" rel="noopener noreferrer">ダウンロードはこちらから</a>
                                    </span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt64--sp48 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque u-flex-aic g12">
                        プリンター校正
                        <span class="white-tag">
                            有料
                        </span><!-- /.white-circle -->
                    </h3>
                    <div class="txt mt24">
                        <p class="">
                            確認用のデータをカラーマッチングしたレーザープリンターで出力したものをお送りします。<br>
                            データが正しく出力されるか、RGBの色がどのように変化するのかなどを、実際に手に取って確認いただけます。<br>
                            <span class="fz13">※実際の印刷機の色に近い設定での出力ですが、微妙な色の差異は発生します。</span><!-- /.fz13 -->
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            仕様
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            用紙 ： レーザープリンター用紙（本紙ではありません）<br>
                            印刷 ： レーザープリンター印刷<br>
                            お渡し枚数 ： 2枚<br>
                            お渡し方法 ： 配送（業者は指定いただけません）
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            料金
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            仕様により異なります。お見積り時にご案内いたします。
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            注意事項
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            カラーマッチングは行っておりますが、実際の印刷方法とは異なるため、微妙な差異は発生します。ご了承ください。
                        </p>
                    </div>
                </div>
                <div class="mt64--sp48 bluesque-list__wrapper">
                    <h3 class="ttl-bluesque u-flex-aic g12">
                        本機校正
                        <span class="white-tag">
                            有料
                        </span><!-- /.white-circle -->
                    </h3>
                    <div class="txt mt24">
                        <p class="">
                            実際にオフセット印刷機で本紙に印刷したものをお送りします。<br>
                            他の方法に比べ、高精度の校正方法です。質感や色の再現などを確認されたい方にはこちらをおすすめします。
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            仕様
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            用紙 ： 本紙<br>
                            印刷 ： オフセット印刷プロセスカラー４Ｃ<br>
                            お渡し枚数 ： 2枚<br>
                            お渡し方法 ： 配送（業者は指定いただけません）
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            料金
                        </h4>
                        <p class="pl21--sp20 pt8--sp10">
                            仕様により異なります。お見積り時にご案内いたします。
                        </p>
                        <h4 class="fw700 mt24">
                            <span class="blue-circle mr8">
                                ●
                            </span><!-- /.blue-circle -->
                            注意事項
                        </h4>
                        <ul class="bluesque-list pl21--sp20 pt8--sp10">
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        両面印刷のご注文の場合も、片面ずつの印刷となります。
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        断裁を含め、加工、製本は行いません。
                                    </span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <span class="dot mr7">・&nbsp;</span>
                                    <span class="txt">
                                        実際の印刷機・用紙を使用するため、他の校正方法に比べて日数がかかります。ご了承ください。
                                    </span>
                                </p>
                            </li>
                        </ul>
                        <div class="txt mt64--sp40">
                            <h3 class="ttl-02 ttl-02--triangle">
                                校正なしの場合について
                            </h3>
                            <p class="pl21--sp20 pt8--sp10">
                                校正を希望されない場合、入稿時にお送りいただいた出力見本、仕上がり見本を元に作業を進めます。
                            </p>
                        </div>
                        <div class="txt mt32--sp40">
                            <h3 class="ttl-02 ttl-02--triangle">
                                仕上がり色について
                            </h3>
                            <p class="pl21--sp20 pt8--sp10">
                                当社では、入稿されたデータをもとに、当社基準に則り印刷いたします。お送りいただいた出力見本を色見本として使用することはありません。<br>
                                印刷される色について事前に確認したいお客様には、本機校正サービス（有料）のご利用をお願いしております。色について指定されたい場合、別途日数と費用をいただいてご希望に添えるようご提案させていただきますので、ご発注前に一度ご相談ください。
                            </p>
                        </div>
                        <div class="txt mt32--sp40">
                            <h3 class="ttl-02 ttl-02--triangle">
                                校正に関する注意事項
                            </h3>
                            <ul class="bluesque-list pl21--sp20 pt8--sp10">
                                <li>
                                    <p>
                                        <span class="dot mr7">・&nbsp;</span>
                                        <span class="txt">
                                            校正のお返事が遅れますと、納期がずれ込みますのでご注意ください。
                                        </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="dot mr7">・&nbsp;</span>
                                        <span class="txt">
                                            校正を希望されない場合は、必ず出力見本、仕上がり見本を送付ください。
                                        </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="dot mr7">・&nbsp;</span>
                                        <span class="txt">
                                            校正を希望されない場合、入稿時にお送りいただいた出力見本、仕上がり見本を元に作業を進めます。入稿データの不備による不具合については、弊社では責任を負いかねますので、ご了承ください。
                                        </span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="component-box-item submission-contact" id="submission-contact">
                <h2 class="ttl-01">データ入稿についてのお問い合わせ窓口</h2>
                <div class="txt mt32--sp24">
                    <p class="">
                        些細なことでもお気軽にお問い合わせください。<br class="sp-only">メールは365日24時間受付！<br>
                        ※ご返信は当社営業日・営業時間内に行います。
                    </p>
                </div>
                <div class="light-blue-box mt32--sp24 ">
                    <h3>ページ下部のお問い合わせフォーム&nbsp;<span class="fz15">または</span>&nbsp;下記よりお電話・FAXよりご連絡ください</h3>
                    <ul class="guide-contact u-flex-aic mt8">
                        <li class="u-flex-aic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/icon-tel.webp" alt="" width="36" height="36" loading="lazy">
                            <a href="tel:0749-42-8400">0749-42-8400</a>
                        </li>
                        <li class="u-flex-aic">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide/icon-fax.webp" alt="" width="36" height="36" loading="lazy">
                            <a href="tel:0749-42-6700">0749-42-6700</a>
                        </li>

                    </ul>
                    <p class="text-flex mt12--sp14">
                        <span>担当者</span>
                        <span>:</span>
                        <span>近江印刷株式会社<br class="sp-only"> 制作部 杉本 宛</span>
                    </p>
                    <p class="text-flex mt2--sp6">
                        <span>対応日時</span>
                        <span>:</span>
                        <span>月曜 ～ 金曜&nbsp;9:00～17:00<br>
                            <span class="fz13--sp12">(※当社規定の休業日は受け取りが出来ませんのでご了承ください)</span><!-- /.fz13 -->
                        </span>
                    </p>
                </div>

            </section>
        </div><!-- / -->
    </div>
</div>



<?php get_template_part('template-parts/footer'); ?>