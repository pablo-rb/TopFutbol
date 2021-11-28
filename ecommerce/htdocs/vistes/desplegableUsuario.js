$(document).ready(function() {
    $btnUsuario = $('#btn-usuario').find('ul').find('li');
    $btnUsuario.hover(function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideDown();
    }, function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideUp();
    });
});