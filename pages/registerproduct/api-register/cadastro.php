<?php
$produtos['produto'] = $_POST['produto'];
$produtos['preco'] = $_POST['preco'];
$produtos['categoria'] = $_POST['categoria'];

if ($produtos['produto'] == "" || $produtos['preco'] == "" || $produtos['categoria'] == "null") {
	header("Location:../cadastro.html");
}else{
	header("Location:../../../index.php");
	session_start();
	$_SESSION['produtos'][] = $produtos;
}
?>