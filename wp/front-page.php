<?php get_header(); ?>

<main class="top">

  <section class="hero core">
    <div class="containers flex aiC">
      <div class="hero__box">
        <div class="hero__box--sub">精密さを求める部品やデバイスの検査・角度測定に</div>
        <h1 class="ttl-primary">駿河精機の光センサ</h1>
        <div class="hero__box--lead">低コスト・省スペース・短時間にて<br>高精度な測定を実現します。</div>
        <div class="ctabtn">
          <div class="balloon"><span class="balloon__txt">製品の特長や料金が3分で分かる！</span></div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more thumb big bgY">製品資料ダウンロード</a>
        </div>
      </div>
      <figure class="hero__img"><img src="<?php echo assets_path() ?>img/top/img-hero.png" alt="" loading="lazy" decoding="async" width="482" height="482"></figure>
    </div>
  </section>

  <?php get_template_part( 'template-parts/case' ); ?>

  <section class="about">
    <div class="containers">
      <h2 class="ttl-secondary cW">レーザオートコリメータ<br class="sp-only">「Smart LAC」とは</h2>
      <div class="lead cW">非接触レーザオートコリメータ方式採用し、１台のセンサでワークの傾きを高精度にリアルタイム測定</div>
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
            <li>繰り返し再現性0.0003度 （Ave.）（5µrad）</li>
            <li>作動距離によらず測定ができるので、レイアウト自由度が高い</li>
          </ul>
        </li>
        <li class="card__box">
          <h3 class="card__box--ttl">瞬時に測定できる</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-about03.jpg" alt="瞬時に測定できる" loading="lazy" decoding="async" width="287" height="161"></figure>
          <ul class="card__box--txt">
            <li>高速・高精度もラインナップ<br>　高速測定　　　500kHz<br>　測定時間　2μs(500kHz)</li>
          </ul>
        </li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>product/" class="more">製品詳細を見る</a>
    </div>
  </section>

  <section class="needs">
    <div class="containers">
      <h2 class="ttl-secondary">以下のようなニーズをお持ちの<br class="sp-only">企業様に活用されています</h2>
      <div class="flex jcC gap30 card">
        <a herf="/cost/" class="card__box">
          <h3 class="card__box--ttl">装置制作のコスト削減をしたい</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-needs01.jpg" alt="装置制作のコスト削減をしたい" loading="lazy" decoding="async" width="480" height="270"></figure>
        </a>
        <a herf="/accuracy/" class="card__box">
          <h3 class="card__box--ttl">より精度の高い計測がしたい</h3>
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-needs02.jpg" alt="より精度の高い計測がしたい" loading="lazy" decoding="async" width="480" height="270"></figure>
        </a>
      </div>
    </div>
  </section>

  <section class="useful-wp">
    <div class="containers">
      <h2 class="ttl-secondary cW">お役立ち資料</h2>
      <div class="flex jcC gap30">
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img-useful-wp.jpg" alt="" loading="lazy" decoding="async" width="190" height="131"></figure>
          <summary class="card__box">
            <div class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイトルが入ります。資料タイト</div>
            <div class="more bgY small">資料ダウンロード</div>
          </summary>
        </a>
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img-useful-wp.jpg" alt="" loading="lazy" decoding="async" width="190" height="131"></figure>
          <summary class="card__box">
            <div class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイト</div>
            <div class="more bgY small">資料ダウンロード</div>
          </summary>
        </a>
        <a href="#" class="card">
          <figure class="card__img"><img src="<?php echo assets_path() ?>img/common/img-useful-wp.jpg" alt="" loading="lazy" decoding="async" width="190" height="131"></figure>
          <summary class="card__box">
            <div class="card__box--ttl">資料タイトルが入ります。資料タイトルが入ります。資料タイト</div>
            <div class="more bgY small">資料ダウンロード</div>
          </summary>
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/" class="more">お役立ち資料一覧を見る</a>
    </div>
  </section>

  <section class="sec-column">
    <div class="containers">
      <h2 class="ttl-secondary cW">製造業向けお役立ちコラム</h2>
      <div class="flex jcC gap30 card">
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img-sec-column01.png" alt="" loading="lazy" decoding="async" width="347" height="170"></figure>
          <summary class="card__box">
            <div><span class="cat">カテゴリ名</span></div>
            <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
            <div><span class="time">2023.7.18</span></div>
          </summary>
        </a>
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img-sec-column01.png" alt="" loading="lazy" decoding="async" width="347" height="170"></figure>
          <summary class="card__box">
            <div><span class="cat">カテゴリ名</span></div>
            <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
            <div><span class="time">2023.7.18</span></div>
          </summary>
        </a>
        <a href="#" class="card__wrap">
          <figure class="card__wrap--img"><img src="<?php echo assets_path() ?>img/common/img-sec-column01.png" alt="" loading="lazy" decoding="async" width="347" height="170"></figure>
          <summary class="card__box">
            <div><span class="cat">カテゴリ名</span></div>
            <h3 class="card__box--ttl">コラムタイトルが入りますコラムタイトルが入りますコラムタイトルが入ります</h3>
            <div><span class="time">2023.7.18</span></div>
          </summary>
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>column/" class="more">お役立ちコラム一覧を見る</a>
    </div>
  </section>

  <section class="element">
    <div class="containers">
      <h2 class="ttl-secondary rack"><small>選ばれる理由</small>駿河精機の製品は、バリエーションの豊富さ、互換性の高さと<br>確実短納期を実現することにより、<br class="sp-only">多くの企業様に選ばれています。</h2>
      <ul class="flex gap30 item">
        <li class="item__box">
          <div class="item__box--num core">1</div>
          <div class="item__box--ttl">製品バリエーションの豊富さ</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-element01.jpg" alt="製品バリエーションの豊富さ"></figure>
        </li>
        <li class="item__box">
          <div class="item__box--num core">2</div>
          <div class="item__box--ttl">製品の互換性</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-element02.jpg" alt="製品の互換性"></figure>
        </li>
        <li class="item__box">
          <div class="item__box--num core">3</div>
          <div class="item__box--ttl">テクノロジーと安定性</div>
          <figure class="item__box--img"><img src="<?php echo assets_path() ?>img/top/img-element03.jpg" alt="テクノロジーと安定性"></figure>
        </li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/" class="more bgW">詳しくはこちら</a>
    </div>
  </section>

  <section class="info">
    <div class="containers">
      <h2 class="ttl-secondary">会社情報</h2>
      <div class="flex gap50 aiC">
        <figure class="info__img"><img src="<?php echo assets_path() ?>img/top/img-info.jpg" alt="会社情報" loading="lazy" decoding="async" width="522" height="294"></figure>
        <div class="info__box">
          <h3 class="info__box--ttl">駿河精機は1964年の創業より、光学機器市場で競争力の高い製品を提供し続けています。<br>急速に発展するスマートフォン・タブレットなどのモバイル機器や、光通信、半導体、車載用センサ部門等において、駿河精機のテクノロジーが欠かせない存在となっています。 </h3>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>company/" class="more bgW">詳しくはこちら</a>
        </div>
      </div>
    </div>
  </section>

  <section class="sec-news">
    <div class="containers">
      <h2 class="ttl-secondary">お知らせ</h2>

        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
        <a href="#" class="sec-news__box">
          <dl class="flex aiC gap30 sec-news__box--item">
            <dt class="flex aiC gap20 sp-fS">
              <time class="time">2022.9.20</time>
              <span class="cat">カテゴリ</span>
            </dt>
            <dd>お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。お知らせタイトルが入ります。</dd>
          </dl>
        </a>
      
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="more bgW">お知らせ一覧を見る</a>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>
