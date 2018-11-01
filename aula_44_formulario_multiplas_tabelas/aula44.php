<?php

    include "conexao.inc";


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
    
    <h1>Pesquisa:</h1>

    <form name="fcad" action="processo.php" method="get">

        <label>Nome</label><br>
        <input type="text" name="fnome"><br><br>

        <label>Selecione seu estado</label>
        <select name="fuf">
            
            <?php
                
                $sql = "SELECT * FROM tb_uf order by uf";
                $res = mysqli_query($conexao,$sql);

                while($reg = mysqli_fetch_row($res)){
                    $vuf = $reg[0];
                    $vsigla = $reg[1];

                    echo "<option value=$vsigla>$vuf</option>";
                    
                }
            ?>
        </select>
        <br><br>

        <label>Selecione seus meios de transporte favoritos</label><br>
            <?php

                $sql = "SELECT * FROM tb_transporte";
                $res = mysqli_query($conexao,$sql);

                while($reg = mysqli_fetch_row($res)){
                    $vcod = $reg[0];
                    $vtra = $reg[1];

                    echo "<input type=checkbox name=ftransp[] value=$vcod>$vtra<br>";
                }

            ?>
        <br>

        <input type="submit" value="Gravar Pesquisa">

    </form>

</body>
</html>

<?php

    mysqli_close($conexao);

?>