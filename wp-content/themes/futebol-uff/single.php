<?php
	$args_posts = array(
		"post_type" => "aluno",
		'posts_per_page' => 4,
		'order' => 'DESC'
	);

	$query_posts = new WP_Query($args_posts);
?>

<div class="post-page">
  <section class="post-content">
    <div class="container">
      <div class="post-content">
        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
        <h1><?= the_title() ?></h1>
        <div class="container">
          <div class="row">
            <div class="data">
              <span>Aluno desde <?= get_the_date(); ?></span>
            </div>
            <div class="data">
              <span>
                <?php
                  $categories = get_the_category();
                  if ( ! empty( $categories ) ) {
                      echo esc_html( $categories[0]->name );
                  }
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>