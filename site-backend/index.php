<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel Administrativo - Backend</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container">
	<h1>Gerenciamento de Produtos e Categorias</h1>
	<h2>Produtos</h2>
	<a href="adicionar_produto.php" class="btn btn-success mb-3"><b>CADASTRAR NOVO PRODUTO</b></a>
	<table border="1" cellpadding="10" class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
			<th>Categoria</th>
			<th>Ações</th>
		</tr>
		<?php
		$sql = "SELECT * FROM Produto";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['nome'] . "</td>";
			echo "<td>" . $row['preco'] . "</td>";
			echo "<td>" . $row['descricao'] . "</td>";
			echo "<td>" . $row['categoria_id'] . "</td>";
			echo "<td>
				<a href='deletar.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Deletar</a>
				<a href='editar.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
			     </td>";
			echo "</tr>";
		}
		?>
	</table>
	<h2>Categorias</h2>
	<a href="adicionar_categoria.php" class="btn btn-success mb-3"><b>CADASTRAR NOVA CATEGORIA</b></a>
	<table border="1" cellpadding="10" class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Ações</th>
		</tr>
		<?php
		$sql2 = "SELECT * FROM Categoria";
		$result = $conn->query($sql2);
		while($row = $result -> fetch_assoc()){
			echo "<tr>";
			echo "<td>" . $row['id'] . "</td>";
			echo "<td>" . $row['nome'] . "</td>";
			echo "<td>
				<a href='deletar_categoria.php?id=" . $row['id'] . "' class='btn btn-sm btn-danger'>Deletar</a>
				<a href='editar_categoria.php?id=" . $row['id'] . "' class='btn btn-sm btn-warning'>Editar</a>
			      </td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>
