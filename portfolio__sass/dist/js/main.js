let showMenu = false;
  const Item = $('.menu-nav__item')
$('.menu-btn').click(function(){
     if(!showMenu){
         $('nav').addClass('open');
         $('.menu-btn').addClass('open');
         $('.menu-nav').addClass('open');
       Item.addClass('open');
          $('.menu-btn__burger').addClass('open')
         showMenu = true;
     }else{
        $('nav').removeClass('open');
        $('.menu-btn').removeClass('open');
        Item.removeClass('open');
          $('.menu-btn__burger').removeClass('open')
        $('.menu-nav').removeClass('open');
        showMenu = false;
     }
})