<?php

namespace Test;
use \Az\Tablero;
use \Az\piezas\Peon;

final class TableroTest extends \PHPUnit\Framework\TestCase {

    public function testExisteTablero(){
        $this->assertTrue(class_exists("\Az\Tablero"));
    }

    public function testExisteMostrar(){
        $tablero = new Tablero();
        $tableroRender = $tablero->mostrar();
        $this->assertTrue(True);
    }

    public function testStringDeMostrar(){
        $tablero = new Tablero();
        $tableroRender = $tablero->mostrar();
        $tableroRenderReturn = 
        "        \n        \n        \n        \n        \n        \n        \n        \n";
        $this->assertEquals($tableroRenderReturn,$tableroRender);
    }
    
    public function testExisteColocarPieza(){
        $tablero = new Tablero();
        $tablero->colocarPieza(3,4,5,6,new Peon("blanco"));
        $this->assertTrue(True);
    }

    public function testColocarPiezaPrimeraPrueba(){
        $tablero = new Tablero();
        $this->assertTrue($tablero->colocarPieza(3,4,5,6,new Peon("blanco")));
    }

    public function testColocarPiezaMostrarTablero(){
        $tablero = new Tablero();
        $tablero->colocarPieza(3,4,5,6,new Peon("blanco"));
        $tableroRender = $tablero->mostrar();
        $tableroRenderReturn = 
        "        \n        \n        \n  P     \n        \n        \n        \n        \n";
        $this->assertEquals($tableroRenderReturn,$tableroRender);
    }
}
?>