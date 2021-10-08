<?php
// Conexão
require_once 'conexao.php';

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $username = mysqli_escape_string($connect, $_POST['username']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    if(isset($_POST['lembrar-password'])):

        setcookie('username', $username, time()+3600);
        setcookie('password', md5($password), time()+3600);
    endif;

    if(empty($username) or empty($password)):
        $erros[] = "<li> O campo Usuário/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT username FROM alunos WHERE username = '$username'";
        $resultado = mysqli_query($connect, $sql);      

        if(mysqli_num_rows($resultado) > 0):
  //    $password = md5($password);   criptografa senha mas nao consigo dar select    
        $sql = "SELECT * FROM alunos WHERE username = '$username' AND password = '$password'"; //se tirar a senha roda



        $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: menuAluno.php');
            else:
                $erros[] = "<li> Usuário e password não conferem </li>";
            endif;

        else:
            $erros[] = "<li> Usuário inexistente </li>";
        endif;

    endif;

endif;
?>

<html>
<head>
  <title>Login Aluno</title>
  <meta charset="utf-8">
  <!-- CSS  -->
  <link rel="shortcut icon" type="image/x-png" href="img/icon.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>




<div class="container">
<h1 class="center"><b>Login</b></h1>
<?php 
if(!empty($erros)):
    foreach($erros as $erro):
        echo $erro;
    endforeach;
endif;
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
user: <input type="text" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>"><br>
password: <input type="password" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>"><br>
<button class="btn-large waves-effect waves-light" type="submit" name="btn-entrar">Entrar</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>