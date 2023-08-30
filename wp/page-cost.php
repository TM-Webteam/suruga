<?php get_header(); ?>

<main class="cost">

  <section class="hero-b">
    <div class="containers core">
      <div class="hero-b__box">
        <div class="hero-b__box--sub">装置製作の<ruby>コ<rt>◆</rt>ス<rt>◆</rt>ト<rt>◆</rt>削<rt>◆</rt>減<rt>◆</rt></ruby>をしたい<small>企業様へ</small></div>
        <h1 class="ttl-primary-lower"><small class="shine">低コスト・省スペース・短時間で<br class="sp-only">角度・傾斜測定</small><br>コスト削減につながる<br class="sp-only">レーザオートコリメータ<br class="sp-only">「Smart LAC」</h1>
        <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">特長・概要が3分でわかる！</span></div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more big bgY">製品資料ダウンロード</a>
        </div>
      </div>
    </div>
  </section>

  <section class="anc-pickup">
    <div class="containers">
      <h2 class="ttl-secondary non">こんな企業様におすすめです。</h2>
      <div class="flex gap30 card">
        <a href="#pickup01" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/cost/img-pickup01.png" alt="角度測定に複数のセンサを用いている" loading="lazy" decoding="async" width="347" height="195"></figure>
          <h3 class="card__box--ttl">角度測定に<br>複数のセンサを用いている</h3>
        </a>
        <a href="#pickup02" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/cost/img-pickup02.png" alt="UPHを向上させたい" loading="lazy" decoding="async" width="347" height="195"></figure>
          <h3 class="card__box--ttl">UPHを<br>向上させたい</h3>
        </a>
        <a href="#pickup03" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/cost/img-pickup03.png" alt="複数の対象物の角度を測定したい" loading="lazy" decoding="async" width="347" height="195"></figure>
          <h3 class="card__box--ttl">複数の対象物の角度を<br>測定したい</h3>
        </a>
      </div>
    </div>
  </section>

  <section class="solution">
    <div class="containers">
      <h2 class="ttl-secondary cW">レーザオートコリメータ<br class="sp-only">「Smart LAC」が解決します。</h2>
      
      <div id="pickup01" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">レーザオートコリメータ1台で角度測定が可能</h3>
          <div class="item__box--txt">角度を測定する際に変位センサを複数使用している場合、レーザオートコリメータ「Smart LAC」に置き換えることにより1台で測定可能となります。<br>複数の装置を使う必要がないため、低コスト・省スペース・時短につながります。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/cost/img-sol01.png" alt="レーザオートコリメータ1台で角度測定が可能" loading="lazy" decoding="async" width="514" height="343">
        </figure>
      </div>

      <div id="pickup02" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">測定対象物に損傷を与えず瞬時に測定可能</h3>
          <div class="item__box--txt">レーザオートコリメータはレーザ光を使い、対象物の微小な角度や複数の対象物の微小な角度関係を非接触で測定できるため、測定対象物に損傷を与えず、瞬時に高精度な角度測定することができるため、生産性の向上につながります。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/cost/img-sol02.png" alt="測定対象物に損傷を与えず瞬時に測定可能" loading="lazy" decoding="async" width="514" height="343">
        </figure>
      </div>

      <div id="pickup03" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">反射光のうち最大5点迄の測定データを同時検出</h3>
          <div class="item__box--txt">レーザオートコリメータ「Smart LAC」のマルチスポット測定では、1台で同軸上や並列上の複数の対象物の反射光のうち最大5点迄の測定までの複数の光点の角度データを取得します。<br>各光点の相対角度データの取得も可能です。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/cost/img-sol03.png" alt="反射光のうち最大5点迄の測定データを同時検出" loading="lazy" decoding="async" width="514" height="343">
        </figure>
      </div>

    </div>
  </section>

  <?php get_template_part( 'template-parts/material' ); ?>

  <?php get_template_part( 'template-parts/series' ); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li>装置制作のコスト削減をしたい</li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>