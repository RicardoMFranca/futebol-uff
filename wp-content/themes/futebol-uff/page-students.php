<?php 
	// Template Name: Alunos
    $alunos = new WP_Query( array(
        'post_type' => 'aluno',
        'posts_per_page' => -1,
    ) );

?>
<section class="">
    <div class="col-md-9">
        <div class="">
            <?php if( $alunos->have_posts() ) : while ( $alunos->have_posts() ) : $alunos->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="product red col-md-4">
                    <h3><?php the_title(); ?></h3>
                </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>