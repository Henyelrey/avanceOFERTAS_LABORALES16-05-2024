<?php 
//Definicion de clases
    class figura{
        public function Dibujar(){
            echo "la figura esta dibujada.";
        }        
    }

    class circulo extends figura{
        public function girar(){
            echo "Círculo girando...";

        
        }

    }

    class cuadrado extends figura{
        public function DibujrReal(){

            echo"--------------<br>";
            echo"|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;            |<br>";
            echo"|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             |<br>";
            echo"|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;             |<br>";
            echo"--------------<br>";

        }
    }

    class triangulo extends figura{
    
    }


//Codigo cliente 
$plato = new circulo();
$moneda = new circulo();

$plato->Dibujar();
$moneda->Dibujar();

$plato->girar();
$moneda->girar();

echo "<br>"; //salto de linea 

$cuadro = new cuadrado();
$cuadro->Dibujar();

echo "<br>"; //salto de linea 

$escuadra = new triangulo();
$escuadra->Dibujar();
echo "<br>"; //salto de linea 

$cuadro->DibujrReal();


