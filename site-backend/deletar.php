<?php
include 'conexao.php';

if (isset($_GET['id'])){
	$id = intval($_GET['id']);
	$sql = "DELETE FROM Produto WHERE id = $id";
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Produto removido!'); window.location='index.php';</script>";
	} else{
		echo "Erro ao deletar: " .  $conn->error;
	}
} else{
	header("Location: index.php");
}

?>
