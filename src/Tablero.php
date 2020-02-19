<?php
namespace Az;
use \Az\interfaces\Pieza;
//====================================
// Tablero
// - mostrar(): String o Array(arra())
// - mover(x1,y1,x2,y2):Boolean
// - termino();
// - dame(x,y):Pieza;
// - Piezas serán:(
//  -   1   Rey;
//  -   2   Reina;
//  -   4   Torres;
//  -   5   Alfiles;
//  -   7   Caballos;
//  -   8   Peones
//  -   0   Espacio Vacio
//   )
//====================================

class Tablero {

    private $tablero = 
    array(
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," "),
        array(" "," "," "," "," "," "," "," ")
    );

    public function mostrar(){
        $tableroString = "";
        foreach($this->tablero as $fila){
            foreach($fila as $columna){
                $tableroString .= $columna;
            }
            $tableroString .= "\n";
        }
        return $tableroString;
    }

    public function colocarPieza(int $x1,int $y1,int $x2,int $y2,Pieza $pieza){
        for($i=0;$i<count($this->tablero);$i++){
            for($i=0;$i<count())
        }
        return True;
    }


}


?>