<?php 

$host="localhost";
$user = "root";
$password= "";
$dbname= "atividade";
 
try {
    $connect = new PDO("mysql:host=".$host.";dbname=".$dbname, $user, $password);
   
} catch (PDOException $th) {
    echo "Erro: ".$th->getMessage();
}


?>