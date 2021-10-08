<?php

$corpo      = "
    Nome: "   .$_POST['nome']."
    Email: "   .$_POST['email']."
    Mensagem: "   .$_POST['mensagem']."
";

mail('admin@drmariagoreti.com',$assunto,$corpo,'From: mgm.sma@gmail.com');
header("location: http://drmariagoreti.com/pages/Contato.php");
?>