<?php

    interface carroPadrao{
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }

    interface carroGuerra{
        function atirracanhao();
        function atirametralhadora();
    }

    abstract class carroBase implements carroPadrao, carroGuerra{
        public $potencia;
        public $velmax;
        private $ligado=false;

        function liga(){
            $this->ligado = true;
        }

        function desliga(){
            $this->liga = false;
        }

        function status(){
            echo "<hr>";
            echo "Potência: ".$this->potencia;
            echo "<br>Velocidade máxima: ".$this->velmax;
            echo "<br>";
            if($this->ligado){
                echo "Este carro esta ligado";
            }else {
                echo "Este carro não esta ligado";
            }
            echo "<br>";
        }

        function acelera(){}
        function freia(){}
        function atirracanhao(){}
        function atirametralhadora(){}
    
    }

    class carro extends carroBase{
        function carro($pt,$vm){
            $this->potencia=$pt;
            $this->velmax=$vm;

            $this->status();
        }
    }

    $carro1=new carro(150,200);

    $carro1->liga();
    $carro1->status();
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