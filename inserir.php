<?php 
include_once("connect.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];


 
// metodo para preparar
 
$stmt = $connect->prepare("INSERT INTO posts(titulo, descricao) VALUES(:TITULO, :DESCRICAO)");

$stmt->bindParam(':TITULO',$tirulo);
$stmt->bindParam(':DESCRICAO',$descricao);

$stmt->execute();


?>

