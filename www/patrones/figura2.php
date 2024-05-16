<?php
    //este programa demuesatr el uso del patron de diseño "Factory"

    //Primero creamos una interfaz
    interface FiguraGeometrica{
        //definimos 3 funciones abstractas
        public function Dibujar();
        public function DibujarReal();
        public function CalcularArea($dato);
        
    }

    class circulo implements FiguraGeometrica{
        public function Dibujar(){
            echo "el objeto circulo se ha dibujado";
        }
        public function DibujarReal(){
        
        }
        public function CalcularArea($radio){
            return 3.14*$radio*$radio;
        }
        
    }

    class cuadrado implements FiguraGeometrica{
        public function Dibujar(){
            echo "el objeto cuadrdado se ha dibujado";
        }
        public function DibujarReal(){
        
        }
        public function CalcularArea($dato){
        
        }
        
    }

    class triangulo implements FiguraGeometrica{
        public function Dibujar(){
            echo "el objeto triangulo se ha dibujado";
        }
        public function DibujarReal(){
        
        }
        public function CalcularArea($dato){
        
        }
        
    }

    //trabajo calificado

    class rectangulo implements FiguraGeometrica{
        public function Dibujar(){
            echo "el objeto rectangulo se ha dibujado";
        }
        public function DibujarReal(){
        
        }
        public function CalcularArea($dato){
            
        }
        
        public function CalcularAreaRectangulo($base, $altura){
            return $base*$altura;
        }
    }


    //Ahora creamos la clase fabrica de figuras.
    class figuraFactory{
        public static function CrearFigura($nombre_figura){
            switch($nombre_figura){
                case 'circulo';
                    return new circulo();
                    break;
                case 'cuadrado';
                    return new cuadrado();
                    break;
                case 'triangulo';
                    return new triangulo();
                    break;

            }
        }
    }

    //codigo cliente

    $plato = figuraFactory::CrearFigura('circulo');
    $moneda = figuraFactory::CrearFigura('circulo');

    $plato->Dibujar();
    $moneda->Dibujar();

    echo '<br>';
    $area_del_plato = $plato->CalcularArea(8);
    echo "el área del plato de 8cm es".$area_del_plato;
    
    echo '<br>';

    $cuadro = figuraFactory::CrearFigura('cuadrado');
    $cuadro->Dibujar();

    echo '<br>';

    $escuadra = figuraFactory::CrearFigura('triangulo');
    $escuadra->Dibujar();

    //objeto rectangulo

    echo '<br>';
    $terreno = figuraFactory::CrearFigura('rectangulo');
    $terreno->Dibujar();

    echo '<br>';

    $area_del_terreno = $terreno->CalcularAreaRectangulo(5, 8);
    echo "El área del terreno es " . $area_terreno;
