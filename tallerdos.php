<?php

class Taller{



    private $valorSerie;

    public function _construct(){

    $this->valorSerie =0;
    }

    public function getValorSerie(){
    return $this->valorSerie;
    }
    public function setValorSerie($valor){
    $this-> valorSerie = $valor;   
    }

    public function tallerdos(){
       
        
        if ( $this ->getValorSerie () <= 5 ) {
    
            echo  "<br> Su función es gratis";
        }else{
            if ( $this ->getValorSerie () <= 12 ){
                echo  "<br> Su función es a mitad de precio";
    
            }else{
                if ( $this ->getValorSerie  () <= 54 ){
                    echo  "<br> Su función tiene tarifa completa";
                }else{
                    echo  "<br> Su función es gratis";
                }
            }
    
    
    
        }
    }
    
   







}


?>