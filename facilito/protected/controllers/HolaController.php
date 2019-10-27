<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HolaController
 *
 * @author asus
 */
class HolaController extends Controller {
    //put your code here
    
    //# Responderá a /hola/index
    public function  actionIndex(){
        
        $model = CActiveRecord::model("User")->findAll();
        $twitter = "@pablobarrado";        
        $this->render("index",array("twitter"=>$twitter,"model"=>$model));
        
        
    }
    
}
