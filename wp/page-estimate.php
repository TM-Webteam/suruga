<?php get_header(); ?>

<main class="contact bg-G estimate">

  <section class="hero-m core">
    <div class="containers">
      <div class="hero-m__box">
        <h1 class="ttl-primary-lower">お見積</h1>
        <div class="hero-m__box--lead">ご希望の製品の見積を承ります。</div>
      </div>
    </div>
  </section>

  <section class="form">
    <div class="containers">
      <div class="form__note">
        <p>● 以下フォームにご連絡先、お問合せ内容をご記入の上、送信してください。担当よりご連絡申し上げます。</p>
      </div>
      <div class="form__wrap">
        <div class="form__ttl">お見積ご依頼フォーム</div>

        <div id="aptoenqform">
        <noscript>JavaScriptがオフです。オンにしてアクセスして頂くと、フォームが表示されます。</noscript>
        </div>
        <script language="javascript" charset="utf-8" src="https://www.sotuu.net/js-common/enqform.js"></script>
        <script language="javascript">
        var arg = new enqarg();
        arg.id = "surugaost";
        arg.no = 161;
        enqform(arg);
        </script>
        
      </div>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li>お問合せ・ご相談</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>