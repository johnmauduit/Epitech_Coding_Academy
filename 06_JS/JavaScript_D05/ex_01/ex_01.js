$(document).ready(function(){
    $("button").click( function()
           {
               var $newLi = $("#listItem").val();
               $("ul").append("<li>" + $newLi + "</li>");
           }
        );
});
