$(document).ready(function(){
    $("button").click( function()
           {
            $("p").remove(".test, .platypus"); 
            alert ("All P class 'test' and 'platypus' have been removed");
           }
        );
});
