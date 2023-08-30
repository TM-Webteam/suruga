<?php get_header(); ?>

<main class="sitemap bg-G">

  <section class="hero-m core small">
    <div class="containers">
      <div class="hero-m__box">
        <h1 class="ttl-primary-lower">サイトマップ</h1>
      </div>
    </div>
  </section>

  <section>
    <div class="containers flex fS gap60">

      <div class="group">
        <div class="group__ttl">製品について</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>product/">製品の特長</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/">選ばれる理由</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>case/">導入事例</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">ニーズ・課題から探す</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>cost/">装置製作のコスト削減をしたい</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>accuracy/">より精度の高い計測がしたい</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">製品資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問合せ・ご相談</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>estimate/">お見積</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">デモ機貸出</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>demo/">デモ機貸出</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">その他</div>
        <div class="flex fS gap50">
          <ul class="group__list">
            <li><a href="https://jpn.surugaseiki.com/support/export.html" target="_blank" rel="noopener noreferrer" class="blank">「該当/非該当判定書」作成依頼</a></li>
            <li><a href="https://jpn.surugaseiki.com/terms.html" target="_blank" rel="noopener noreferrer" class="blank">利用規約</a></li>
            <li><a href="https://jpn.surugaseiki.com/warranty.html" target="_blank" rel="noopener noreferrer" class="blank">保証規定</a></li>
            <li><a href="https://jpn.surugaseiki.com/dcms_media/other/cancellation-policy_jpn.pdf" target="_blank" rel="noopener noreferrer" class="blank">キャンセルポリシー(PDF)</a></li>
          </ul>
          <ul class="group__list">
            <li><a href="https://jpn.surugaseiki.com/export.html" target="_blank" rel="noopener noreferrer" class="blank">輸出管理規制対応</a></li>
            <li><a href="https://jpn.surugaseiki.com/quality.html" target="_blank" rel="noopener noreferrer" class="blank">環境・品質への取組み</a></li>
            <li><a href="https://www.misumi.co.jp/utility/privacy.html" target="_blank" rel="noopener noreferrer" class="blank">個人情報保護方針</a></li>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">会社情報</a></li>
          </ul>
        </div>
      </div>

    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li>サイトマップ</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>