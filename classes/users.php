<?php

class User
{
    private $pdo;
    public $msgError = "";
    
    public function connect($name, $host, $user, $password)
    {
        global $pdo;
        try 
        {
            $pdo = new PDO("mysql:dbname=".$name,$user,$password);
        } catch (PDOException $e) {
            $msgError = $e->getMessage();
        }
    }

    public function signup($name, $email, $password)
{
    global $pdo;
    //verify if user already exists.
    $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e");
    $sql->bindValue(":e",$email);
    $sql->execute();
    if ($sql->rowCount() > 0)
    {
        return false; //user already exists
    }
    else
    {
        //signup user
        
        $sql = $pdo->prepare("INSERT INTO users (full_name, email, password) VALUES (:n, :e, :p)");
        $sql->bindValue(":n",$name);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":p",md5($password));
        $sql->execute();
        return true;
    }
}
    
    public function login($email, $password)
    {
        global $pdo;
        //verify if user and password are valid.
        $sql = $pdo->prepare("SELECT id_user FROM users WHERE email = :e AND password = :p");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":p",md5($password));
        $sql->execute();
        if($sql->rowCount() > 0)
        {
            //If valid, then signin(session).
            $data = $sql->fetch();
            session_start();
            $_SESSION["id_user"] = $data["id_user"];
            return true; //login successful
        }
        else
        {
            return false; //login failed
        }
    }
    
}
?>