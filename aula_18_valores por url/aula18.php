<?php

    $texto = "aula de php";
    $nome = "Bruno";
    $canal = "CFB curso";

    echo "<a href=pg1.php?txt=".urlencode($texto)."&no=".urlencode($nome)."&ca=".urlencode($canal)." target=_self>Abre pg1</a>";

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