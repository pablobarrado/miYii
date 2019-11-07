<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyValidator
 *
 * @author PabloBarrado
 */
class MyValidator extends CValidator {
    //put your code here
    
    
    protected function validateAttribute($object, $attribute) {
        
        if (!is_array($object->$attribute)) {
            $this->addError($object, $attribute, "Esto es un error =( .");
        } else if (empty ($object->$attribute)){            
            $this->addError($object, $attribute, "Esto es un error =( .");
        }
        else if ( $object->$attribute == "test"){            
            $this->addError($object, $attribute, "Esto es un error =( .");
        }
    }

}
