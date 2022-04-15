    <footer id="contact">
        <div class="container">
            <div class="footer-container">
                <div class="row">
                    <div class="col-lg-5 my-auto">
                        <h3>Interessado?</h3>
                        <h2>Faça sua pré-inscrição</h2>
                        <p class="address">R. Alexandre Moura, 8 - São Domingos, Niterói - RJ, 24210-200</p>
                        <p class="phone"><i class="fas fa-phone-alt"></i> 021 96991-4677</p>
                        <div class="contact-container">
                            <p><i class="fas fa-envelope"></i>contato@uffutebolnacional.com.br</p>
                        </div>
                    </div>
                    <div class="col-lg-6 contact">
<!--                         <?php echo do_shortcode( '[contact-form-7 id="8" title="Formulário de contato 1"]' ); ?> -->
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            <p>projetado por <strong>Ricardo França</strong></p>
        </div>
    </footer>
    <div class="modal fade" id="success-modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/success.png" alt="Meninas comemorando com uma bola de futebol na mão." class="img-fluid mx-auto">
                    </div>
                    <div class="col-md-6 my-auto">
                        <h2>Pré-matrícula <br>feita com sucesso!</h2>
                        <p>Em breve entraremos em contato <br>para informar sobre a matrícula presencial!</p>
                        <a class="default-btn" href="https://www.instagram.com/uffutebolnacional/" target="blank">Visite Nosso Instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="loader">
        <div class="ball-container">
            <div class="shadow"></div>
            <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/ball.png" alt="bola de futebol" >
        </div>
        <div class="ball-container">
            <div class="shadow"></div>
            <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/ball.png" alt="bola de futebol" >
        </div>
        <div class="ball-container">
            <div class="shadow"></div>
            <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/ball.png" alt="bola de futebol" >
        </div>
    </div>
    
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js" integrity="sha512-kYfrz7nVdMw6RD9taSlptH1Bulus0J//cp5Y/ns+Otwi9uHJiyriPyuYUU7uWhUAQKWiE9yChj8C5etG0lN4Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/19290a9456.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri()?>/assets/js/aos.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/main.js"></script>
    <script>
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $("#success-modal").modal('show');
        }, false );
    </script>
    <?php wp_footer(); ?>
  </body>
</html>