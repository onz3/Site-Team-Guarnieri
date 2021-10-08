<?php
$nome = $_POST['nome'];
$gub = $_POST['gub'];
$foto = $_POST['foto'];
$username = $_POST['username'];
$password = $_POST['password'];


$strcon = mysqli_connect('localhost','root','','bancoTG') or die('Erro ao conectar com o banco de dados');
$sql = "INSERT INTO alunos (nome,gub,foto,username,password) VALUES ('$nome', '$gub', '$foto', '$username', $password)";
mysqli_query($strcon,$sql) or die("Erro ao tentar enviar aluno");
mysqli_close($strcon);
echo "Aluno criado com sucesso!";
header ("location: gAluno.php");
?>