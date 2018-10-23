<?php

    session_start();
    $_SESSION['vnome'] = "bruno";
    $_SESSION['vtexto'] = "texto para teste";

    $_SESSION['vlog'] = "s";

    //unset($_SESSION['vnome]); (deleta uma seção)

    echo $_SESSION['vnome'];
    echo "<br>".$_SESSION['vtexto'];

    if(isset($_SESSION['vcanal'])){
        echo "<br>".$_SESSION['vcanal'];
    }else {
        echo "<br><font color=red>Variavel vcanal não existe</font>";
    }
    
    //session_destroy();    (mata uma seção)
    
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

    <br>
    <br>
    <a href="pg1.php" target="_self">Página 1</a>

</body>
</html>