<?php

    include "conexao.inc";

    $vcod     =  $_POST["f_code"];
    $vproduto =  $_POST["f_prod"];
    $vpreco   =  $_POST["f_preco"];
    $vqtde    =  $_POST["f_qtde"];

    $sql = "INSERT INTO tb_produtos VALUES ('$vcod','$vproduto',$vpreco,$vqtde)";
    $res = mysqli_query($conexao,$sql);
    $linha = mysqli_affected_rows($conexao);

    if($linha == 1){
        echo "<font color=blue>Registro gravado com sucesso</font>";
    }else {
        echo "<font color=red>Não foi possivel gravar o registro</font>";
    }

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

    <br>
    <a href="formulario-31.html">Voltar</a>

</body>
</html>