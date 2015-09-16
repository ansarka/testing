<?php
==========================================
/**
  * @method boolean namevalidate()
  * @method boolean emailvalidate()
  * @method boolean usernamevalidate()
  * @method boolean pwdvalidate()
  * @method boolean addUserDetails()
  */
class addUser implements name,username,password,email,addUser{
    private $username;
    private $name;
    private $password;
    private $email;

	public function __construct($inputArray){
		 
		$this->_username 	= $inputArray['username'];
		$this->_password 	= $inputArray['password'];
		$this->_name 		= $inputArray['name'];
		$this->_email 		= $inputArray['email'];
		 
	}
 /**
  * This method will validete name
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function namevalidate (){

		//validate name
		return ;
	}
	/**
  * This method will validete email
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function emailvalidate (){

		//validate email
		return 1;

	}
	/**
  * This method will validete username
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
  * This method will validete password
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
  * This method will add user to DB
  *
  * @author ansar
  * @since 14 sep 2015
  * @version 0.1
  * @return boolean
  */
	public function addUserDetails();
	{

		if($this->usernamevalidate && $this->pwdvalidate && $this->namevalidate && $this->emailvalidate){

		//add to db 
		return 1;
		}
	}

}

$inputArray['username'] ="uname";
$inputArray['password'] ="pwd";
$inputArray['email']    ="email";
$inputArray['name']     ="name";

$objAdminLogin = new addUser($inputArray);
$objAdminLogin->addUserDetails();