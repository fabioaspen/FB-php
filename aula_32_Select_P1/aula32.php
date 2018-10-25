<?php

    include "conexao.inc";

    $vcat1 = $_POST["f_cat1"];
    $vcat2 = $_POST["f_cat2"];

    $sql = "SELECT * FROM tb_produtos where cat = $vcat1 OR cat = $vcat2";
    $res  = mysqli_query($conexao,$sql);
    $linha = mysqli_num_rows($res);
    
    echo "$linha Numero de registros encontrados";

    mysqli_close($conexao);

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