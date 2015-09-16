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