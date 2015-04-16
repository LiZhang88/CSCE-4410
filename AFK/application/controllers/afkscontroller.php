<?php

//Database used (not security model) 

class AfksController extends Controller {

	function index() {
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');			
	}

	function logpage() {
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$this->set('todo',$this->Afk->query('SELECT * FROM terms WHERE PAGENAME = "logpage"'));
	}
	
	function Main(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$this->set('todo',$this->Afk->query('SELECT * FROM terms WHERE PAGENAME = "login"'));
		
		if (isset($_SESSION['username'])){
			$this->set('isLogined',1);			 
			$this->set('USERS',$_SESSION['username']);			
		}
	}
			
	function login() {
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');;			
		$this->set('todo',$this->Afk->query('SELECT * FROM terms WHERE PAGENAME = "login"'));
		
		if (isset($_SESSION['username'])){
			$this->set('isLogined',1);
			$this->set('USERS',$_SESSION['username']);
			header("Location: ../afks/Main");
		}
		else {
			$USERS = $_POST['USERS'];  
	  		$PASSWORD = $_POST['PASSWORD'];
			//ideal case  ( NO HACK)
	  		$loginInfo = $this->Afk->query("SELECT USER_ID FROM users WHERE USER_ID = '".$USERS . "' AND PASSWORD = '".$PASSWORD . "'");
	  		if(count($loginInfo) > 0)
	  		{
	  			$this->set('isLogined',1);
			  	foreach ($loginInfo as $loginInfoItem)
				{
					$_SESSION['username'] = $loginInfoItem['User']['USER_ID'];
				}	
				$this->set('USERS',$_SESSION['username']);
				header("Location: ../afks/Main");
	  		}
	  		else{
	  			$this->set('isLogined',0);	
	  		}		
		}
		
	}
	
	// Vister Pages
	
	function A(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
	}
		
	function B(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
	}
	
	function C(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
	}
	
}
