<?php

    include "conexao.inc";

    $user = $_POST['f_user'];
    $senha = $_POST['f_senha'];

    $sql = "SELECT * FROM tb_cadastro WHERE username = '$user' and senha = '$senha'";
    $res = mysqli_query($conexao,$sql);
    $lin = mysqli_num_rows($res);

    if($lin > 0){
        $num = rand(100000,900000);
        setcookie("numlogin",$num);
        header("location:aula39b.php?num1=$num");
    }else {
        echo "ERRO na conexão<br>";
        echo "<a href='form39.html'>Voltar</a>";
    }

    mysqli_close($conexao);

?>