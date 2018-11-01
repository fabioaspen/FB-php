<?php

    session_start();
    
    echo "<h3>Segunda Página</h3>";
    
    echo $_SESSION['vnome'];
    echo "<br>".$_SESSION['vtexto'];
    echo "<br>".$_SESSION['vcanal'];
    
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

    <br><br>
    <a href="aula19.php" target="_self">Voltar aula 19</a><br>
    <a href="pg1.php" target="_self">Pagina 2</a>

</body>
</html>