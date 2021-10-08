<?php
include("conexao.php");
$id = $_GET['id'];

$consulta = "SELECT * FROM posts where id = '$id'";
$con = $connect -> query($consulta) or die($connect->error);



?>

<html>
<head>
  <title>Publicações</title>
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
        <li><a href="logoutAluno.php">Sair <i class="material-icons left">exit_to_app</i></a></li>
     </ul>

      <!-- mobile-->
      <ul id="nav-mobile" class="sidenav" style="background-color: #242a8a">
        <li><a href="index.php" style="color: #fff"><b>Home<b></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="alunos.php" style="color: #fff"><b>Alunos</b><i class="material-icons right">people_outline</i></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="logoutAluno.php">Sair <i class="material-icons left">exit_to_app</i></a></li>        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i style="color: #fff" class="material-icons">menu</i></a>
    </div>
  </nav>
</div> 
</br>  







<div class="container-fluid" style="height: 100%; width: 100%">    
  <div class="row content">
    <?php while ($dado = $con -> fetch_array()) {  ?>
    <div style="padding-left: 150px; padding-right: 150px;"> 
      <a class="btn" href="verPublicacoes.php" style="color: #fff; background-color: #ec1414;"><b>Voltar</b></a>
      <h2 class="text-center"><b><?php echo $dado["titulo"];  ?></b></h2>
      <p style="text-align: justify;">Postado em: <?php echo $dado["data"];  ?></i></p>
      <hr>
      <p style="text-align: justify;"><?php echo nl2br($dado["conteudo"]); ?></p>
    </div>
    
  </div>
</div>
<?php } 

?>









 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="js/materialize.js"></script>
 <script src="js/init.js"></script>
</body>
</html>


