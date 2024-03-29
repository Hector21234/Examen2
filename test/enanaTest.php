<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
       $enana= new Enana('nombre', 30, 'viva');
       
       $this->assertEquals(20, $enana->heridaLeve());
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva

    }

    public function testHeridaLeveMuere() {
        $enana= new Enana('nombre', 10, 'viva');
        
        $this->assertEquals(0, $enana->heridaLeve());
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta

    }

    public function testHeridaGrave() {
        $enana= new Enana('nombre', 30, 'viva');
      
       $this->assertEquals(0, $enana->heridaGrave());
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo

    }
    
    public function testPocimaRevive() {

        $enana= new Enana('nombre', -5, 'muerta');
        $this->assertEquals(5, $enana->pocima());

        

        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva

    }

    public function testPocimaExtraLimbo() {
        $enana= new Enana('nombre', 0, 'limbo');
        
        $this->assertEquals(50, $enana->pocimaExtra());
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.

    }
}


?>