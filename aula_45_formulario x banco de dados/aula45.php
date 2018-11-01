<?php

    include "conexao.inc";

    $vnome =    $_GET['f_nome'];
    $vsenha =   $_GET['f_senha'];
    $vsexo =    $_GET['f_sexo'];
    $vesporte = $_GET['f_esporte'];

    if(isset($_GET['f_tcarro'])){
        $vcarro = $_GET['f_tcarro'];
    }else {
        $vcarro = 0;
    }

    if(isset($_GET['f_tmoto'])){
        $vmoto = $_GET['f_tmoto'];
    }else {
        $vmoto = 0;
    }

    if(isset($_GET['f_tonibus'])){
        $vonibus = $_GET['f_tonibus'];
    }else {
        $vonibus = 0;
    }

    $vcoment =  $_GET['f_coment'];

    $sql = "INSERT INTO tb_revisao VALUES(null,'$vnome','$vsenha','$vsexo','$vesporte','$vcarro','$vmoto','$vonibus','$vcoment')";
    mysqli_query($conexao,$sql);

    mysqli_close($conexao);

    echo "Enviado com sucesso!";

?>