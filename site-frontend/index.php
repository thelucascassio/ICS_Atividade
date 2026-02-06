<?php include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Loja InfoWeb - Frontend</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
	<div class="container mt-5">
		<h1 class="text-center mb-4">Produtos InfoWeb disponíveis</h1>
		<div class="row">
			<?php
			$sql = "SELECT p.*, c.nome as cat_nome FROM Produto p JOIN Categoria c ON p.categoria_id=c.id";
			$result = $conn->query($sql);
			if ($result && $result->num_rows > 0){
				while($row = $result->fetch_assoc()){
			?>
				<div class="col-md-4 mb-3">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['nome'];?></h5>
							<h6 class="card-subtitle mb-2 text-muted"><?php echo $row['cat_nome']; ?></h6>
							<p class="card-text"><?php echo $row['descricao']; ?></p>
							<p class="card-text fs-4 text-success">R$ <?php echo $row['preco']; ?></p>
						</div>
					</div>
				</div>
			<?php
	}
}			else {echo "<p class='alert alert-warning'>Nenhum produto cadastrado.</p>";}
			?>
		</div>
	</div>
</body>

</html>
