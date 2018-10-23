<?php
    //private e protected
    class aula{
        protected $var1 = "Bom dia";
        protected $var2 = "cacal fessor bruno";
        protected $var3 = "www.desiner.com.br";

        function escreve(){
            echo "<br>Método da classe aula";
            echo "<br>".$this -> var1;
            echo "<br>".$this -> var2;
            echo "<br>".$this -> var3;
        }
    }

    class canal extends aula{
        var $vc1 = "curso de PHP";
        var $vc2 = "bruno";

        function escreve2(){
            echo "<br> Método class canal 1";
            echo "<br>".$this -> vc1;
            echo "<br>".$this -> vc2;
        }
    }

    $aulaobj = new aula();
    $canalobj = new canal();

    $aulaobj -> escreve();

    echo "<hr>";
    $canalobj -> escreve();
    $canalobj -> escreve2();
    
    echo "<hr>";
    echo $aulaobj -> var1;
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
    
</body>
</html>