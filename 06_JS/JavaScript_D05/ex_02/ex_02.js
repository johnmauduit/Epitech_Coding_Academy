$(document).ready(function()
{

    $("button").click( function()
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
