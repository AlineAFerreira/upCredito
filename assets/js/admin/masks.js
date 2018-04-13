/* ==========================
    Author: Aline Ferreira
    Version: 1.0 
=============================*/

$(function() {
    $('.date').mask('00/00/0000');
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.number').mask('000', {reverse: true});
});

