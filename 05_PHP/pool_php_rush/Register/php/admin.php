<?php

include_once("class_user.php");

                            //CRUD USER
class AdminUser extends user
{

    function __construct()
    {
    //var_dump('Construct of adminUser');
    }
//CREATE
    function uCreate($objet, $username, $pwd, $email)
    {
        $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);
        $insert = $objet->prepare("INSERT INTO users (username, password, email, admin) VALUES (?, ?, ?, ?)");
        $res = array($username, $hash_pwd, $email, 0);
        $insert->execute($res);
    }
//READ
    function uRead($objet)
    {
        $select = $objet->query("SELECT * FROM users ORDER BY id asc");
        $d = $select->fetchAll(PDO::FETCH_CLASS);
        
        //var_dump($d);
        
        return ($d);
    }

//UPDATE   
    function uUpdate($objet, $username = null, $email = null, $newEmail, $admin = null)
    {
        $id = $this->get_id($objet, $email);
        $update = $objet->prepare("UPDATE users SET username = :username, email = :email, admin = :admin WHERE id = :id");
        $res = array(":username" => $username, ":email" => $newEmail, ":admin" => $admin, ":id" => $id);
        $update->execute($res);
    }

//DELETE
    function uDelete($objet, $email)
    {
        $id = $this->get_id($objet, $email);
        $delete = $objet->prepare("DELETE FROM users WHERE id = :id");
        $res = array(":id" => $id);
        $delete->execute($res);
    }

    function __destruct()
    {

    }
}

                        //CRUD PRODUCTS
class AdminProduct extends user
{

    function __construct()
    {

    }
//CREATE
    function pCreate($objet, $prodName, $price, $catId)
    {
        $insert = $objet->prepare("INSERT INTO products (name, price, category_id) VALUES (?, ?, ?, ?)");
        $res = array($prodName, $price, $catId);
        $insert->execute($res);
    }
//READ
    function pRead($objet)
    {
        $select = $objet->query("SELECT * FROM products ORDER BY id asc");
        while($d = $select->fetch())
        {
            print_r($d);
        }
    }
 
//UPDATE

//method get_prod_id () dans fichier et class produit

    function pUpdate($objet, $prodName = null, $prodNewName = null, $price = null, $catId = null)
    {
        $id = $this->get_prod_id($objet, $prodName);
        $update = $objet->prepare("UPDATE products SET name = :name, price = :price, category_id = :category_id WHERE id = :id");
        $res = array(":name" => $prodNewName, ":id" => $id);
        $update->execute($res);
    }
    
//DELETE
    function pDelete($objet, $prodName)
    {
        $id = $this->get_prod_id($objet, $prodName);
        $delete = $objet->prepare("DELETE FROM products WHERE id = :id");
        $res = array(":id" => $id);
        $delete->execute($res);
    }

    function __destruct()
    {

    }
}
?>