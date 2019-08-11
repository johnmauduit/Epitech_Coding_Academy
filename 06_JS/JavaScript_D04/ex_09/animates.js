$(document).ready(function(){
    $("button").click(function()
           {
            $(".platypus").animate({right: '150px', bottom: '200px'});
            $(".platypus").css({"background-color": "lime"});
           }
        );

});
