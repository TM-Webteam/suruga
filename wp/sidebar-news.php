<!-- サイドメニュー -->
<aside class="side-nav">

<div class="catSearch">
  <h3 class="ttl-tertiary">カテゴリで探す</h3>

  <?php
  $args = array(
    'taxonomy' => 'news_category',
  );
  $categories = get_categories($args);
  if (!empty($categories)) :
  ?>

    <ul class="catSearch__list">
      <?php foreach ((array)$categories as $category) : ?>
        <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
      <?php endforeach; ?>
    </ul>

  <?php endif; ?>

</div>

<div class="sticky">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="bnr-contact"><img src="<?php echo assets_path() ?>img/common/bnr-contact.png" alt=""></a>
</div>

</aside>