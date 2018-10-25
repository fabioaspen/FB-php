<?php

    class carro{
        public $cor;
        public static $vel=0;

        function carro($cr){
            $this -> cor = $cr;
            self :: $vel = 0;
        }

        function mudavel($vl){
            self ::$vel=$vl;
        }

        function status(){
            echo "<hr>";
            echo "<br>Cor: ".$this->cor;
            echo "<br>Velocidade: ".self :: $vel;
            echo "<hr>";
        }
    }

    $carro1 = new carro("vermelho");
    $carro2 = new carro("azul");
    $carro3 = new carro("preto");

    $carro1->status();
    $carro2->status();
    $carro3->status();

    echo "<br> Velocidade alterada";
    $carro1->mudavel(100);

    $carro1->status();
    $carro2->status();
    $carro3->status();
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