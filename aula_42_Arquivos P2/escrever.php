<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        $nome = $_POST['f_nome'];
        $msg = $_POST['f_msg'];
        $conteudo = $msg."\r\n".$nome."\r\n";

        $arquivo = fopen("visitas.txt","a");
        fwrite($arquivo,$conteudo);

        echo "Mensagem gravada: $conteudo";

        fclose($arquivo);

    ?>
    <hr>
    <a href="index.html" target="_self">Voltar</a>

</body>
</html>