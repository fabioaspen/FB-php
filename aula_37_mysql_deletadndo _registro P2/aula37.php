<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="f_excluir" method="post" action="aula37.php">
        <table border=1>

            <tr>
                <td>Codigo</td><td>Nome</td><td>Selecionar</td>
            </tr>

            <?php

                include "conexao.inc";

                if(isset($_POST['sel'])){
                    foreach ($_POST['sel'] as $codigo) {
                        $sql = "DELETE FROM tb_cadastro where cod = $codigo";
                        $res = mysqli_query($conexao,$sql);
                    }

                }else{
                    echo "Formulario nao submetido";
                }

                $sql = "SELECT * FROM tb_cadastro order by cod";
                $res = mysqli_query($conexao,$sql);

                while ($vreg = mysqli_fetch_row($res)) {
                    $vcod = $vreg[0];
                    $vnome = $vreg[1];

                    echo "<tr>";
                        echo "<td>$vcod</td><td>$vnome</td>";
                        echo "<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
                    echo "</tr>";
                }

                mysqli_close($conexao);
            ?>
            
        </table>  
    
        <br>

        <input type="submit" value="Excluir" name=bt_excluir/>

    </form>
</body>

</html>