/* ==========================
    Author: Aline Ferreira
    Version: 1.0 
=============================*/

$(function() {
    var hash = window.location.hash;

    if (hash.indexOf("#metacons") > -1){
        var target = hash +"-about";

        $('html,body').stop().animate({
            scrollTop: $(target).offset().top - 70
        }, 1500);
    }
});