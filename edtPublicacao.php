<?php
session_start(); 
include("conexao.php");
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];
$id = $_POST['id'];


$strcon = mysqli_connect('localhost','root','','bancotg') or die('Erro ao conectar com o banco de dados');
$sql=mysqli_query($strcon, "UPDATE posts SET titulo = '$titulo', conteudo = '$conteudo', data = '$data' WHERE id ='$id'");
mysqli_query($strcon,$sql);

if($sql == true){
	echo "alterado com sucesso";
	header("location: gPublicacao.php");

}else{
	echo "Erro ao editar este post.";
}

?>