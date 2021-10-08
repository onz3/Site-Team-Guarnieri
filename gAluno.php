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




//selecionar alunos
include("conexao.php");
$consulta = "SELECT * FROM alunos";
$con = $connect -> query($consulta) or die($connect->error);
?>


<html>
<head>
  <title>Alunos</title>
  <meta charset="utf-8">
  <!-- CSS  -->
  <link rel="shortcut icon" type="image/x-png" href="img/icon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>



<body>
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





<div class="container" style="padding: 25">
 <ul class="collection with-header">
        <a class="btn" href="menu.php" style="color: #fff; background-color: #ec1414;"><b>Voltar</b></a>
        <a class="btn" href="criaAluno.php" style="color: #fff; background-color: #ec1414;"><b>Novo Aluno</b></a>
        <li class="collection-header center"><h4><b>Alunos</b></h4></br></li>
        <?php while ($dado = $con -> fetch_array()) {  ?>
        <li class="collection-item">
          <div><?php echo $dado["nome"];?></div>
          <div class="right" style="padding: 5px">
          <form method='POST' action='excluiAluno.php'>
          <input type='hidden' name='excluir' value= <?php echo $dado["id"]; ?>>
          <button class="btn" type="submit"><i class="material-icons">delete</i></button>
          </form>
          </div>
          <div class="right" style="padding: 10px">
          <a href="editorAluno.php?id=<?php echo $dado['id']; ?>"><i class="material-icons">edit</i></a>
          </div>
          </br></br>
        </li>
        <?php  }  ?>
 </ul>
</div>











 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="js/materialize.js"></script>
 <script src="js/init.js"></script>
         
</body>
</html>