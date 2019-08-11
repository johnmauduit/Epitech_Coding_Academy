$(document).ready(function()
{
    $("#btn_search").click( function()
    {
        //search field
        
        //$("#search").on("keyup", function() {
            var value = $("#search").val().toLowerCase();
        
        $("#selector option").each(function(){
            
            if(value != $(this).text())
            {
                console.log(value + $(this).text());
         
                $("." + $(this).text()).filter(function() {
                    $(this).hide();
                });
            }
            else
            {
                $("." + $(this).text()).filter(function() {
                    $(this).show();
                });
            }
        //});
    });
});








    $("#submit").click( function()
    {
        if($("#selector").val() == "note")
        {
            $("form").append('<li><input [type="text" name="note" placeholder="input text" class="note"]/></li>');
        }
        
        else if($("#selector").val() == "email")
        {
                $("form").append('<li><input [type="email" name="email" placeholder="input email" class="email"]/></li>');
        }
            
        else if($("#selector").val() == "todo")
        {
                $("form").append('<li><input [type="text" name="todo" placeholder="input todo" class="todo"]/></li>');
        }
    });
});
