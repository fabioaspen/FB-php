<?php

    include "conexao.inc";

    $vnome = $_GET["fnome"];
    $vuf = $_GET["fuf"];
    $vt_tmp = array(0,0,0,0);

    echo "Nome: $vnome - Estado: $vuf</br>";
    echo "Transporte Selecionados:<br>";

    foreach($_GET["ftransp"] as $tra){
        $vt_tmp[$tra-1] = 1;
        echo "$tra<br>";
    }

    echo "<hr>";

        $sql = "INSERT  INTO tb_pesquisa VALUES(null,'$vnome','$vuf','$vt_tmp[0]','$vt_tmp[1]','$vt_tmp[2]','$vt_tmp[3]')";
        mysqli_query($conexao,$sql);

        echo "Pesquisa gravada";

    mysqli_close($conexao);
?>