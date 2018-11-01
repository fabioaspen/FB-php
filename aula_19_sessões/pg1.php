<?php

    session_start();

    if ($_SESSION['vlog'] == "s") {
            
        echo "<h3>Primeira Página</h3>";

        $_SESSION['vcanal'] = "vlog fessor bruno";
        
        echo $_SESSION['vnome'];
        echo "<br>".$_SESSION['vtexto'];
    
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
    <a href="pg2.php" target="_self">Pagina 2</a>

</body>
</html>

<?php

    }else{
        echo "Acesso indevido";
    }
?>