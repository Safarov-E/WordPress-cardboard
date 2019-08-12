$(document).ready(function(){
    $('.header-cantacts__button').on('click', function(){
        $('.overlay').show();
    });
    $('.popup-close').on('click', function(){
        $('.overlay').hide();
    });
});