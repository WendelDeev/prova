<?php 
include_once("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>formulario</title>
</head>
<body>
	<form action="inserir.php" method="POST">
	<label>Titulo</label>
	<input type="text" name="titulo">
	<label>Descrição</label>
	<input type="text" name="descricao">
	<input type="submit" value="Enviar">
</form>

</body>
</html>

<?php 
require_once "connect.php";
$nome = $_POST['titulo'];
$email = $_POST['descricao'];

$sql = "INSERT INTO users (nome, email) VALUES ('$nome', '$email',)";
$conectar->query($sql);
$conectar->close();
?>