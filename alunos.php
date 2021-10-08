<?php
    include('conexao.php');
    $consulta = "SELECT * FROM alunos";
    $con = $connect -> query($consulta) or die($connect->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Team Guarnieri</title>

  <!-- CSS  -->
  <link rel="shortcut icon" type="image/x-png" href="img/icon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>


<body>

<!--navbar-->
<div class="navbar-fixed">
  <nav style="background-color: #242a8a" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img width="50" height="40" src="img/logopng.png" style="padding-top: 5px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><b>Home</b></a></li>
        <li><a href="alunos.php"><b>Alunos</b></a></li>
        <li><a href="apoiadores.php"><b>Apoiadores</b></a></li>
      </ul>

      <!-- mobile-->
      <ul id="nav-mobile" class="sidenav" style="background-color: #242a8a">
        <li><a href="index.php" style="color: #fff"><b>Home<b></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="alunos.php" style="color: #fff"><b>Alunos</b><i class="material-icons right">people_outline</i></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="apoiadores.php" style="color: #fff"><b>Apoiadores</b><i class="material-icons right">group_work</i></a></li>        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i style="color: #fff" class="material-icons">menu</i></a>
    </div>
  </nav>
</div>
</br> 


<div class="container">
<a class="btn" href="loginAluno.php" style="color: #fff; background-color: #ec1414;"><b>Sou Aluno</b></a>
</br>
<h2 class="header center"><b>Alunos</b></h2>
</div>
<div class="container">
    <div class="section">

      <!--   cards   -->
      <div class="row">

        <?php while ($dado = $con -> fetch_array()) {  ?>
        <div class="col s12 m4">
           <div class="card horizontal">
             <div>
              <img src="<?php echo $dado["foto"];  ?>" height="100" width="100">
             </div>
           <div class="card-stacked">
            <div class="card-content">
             <p><?php echo $dado["nome"];  ?></p>
             <p>Gub: <?php echo $dado["gub"];  ?></p>
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