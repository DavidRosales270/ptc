$(document).ready(function() {

    $('.announce').on('click', function() {
       var id = $(this).data('key');

        $(".announce").find('svg').hide();

        var svg = $(this).find('svg');
        svg.show();

        var left = Math.floor((Math.random() * 140) + 1);
        svg.css('left', left.toString() + 'px');
        var top= Math.floor((Math.random() * 40) + 1);
        svg.css('top', top.toString() + 'px');
    });

    $('.pointer').on('click', function() {

        $(this).closest('.announce').addClass('announce_disabled');
        $(this).hide();
        var id = $(this).data('key');
        var url = 'anuncio/i/' + id;
        window.open(url);


    })


});