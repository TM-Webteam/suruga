<?php get_header(); ?>

<main class="strength">

  <section class="hero-b">
    <div class="containers core">
      <div class="hero-b__box">
        <h1 class="ttl-primary-lower">駿河精機が選ばれる理由</h1>
        <div class="lead cW">駿河精機の製品は、バリエーションの豊富さ、<br class="sp-only">互換性の高さと確実短納期を実現することにより、<br>多くの企業様に選ばれています。</div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more big bgY">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <section class="symmetry">
    <div class="containers">

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">01</div>
          <h2 class="item__box--ttl">製品バリエーションの豊富さ</h2>
          <div class="item__box--txt">駿河精機のレーザオートコリメータは、低価格高機能で汎用タイプのシングルスポット測定、マルチスポット測定だけでなく高速/広角測定タイプもご用意しております。<br>波長タイプも赤・青・緑・赤外  4種類と豊富なバリエーションがあり、分岐アダプタ 等 周辺アイテムも充実しております。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img01.jpg" alt="製品バリエーションの豊富さ" loading="lazy" decoding="async" width="534" height="300"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img02.jpg" alt="製品の互換性" loading="lazy" decoding="async" width="534" height="300"></figure>
        <summary class="item__box">
          <div class="item__box--num">02</div>
          <h2 class="item__box--ttl">製品の互換性</h2>
          <div class="item__box--txt">駿河精機のレーザオートコリメータは、旧製品とのコマンドの互換性や、ヘッド取付穴共通化により周辺アイテムの継続使用が可能です。<br>故障時も修理対応しますので、ディスコンを気にせず長くお使いいただけます。</div>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">03</div>
          <h2 class="item__box--ttl">テクノロジーと安定性</h2>
          <div class="item__box--txt">駿河精機はステージ事業をはじめ、長年光学機器市場で培った確かなテクノロジーと、製品を確実短納期で安定的に提供することで多くの企業様に選ばれています。</div>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img03.jpg" alt="テクノロジーと安定性" loading="lazy" decoding="async" width="534" height="300"></figure>
      </div>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li>選ばれる理由</li>
      </ul>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>