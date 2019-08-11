
<?php

// $host = "localhost";
// $username = "root";
// $passwd = "Kojite01";
// $port = 3306;
// $db = "coding";

const ERROR_LOG_FILE = "/home/john/Rendu/ERROR_LOG_FILE/error_log_file.log";



function connect_db($host, $username, $passwd, $port, $db)
{
    $dsn = "mysql:host=". $host .";dbname=". $db .";port=" . $port . ";charset = UTF-8";
   
    try
    {
        $pdo = new PDO($dsn, $username, $passwd);
        $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "Connected successfuly.\n";
        return $pdo;
    }
    catch (PDOException $exception)
    {
        error_log ("PDO ERROR: " . $exception->getMessage() . "\n", 3, ERROR_LOG_FILE);
         var_dump(ERROR_LOG_FILE);
        echo "Connexion failed" . $exception->getMessage();
    }
    
}




?>