
function BlockDisplay(){
  var unvisible = document.getElementById("createUser");
   unvisible.style.display = "block";
}

//function clear(){
  //var clear = document.getElementById("clear");
//  clear.reset();
//}


function Close(){
  var visible = document.getElementById("createUser");
   visible.style.display = "none";
}

function EditPage(){
  var unvisible = document.getElementById("editResult");
   unvisible.style.display = "block";
}

function editInfo()
  { var unvisible = document.getElementById("editResult");
   unvisible.style.display = "none";
  var E = document.getElementById("toBeEdit");
     E.style.display = "block";
  }

  function CloseEdit(){
    var visible = document.getElementById("toBeEdit");
     visible.style.display = "none";
  }

  function CloseDelete(){
    var visible = document.getElementById("Delete");
     visible.style.display = "none";
  }

  function openDeleteBox(){
    var DeleteBox = document.getElementById("Delete");
       DeleteBox.style.display = "block";
  }

function Confirmation(){
 confirm("the information deleted cannot be refound, do you want to continue?")
}

function KeepOpen()
{
  var KeepOpen = document.getElementById("editResult");
  KeepOpen.style.display = "block";
}