<?php get_header(); ?>

<main class="product">

  <section class="hero core">
    <div class="containers flex aiC">
      <div class="hero__box">
        <div class="hero__box--sub">角度・傾斜測定に最適な「光センサ」</div>
        <h1 class="ttl-primary-lower">レーザオートコリメータ<br class="sp-only">「Smart LAC」</h1>
        <ul class="flex inherit jcC gap20 hero__box--list">
          <li class="core">非接触で<br class="sp-only">測定</li>
          <li class="core">作動距離<br>制限なし</li>
          <li class="core">瞬時に<br class="sp-only">高精度</li>
        </ul>
        <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">特長・概要が3分でわかる！</span></div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more big bgY">製品資料ダウンロード</a>
        </div>
      </div>
      <figure class="hero__img"><img src="<?php echo assets_path() ?>img/top/img-hero.png" alt="" loading="lazy" decoding="async" width="482" height="482"></figure>
    </div>
  </section>

  <section class="anc">
    <div class="containers">
      <ul class="flex jcC gap30 inherit anc__box">
        <li><a href="#overview">製品概要</a></li>
        <li><a href="#feature">特長</a></li>
        <li><a href="#merit">導入メリット</a></li>
        <li><a href="#series">製品シリーズ一覧</a></li>
      </ul>
    </div>
  </section>

  <section id="overview" class="overview partition-l">
    <div class="containers">
      <h2 class="ttl-secondary">精密さを求める部品や<br class="sp-only">デバイスの検査・角度測定に<br>レーザオートコリメータ<br class="sp-only">「Smart LAC」</h2>
      <div class="flex sp-reverse">
        <h3 class="overview__box">
          <p>オートコリメータ「Smart LAC」は、レーザ光を使い対象物の微小な角度や複数の対象物の相対角度を非接触でリアルタイムに測定できる計測機器です。</p>
          <p>レーザビームが集光レンズに入射すると、その入射角度に応じて焦点面上のビームスポット位置の情報に変換されます。この原理を応用し、測定対象物へレーザビームを照射し、その反射光をイメージセンサ上に集光させることで、測定対象物の角度を算出します。</p>
        </h3>
        <figure class="overview__img"><img src="<?php echo assets_path() ?>img/product/img-overview.jpg" alt="レーザオートコリメータ「Smart LAC」" loading="lazy" decoding="async" width="522" height="293"></figure>
      </div>
    </div>
  </section>

  <section id="feature" class="about partition-r">
    <div class="containers">
      <h2 class="ttl-secondary">レーザオートコリメータ<br class="sp-only">「Smart LAC」の特長</h2>
      <div class="lead">非接触レーザオートコリメータ方式採用し、１台のセンサでワークの傾きを高精度にリアルタイム測定</div>
      <ul class="flex gap30 card">
        <li class="card__box">
          <h3 class="card__box--ttl">非接触で角度が測定できる</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-about01.jpg" alt="非接触で角度が測定できる" loading="lazy" decoding="async" width="287" height="161"></figure>
          <ul class="card__box--txt">
            <li>測定物に損傷を与えない</li>
            <li>センサ1台で傾きがわかるので、省空間・省価格・省エネ</li>
          </ul>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl">作動距離によらず測定できる</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-about02.jpg" alt="作動距離によらず測定できる" loading="lazy" decoding="async" width="287" height="161"></figure>
          <ul class="card__box--txt">
            <li>繰り返し再現性0.0003度 （Ave.）<span>（5µrad）</span></li>
            <li>作動距離によらず測定ができるので、レイアウト自由度が高い</li>
          </ul>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl">瞬時に測定できる</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-about03.jpg" alt="瞬時に測定できる" loading="lazy" decoding="async" width="287" height="161"></figure>
          <ul class="card__box--txt">
            <li>高速・高精度もラインナップ<br>　高速測定　　　500kHz<br>　測定時間　2µs(500kHz)</li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <section id="merit" class="about partition-l">
    <div class="containers">
      <h2 class="ttl-secondary">レーザオートコリメータ<br class="sp-only">「Smart LAC」導入メリット</h2>
      <div class="lead">導入することで、計測速度の向上やコスト削減などのメリットがあります。</div>
      <ul class="flex gap30 card">
        <li class="card__box">
          <h3 class="card__box--ttl v2">計測精度向上</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/product/img-about04.jpg" alt="計測精度向上" loading="lazy" decoding="async" width="287" height="161"></figure>
          <div class="card__box--txt v2">測定物の微小な角度関係を非接触で測定できるため、測定物に損傷を与えず、瞬時に高精度な角度測定をすることが可能です。</div>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl v2">コスト削減</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/product/img-about05.jpg" alt="コスト削減" loading="lazy" decoding="async" width="287" height="161"></figure>
          <div class="card__box--txt v2">角度等を測定する際に複数の装置を使う必要がないため、装置製作コストやスペースの削減・省エネにつながります。</div>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl v2">UPH向上</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/product/img-about06.jpg" alt="UPH向上" loading="lazy" decoding="async" width="287" height="161"></figure>
          <div class="card__box--txt v2">測定物に損傷を与えず、瞬時に高精度な角度測定することができるため、測定時間を短縮でき、生産性の向上につながります。</div>
        </li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/material' ); ?>

  <?php get_template_part( 'template-parts/series' ); ?>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li>製品の特長</li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>