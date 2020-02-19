<?php
namespace Az\interfaces;
use \Az\Tablero;

interface Pieza{
    public function mover(int $x1,int $y1,int $x2,int $y2,Tablero $tablero);
}

?>