$(document).ready(function(){
    $("button").click( function()
           {
               var $newDiv = $("#listItem").val();
               $("span").append("<div>" + $newDiv + "</div>");
           }
        );
});
