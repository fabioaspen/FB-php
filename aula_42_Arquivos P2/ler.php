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
    
        $arquivo = fopen("visitas.txt","r");
        while (!feof($arquivo)) {
            echo fgets($arquivo,4096);
            echo "<br>".fgets($arquivo,100);
            echo "<br><br>";
        }

        fclose($arquivo);

    ?>
    
    <hr>
    <a href="index.html" target="_self">Voltar</a>
    
</body>
</html>