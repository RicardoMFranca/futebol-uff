<?php 
    get_header();
?>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h1 data-aos="fade-right">Aqui um título de até três linhas em caixa alta </h1>
                        <p data-aos="fade-right" data-aos-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida nascetur proin libero, elementum .</p>
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
                    <h2>Aqui um título de até duas linhas <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/ball.png" alt="" ></h2>
                    <p>Aqui um breve texto divido em 3 parágrafos.</p>
                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has.</p>
                    <p>been the industry's standard dummy text ever since the 1500s,.</p>
                    <button class="default-btn">Entrar na fila de espera</button>
                </div>
                <div class="col-lg-7">
                    <div class="futbol-img-container">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/about-image.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="all-you-need" id="all-you-need">
        <div class="container">
            <h2>Aqui um titulo da secao</h2>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-down">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/notification-icon.jpg" alt="" class="img-fluid">
                        <h3>Título de uma linha</h3>
                        <p>Simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/menu-icon.jpg" alt="" class="img-fluid">
                        <h3>Título de uma linha</h3>
                        <p>Simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-down" data-aos-delay="400">
                    <div class="need-card">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/menu-icon.jpg" alt="" class="img-fluid">
                        <h3>Título de uma linha</h3>
                        <p>Simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/faq.png" alt="" class="img-fluid">
                </div>
                <div class="col-lg-5 offset-lg-1 my-auto">
                    <h2>Aqui um título de até duas linhas </h2>
                    <div id="accordion" class="faq-accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="d-flex collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Undergraduate Studies
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has. been the industry's standard dummy text ever since the</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="d-flex collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    1. Pergunta frequentemente feita. 
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has. been the industry's standard dummy text ever since the</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="d-flex collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Research
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                   <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has. been the industry's standard dummy text ever since the</p>
                                </div>
                            </div>
                        </div>
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
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/uff-logo.png" alt="" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/governo-federal.png" alt="" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/ministerio-da-cidadania.png" alt="" >
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/partners/secretaria-especial-do-esporte.png" alt="" class="resized-logo">
            </div>
        </div>
    </section>
<?php get_footer();?>
  

