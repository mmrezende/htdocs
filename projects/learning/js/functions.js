/*function initMap() {
    var mapProp = {
        center: new google.maps.LatLng(-18.9014793,-48.2916074),
        scrollwheel: false,
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"),mapProp);
}*/
window.onload = function() {
    // setTimeout(function(){initMap();},2000);

    /*
    var timer;

    $(window).scroll(function() {
        clearTimeout(timer);
        timer = setTimeout(function() {
            console.log("scroll ativo");
        },0);        
    });
    */
    /*
    $('body').click(function() {
        $('div h2').css('color','red');
    })*/

    

    /*
    $('body').click(function() {
        $('.box > h2').css('display','none');
    });

    

    $('.box').click(function(e) {
        e.stopPropagation();
        $('.box > h2').css('display','inline');
    });
    
    */
    
    //$('.box').height('100');
    /* 
    $('.box').css('height','100px');
    console.log($('.box').height());
    console.log($('.box').innerHeight());
    console.log($('.box').outerHeight(true));*/

}
/*
$(function() {
    
    $('body').click(function(){
    var el = $('.box h2');

    $(el).html('<div class="center">bla bla bla</div>');

    var el2 = $('.box h2 .center');
    $(el2.html($(el2).html() + ' bli bli bli'));
    });

    
});*/


/*
$(function(){
    alert("Olá mundo do JQuery!");
});

$(document).ready(function(){
    alert("Outro jeito");
});
*/

/*
$(window).on('load',function(){
    alert("Outro jeito carregado");
});
*/

$(function() {
    setTimeout(function () {
        $('.box h2').remove();
    },2000);
});

