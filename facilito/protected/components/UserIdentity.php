<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $users = array(
            // username => password
            'demo' => 'demo',
            'admin' => 'admin',
        );
        echo $this->username."<br>";
        echo sha1($this->password)."<br>";
        $user = User::model()->find("LOWER(username)=?", array(strtolower($this->username)));
        //if(!isset($users[$this->username]))
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        //elseif($users[$this->username]!==$this->password)
        elseif ($user->password !== md5($this->password))
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else {
            $this->errorCode = self::ERROR_NONE;
            $this->_id = $user->id;
           // $this->setState("email", $user->email);
           // Yii::app()->user->getState("email");
           // Yii::app()->user->email;
        }
        return !$this->errorCode;
    }
    public function getId() {
        return $this->_id;
    }
    

}
