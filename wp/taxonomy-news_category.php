<?php get_header(); ?>

<main class="bg-G">

  <section class="arc-news">
    <div class="containers flex">

      <!-- 投稿記事詳細メイン -->
      <article class="main-conts single">

        <h1 class="ttl-secondary non"><span><?php esc_html(single_cat_title()); ?></span>に関するお知らせ</h1>
        
        <div class="item">

        <?php
        $queried_object = get_queried_object();
        $term_id = esc_html($queried_object->term_id);
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 10,
          'post_type' => 'news',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
          'tax_query'  => array(
            'relation'  => 'AND',
            array(
              'taxonomy' => 'news_category',
              'field' => 'term_id',
              'terms' => array($term_id),
              'operator' => 'IN',
            ),
          ),
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'news_category');
          ?>

          <a href="<?php the_permalink(); ?>" class="item__box">
            <div class="flex gap20 fS aiC inherit item__box--date">
              <time class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></time>
              <?php if ($post_terms) : ?>
                <?php foreach ($post_terms as $post_term) : ?>
                  <div class="cat"><?php echo esc_html($post_term->name); ?></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <summary class="item__box--ttl"><h3><?php the_title(); ?></h3></summary>
          </a>
  
          <?php endwhile; ?>
        <?php endif; ?>
          
          
        </div>

        <?php
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination(array(
          'mid_size' => 1,
          'prev_text' => '<span></span>',
          'next_text' => '<span></span>'
        ));

        wp_reset_postdata();
        ?>

      </article>

      <?php get_sidebar("news"); ?>
      
    </div>
  </section>

  <section class="breadcrumb">
    <div class="containers">
      <ul class="flex fS">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>optical-sensor/">トップ</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        <li><span><?php esc_html(single_cat_title()); ?></span>に関するお知らせ</li>
      </ul>
    </div>
  </section>

</main>

<?php get_footer(); ?>