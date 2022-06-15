<?php
 
include_once('connect.php');

$id ="3"
$titulo = "oii";
$descricao = "ola tudo bem?";


 
$stmt = $connect->prepare("UPDATE posts SET titulo =:titulo, descricao = :descricao WHERE id = :id");
 
$stmt->bindParam("titulo", $titulo);
$stmt->bindParam(":descricao", $descricao);


$stmt->execute();
echo "Cadastrado";
?>
