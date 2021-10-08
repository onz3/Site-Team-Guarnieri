<?php
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$data = $_POST['data'];


$strcon = mysqli_connect('localhost','root','','bancotg') or die('Erro ao conectar com o banco de dados');
$sql = "INSERT INTO posts (titulo,conteudo,data) VALUES ('$titulo', '$conteudo', '$data')";
mysqli_query($strcon,$sql) or die("Erro ao tentar enviar artigo");
mysqli_close($strcon);
echo "Publicação enviado com sucesso!";
header ("location: gPublicacao.php");
?>