<?php
if (! defined('ABSPATH')) exit;
/* 
Template Name: プライバシーポリシーページ
*/
?>

<?php get_template_part('template-parts/header'); ?>
<div class="wrapper">
    <?php get_template_part('template-parts/components/page-head', null, [
        'title_en' => 'PRIVACY POLICY',
        'title_jp' => '個人情報保護方針',
    ]); ?>
    <div class="page-wrapper mt160--sp96">
        <div class=" section section__col">
            <div class="section__side">
                <ul>
                    <li><a data-slug="philosophy" href="<?php echo home_url('/privacypolicy/#philosophy'); ?>">個人情報保護理念</a></li>
                    <li><a data-slug="policy" href="<?php echo home_url('/privacypolicy/#policy'); ?>">個人情報保護方針</a></li>
                    <li><a data-slug="purpose" href="<?php echo home_url('/privacypolicy/#purpose'); ?>">個人情報の利用目的</a></li>
                    <li><a data-slug="procedure" href="<?php echo home_url('/privacypolicy/#procedure'); ?>">開示等の手続に<br class="sp-only">ついて</a></li>

                </ul>
            </div>
            <div class="section__main wrapper-136">
                <section class="component-box-item philosophy" id="philosophy">
                    <h2 class="ttl-01">個人情報保護理念</h2>
                    <div class="txt mt32--sp20">
                        <p>
                            当社は、印刷を軸とした情報メディア全般をプロデュースする企業として、高度情報通信社会における個人情報保護の重要性を認識し、情報化社会の健全な発展に貢献するうえで、個人情報の保護が個人の権利を全うするための企業の社会的責任に係る経営上の重要課題であることを宣言し、全従業者に周知徹底を図り、次の事を会社の全部門で遵守していきます。
                        </p>
                    </div>
                </section>
                <section class="component-box-item policy" id="policy">
                    <h2 class="ttl-01">個人情報保護方針</h2>
                    <div class="txt mt32--sp24">
                        <h3><span>1</span>個人情報の取得について</h3>
                        <p class="mt8">
                            当社は、適法かつ公正な手段によって個人情報を取得します。
                        </p>
                    </div>
                    <div class="txt mt32">
                        <h3><span>2</span>個人情報の利用について</h3>
                        <p class="mt8">
                            <span>(1)</span>
                            当社は、事業の内容及び規模を考慮し、個人情報を取得の際に示した利用目的の範囲内で、業務の遂行に必要な限りにおいて利用し、目的の達成に必要な範囲を超えた個人情報の取扱い（目的外利用）は行いません。また、目的外利用を行わないための措置を講じます。
                        </p>
                        <p class="mt8">
                            <span>(2)</span>
                            当社は、個人情報の取扱いを第三者に委託する場合には、当該第三者につき厳正な調査を行ったうえ、秘密保持契約を締結し、適正な監督を行います。
                        </p>

                    </div>
                    <div class="txt mt32">
                        <h3><span>3</span>個人情報の第三者提供について</h3>
                        <p class="mt8">
                            当社は、法令に定める場合を除き、個人情報を、事前に本人の同意を得ることなく、第三者に提供しません。
                        </p>
                    </div>
                    <div class="txt mt32--sp24">
                        <h3><span>4</span>法と社会秩序の遵守について</h3>
                        <p class="mt8">
                            当社は、確実な個人情報保護の実現のため、個人情報の取扱いに関する法令、国が定める指針その他の規範を遵守します。
                        </p>
                    </div>
                    <div class="txt mt32">
                        <h3><span>5</span>個人情報の安全な管理について</h3>
                        <p class="mt8">
                            当社は、個人情報を厳重に管理・保護します。個人情報の漏えい、滅失又はき損の防止及び是正に関して、社内規程類に基づき合理的な安全対策を講ずるとともに、万一問題が発生した時には速やかに対処します。
                        </p>
                    </div>
                    <div class="txt mt32">
                        <h3><span>6</span>個人情報保護マネジメントシステムの確立・実施・維持・改善</h3>
                        <p class="mt8">
                            当社は、この方針を実行するため、個人情報保護マネジメントシステム(本方針、｢個人情報保護マニュアル｣及びその他の規程、規則を含む)を確立し、これを全従業者その他関係者に周知徹底させて実施し、維持し、継続的に改善します。
                        </p>
                    </div>
                    <div class="txt mt32">
                        <p class="tar">
                            制定日&nbsp;2006年7月1日<br>
                            最終改定日&nbsp;2021年6月1日<br>
                            近江印刷株式会社<br>
                            代表取締役&nbsp;里西一郎
                        </p>
                    </div>
                </section>
                <section class="component-box-item purpose" id="purpose">
                    <h2 class="ttl-01">個人情報の利用目的</h2>
                    <div class="txt mt32--sp24">
                        <h3>直接書面以外の方法により取得した場合の利用目的【非開示】</h3>
                        <ul class="privacy__list mt8">
                            <li class="privacy__item">・&nbsp;各種印刷物作成業務</li>
                            <li class="privacy__item">・&nbsp;会員名簿の印刷、発送業務のため</li>
                            <li class="privacy__item">・&nbsp;ダイレクトメール印刷・発送業務のため</li>
                            <li class="privacy__item">・&nbsp;委託を受けた場合</li>
                            <li class="privacy__item">・&nbsp;本人から直接提供しているが、書面ではない場合（監視カメラや口頭など）</li>
                        </ul>
                    </div>
                    <div class="txt mt32">
                        <h3>直接書面により取得した場合の利用目的【開示対象】</h3>
                        <ul class="privacy__list mt8">
                            <li class="privacy__item">・&nbsp;当社事業に関してお問い合わせいただいた内容に回答するため</li>
                            <li class="privacy__item">・&nbsp;当社事業に関してご請求いただいた各種資料を送付するため</li>
                            <li class="privacy__item">・&nbsp;当社の商品情報・サービスのご案内・サポート情報をご提供するため</li>
                            <li class="privacy__item">・&nbsp;当社の業務管理及び採用業務のため</li>
                        </ul>
                        <p class="privacy__note mt12--sp16 pl22--sp0">ただし、下記a)～d)の場合は、利用目的を通知、又は、公表しません。</p>
                        <ul class="privacy__conditions mt4 pl22--sp0">
                            <li class="privacy__condition">
                                <span>a&nbsp;）</span>
                                利用目的を本人に通知し、又は公表することによって本人又は第三者の生命、身体、財産その他の権利利益を害するおそれがある場合
                            </li>
                            <li class="privacy__condition">
                                <span>b&nbsp;）</span>
                                利用目的を本人に通知し、又は公表することによって当社の権利又は正当な利益を害するおそれがある場合
                            </li>
                            <li class="privacy__condition">
                                <span>c&nbsp;）</span>
                                国の機関又は地方公共団体が法令の定める事務を遂行することに対して協力する必要がある場合であって、
                                利用目的を本人に通知し、又は公表することにより当該事務の遂行に支障を及ぼすおそれがある場合
                            </li>
                            <li class="privacy__condition">
                                <span>d&nbsp;）</span>
                                取得の状況からみて利用目的が明らかであると認められる場合
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="component-box-item procedure" id="procedure">
                    <h2 class="ttl-01">開示等の手続について</h2>
                    <div class="txt mt32--sp24">
                        <p>
                            当社では、開示対象個人情報に関して、ご本人の情報の開示等（利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止）を希望される場合には、お申し出いただいた方がご本人或いはその代理人であることを確認した上で、合理的な期間及び範囲で回答、情報の訂正、追加又は削除、利用停止、消去をします。<br>
                            ただし、これらの情報の一部又は全部を利用停止または消去した場合、不本意ながらご要望に沿ったサービスの提供ができなくなることがあります。（なお、関係法令に基づき保有しております情報については、利用停止または消去のお申し出に応じられない場合があります。）
                        </p>
                    </div>
                    <div class="txt mt32">
                        <h3>【開示等の受付方法】</h3>
                        <p class="mt8">
                            開示のご請求にあたりましては、当社所定の「開示等に関する請求書」にご記入いただくことになります。この様式の送付に関し、まず下記窓口までご連絡ください。
                        </p>
                    </div>
                    <div class="txt mt32">
                        <h3>受付窓口</h3>
                        <p class="text-flex mt8">
                            <span>窓口の名称</span>
                            <span>個人情報問合せ窓口</span>
                        </p>
                        <p class="text-flex mt8--sp12">
                            <span>連絡先</span>
                            <span>住所 ： 〒529-1302滋賀県愛知郡愛荘町川原771-1<br>
                                電話 ： 0749-42-8400<br>
                                FAX ： 0749-42-6700</span>
                        </p>
                        <p class="mt8--sp12">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="link-01-link">
                                お問い合わせ先はこちら
                            </a>
                        </p>
                    </div>
                    <div class="txt mt32--sp40">
                        <h3>申込方法</h3>
                        <p class="mt8">
                            所定の「開示等に関する請求書」に必要事項を記入の上、本人確認書類または、代理人の場合は代理権限確認書類と共に受付窓口へ送付してください。<br>
                            所定の手数料の振込みが確認できた場合に当社は手続を開始します。
                        </p>
                    </div>
                    <div class="txt mt32--sp40">
                        <h3>ご本人確認方法</h3>
                        <p class="mt8">
                            ・(本人) 運転免許証、健康保険の被保険者証等の公的証明書のコピー</p>
                        <p class="">・(代理人) 運転免許証、健康保険の被保険者証等の公的証明書のコピーと委任状</p>
                        <p class="">※本籍地等の機微情報は除く。</p>
                    </div>
                    <div class="txt mt32--sp40">
                        <h3>手数料</h3>
                        <p class="mt8">
                            ・請求１件につき1,000円（消費税込）</p>
                        <p class="">・振込手数料は請求者のご負担となります</p>
                    </div>
                </section>
                <section class="light-blue-box" id="">
                    <div class="txt">
                        <h2>個人情報の取り扱いに関するお問い合わせは、<br class="pc-only">
                        下記の「個人情報問い合わせ窓口」までご連絡ください</h2>
                        <p class="text-flex mt16">
                            <span>窓口の名称</span>
                            <span>個人情報問合せ窓口</span>
                        </p>
                        <p class="text-flex mt12">
                            <span>連絡先</span>
                            <span>住所 ：〒529-1302<br><span class="sp-br">滋賀県愛知郡愛荘町川原771-1</span>
                                電話 ： 0749-42-8400<br>
                                FAX ： 0749-42-6700</span>
                        </p>
                        <p class="mt16">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="link-01-link">
                                お問い合わせ先はこちら
                            </a>
                        </p>
                    </div>
                </section>

            </div><!-- / -->
        </div>
    </div>
    <?php get_template_part('template-parts/footer'); ?>
</div>