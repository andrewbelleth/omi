<?php
if (! defined('ABSPATH')) {
  exit;
}
?>
<ul class="header-menu">
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/features')); ?>">近江印刷の特徴</a>
  </li>
  <li class="menu-item menu-item-has-children menu-item--service">
    <div class="menu-item__row">
      <a class="menu-item__link menu-item__link--parent" href="<?php echo esc_url(home_url('/service')); ?>" aria-haspopup="true" aria-expanded="false">サービス</a>
      <button type="button" class="menu-toggle" aria-expanded="false" aria-label="サービスのサブメニューを開く">
        <span class="menu-toggle__icon" aria-hidden="true"></span>
      </button>
    </div>
    <ul class="sub-menu">
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service')); ?>">サービストップ</a>
      </li>
      <li class="menu-item menu-item-has-children menu-item--printing">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/printing')); ?>">印刷</a>
        <ul class="sub-menu">
          <li class="menu-item">
            <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/printing/products')); ?>">取扱品目</a>
          </li>
          <li class="menu-item">
            <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/printing/processing')); ?>">加工</a>
          </li>
          <li class="menu-item">
            <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/printing/bookbinding')); ?>">製本</a>
          </li>
          <li class="menu-item">
            <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/printing/dtf')); ?>">DTF印刷</a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/degital')); ?>">デジタル</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/newspaper')); ?>">彦根経済新聞</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/branding')); ?>">ブランディング</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/promotion')); ?>">プロモーション</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/service/nice-crew')); ?>">NICE CREW</a>
      </li>
    </ul>
  </li>
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/works')); ?>">制作実績</a>
  </li>
  <li class="menu-item menu-item-has-children">
    <div class="menu-item__row">
      <a class="menu-item__link menu-item__link--parent" href="<?php echo esc_url(home_url('/company')); ?>" aria-haspopup="true" aria-expanded="false">会社概要</a>
      <button type="button" class="menu-toggle" aria-expanded="false" aria-label="会社概要のサブメニューを開く">
        <span class="menu-toggle__icon" aria-hidden="true"></span>
      </button>
    </div>
    <ul class="sub-menu">
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/company')); ?>">会社概要トップ</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/company/facility')); ?>">設備概要</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/company/history')); ?>">会社沿革</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/company/project')); ?>">私たちの取り組み</a>
      </li>
      <li class="menu-item">
        <a class="menu-item__link" href="<?php echo esc_url(home_url('/company/ing')); ?>">社外報ing</a>
      </li>
    </ul>
  </li>
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a>
  </li>
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/column')); ?>">コラム</a>
  </li>
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/recruit')); ?>">リクルート</a>
  </li>
  <li class="menu-item">
    <a class="menu-item__link" href="<?php echo esc_url(home_url('/partner')); ?>">外部パートナー募集</a>
  </li>
</ul>
