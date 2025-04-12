<?php
if (! defined('ABSPATH')) exit;
?>

<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/components/page-head', null, [
    'title_en' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
]); ?>

<!-- お問い合わせトップ -->
<div class="contact-top mt80--sp64">
    <div class="contact-top__inner">
        <div class="txt">
            <p>下記フォームからお気軽にお問い合わせください。担当者より3営業日以内にご連絡させていただきます。<br>万が一連絡が入らない場合は、お手数ですが<span class="dib">「<span class="colorBlue">0749-42-8400 近江印刷株式会社 営業部</span>」</span>まで<span class="dib">ご連絡をお願いいたします。</span></span><br><br>なお、こちらのお問い合わせフォームは、お客さま専用となりますので、営業メールは固くお断りしております。</p>
        </div>

        <div class="contact-top__tel mt64--sp40">
            <div class="contact-top__tel-inner">
                <div class="contact-top__tel-header">
                    <h2 class="contact-top__tel-title">お電話での<br class="desktop">お問い合わせ先</h2>
                    <p class="contact-top__tel-time desktop">（受付時間 当社営業日 9:00~17:00）</p>
                </div>
                <div class="contact-top__tel-body">
                    <p class="contact-top__tel-text">お急ぎの場合は、下記までお電話ください。</p>
                    <div class="contact-top__tel-number mt4">
                        <span class="contact-top__tel-icon">
                            <svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M53.7192 44.0536L43.4726 39.6708C43.1981 39.5795 42.9237 39.4882 42.5577 39.4882C41.9173 39.4882 41.2769 39.8534 40.911 40.3099L36.3366 45.8798C29.2006 42.5013 23.5284 36.8402 20.1433 29.7181L25.7241 25.1527C26.1815 24.7875 26.5475 24.1483 26.5475 23.4178C26.5475 23.1439 26.456 22.87 26.3645 22.5961L21.9731 12.3695C21.6071 11.5477 20.7838 10.9999 19.8689 10.9999C19.7774 10.9999 19.5944 11.0912 19.4114 11.0912L9.89677 13.2826C8.89041 13.5565 8.25 14.3783 8.25 15.3827C8.25 38.849 27.1879 57.7499 50.7001 57.7499C51.7065 57.7499 52.5298 57.1107 52.8043 56.1063L55 46.6102C55 46.4276 55 46.245 55 46.1537C55 45.2406 54.4511 44.4188 53.7192 44.0536Z" fill="#0068B6" />
                            </svg>
                        </span>
                        <span class="contact-top__tel-num">0749-42-8400</span>
                    </div>
                    <p class="contact-top__tel-time mobile">（受付時間 当社営業日 9:00~17:00）</p>
                    <div class="contact-top__tel-departments">
                        <ul class="disc-list">
                            <li><b>デジタルコンテンツに関するお問い合わせ ：</b><br class="mobile-sp"> 営業部 カスタマーソリューション課</li>
                            <li><b>印刷物に関するお問い合わせ ：</b><br class="mobile-sp"> 業務部</li>
                            <li><b>データ入稿に関するお問い合わせ ：</b><br class="mobile-sp"> 制作部 杉本</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-form mt80--sp64">
    <div class="contact-form__inner">
        <div class="wpcf7 js" id="wpcf7-f7-o1" lang="ja" dir="ltr" data-wpcf7-id="7">
            <div class="screen-reader-response">
                <p role="status" aria-live="polite" aria-atomic="true"></p>
                <ul></ul>
            </div>
            <form action="/sukettosan/#wpcf7-f7-o1" method="post" class="wpcf7-form init" aria-label="コンタクトフォーム" novalidate="novalidate" data-status="init">
                <div class="contact__form">
                    <div class="contact__form-item">
                        <p class="contact__form-item-label"><span>お問い合わせ種別</span></p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="transaction">
                                <span class="wpcf7-form-control wpcf7-radio transaction">
                                    <span class="wpcf7-list-item first">
                                        <label>
                                            <input type="radio" name="transaction" value="印刷物に関するお問い合わせ・お見積もり" checked="checked">
                                            <span class="wpcf7-list-item-label">印刷物に関するお問い合わせ・お見積もり</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <label>
                                            <input type="radio" name="transaction" value="デジタルコンテンツに関するお問い合わせ・お見積もり">
                                            <span class="wpcf7-list-item-label">デジタルコンテンツに関するお問い合わせ・お見積もり</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <label>
                                            <input type="radio" name="transaction" value="Web広告に関するお問い合わせ・お見積もり">
                                            <span class="wpcf7-list-item-label">Web広告に関するお問い合わせ・お見積もり</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <label>
                                            <input type="radio" name="transaction" value="採用に関するお問い合わせ">
                                            <span class="wpcf7-list-item-label">採用に関するお問い合わせ</span>
                                        </label>
                                    </span>
                                    <span class="wpcf7-list-item last">
                                        <label>
                                            <input type="radio" name="transaction" value="その他">
                                            <span class="wpcf7-list-item-label">その他</span>
                                        </label>
                                    </span>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">会社名・団体名</p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="your-company">
                                <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="例） 近江印刷株式会社" value="" type="text" name="your-company">
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">部署</p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="your-busyo">
                                <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="例） 営業部" value="" type="text" name="your-busyo">
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">お名前<span class="hissu">必須</span></p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="例） 近江 太郎" value="" type="text" name="your-name">
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">住所<span class="hissu">必須</span></p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="your-address">
                                <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="例） 滋賀県愛知郡愛荘町川原771-1" value="" type="text" name="your-address">
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">電話番号<span class="hissu">必須</span></p>
                        <div class="contact__form-item-input">
                            <p><span class="wpcf7-form-control-wrap" data-name="your-tel"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel" aria-invalid="false" placeholder="例） 0749-42-8400" value="" type="tel" name="your-tel"></span></p>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">メールアドレス<span class="hissu">必須</span></p>
                        <div class="contact__form-item-input">
                            <p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email" aria-invalid="false" placeholder="例） example@example.com" value="" type="email" name="your-email"></span></p>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">当社を知ったきっかけ<span class="hissu">必須</span></p>
                        <div class="contact__form-item-input">
                            <span class="wpcf7-form-control-wrap" data-name="category">
                                <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false" name="category">
                                    <option value="選択してください">選択してください</option>
                                    <option value="項目01">項目01</option>
                                    <option value="項目02">項目02</option>
                                    <option value="項目03">項目03</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="contact__form-item">
                        <p class="contact__form-item-label">お問い合わせ内容<span class="hissu">必須</span>
                        </p>
                        <div class="contact__form-item-input">
                            <p>
                                <span class="wpcf7-form-control-wrap" data-name="your-message">
                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="お問い合わせ内容をご入力ください" name="your-message"></textarea>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="txt tac fsz15--sp13 mt64--sp48">
                    <p>当サイトはSSLを採用しており、送信される内容はすべて暗号化されます。</p>
                </div>

                <div class="active-policy mt32--sp24">
                    <div class="active-policy-inner">
                        <h3 class="active-policy-title">お問い合わせに関する<br class="mobile">個人情報の取り扱い</h3>
                        <p class="active-policy-text mt16">下記事項をご確認のうえ、<br>『同意する』にチェックをしていただき、<br class="mobile">お問い合わせフォームをご利用ください。</p>
                        <div class="active-policy-scroll mt24">
                            <div class="active-policy-scroll-inner">
                                <p class="tac">《お問い合わせで取得、利用する個人情報に関する同意書》</p>
                                <br>
                                個人情報の利用目的<br>
                                のご応募の内容にご対応するため<br>
                                <br>
                                取得、利用する個人情報の内容<br>
                                氏名、住所、電話番号・FAX番号、メールアドレス、<br>
                                法人・学校名、部署・学部名<br>
                                <br>
                                提供に関して<br>
                                お預かりした個人情報を第三者に提供する事はありません。<br>
                                <br>
                                委託に関して<br>
                                お預かりした個人情報を発送業務等の委託のため契約委託先に委託する場合があります。<br>
                                <br>
                                任意性に関して<br>
                                個人情報をお預け頂く事は任意によるものです。<br>
                                <br>
                                開示、訂正、削除に関して<br>
                                お預かりした個人情報の開示、訂正、削除に関する件は下記までご連絡ください。<br>
                                <br>
                                【個人情報に関する問い合わせ先】<br>
                                近江印刷株式会社　個人情報問合せ窓口　宛<br>
                                〒529-1302　滋賀県愛知郡愛荘町川原771-1<br>
                                TEL：0749-42-8400　FAX：0749-42-6700　メール：info@omi-in.co.jp<br>
                                対応受付時間　AM9:00～PM5:00（当社休業日を除く）
                            </div>
                        </div>
                        <div class="active-policy-check">
                            <label>
                                <span class="wpcf7-form-control-wrap" data-name="privacy">
                                    <span class="wpcf7-form-control wpcf7-acceptance">
                                        <span class="wpcf7-list-item">
                                            <input class="js-activation-check" type="checkbox" name="privacy" value="1" aria-invalid="false">
                                        </span>
                                    </span>
                                </span>
                                <span class="active-policy-check-text">個人情報の取り扱いについて同意する</span>
                            </label>
                        </div>
                        <a href="<?php echo home_url('/privacypolicy/'); ?>" class="active-policy-check-link mt12--sp8">個人情報保護方針</a>
                    </div>
                    <div class="contact__form-submit mt64--sp48">
                        <div class="contact__form-submit-btn btn">
                            <span class="btn__text">
                                <input class="wpcf7-form-control wpcf7-submit has-spinner js-activation-button" type="submit" value="確認する">
                            </span>
                            <span class="btn__icon">
                                <svg viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_40_1378)">
                                        <path
                                            d="M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z"
                                            fill="#0068B6" />
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <span class="wpcf7-spinner"></span>
                    </div>
                </div>
            </form>

            <div class="active-policy mt32--sp24">
                <div class="active-policy-inner bgLightBlue">
                    <h3 class="active-policy-title">外部スタッフエントリーに関する個人情報の取り扱い</h3>
                    <p class="active-policy-text mt16">下記事項をご確認のうえ、<br>『同意する』にチェックをしていただき、エントリーシートをダウンロードください。</p>
                    <div class="active-policy-scroll mt24">
                        <div class="active-policy-scroll-inner">
                            <p class="tac">《外部スタッフエントリーシート、利用する個人情報に関する同意書》</p>
                            <br>
                            個人情報の利用目的<br>
                            外部スタッフのご応募の内容にご対応するため<br>
                            <br>
                            取得、利用する個人情報の内容<br>
                            氏名、住所、電話番号・FAX番号、メールアドレス、<br>
                            法人・学校名、部署・学部名<br>
                            <br>
                            提供に関して<br>
                            お預かりした個人情報を第三者に提供する事はありません。<br>
                            <br>
                            委託に関して<br>
                            お預かりした個人情報を発送業務等の委託のため契約委託先に委託する場合があります。<br>
                            <br>
                            任意性に関して<br>
                            個人情報をお預け頂く事は任意によるものです。<br>
                            <br>
                            開示、訂正、削除に関して<br>
                            お預かりした個人情報の開示、訂正、削除に関する件は下記までご連絡ください。<br>
                            <br>
                            【個人情報に関する問い合わせ先】<br>
                            近江印刷株式会社　個人情報問合せ窓口　宛<br>
                            〒529-1302　滋賀県愛知郡愛荘町川原771-1<br>
                            TEL：0749-42-8400　FAX：0749-42-6700　メール：info@omi-in.co.jp<br>
                            対応受付時間　AM9:00～PM5:00（当社休業日を除く）
                        </div>
                    </div>
                    <div class="active-policy-check">
                        <label>
                            <span class="wpcf7-form-control-wrap" data-name="privacy">
                                <span class="wpcf7-form-control wpcf7-acceptance">
                                    <span class="wpcf7-list-item">
                                        <input class="js-activation-check" type="checkbox" name="privacy" value="1" aria-invalid="false">
                                    </span>
                                </span>
                            </span>
                            <span class="active-policy-check-text">個人情報の取り扱いについて同意する</span>
                        </label>
                    </div>
                    <a href="<?php echo home_url('/privacypolicy/'); ?>" class="active-policy-check-link mt12--sp8">個人情報保護方針</a>
                </div>
                <a href="" class="active-policy-btn btn mt64--sp48">
                    <span class="btn__text js-activation-button">エントリーシートを<br class="mobile">ダウンロードする</span>
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
    </div>
</div>


<?php get_template_part('template-parts/footer'); ?>