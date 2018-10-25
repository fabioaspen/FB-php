<?php

//Final, a plavra reservada final diz qie o método não pode ser sobrescrito
    abstract class carrobase{
        public $cor;
        public $vel = 0;

        function carrobase($cr){
            $this -> cor = $cr;
        }

        function status(){
            echo "<br>";
            echo "Potência: ".$this->cor;
            echo "<br> Velocidade: ".$this->vel;
            echo "<hr>";
        }

        final function cor(){
            echo "<hr>";
            echo "Minha cor: ".$this->cor;
            echo "<br>Metodo horiginal<hr>";
        }
    }

    class carro extends carrobase{

        function cor (){
            echo "<hr>";
            echo "<br>Cor: ".$this->cor."<hr>";
        }
    }

    class transp extends carrobase{
        
    }

    $car = new carro("vermelho");
    $tra = new transp("Azul");

    $car -> cor();
    $tra -> cor();

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
    
</body>
</html>