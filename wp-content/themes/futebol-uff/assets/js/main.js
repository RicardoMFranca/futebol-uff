
//ANIMAÇÃO DO LOADER 
window.onload = function() {
  $('.loader').fadeOut();
  AOS.init({
    duration: 600,
    once: "true",
    easing:"ease-out"
  });
};

//FORMULARIO DE CONTATO
$('.input-container').on("click", function(){
  var current = $(this);
  $(this).addClass("focused");
  if($('.focused')){
    $(".input-container").removeClass("focused");
    $(current).addClass("focused");
    $(current).find('input').on('focus');
  }
})

$(window).on('click', function() {
  $(".input-container").removeClass("focused");
});

$('.input-container').on('click', function(event){
  event.stopPropagation();
});


//FIM DO FORMULARIO DE CONTATO

//ANIMAÇÃO DA SECAO "PARA O SEU FILHO"
$(window).on('scroll', function() {
  var scrolled_top = $(window).scrollTop(); 
  var blog = $(".about");
  var blog_top_position = Math.round(blog.offset().top);
  if(scrolled_top >= (blog_top_position - 100)){
    $(".about").addClass("bounce");
  }
});
//FIM DA ANIMAÇÃO

//SCROLL PARA ELEMENTO
function scroll_to_div(btn, target){
  $(`.${btn}`).on('click', function() {
    $('html, body').animate({
        scrollTop: $(`#${target}`).offset().top
    }, 400);
  });
}

scroll_to_div("faq-btn","faq");
scroll_to_div("about-btn","about");
scroll_to_div("hero-scroll","about");
scroll_to_div("subscribe","contact");
scroll_to_div("default-btn","contact");
scroll_to_div("contact-btn","contact");

//FIM DA ANIMAÇÃO

//ACCORDION FAQ
$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("svg:last-child")
    .toggleClass("fa-minus fa-plus");
});
//FIM DO ACCORDION

//PARTNERS CAROUSEL
$('.owl-carousel').owlCarousel({
  loop:false,
  margin: 40,
  nav:true,
  dots: false,
  navText : ["<i class='fa fa-arrow-left'></i>","<i class='fa fa-arrow-right'></i>"],
  responsive:{
      0:{
          items:2
      },
      600:{
        items:3
      },
      1000:{
          items:4
      }
  }
})
//FIM DO CAROUSEL
