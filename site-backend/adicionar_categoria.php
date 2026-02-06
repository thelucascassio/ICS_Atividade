<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$nome = $_POST['nome'];
	$sql = "INSERT INTO Categoria(nome) VALUES('$nome')";
	if ($conn->query($sql) === TRUE){
		echo "<script>alert('Produto cadastrado!'); window.location='index.php';</script>";
	}else{
		echo "Erro: " . $sql . "<br>" . $conn->error;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cadastrar Categorias</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container">
	<h2>Nova Categoria</h2>
	<form method="post" action="adicionar_categoria.php" class="container mt-5">
		<div class="mb-3">
			<label>Nome:</label><input class="form-control" type="text" name="nome" required>
		</div>
		<button type="submit" class="btn btn-success">Salvar Categoria</button>
		<a href="index.php" class="btn btn-outline-secondary">Cancelar</a>
	</form>
</body>
</html>
