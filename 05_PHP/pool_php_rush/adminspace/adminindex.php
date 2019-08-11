<?php
include_once ("/home/john/Rendu/05_PHP/pool_php_rush/Register/php/admin.php");
include_once ("/home/john/Rendu/05_PHP/pool_php_rush/Register/php/create_user.php");
include_once ("/home/john/Rendu/05_PHP/pool_php_rush/Register/php/class_user.php");
include_once ("/home/john/Rendu/05_PHP/pool_php_rush/Register/php/update_user.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400' rel='stylesheet' type='text/css'>

    <title>Admin Space</title>
  </head>


    <body class="col11"  >
      <div class="col11">
                                    <!-- HEADER -->
        <header class="col12">
           <div class="bigTitle">
             <h1>Administration Space</h1>
           </div>
            <nav class="col2">
              <ul class="col1">
              <li><a href="../index.php">INDEX</a></li>
              </ul>
            </nav>
        </header>
      </div>

                                    <!-- SEARCH -->
      <main class="col9">
        <div class="col11">
              <form class="searchUser " action="  " method="post">
              Email: <input  type="text" name="mail" >
              <input type="submit" name="search" value="search">
              </form>
        </div>

                                    <!-- CREATE USER-->
      <div id="createUser" class="c2 form-group">
             <div class="c2 form-group">
               <h2> &nbsp; &nbsp; &nbsp;&nbsp;create a user</h2>
                   <form method="post" >
                         <input class="inputLine" type="text" name="name" placeholder="Username" required/>
                         <input class="inputLine" type="email" name="email" placeholder="Email" required/>
                         <input class="reHide" type="submit" name="create" value="CREATE" >
                         <input class="inputLine" type="password" name="password" placeholder="Password"  required/>
                         <input id="clear" class="reHide" type="reset" name="reset" value="RESET" >
                         <input class="inputLine" type="password" name="password_confirmation" placeholder="Password Confirmation"  required/>
                         <input class="reHide" type="button" name="close" value="CLOSE" onclick="Close()" >
                         <br> <br>
                   </form>
             </div>
      </div>

                                    <!-- EDIT USER-->
      <div id="editResult" class="c2 form-group">
             <form method="post">
                  <br><br><br>
              <input id="editPage" class="inputLine" type="text" name="email" placeholder="Please fill in the user email you want to EDIT." />
              <input type="submit" name="" value="search" class="pageKeeper" onclick="KeepOpen()">
              <br><br>
              </form>
              <div class="">
                    <table>
                         <tr>
                           <th>id</th>
                           <th>username</th>
                           <th>email</th>
                           <th>admin</th>
                         </tr>

<!-- RAPPEL DE LA DB -->
<?php
          if (isset($_POST['email'])) {
            $usercls = new user();
            $elem = $usercls->get_user_by_email(database::connect(), $_POST['email']);

            if (!$elem) {
              echo 'No user for this email';
            }
            else {
            ?>
                    <tr>
                        <td><?= $elem['id'] ?></td>
                        <td><?= $elem['username'] ?></td> 
                        <td><?= $elem['email'] ?></td> 
                        <td><?= $elem['admin'] ?></td> 
                    </tr>
            <?php
            }}
            ?>      
                  
                  
        </table>
               </div>
               
               <br><br>
               <button class="btnEdit" type="button" name="button" onclick="editInfo()">EDIT</button>
               
      </div>



                                     <!-- UPDATE USER -->
      <div  id="toBeEdit" class="c2 form-group">
             <div class="c2 form-group">
               <h2> &nbsp; &nbsp; &nbsp;&nbsp;</h2>
                   <form method="post" >
                         <input class="inputLine" type="text" name="name" placeholder="Username" />
                         <input class="inputLine" type="email" name="email" placeholder="Email" />
                         <input class="reHide" type="submit" name="update" value="Edit" >
                         <input class="inputLine" type="password" name="password" placeholder="Password"  />
                         <input id="clear" class="reHide" type="reset" name="reset" value="reset" >
                         <input class="inputLine" type="password" name="password_confirmation" placeholder="Password Confirmation"  />
                      <br> <br>
                   </form>
             </div>
      </div>

                                          <!-- DELETE USER -->
      <div id="Delete" class="c2 form-group">
             <form class="" method="post">
                  <br><br><br>
              <input id="editPage" class="inputLine" type="text" name="name" placeholder="Please fill in the user email you want to Delete." />
              <input type="submit" name="" value="search">
              <br><br>
              </form>
              <div class="">
                    <table>
                         <tr>
                           <th>id</th>
                           <th>username</th>
                           <th>email</th>
                           <th>admin</th>
                         </tr>

<!-- il faut montrer tous les information de User dans ce table endesous. -->
<!-- RAPPEL DE DB -->
<?php
          if (isset($_POST['email'])) {
            $usercls = new user();
            $elem = $usercls->get_user_by_email(database::connect(), $_POST['email']);

            if (!$elem) {
              echo 'No user for this email';
            }
            else {
            ?>
                    <tr>
                        <td><?= $elem['id'] ?></td>
                        <td><?= $elem['username'] ?></td> 
                        <td><?= $elem['email'] ?></td> 
                        <td><?= $elem['admin'] ?></td> 
                    </tr>
            <?php
            }}
            ?>      
                 </table>
               </div>
               <br><br>
               <button  type="button" name="button" onclick="Confirmation()">DELETE</button>
               <button class="btnEdit" type="button" name="close" value="CLOSE" onclick="CloseDelete()" >CLOSE</button>

      </div>


      </div>

<!-- main page -->

        <div class="tableTitle">
          <h2>Users informations</h2>
        </div>
        <table>
          <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>admin</th>
          </tr>

<!-- rappel de la db -->
          <?php
          $objet = new AdminUser();
          $liste = $objet->uRead(database::connect());
          ?>
                 <?php foreach($liste as $elem): ?>
                  
                    <tr>
                        <td><?= $elem->id ?></td>
                        <td><?= $elem->username ?></td> 
                        <td><?= $elem->email ?></td> 
                        <td><?= $elem->admin ?></td> 
                    </tr>
                  
                  
                  <?php endforeach ?>
        </table>
      </main>

<!-- aside users button -->
      <aside class="col1">
          <h4>USER</h4>
          <div class="sideForUsers">
           <input type="button" class="" name="createUser" value="CREATE" onclick="BlockDisplay()" >
           <input type="button" class="" name="editUser" value="EDIT       "   onclick="EditPage()">
           <input type="submit" class="" name="deleteUser" value="DELETE" onclick="openDeleteBox()">

<!-- aside prod button -->
        <div class="sideForProduct ">
            <h4>PRODUCT</h4>
            <input type="submit" class="" name="createUser" value="CREATE"  onclick="location.href='product.html'">
            <input type="submit" class="" name="editUser" value="EDIT       "onclick="location.href='product.html'" >
            <input type="submit" class="" name="deleteUser" value="DELETE" onclick="location.href='product.html'">

        </div>
      </aside>
      <script type="text/javascript" src="admin.js">

      </script>
  </body>
</html>
