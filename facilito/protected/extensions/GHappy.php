<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GHappy
 *
 * @author asus
 */
class GHappy extends CApplicationComponent {
    //put your code here
    public $trato;
    
    
    public function init(){
        // Para nece
        
        echo " Inicializando ";
        $this->trato= 0;
    }
    
    public  function hola(){
        
        if (  $this->trato) { $final="Señor"; } else { $final="Colega";}
        
        if(date("a") == "am")
        {
            
            return "Good Morning ".$final;
        }
        else {
            return "Good Afternoon ".$final;
        }
        
    }
}
