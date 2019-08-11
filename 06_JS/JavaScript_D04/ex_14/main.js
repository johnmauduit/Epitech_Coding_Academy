$(document).ready(function(){
    
    $("p").hover(function(){
        $(this).addClass("blue");
    });

    $("p").click (function(){
        $(this).toggleClass("highlighted");
    
    });

});
