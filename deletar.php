<?php
include_once('connect.php');
 
$stmt = $connect->prepare("DELETE FROM produtos WHERE id = :ID");
$id = 3;
$stmt->bindParam(":ID", $id);
$stmt->execute();
?>
