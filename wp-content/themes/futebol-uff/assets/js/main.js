
//ANIMAÇÃO DO LOADER 
window.onload = function() {
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
    $(current).find('input').focus();
  }
})

$(window).click(function() {
  $(".input-container").removeClass("focused");
});

$('.input-container').click(function(event){
  event.stopPropagation();
});


//FIM DO FORMULARIO DE CONTATO

//ANIMAÇÃO DA SECAO "PARA O SEU FILHO"
$(window).scroll(function() {
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
  $(`.${btn}`).click(function() {
    console.log("scroll")
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
