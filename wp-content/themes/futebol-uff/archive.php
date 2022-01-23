<?php 
  get_header();
//   the_post();
?>

<section class="allPostsResults">
  <div class="container">
    <h3>Categoria: 
      <?php $category = get_the_terms( get_the_ID(), 'post_category' ) ?>
      <?php if($category && ! is_wp_error( $category )) : ?>
        <?= $category[0]->name ?>
      <?php endif; ?>
    </h3>
    <div class="row">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="col-md-3">  
          <a href="<?= get_the_permalink(); ?>" class="mainPostEffect">
            <div class="allPostsResultsDetails">
              <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="" class="img-fluid">
              <div class="allPostsResultsContent">
                <div class="allPostsResultsDetails">
                  <span class="allPostsResultsEmphasis"><?= get_the_date(); ?></span>
                </div>
                <h2><?= the_title() ?></h2>
                <p><?php the_excerpt() ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer();?>