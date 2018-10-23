<?php

    class carro{
        var $tipo; //1=passeio / 2=Esporte / 3=Ultilitario
        var $velmax;
        var $nome;
        var $liga;
        var $vel;

        function carro($tp,$no){
            $this -> tipo = $tp;
            $this -> liga = false;
            $this -> nome = $no;
            $this -> vel = 0;

            if($tp == 1){
                $this -> velmax = 160;
            }else if($tp == 2){
                $this -> velmax = 300;
            }else {
                $this -> velmax = 100;
            }
        }

        function liga(){
            $this -> liga = true;
        }

        function desliga(){
            $this -> liga = false;
        }

        function velocidade($vl){
            if($vl > $this->velmax){
                $this -> vel = $this -> velmax;
            }else {
                $this -> vel = $vl;
            }
        }

        function id(){
            echo "<hr/>";
            echo "Nome do carro: ".$this->nome;
            echo "<br>Tipo do carro: ".$this->tipo;
            echo "<br>Velocidade Máxima: ".$this->velmax;
            echo "<br>Velocidade atual: ".$this->vel;

            if($this -> liga){
                echo "<br>Este carro esta ligado";
            }else{
                echo "<br>Desligado";
            }

        }
    }

    $carro1 = new carro(2,"Celta");
    $carro2 = new carro(3,"pug");
    $carro3 = new carro(1,"gol");
    $carro4 = new carro(1,"gol");
    $carro5 = new carro(1,"gol");

    $carro1 -> velocidade(180);
    $carro5 -> velocidade(400);

    $carro1 -> liga();
    $carro3 -> liga();
    $carro5 -> liga();

    $carro5 -> desliga();

    $carro1 -> id();
    $carro2 -> id();
    $carro3 -> id();
    $carro4 -> id();
    $carro5 -> id();
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