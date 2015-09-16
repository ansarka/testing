<?php 

 require_once 'interface.php';
////////////////////////////////
/**
  * @method boolean usernamevalidate()
  * @method boolean pwdvalidate()
  * @method boolean authenticateUser()
  */
class login implements username,password,authenticate{
    private $username;
    private $password;

	public function __construct($inputArray){
		 
		$this->_username 	= $inputArray['username'];
		$this->_password 	= $inputArray['password'];
		 
	}
	/**
  * This method will validate username
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function usernamevalidate (){

	 //validate username
	 return 1;	
	}
/**
  * This method will validate password
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function pwdvalidate (){

	 //validate password
	 return 1;	
	}
/**
  * This method will check db for valid username and password
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function authenticateUser()
	{

		if($this->usernamevalidate & $this->pwdvalidate){

		//db check 
		
		return 1;
		}
	}

}

$inputArray['username'] ="uname";
$inputArray['password'] ="pwd";


$objAdminLogin = new login($inputArray);
$objAdminLogin->authenticateUser();


