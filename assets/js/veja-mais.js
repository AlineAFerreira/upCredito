/* ==========================
    Author: Aline Ferreira
    Version: 1.0 
=============================*/

$(function() {
    $('.filtr-container').filterizr();
    //Simple filter controls
    $('.simplefilter li').click(function() {
        $('.simplefilter li').removeClass('active');
        $(this).addClass('active');
    });
    //Multifilter controls
    $('.multifilter li').click(function() {
        $(this).toggleClass('active');
    });
    //Shuffle control
    $('.shuffle-btn').click(function() {
        $('.sort-btn').removeClass('active');
    });
    //Sort controls
    $('.sort-btn').click(function() {
        $('.sort-btn').removeClass('active');
        $(this).addClass('active');
    });

    $('#sortingOpt').on('change', function() {
        var sortOrder = $( this ).val();
        $('.filters-sorting .filtr').removeClass('filtr-active');
        $(this).addClass('filtr-active');
        $('.filtr-container').filterizr('sort', 'value', sortOrder);
    });
});