<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
    header('Location: login.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
<head>
  <title>Menu</title>
  <meta charset="utf-8">
  <!-- CSS  -->
  <link rel="shortcut icon" type="image/x-png" href="img/icon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>



<body style="background-image: url('img/capaMenu.jpg');">
<!--navbar-->
<div class="navbar-fixed col s12 m2">
  <nav style="background-color: #242a8a" role="navigation">
    <div class="nav-wrapper container">
     <a id="logo-container" href="index.php" class="brand-logo"><img width="50" height="40" src="img/logopng.png" style="padding-top: 5px"></a>
     <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><b>Home</b></a></li>
        <li><a href="alunos.php"><b>Alunos</b></a></li>
        <li><a href="logout.php">Sair <i class="material-icons left">exit_to_app</i></a></li>
     </ul>

      <!-- mobile-->
      <ul id="nav-mobile" class="sidenav" style="background-color: #242a8a">
        <li><a href="index.php" style="color: #fff"><b>Home<b></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="alunos.php" style="color: #fff"><b>Alunos</b><i class="material-icons right">people_outline</i></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="logout.php">Sair <i class="material-icons left">exit_to_app</i></a></li>        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i style="color: #fff" class="material-icons">menu</i></a>
    </div>
  </nav>
</div> 
</br>








  <div class="col s12 m7" style="padding: 20px;">
    <div class="card horizontal" style="padding: 20px;">
      <div class="card-stacked center">
        <h3><b>Menu</b></h3>
        <div class="card-action" align="center">
          <a href="gPublicacao.php">Gerenciar Publicações</a></br>
          <a href="gAluno.php">Gerenciar Alunos</a></br>
        </div>
      </div>
    </div>
  </div>











 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="js/materialize.js"></script>
 <script src="js/init.js"></script>
         
</body>
</html>