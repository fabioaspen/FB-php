<?php

    if (isset($_COOKIE['numlogin'])){
        $n1 = $_GET['num1'];
        $n2 = $_COOKIE['numlogin'];

        if($n1 != $n2){
            echo "Login não efetuado";
            exit;
        }
    }else{
        echo "Login não efetuado";
        exit;
    }
    include "conexao.inc";

    echo "Página inicial";

    mysqli_close($conexao);

?>
