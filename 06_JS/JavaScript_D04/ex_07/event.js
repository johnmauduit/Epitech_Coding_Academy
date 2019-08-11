$(document).ready(function(){

    $("p").on({
        mouseenter: function(){
            $(this).css("background-color", "lightgray");
        },
        mouseleave: function(){
            $(this).css("background-color", "");
        },
        click: function(){
            $(this).hide();
        }
    }); 
});
