<?php get_header(); 
$post_id = get_the_ID();
$post_terms = get_the_terms($post_id, 'news_category');
?>

<main class="bg-G">

  <section class="news-single">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <div class="flex gap20 fS aiC inherit news-single__date">
          <time class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></time>
          <?php if ($post_terms) : ?>
            <?php foreach ($post_terms as $post_term) : ?>
              <span class="cat"><?php echo esc_html($post_term->name); ?></span>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <h1 class="news-single__h1"><?php the_title(); ?></h1>

        <div class=" news-single__lead"><?php echo CFS()->get('lead'); ?></div>

        <div class=" news-single__conts"><?php the_content(); ?></div>

      </article>

      <?php get_sidebar("news"); ?>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>