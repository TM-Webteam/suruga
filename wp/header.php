<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T3PCNZ7L');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php esc_html(bloginfo('charset')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="keywords" content="">
<!-- <meta name="description" content="<?php bloginfo('description'); ?>"> -->
<meta name="author" content="">
<title><?php wp_title('|', true, 'right'); ?></title>
<meta name="format-detection" content="telephone=no">

<!-- Web font -->
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ncf8fus.css">
<script src="https://www.sotuu.net/js-common/download.js" async></script>

<!-- Style sheet -->
<link rel="stylesheet" href="<?php echo assets_path() ?>css/main.css">
<?php wp_head(); ?>
</head>
<?php if (!empty($class)) : ?>
  <body <?php body_class($class); ?>>
<?php else : ?>
  <body <?php body_class(); ?>>
<?php endif; ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T3PCNZ7L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header>
  <div class="in">
    <aside class="flex aiC inherit">
      <div class="in__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/"><img src="<?php echo assets_path() ?>img/common/logo.svg" alt="駿河精機株式会社" loading="lazy" decoding="async" width="145" height="56"></a></div>
      <nav class="in__nav hpc-only">
        <ul class="flex jcE aiC">
          <li class="core"><a href="tel:0120789446" class="tel">0120-789-446</a>　月～土 8:00～20:00（日祝日は除く）</li>
          <li class="in__nav--list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="doc">製品資料</a></li>
          <li class="in__nav--list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>estimate/" class="estimate">お見積</a></li>
          <li class="in__nav--list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="mail">お問合せ・ご相談</a></li>
          <li class="in__nav--list"><a href="<?php echo esc_url( home_url( '/' ) ); ?>demo/" class="pc">デモ機貸出</a></li>
        </ul>
      </nav>
      <div id="nav-toggle" class="hsp-only">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </aside>
  </div>
  <nav class="nav-list hpc-only">
    <ul class="flex nav-list-box">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>product/" class="link">製品の特長</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cost/" class="link">装置製作のコスト削減をしたい</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>accuracy/" class="link">より精度の高い計測がしたい</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/" class="link">選ばれる理由</a></li>
      <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>case/" class="link">導入事例</a></li> -->
      <li class="parent">
        <a href="#" class="arrow disabled">お役立ち情報</a>
        <div class="mega flex pull">
          <div class="mega__parent">お役立ち情報</div>
          <div class="mega__box flex">
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/" class="ttl">お役立ち資料</a>
            </div>
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>column/" class="ttl">お役立ちコラム</a>
            </div>
            <div class="mega__box--list">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="ttl">お知らせ</a>
            </div>
          </div>
        </div>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/" class="link">会社情報</a></li>
    </ul>
  </nav>

  <div id="gloval-nav" class="hsp-only">
    <ul class="list">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>product/">製品の特長</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cost/">装置製作のコスト削減をしたい</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>accuracy/">より精度の高い計測がしたい</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/">選ばれる理由</a></li>
      <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>case/">導入事例</a></li> -->
      <li><a href="#" class="disabled">お役立ち情報</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
      <li class="child"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社情報</a></li>
    </ul>
    <ul class="aside">
      <li><a href="tel:0120789446" class="tel">0120-789-446</a><br>月～土 8:00～20:00（日祝日は除く）</li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more small doc">製品資料</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>estimate/" class="more small estimate">お見積</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more small mail">お問合せ・ご相談</a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>demo/" class="more small pc">デモ機貸出</a></li>
    </ul>
  </div>
</header>