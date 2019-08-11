<?php

include_once("/home/john/Rendu/07_MVC/PHP_Intro_Rush_MVC/Models/Db.php");


class Task extends Database
{

    public function get_tasks()
    {
        $req = Database::get_db()->prepare("SELECT * FROM tasks");
        $req->execute();
        //var_dump($req->fetchAll());
        return $req->fetchAll(PDO::FETCH_ASSOC);

       
    }

    public function get_task($id)
    {
        $req = Database::get_db()->prepare("SELECT * FROM tasks WHERE id = :id");
        $req->execute([":id" => $id]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function post_task($title, $description = null)
    {
        $insert = Database::get_db()->prepare("INSERT INTO tasks (title, description, creation_date, edition_date) VALUES (?, ?, NOW(), NOW())");
        $insert->execute([$title, $description]);
        //return $req->fetch(PDO::FETCH_ASSOC);
    }

    public function put_task($id, $title = null, $description = null)
    {
        $update = Database::get_db()->prepare("UPDATE tasks SET id = :id, title = :title, description = :description, edition_date = NOW() WHERE id = :id");
        $update->execute([":id" => $id, ":title" => $title, ":description" => $description]);
    }

    public function delete_task($id)
    {
        $delete = Database::get_db()->prepare("DELETE FROM tasks WHERE id = :id");
        $delete->execute([":id" => $id]);
    }

}

//$task = new Task();
//$task->put_task(8, "cedrik", "Geckor");

//var_dump($task);


//$db = Database::get_db();
//$req = $db->query("SELECT * FROM tasks");

//while ($d = $req->fetchColumn(1))

//while ($d = $req->fetch())
//print_r($d ["id"] ." ". $d ["title"] ." ". $d ["description"] ." ". $d ["creation_date"] ." ". $d ["edition_date"] ."\n");

//var_dump($d);



?>