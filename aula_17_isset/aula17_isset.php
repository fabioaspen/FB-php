<?php

    if (isset($_POST["f_nome"])) {
        $vnome = $_POST["f_nome"];
        echo "Nome: $vnome<br>";
    }else{
        echo "Dados não encontrado";
    
    echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form name="f_aula" method="post" action="aula17_isset.php">
        <label>Nome:</label><br>
        <input type="text" name="f_nome"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    }
    
?>