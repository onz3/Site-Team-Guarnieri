<?php
// Conexão com banco de dados
$servername = "localhost";
$user = "root";
$password = "";
$db_name = "bancotg";

$connect = mysqli_connect($servername, $user, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;
?>

