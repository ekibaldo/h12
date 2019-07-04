
/* Mobile menu */

 $('.nav__trigger').on('click', function(e){
      e.preventDefault();
      $(this).parent().toggleClass('nav--active');
    });


/* -- */

/* Bootstrap carousel interval */
$(function(){
    $('.carousel').carousel({
        interval: 3500
    });
});
		
/* -- */