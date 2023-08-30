<?php
$allsearch = new WP_Query("s=$s&posts_per_page=-1&post_status=publish");
$key = esc_html($s);
?>
<?php get_header(); ?>

<main class="tax-column bg-G">

  <section class="">
    <div class="containers flex">

      <!-- タクソノミー -->
      <section class="main-conts article">

        <h1 class="article__ttl">「<span><?php echo $key; ?></span>」で検索した結果：<?php echo $allsearch->found_posts; ?> 件</h1>

        <div class="article__wrap">

        <?php
        if ($allsearch->have_posts()) :
        ?>
          <?php while ($allsearch->have_posts()) : $allsearch->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>

            <a href="<?php the_permalink(); ?>" class="flex item">
              <figure class="item__img"><?php the_post_thumbnail(); ?></figure>
              <summary class="item__box">
                <div class="flex fS aiC gap10 item__box--row">
                  <span class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></span>
                  <?php if ($post_terms) : ?>
                    <?php foreach ($post_terms as $post_term) : ?>
                      <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <h2 class="item__box--ttl"><?php the_title(); ?></h2>
                <h3 class="item__box--lead"><?php echo CFS()->get('lead'); ?></h3>
              </summary>
            </a>

            <?php endwhile; ?>
          <?php endif; ?>

        </div>

      </section>

      <?php get_sidebar("column"); ?>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
        <li>検索結果</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>