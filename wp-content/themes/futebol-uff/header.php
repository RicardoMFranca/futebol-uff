<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()?>/assets/images/favicon.png" type="image/png" sizes="240x240">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/aos.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/style.css"/>
    <script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/main.js"></script>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="<?php if (is_page_template(array('faq.php'))):?>relative-header<?php endif;?>">
      <div class="container">
        <div class="header-container">
          <div class="nav-container">
            <nav>
              <ul>
                <a class="logo-container" href="<?= site_url()?>"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/logo.png" alt="Logo do projeto UFFutebol Nacional" ></a>
                <li>
                  <a class="contact-btn">Contato</a>
                </li>
                  <li>
                    <a class="about-btn" href="<?php if (is_page_template(array('faq.php'))):?><?= site_url()?>/#about<?php endif;?>">Quem somos</a>
                  </li>
                <li>
                  <a class="faq-btn">FAQ</a>
                </li>
              </ul>
              <a class="subscribe contact-btn">Inscreva-se</a>
            </nav>
          </div>
        </div>
      </div>
    </header>