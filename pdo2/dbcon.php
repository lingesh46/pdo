<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pdo2";
try{
$conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// echo "connect successfully";

}catch(PDOException $e){
    echo "connection field".$e->getMessage();
}



?>