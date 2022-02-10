<?php 
	// Template Name: FAQ
    $faq = new WP_Query( array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
    ) );
    get_header();
?>

<section class="faq faq-screen" id="faq">
    <div class="container">
        <h2>Perguntas frequentes.</h2>

        <div id="accordion" class="faq-accordion">
            <?php 
                $index = 0;
                if( $faq->have_posts() ) : while ( $faq->have_posts() ) : $faq->the_post(); 
                $index++
            ?>
                <div class="card">
                    <div class="card-header" id="heading-<?= $index ?>">
                        <button class="d-flex collapsed" data-toggle="collapse" data-target="#collapse-<?= $index ?>" aria-expanded="false" aria-controls="collapse-<?= $index ?>">
                            <?= "$index. "; the_title(); ?>
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                    <div id="collapse-<?= $index ?>" class="collapse" aria-labelledby="heading-<?= $index ?>">
                        <div class="card-body">
                            <p><?= get_field('resposta')?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <button class="default-btn">Entrar na fila de espera</button>
    </div>
</section>

<?php get_footer();?>