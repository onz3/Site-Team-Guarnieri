<?php
session_start(); 
include("conexao.php");
$nome = $_POST['nome'];
$gub = $_POST['gub'];
$foto = $_POST['foto'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];


$strcon = mysqli_connect('localhost','root','','bancotg') or die('Erro ao conectar com o banco de dados');
$sql=mysqli_query($strcon, "UPDATE alunos SET nome = '$nome', gub = '$gub', foto = '$foto', username = '$username', password = '$password' WHERE id ='$id'");
mysqli_query($strcon,$sql);

if($sql == true){
	echo "alterado com sucesso";
	header("location: gAluno.php");

}else{
	echo "Erro ao editar este aluno.";
}

?>