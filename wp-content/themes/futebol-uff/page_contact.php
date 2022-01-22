<?php 
  // Template Name: Contato
  get_header();
?>
<style>
    header nav, header .subscribe, footer{
        display: none
    }
</style>
    <section class="contact">
        <div class="col-md-6 mx-auto">
            <h2>Entre na fila de espera!</h2>
            <p>Em breve nosso app será lançado e você pode ser um dos primeiros a ter uma conta 100% gratuita famCard.</p>
            <?php echo do_shortcode( '[contact-form-7 id="8" title="Formulário de contato 1"]' ); ?>
        </div>
    </section>  
<?php get_footer();?>
<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        $("#success-modal").modal('show');
    }, false );
</script>
