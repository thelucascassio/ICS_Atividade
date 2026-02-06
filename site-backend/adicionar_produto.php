<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$cat = $_POST['categoria'];

	$sql = "INSERT INTO Produto(nome, preco, descricao, categoria_id) VALUES ('$nome', '$preco', '$descricao', '$cat')";
	if ($conn->query($sql) === TRUE){
		echo "<script>alert('Produto cadastrado!'); window.location='index.php';</script>";
	} else{
		echo "Erro: " . $sql . "<br>" . $conn->error;

	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastrar Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container">
	<h2>Novo Produto</h2>
	<form method="post" action="adicionar_produto.php" class="container mt-5">
		<div class="mb-3">
			<label>Nome:</label><input class="form-control" type="text" name="nome" required>
		</div>
		<div class="mb-3">
			<label>Preço:</label><input class="form-control" type="text" name="preco" required>
		</div>
		<div class="mb-3">
			<label>Descrição:</label><input class="form-control" type="text" name="descricao" required>
		</div>
		<div class="mb-3">
			<label>Categoria ID (insira um número):</label><input class="form-control" type="text" name="categoria" required>
		</div>
		<button type="submit" class="btn btn-success">Salvar Produto</button>
		<a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
	</form>
</body>
</html>
