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

$(document).ready(function() {
    $navLigas = $('#menu-desplegable-ligas').find('ul').find('li');

    $navLigas.hover(function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideDown();
    }, function() {
        $(this).children('ul').stop();
        $(this).children('ul').slideUp();
    });
});