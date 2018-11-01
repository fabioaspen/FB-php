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
        // r = Abre para leitura, ponteiro no inicio 
        // w = abre paraescrita, ponteiro no inicio e zera, se arquivo não existir ele o cria

        $arquivo = fopen("contador.txt","r");
        $cont = fread($arquivo,21);
        $cont++;
        $arquivo = fopen("contador.txt","w");
        fwrite($arquivo,$cont);
        fclose($arquivo);

        echo "Quantidade de acessos: $cont<br>"

    ?>

    <hr>
    <a href="index.html" target="_self">Voltar</a>

</body>
</html>