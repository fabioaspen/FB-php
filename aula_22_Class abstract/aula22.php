<?php 

    abstract class carrobase{
        public $potencia;
        public $velmax;
        public $portas;
        public $ligado = false;

        function liga(){
            $this -> ligado = true;
        }

        function status(){
            echo "<br>";
            echo "Potência: ".$this->potencia;
            echo "<br> Velocidade máxima: ".$this->velmax;
            echo "<br> Portas: ".$this->portas;
            echo "<br>";
            if($this->ligado){
                echo "carro ligado";
            }else{
                echo "Carro desligado";
            }
            echo "<hr>";
        }
    }

    class carro extends carrobase{
        function carro ($pt,$vm,$po){
            $this->potencia=$pt;
            $this->velmax=$vm;
            $this->portas=$po;
            $this->status();
        }
    }

    $carro1 = new carro(150,280,4);
    
    $carro1->liga();
    $carro1->status();
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