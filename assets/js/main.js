/* ==========================
    Author: Aline Ferreira
    Version: 1.0 
=============================*/

$(function() {
    $('ul.navbar li a').click(function(e) {
        // e.preventDefault();
        var $this = $(this);
        $this.closest('ul').find('.active').removeClass('active');
        $this.parent().addClass('active');
        if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
            $('.navbar-collapse.in').collapse('hide');
        }
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() >= 450) { 
           $('#backToTop').addClass('show');
        } else {
            $('#backToTop').removeClass('show');  
        }

        if ($(window).scrollTop() <= 50) {
            $('ul.navbar li:first').addClass('active');
        }
    });

    var hash = window.location.hash;

    if (hash.indexOf("#produtos") > -1){

        $('html,body').stop().animate({
            scrollTop: $(hash).offset().top - 70
        }, 1500);
    }
});

function backtotop() {
    $("html, body").stop().animate({ scrollTop: 0 }, 800);
    setTimeout(function(){ 
        $('ul.navbar li:first').addClass('active'); 
    }, 850);  
};
 

/* ==========================
       SMOOTH-SCROLLING
=============================*/
$(function(){
    "use strict"; 
    
    $('.navbar a').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 70
                }, 1500);
                return false;
            }
        }
    });

});


function closeModal(e) {
    var modal = $(e).parents("div.modal");
    var form = $(e).parents("form");
    $(modal).modal('hide');
    $(form)[0].reset();
    $("form label[id*=-error]").css('display','none');
}


function formatReal(x){
    var xString = x.toString();
    var decimal = xString.substr(xString.length - 2, xString.length);
    var parts = xString.replace(/(\d)(\d{2})$/, "$1").split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    if (xString.length > 2)
        return parts.join(".") + "," + decimal;
    else if(xString.length == 2)
        return "0," + parts.join(".") 
    else
        return "0,0" + parts.join(".")  
}
