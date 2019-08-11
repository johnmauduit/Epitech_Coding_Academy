<?php
    session_start();
    if(isset($_COOKIE['name']))
        $name = $_COOKIE['name'];
    else if(isset($_SESSION['name']))
        $name = $_SESSION['name'];
    else 
        header('Location: ./Register/register.html');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material-Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <nav class="blue-grey darken-1">
             <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Batman</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <?php if($_SESSION['admin'] == 1): ?>
                    <li id="admin"><a href="adminspace/adminindex.php">Admin</a></li>
                    <?php endif ?>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Product</a></li>
                    <li><a href="collapsible.html">Basket</a></li>
                    <li><a href="mobile.html">My account</a></li>
                    <li><a href="Register/php/logout.php">Logout</a></li>
                </ul>
                <ul class="sidenav" id="mobile-demo">
                    <li><a href="sass.html">Categories</a></li>
                    <li><a href="badges.html">Product</a></li>
                    <li><a href="collapsible.html">Basket</a></li>
                    <li><a href="mobile.html">My account</a></li>
                </ul>
            </div>
            <h1><?php echo "Welcome " . $name ." !" ?></h1>
        </nav>
    </div>
   <div class="wrap2">
        <div class="row">
            <div class="col s4 m2">
                <div class="card">
                    <div class="card-image">
                      <img src="img/not-available.jpg">
                      <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                      <p>1 I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                  </div>
                </div>
            <div class="col s4 m3">
                <div class="card">
                    <div class="card-image">
                      <img src="img/not-available.jpg">
                      <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>2 I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s4 m2">
                <div class="card">
                    <div class="card-image">
                    <img src="img/not-available.jpg">
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>3 I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s4 m2">
                <div class="card">
                    <div class="card-image">
                    <img src="img/not-available.jpg">
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>3 I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
            <div class="col s4 m3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/not-available.jpg">
                        <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                        <p>2 I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>
        </div>
   </div>
 
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
