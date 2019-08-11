
<?php

// $host = "localhost";
// $username = "root";
// $passwd = "Kojite01";
// $port = 3306;
// $db = "coding";


const ERROR_LOG_FILE = "/home/john/Rendu/ERROR_LOG_FILE/errors.log";


    



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

    $host = "localhost";
    $username = "root";
    $passwd = "Kojite01";
    $port = "3306";
    $db = "gecko";

    $pdo = connect_db($host, $username, $passwd, $port, $db);
    my_print_users($pdo, 1, 2, 3, 4);

function my_print_users ($pdo, ...$ids)
{
    foreach ($ids as $id)
    {
        $sql = "SELECT name FROM users Where id = " . $id;
        $stm = $pdo->query($sql);
        echo $stm->fetch()[0] . "\n";
    }

    

}

?>