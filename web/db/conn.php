<?php
    //develepment connection
    //$host = 'localhost';
    //$db = 'attendance_db';
    //$user = 'root';
    //$pass = '';
    //$charset = 'utf8mb4';

   //remote database connection
   // $host = 'localhost';
    // $db = 'attendance_db';
     //$user = 'root';
     //$pass = '';
    // $charset = 'utf8mb4';

 $host = 'remotemysql.com';
$db = 'FCEXu7zaB6';
    $user = 'FCEXu7zaB6';
    $pass = 'nfpdVL4wJt';
 $charset = 'utf8mb4';




    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{

        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>
