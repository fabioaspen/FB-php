
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    
        <tr>
            <td>Codigo</td><td>Produto</td><td>Preco</td><td>Qtde</td><td>Categoria</td>
        </tr>

        <?php

            include "conexao.inc";

            $sql = "SELECT * FROM  tb_produtos WHERE produto LIKE '%a%' "; //NOT LIKE
            $res = mysqli_query($conexao,$sql);

            while($vreg = mysqli_fetch_row($res)){
                $vcod   = $vreg[0];
                $vprod  = $vreg[1];
                $vpreco = $vreg[2];
                $vqtd   = $vreg[3];
                $vcat   = $vreg[4];

                echo "<tr>";
                    echo "<td>$vcod</td><td>$vprod</td><td>$vpreco</td><td>$vqtd</td><td>$vcat</td>";
                echo "</tr>";
            }

            mysqli_close($conexao);

        ?>

    </table>

</body>
</html>