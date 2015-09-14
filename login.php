<?php 

interface name {
	
	public function namevalidate ();

}
interface username {
	
	public function usernamevalidate ();

}
interface email {
	
	public function emailvalidate ();

}

interface password {
	
	public function pwdvalidate ();

}

interface authenticate{
	
	public function authenticateUser();
}

interface addUser{
	
	public function addUser();
}

class login implements username,password,authenticate{
    private $username;
    private $password;

	public function __construct($inputArray){
		 
		$this->_username 	= $inputArray['username'];
		$this->_password 	= $inputArray['password'];
		 
	}
	public function usernamevalidate (){

	 //validate username
	 return 1;	
	}

	public function pwdvalidate (){

	 //validate password
	 return 1;	
	}

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

==========================================

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
	public function namevalidate (){

		//validate name
		return ;
	}
	public function emailvalidate (){

		//validate email
		return 1;

	}
	public function usernamevalidate (){

	 //validate username
	 return 1;	
	}

	public function pwdvalidate (){

	 //validate password
	 return 1;	
	}

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
