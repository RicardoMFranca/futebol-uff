<?php 
	// Template Name: FAQ
    $faq = new WP_Query( array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
    ) );
?>

<section class="faq" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/faq.png" alt="Fotos de torneios de futebol." class="img-fluid">
            </div>
            <div class="col-lg-5 offset-lg-1 my-auto">
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
        </div>
    </div>
</section>