<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoleForm
 *
 * @author asus
 */
class RoleForm extends CFormModel {
    //put your code here
    public static $types = array("Operacion","Tarea","Rol");
    public $name;
    public $descripcion;
    public $type=2;
    
    public function rules(){
        
        return array(
            array("name,type", "required"),
           # array("name", "ext.MyValidator"),            
           # array("descripcion", "exist","attributeName"=>"username","className"=>"Users","message"=>"Ya existe"),
            # array("descripcion", "unique","attributeName"=>"username","className"=>"Users","message"=>"Ya existe"),
            array("descripcion", "mivalicaciondelmodelo"),
        );
        
    }
       
    public function mivalicaciondelmodelo($attribute,$params){
            
            if($this->$attribute == "test" )
                $this->addError($attribute, "No permitido");
            
    }    
}
