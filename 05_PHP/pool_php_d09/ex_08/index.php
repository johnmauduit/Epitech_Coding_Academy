<?php

$nameErr = "";
$name = "";

if($_SERVER["REQUEST_METHOD"] = "POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    }
    else    
        $name = $_POST["name"];
        die("Welcome " . $name) ;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
    <script src="main.js"></script>

    <style>
    body{
        background-color: #f2f2f2;
        font-family:  'Acme', sans-serif;
    }
    h2{
        font-size: 3em;
    }
    .error{
        color: red;
    }
    
    </style>
</head>
<body>
    <h2>PHP Form validation</h2>
        <p><span class="error">* required field</span></p>

            <form method="post" action="index.php">

                <label>Name:</label></br>
                <input type="text" name="name"><span class="error">* <?php echo $nameErr; ?></span></br></br>

                <input type="Submit" name="Submit" value="Submit">

            </form>
</body>
</html>

