<?php

class Enana
{
    public $nombre; #Nombre de la enana
    public $puntosVida; #Valor de la vida que posee
    public $situacion; #La enana estará 'viva', 'muerta' o 'limbo', dependiendo de sus puntos de vida. >0 = viva;
                        #<0 = muerta; =0 = limbo

    public function __construct($a1,$a2,$a3)
    {
        $this->nombre=$a1;
        $this->puntosVida=$a2;
        $this->situacion=$a3;
    }

    public function heridaLeve(){
        #Se le quitan 10 puntos de vida a la Enana y además se cambia el valor de situacion (si fuera necesario)
    $this->puntosVida=$this->puntosVida - 10;
    if($this->puntosVida >0){
$this->situacion="viva";

    } elseif($this->puntosVida = 0){
$this->situacion="limbo";

    }
    else{

        $this->situacion = "muerta";
    }
    return $this->puntosVida;
    return $this->situacion;
    }

    public function heridaGrave(){
        #Se le quita toda la vida que posea hasta tener 0 puntos de vida y cambiarle la situacion a limbo
    return $this->puntosVida = 0;
    return $this->situacion = "limbo";
    }

    public function pocima(){
        #Recupera 10 puntos de vida y además cambia el valor de situacion si así fuera necesario.
        #Si la Enana está en el limbo, la pocima no le afecta, seguirá en el limbo con 0 puntos de vida.
        #Solo pocimaExtra puede rescatarla del limbo
         $this->puntosVida=$this->puntosVida + 10;
    if($this->puntosVida >0){
$this->situacion="viva";

    } 
    elseif($this->situacion = "limbo"){

       
        $this->puntosVida = 0;
    }
    else{

        $this->situacion = "muerta";
    }
    return $this->puntosVida;
    return $this->situacion;
        
    }

    public function pocimaExtra(){
       
          
$this->puntosVida=$this->puntosVida + 50;
if($this->puntosVida >0){
    $this->situacion="viva";
    
        } elseif($this->puntosVida = 0){
    $this->situacion="limbo";
    
        }
        else{
    
            $this->situacion = "muerta";
        }
     #Única manera de devolver a la vida del limbo. Además se otorgarán 50 puntos de vida.
    return $this->puntosVida;
    return $this->situacion;
    }
}
?>
