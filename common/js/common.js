
// window height
$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $("#header").css('background','#00B1EB');
    }
    else {
      $("#header").css('background','none');
    }
});

/*
  Totop Button
*/


/*
  Smartphone menu bar
*/
$(function() {
$('.menu').on('click', function() {
  $(this).toggleClass('is-active');
  $('.sp-navigation').slideToggle();
});

var topBtn = $('#pageTop');
    topBtn.removeClass('active');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.addClass('active');
        } else {
            topBtn.removeClass('active');
        }
    });
});





    