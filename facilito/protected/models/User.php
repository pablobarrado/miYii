<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author PabloBarrado
 */
class User extends CActiveRecord {
    //put your code here
    
    public static function model($model=__CLASS__){
      return  parent::model($model);
    }
    
    public function tableName() {
        return "tbl_user";
    }
}
