$(document).ready(function(){
    $("button").click( function()
           {
            $("img").before("<b>Wow, I precede the image!</b>");
            
            $("img").after("<i>Hey, I come in last </i>");
           }
        );
});
