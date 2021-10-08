<?php
    include('conexao.php');
    $consulta = "SELECT * FROM posts";
    $con = $connect -> query($consulta) or die($connect->error);
?>


<!DOCTYPE html>
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


    <div class='container-fluid'>

      <div class='text-center'>
        <h4 class="center"><b>Publicações Team Guarnieri</b></h4>        
      </div>


<div class="container">
<div class="section">
  <a class="btn" href="menuAluno.php" style="color: #fff; background-color: #ec1414;"><b>Voltar</b></a>
  <div class="row">
  </br>
    <?php while ($dado = $con -> fetch_array()) {  ?>

    <div class="col s12 m4">
           <div class="card horizontal">
             <div class="card-image">
              
             </div>
             <div class="card-stacked">
             <div class="card-content">
              <p><?php echo $dado["titulo"];  ?></p>
             </div>
             <div class="card-action">
               <form method="post">
               <input type="hidden" id="campo" value=" <? echo $id; ?>" > 
               </form>
               <form action="lerPublicacao.php" method="GET">
               <a href="lerPublicacao.php?id=<?php echo $dado['id']; ?>" class='btn btn-lg'>Ler</a>
             </div>
           </div>
           </div>
    </div>
    <?php  }  ?>
   </div>
  </div>
  </div>




    




 <!--  Scripts-->
 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 <script src="js/materialize.js"></script>
 <script src="js/init.js"></script>

</body>
</html>

    
