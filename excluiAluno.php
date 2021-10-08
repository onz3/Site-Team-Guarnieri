<?php
include_once("conexao.php");

 $excluir=$_POST["excluir"];


	$strcon = mysqli_connect('localhost','root','','bancotg') or die('Erro ao conectar com o banco de dados');
	$sql = "DELETE FROM alunos WHERE id='$excluir'";
	$res = mysqli_query($strcon,$sql) or die("Erro ao tentar deletar aluno");
	echo "Aluno deletado com sucesso!";
	header('Location: gAluno.php');

?>