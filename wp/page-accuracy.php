<?php get_header(); ?>

<main class="accuracy">

  <section class="hero-b">
    <div class="containers core">
      <div class="hero-b__box">
        <div class="hero-b__box--sub">より<ruby>精<rt>◆</rt>度<rt>◆</rt>の<rt>◆</rt>高<rt>◆</rt>い<rt>◆</rt>計<rt>◆</rt>測<rt>◆</rt></ruby>がしたい <small>企業様へ</small></div>
        <h1 class="ttl-primary-lower">レーザオートコリメータ<br class="sp-only">「Smart LAC」が<br><small class="shine">非接触・高精度の測定</small>を<br class="sp-only">実現します。</h1>
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
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/accuracy/img-pickup01.png" alt="変位センサ複数個を使用し、角度測定をしている" loading="lazy" decoding="async" width="347" height="195"></figure>
          <ul class="card__box--list">
            <li><h3>変位センサ複数個を使用し、角度測定をしている</h3></li>
          </ul>
        </a>
        <a href="#pickup02" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/accuracy/img-pickup02.png" alt="ゲージ・ピックを使用し、角度を測定している" loading="lazy" decoding="async" width="347" height="195"></figure>
          <ul class="card__box--list">
            <li><h3>ゲージ・ピックを使用し、角度を測定している</h3></li>
            <li><h3>ピンホール穴でレーザー反射を目視確認し、角度調整している</h3></li>
          </ul>
        </a>
        <a href="#pickup03" class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/accuracy/img-pickup03.png" alt="複数の対象物の角度を測定したい" loading="lazy" decoding="async" width="347" height="195"></figure>
          <ul class="card__box--list">
            <li><h3>対象物の角度を非接触で精度良く計測したい</h3></li>
          </ul>
        </a>
      </div>
    </div>
  </section>

  <section class="solution">
    <div class="containers">
      <h2 class="ttl-secondary cW">レーザオートコリメータ<br class="sp-only">「Smart LAC」が解決します。</h2>
      
      <div id="pickup01" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">Smart LAC1台で正確に測定</h3>
          <div class="item__box--txt">これまでの変位センサを３個使用して３点の測定データから演算によって角度データを得る方法では、精度の面において課題がありました。<br>レーザーオートコリメータであれば、1台で正確に角度測定することが可能です。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/accuracy/img-sol01.png" alt="Smart LAC1台で正確に測定" loading="lazy" decoding="async" width="514" height="343">
        </figure>
      </div>

      <div id="pickup02" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">高精度なデータ測定を実現</h3>
          <div class="item__box--txt">ゲージ・ピックを使用して角度測定する場合、またピンホール穴でレーザー反射を確認して角度調整する場合、目視判定・手動調整するため精度の面において課題がありました。<br>レーザーオートコリメータであれば、角度を高精度にデータ測定することが可能です。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/accuracy/img-sol02.png" alt="高精度なデータ測定を実現" loading="lazy" decoding="async" width="514" height="343">
        </figure>
      </div>

      <div id="pickup03" class="flex sp-reverse item">
        <summary class="item__box">
          <h3 class="item__box--ttl">対象物に損傷を与えず高精度な測定</h3>
          <div class="item__box--txt">レーザオートコリメータはレーザ光を使い、対象物の微小な角度や複数の対象物の相対角度を非接触で測定できるため、対象物に損傷を与えず、高精度な角度測定をすることが可能です。</div>
        </summary>
        <figure class="item__img">
          <img src="<?php echo assets_path() ?>img/accuracy/img-sol03.png" alt="対象物に損傷を与えず高精度な測定" loading="lazy" decoding="async" width="514" height="343">
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
        <li>より精度の高い計測がしたい</li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>