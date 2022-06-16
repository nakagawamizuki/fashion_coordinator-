/* global $*/
$(function(){
    $(window).on('scroll load', function(){
        var scroll = $(this).scrollTop();
        var windowHeight = $(window).height();
        $('.fadeIn').each(function(){
            var cutPos = $(this).offset().top;
            if(scroll > cutPos - windowHeight + windowHeight / 3){
                $(this).addClass('active');
            }
        });
    });
});