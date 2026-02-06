<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$cat = $_POST['categoria'];

	$sql = "UPDATE Produto SET nome='$nome', preco='$preco', descricao='$descricao', categoria_id='$cat' WHERE id=$id";
	if ($conn->query($sql) === TRUE){
		echo "<script>alert('Produto atualizado com sucesso!'); window.location='index.php';</script>";
	} else{
		echo "Erro: " . $sql . "<br>" . $conn->error;

	}

}
$id = $_GET['id'];
$sql = "SELECT * FROM Produto WHERE id = $id";
$result = $conn->query($sql);
$produto = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container mt-5">
	<h2>Editar Produto #<?php echo $id; ?></h2>
	<form method="post" action="editar.php" class="card p-4 shadow-sm">
		<input type="hidden" name="id" value="<?php echo $produto['id']; ?>"
		<div class="mb-3"
			<label>Nome:</label><input class="form-control" type="text" name="nome" required><br>
		</div>
		<div class="mb-3">
			<label>Preço:</label><input class="form-control" type="text" name="preco" required><br>
		</div>
		<div class="mb-3">
			<label>Descrição:</label><input class="form-control" type="text" name="descricao" required><br>
		</div>
		<div class="mb-3">
			<label>Categoria ID (insira um número):</label><input class="form-control" type="text" name="categoria" required><br>
		</div>
		<button type="submit" class="btn btn-primary">Guardar alterações</button>
		<a href="index.php" class="btn btn-secondary">Cancelar</a>
	</form>
</body>
</html>
