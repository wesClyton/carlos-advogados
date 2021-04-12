AOS.init();

$('.itens-banner').owlCarousel({
    loop:false,
    items:1,
    nav:false,
    dots: true
})

$('.itens-area').owlCarousel({
    loop:true,
    items:3,
    nav:false,
    dots: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        576:{
            items:2,
        },
        798:{
            items:3,
        }
    }
})

$('.fotos-sobre').owlCarousel({
    loop:true,
    items:5,
    nav:false,
    dots: false,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:3,
        },
        576:{
            items:3,
        },
        768:{
            items:4,
        },
        992:{
            items:5,
        },
        1200:{
            items:5,
        },
    }
})

$('.navbar-toggler').click(function(){

    if(!$('body').hasClass('menu-aberto')){
        $('body').addClass('menu-aberto');
    }else{
        $('body').removeClass('menu-aberto'); 
    }
});

$('#form-contato').on('submit', function(event){
	event.preventDefault();

	$.ajax({
	  type: "POST",
	  url: window.location.href,
	  data: $(this).serialize()
	})
	.done(function(data){
    console.log(data);
    if(data == '1'){
      $('#alert').html('<div class="success">Contato enviado com sucesso!</div>');
      $('#form-contato').each (function(){
        this.reset();
      });
    }else if(data == 'void'){
    	$('#alert').html('<div class="error">Por favor, preencha todos os campos!</div>');
    }else if(data == 'send'){
    	$('#alert').html('<div class="error">Erro no envio. Por favor tente mais tarde.</div>');
    }
  })
  .fail(function(){
    $('#alert').html('<div class="error">Erro no envio. Por favor tente mais tarde.</div>');
  })
  .always(function(){
  	$('#alert').css('opacity', 1);
  })

})
