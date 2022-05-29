<!DOCTYPE html>
<html>
<head>
	<title>Página Incial</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/button.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body>
<section class='block-form'>
<form action='index.php' method='POST' class='pure-form'>
<div class='center'>
<?php
session_start();
if (isset($_SESSION['produtos'])){
	foreach ($_SESSION['produtos'] as $produtos) {
		$prod = $produtos['produto'];
		$pre = $produtos['preco'];
		$cat = $produtos['categoria'];
		echo "
		<div style='margin-top:10px;'>
		<label>Produto:</label>
		<input type='text' name='produto' style='color:black;text-align: center;' autocomplete='off' value='$prod' disabled>

		<label>Preço(R$):</label>
		<input type='text' style='color:black;text-align: center;' autocomplete='off' name='preco' value='$pre' disabled>
		<select name='categoria' id='state'>
			<option value='null' selected>$cat</option>
		</select><br>
		</div>
";
	}
	if (isset($_POST['remover']) == 'Limp car') {
		session_destroy();
	}
	if (isset($_POST['cadastrar']) == 'Novo Produto') {
		header("Location:pages/registerproduct/cadastro.html");
	}
	echo "
	<div class='buttons' style='display: flex;margin: 0 auto;margin-top: 15px;'>
	<div class='center-button' style='margin:0 auto;'>

	<input type='submit' class='pure-button pure-button-primary' value='Novo Produto' name='cadastrar'>

	<input type='submit' class='pure-button pure-button-primary' value='Limpar' name='remover'>
</div>
</div>
</div>";
}else{
	echo "
		<div style='margin-top:10px;'>
			<label>Não existem produtos cadastrados!</label>
		</div>
		<input type='submit' class='pure-button pure-button-primary' value='Novo Produto' name='cadastrar' style='display: flex;margin: 0 auto;margin-top: 5px;'>
";
	if (isset($_POST['cadastrar']) == 'Novo Produto') {
		header("Location:pages/registerproduct/cadastro.html");
	}
}

?>
</form>
</section>
</body>
<script type="text/javascript">
	var x = document.getElementById('clickno');
	x.onclick = function(){
		location.href = 'cadastro.html';
	}
</script>
</html>

