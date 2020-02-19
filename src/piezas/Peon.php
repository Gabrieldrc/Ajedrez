<?php

namespace Az\piezas;

use \Az\interfaces\Pieza;
use \Az\Tablero;

class Peon implements Pieza{
    private $color = "";

    public function __construct(String $color){
        $this->color = $color;
    }

    public function mover(int $x1,int $y1,int $x2,int $y2,Tablero $tablero){

    }
}