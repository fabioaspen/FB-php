<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        // r = Abre para leitura, ponteiro no inicrio 
        // r+ = Abre para leituta e escrita
        // w = abre paraescrita, ponteiro no inicio e zera, se arquivo não existir ele o cria
        // w+ = Abre para leitura e escrita
        // a = Abre para escrita, ponteriso no final, se arquivo não existir ele p cria
        // a+ = Abre para leitura e escrita 
        // x = Abre para excrita, ponteiro no inicio, se arquivo não existir ele gera um errl do tipo E_WARNIMG
        // x+ = Abre para leitura escrita

        $arquivo = fopen("aula.txt","a");
        fwrite($arquivo,"canal fessor bruno");

        $arquivo = fopen("aula.txt","r");
        $conteudo = fread($arquivo,100);

        echo $conteudo;

        fclose($arquivo);

    ?>
</body>
</html>