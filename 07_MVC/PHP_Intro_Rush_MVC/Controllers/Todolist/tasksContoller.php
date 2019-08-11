<?php

include_once("/home/john/Rendu/07_MVC/PHP_Intro_Rush_MVC/Models/Todolist/Task.php");
include_once("/home/john/Rendu/07_MVC/PHP_Intro_Rush_MVC/Models/Db.php");

class TasksController extends Task
{
    protected $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function secure_get_tasks()
    {
       $tasks = $this->task->get_tasks();
     
       if (!(empty($tasks)))
       {
           foreach ($tasks as $key => $task)
           {
               $tasks[$key]["title"] = htmlspecialchars($task["title"]);
               $tasks[$key]["description"] = nl2br(htmlspecialchars($task["description"]));
           }
           return $tasks;
       }
       else
       {
           return false;
           echo "failled ! ";
       }
       //require_once("/home/john/Rendu/07_MVC/PHP_Intro_Rush_MVC/Models/Todolist/Task.php"); // averifier si c 'est le bon
    }

    public function secure_get_task($id)
    {

    }

    public function secure_post_task($title, $description = null)
    {
        if (isset($_POST["task_title"]))
        {

        }
    }

    public function secure_put_task($id, $title = null, $description = null)
    {

    }

    public function secure_delete_task($id)
    {

    }
    
}

require_once("/home/john/Rendu/07_MVC/PHP_Intro_Rush_MVC/Views/Todolist/tasks.php"); // averifier si c 'est le bon


$task = new TasksController();
$ta = $task->secure_get_tasks();

var_dump($ta);


//$db = Database::get_db();
//$req = $db->query("SELECT * FROM tasks");

//while ($d = $req->fetchColumn(1))

//while ($d = $req->fetch())
//print_r($d ["id"] ." ". $d ["title"] ." ". $d ["description"] ." ". $d ["creation_date"] ." ". $d ["edition_date"] ."\n");



?>