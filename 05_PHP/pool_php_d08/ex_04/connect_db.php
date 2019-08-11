
<?php

// $host = "localhost";
// $username = "root";
// $passwd = "Kojite01";
// $port = 3306;
// $db = "coding";


const ERROR_LOG_FILE = "/home/john/Rendu/ERROR_LOG_FILE/errors.log";

if ($argc != 6)
{
    echo "Bad params! Usage: php connect_db.php host username password port db\n";
}
else 
{
    if (connect_db(...array_slice($argv, 1)) != NULL) // array slice (extrait d'une portion de tableau) a etudier merci jean 
    //  ...(number of variables args)array_slice (representing an array and start at the offset, here at the argv[1])
                                                      //sinon c'etait connect_db($argv[1], $argv[2], $argv[3] etc..)
    {
        echo "Connection to DB successful.\n"; 
    }
    else    
        echo "Error connection to DB\n"; 
}

    



function connect_db($host, $username, $passwd, $port, $db)
{
    $dsn = "mysql:host=". $host .";dbname=". $db .";port=" . $port . ";charset = UTF-8";
   
    try
    {
        $pdo = new PDO($dsn, $username, $passwd);
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //echo "Connection to DB successful.\n";
        return $pdo;
    }
    catch (PDOException $exception)
    {
        error_log ("PDO ERROR: " . $exception->getMessage() . "\n", 3, ERROR_LOG_FILE);
            //echo "Error connection to DB" . $exception->getMessage() . "\n";
    }
    
}




?>