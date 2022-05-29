<?php
$produtos['produto'] = $_POST['produto'];
$produtos['preco'] = $_POST['preco'];
$produtos['categoria'] = $_POST['categoria'];
session_start();

if ($produtos['produto'] == "" || $produtos['preco'] == "" || $produtos['categoria'] == "null") {
	header("Location:../cadastro.html");
}else{
	header("Location:../index.php");
	$_SESSION['produtos'][] = $produtos;
}
?>