<?php
include 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$sql = "UPDATE Categoria SET nome='$nome' WHERE id=$id";
	if ($conn->query($sql) === TRUE){
		echo "<script>alert('Categoria atualizada com sucesso!'); window.location='index.php';</script>";
	} else{
		echo "Erro: " . $sql . "<br>" . $conn->error;

	}

}
$id = $_GET['id'];
$sql = "SELECT * FROM Categoria WHERE id = $id";
$result = $conn->query($sql);
$categoria = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar Categorias</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container mt-5">
	<h2>Editar Categoria #<?php echo $id; ?></h2>
	<form method="post" action="editar_categoria.php" class="card p-4 shadow-sm">
		<input type="hidden" name="id" value="<?php echo $categoria['id']; ?>"
		<div class="mb-3"
			<label>Nome:</label><input class="form-control" type="text" name="nome" required><br>
		</div>
		<button type="submit" class="btn btn-primary">Guardar alterações</button>
		<a href="index.php" class="btn btn-secondary">Cancelar</a>
	</form>
</body>
</html>
