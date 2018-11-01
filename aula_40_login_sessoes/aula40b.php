<?php

    session_start();

    if (isset($_SESSION['numlogin'])){
        $n1 = $_GET['num1'];
        $n2 = $_SESSION['numlogin'];

        if($n1 != $n2){
            echo "Login não efetuado";
            exit;
        }
    }else{
        echo "Login não efetuado";
        exit;
    }
    include "conexao.inc";

    echo "Página inicial<br>";
    echo $_SESSION['username'];

   /* $_SESSION= array();
    session_destroy();*/

    //unset($_SESSION['numlogin']);
    //session_unregister('numlogin');

    //session_destroy();

    mysqli_close($conexao);

?>
