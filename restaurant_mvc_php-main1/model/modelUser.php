<?php

require_once("model.php");

class ModelUser extends Model{
    private $id= NULL;
    private $username;
    private $password;
    private $role;
    private $email;
  
   
    protected static $table = 'user';
    protected static $primary = 'id';
    protected static $user = 'username';
    protected static $pass = 'password';
    protected static $emailLocal = 'email';



    public function __construct( $username = NULL, $password = NULL , $role = NULL, $email = NULL)
    {
        if (!is_null($username) && !is_null($password) && !is_null($role) ) {
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->email = $email;
          
           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getusername(){
        return $this->username;
    }
    public function getpassword(){

        return $this->password;
    }
    public function getrole(){
        return $this->role;
    }



}


?>