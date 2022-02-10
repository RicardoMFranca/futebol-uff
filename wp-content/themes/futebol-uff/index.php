<?php 
    $faq = new WP_Query( array(
        'post_type' => 'faq',
        'order' => 'ASC',
        'posts_per_page' => 3,
    ));
    get_header();
?>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h1 data-aos="fade-right"><span>UFFutebol nacional</span> Inclusão Social e Cidadania.</h1>
                        <p data-aos="fade-right" data-aos-delay="200">Pratique futebol 100% gratuito em um projeto que acontece desde 1993.</p>
                        <div data-aos="fade-right" data-aos-delay="300">
                            <button class="default-btn">Participe do projeto</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll">
			<span class="arrow arrow-one"></span>
			<span class="arrow arrow-two"></span>
			<span class="arrow arrow-three"></span>
		</div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 my-auto">
                    <h2>Saiba mais sobre <br>o projeto <span>UFFutebol</span> <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/ball.png" alt="Foto de uma bola de futebol em miniatura" ></h2>
                    <p>O projeto contribuiu com a formação de mais de <span>3000</span> <strong>crianças</strong> e <strong>adolescentes.</strong></p>
                    <p>O futebol como instrumentro para melhoria da qualidade de vida.</p>
                    <p>Este trabalho tem como objetivo fomentar e estimular a prática esportiva.</p>
                    <button class="default-btn">Entrar na fila de espera</button>
                </div>
                <div class="col-lg-7">
                    <div class="futbol-img-container">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/about-image.png" alt="Garotas jogando futebol." class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-you-need" id="all-you-need">
        <div class="container">
            <h2>Metodologias</h2>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-down">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/couple.svg" alt="icone de um casal" class="img-fluid">
                        <h3>Futebol misto</h3>
                        <p>Garantindo o direito de participação de meninos e meninas.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/trophy.svg" alt="icone de um troféu" class="img-fluid">
                        <h3>Torneios</h3>
                        <p>Participação dos alunos em jogos amistosos e campeonatos.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-delay="400">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/exchange.svg" alt="icone de duas setas simbolizando uma troca" class="img-fluid">
                        <h3>Intercâmbio</h3>
                        <p>Participação em torneios comunitários e escolas públicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <section class="partners">
        <div class="container">
            <h2>Em parceria com</h2>
            <div class="owl-carousel owl-theme">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/uff-logo.png" alt="Logo da Universidade Fededral Fluminense" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/governo-federal.png" alt="Logo do Governo Federal" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/ministerio-da-cidadania.png" alt="Logo do Ministério da Cidadania" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/secretaria-especial-do-esporte.png" alt="Logo da Secretaria Especial do Esporte" class="resized-logo">
            </div>
        </div>
    </section>
<?php get_footer();?>
  

