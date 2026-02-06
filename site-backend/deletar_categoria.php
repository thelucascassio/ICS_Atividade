<?php
include 'conexao.php';

if (isset($_GET['id'])){
	$id = intval($_GET['id']);
	$sql = "DELETE FROM Categoria WHERE id = $id";
	if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Categoria removida!'); window.location='index.php';</script>";
	} else{
		echo "Erro ao deletar: " .  $conn->error;
	}
} else{
	header("Location: index.php");
}

?>
