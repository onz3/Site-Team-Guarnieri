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
<div class="navbar-fixed col s12 m2">
  <nav style="background-color: #242a8a" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img width="50" height="40" src="img/logopng.png" style="padding-top: 5px"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php"><b>Home</b></a></li>
        <li><a class='dropdown-trigger' data-target='dropdown1' href="#"><i class="material-icons right">arrow_drop_down</i><b>Sobre</b></a></li>
        <li><a href="alunos.php"><b>Alunos</b></a></li>
        <li><a href="apoiadores.php"><b>Apoiadores</b></a></li>
      </ul>

      <!-- dropdown-->
      <ul id='dropdown1' class='dropdown-content'>
       <li><a href="#historia" style="color: #fff">História</a></li>
       <li><a href="#vmv" style="color: #fff">Visão, missão e valores</a></li>
      </ul>

      <!-- mobile-->
      <ul id="nav-mobile" class="sidenav" style="background-color: #242a8a">
        <li><a href="index.php" style="color: #fff"><b>Home<b></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="sobre.php" style="color: #fff"><b>Sobre</b><i class="material-icons right">info_outline</i></a></li>
        <li><a href="#historia" style="color: #fff">História</a></li>
        <li><a href="#vmv" style="color: #fff">Visão, missão e valores</a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="alunos.php" style="color: #fff"><b>Alunos</b><i class="material-icons right">people_outline</i></a></li>
        <li class="divider" style="background-color: #242a8a"></li>
        <li><a href="apoiadores.php" style="color: #fff"><b>Apoiadores</b><i class="material-icons right">group_work</i></a></li>        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i style="color: #fff" class="material-icons">menu</i></a>
    </div>
  </nav>
</div>  







  
<!--inicio-->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center"><b>Team Guarnieri</b></h1>
        <div class="row center">
          <h5 class="header col s12 light">Taekwondo / Hapkido</h5>
        </div>
        <div class="row center">
          <a href="polos.php" id="download-button" class="btn-large waves-effect waves-light" style="background-color: #ec1414; border-radius: 5px">Polos</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/capa.png"></div>
  </div>




</br>



<!--historia-->
  <div class="container">
    <div class="section">
      <div class="row">
      <h3 id="historia" class="center-align Stencil-Std-Bold-font"><b>História da equipe</b></h3>
      <p class="center-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
      </div>
    </div>  
  <div class="carousel">
    <a class="carousel-item" href="#one!"><img class="responsive" src="img/c1.jpg"></a>
    <a class="carousel-item" href="#two!"><img class="responsive" src="img/c2.jpg"></a>
    <a class="carousel-item" href="#three!"><img class="responsive" src="img/c3.jpg"></a>
    <a class="carousel-item" href="#four!"><img class="responsive" src="img/c4.jpg"></a>
    <a class="carousel-item" href="#five!"><img class="responsive" src="img/c5.jpg"></a>
  </div>  
  </div>
</br></br></br></br>



<!-- capa BR -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/brasil.png" alt="Unsplashed background img 2"></div>
  </div>





<!-- VMV -->
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h3 id="vmv" class="Stencil-Std-Bold-font"><b>Visão, missão e valores</b></h3>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>



<!-- capa KR -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/coreia.png" alt="Unsplashed background img 3"></div>
  </div>



</br>
<!--contato-->
   <div class="container scrollspy" id="contato">
        <div class="col s12 center">
         <h3><i class="mdi-content-send brown-text"></i></h3>
         <h3 class="Stencil-Std-Bold-font"><b>Contato</b></h3>
         <h5>Telefones <i class="material-icons">phone</i></h5>
         <h6>Gutto: (12) 99999-9999</h6>
         <h6>Stephany: (12) 99999-9999</h6>
         </br></br></br>
         <h5>Enviar Mensagem</h5>
         <form method="POST" action="metodos/enviaEmail.php" class="col s12">
           <div>
            <div class="input-field col m6 s12">
             <input id="name" type="text" class="validate">
             <label for="first_name">Nome</label>
            </div>                       
           </div>
           <div>
            <div class="input-field col m6 s12">
             <input id="email" type="email" class="validate" required>
             <label for="email">Email</label>
            </div>
           </div>
            <div>
             <div class="input-field col m6 s12">
              <textarea id="menssageme" class="materialize-textarea"></textarea>
              <label for="message">Menssagem</label>
             </div>
            </div>                 
           <div class="row">
            <div class="col m12">
             <p class="center-align waves-effect waves-light"><button class="btn btn-large waves-effect" type="submit" name="action"
             style="background-color: #ec1414; border-radius: 5px;"><b>Enviar</b><i class="material-icons right">send</i></button></p>
            </div>
           </div>       
         </form>
    </div>
  </div>







  <!--footer-->
  <footer class="page-footer" style="background-color: #242a8a">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
