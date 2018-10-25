<?php

    $vmail = $_POST['email_txt'];
    $vassunto = $_POST['assunto_txt'];
    $vmsg = $_POST['msg_txt'];

    if(mail($vmail,$vassunto,$vmsg)){
        echo "Mensagem enviada";
    }else{
        echo "Erro ao enviar, tente novamente";
    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>