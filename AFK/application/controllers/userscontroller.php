<?php

// Database used

class UsersController extends Controller {

			
	function login() {
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		
		if (isset($_SESSION['username'])){
			$this->set('isLogined',1);
			$this->set('USERS',$_SESSION['username']);	
			header("Location: ../afks/Main");
		}
		else {
			$USERS = $_POST['USERS'];  
	  		$PASSWORD = $_POST['PASSWORD'];
			
			//ideal case  ( NO HACK)
	  		$loginInfo = $this->User->query("SELECT username FROM users WHERE username = '".$USERS . "' AND password = '".$PASSWORD . "'");
	  		if(count($loginInfo) > 0)
	  		{
	  			$this->set('isLogined',1);
				$_SESSION['isLogined']=1;
			  	foreach ($loginInfo as $loginInfoItem)
				{
					$_SESSION['username'] = $loginInfoItem['User']['username'];
				}	
				$this->set('USERS',$_SESSION['username']);

				header("Location: ../afks/Main");
	  		}
	  		else{
	  			$this->set('isLogined',0);	
	  		}		
		} 
		
		
	}
	
	function logout() {
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		if(isset($_SESSION['username'])){
		    //$_SESSION
		    $_SESSION = array();
		    //cookie
		    if(isset($_COOKIE[session_name()])){
		        setcookie(session_name(),'',time()-3600);
		    }
		    session_destroy();
		}
		
		$home_url = '../afks/index';
		header('Location:'.$home_url);
	}
	
	function logon() {
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
	}
	
	function regcheck() {
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$VCODE = $_POST['VCODE'];
		if( $VCODE != $_SESSION['check']){
			$this->set('todo','Verification Code was wrong!');
			return;
		}
		$USERS = $_POST['USERS'];  
		$loginInfo = $this->User->query("SELECT username FROM users WHERE username = '".$USERS."'");
		if(count($loginInfo) > 0)
		{
			$this->set('todo','The username has been registered!');
			return;
		}
		
		
	  	$PASSWORD = $_POST['PASSWORD'];
	  	$SECUREQUESTION = $_POST['SECUREQUESTION'];
	  	$SECUREANSWER = $_POST['SECUREANSWER'];
	  	$strSQL = 'insert into users(username,password,secureQuestion,secureAnswer,status,regtime) 
	  		values(\''.$USERS.'\',\''.$PASSWORD.'\',\''.$SECUREQUESTION.'\',\''.$SECUREANSWER.'\',1,'.date("Ymd").')';
	  	$this->User->query($strSQL);
	  	$_SESSION['username'] = $USERS;
	  	$home_url = '../afks/Main';
		header('Location:'.$home_url);  	
	}
	
	function forgotpassword(){
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
	}
	
	function forgetpasswordcheck(){
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$USERS = $_POST['USERS'];
		$SECUREQUESTION = $_POST['SECUREQUESTION'];
		$SECUREANSWER = $_POST['SECUREANSWER'];
		$strSQL = "SELECT username FROM users WHERE username = '".$USERS."' and secureQuestion = '".$SECUREQUESTION."' and secureAnswer = '".$SECUREANSWER."'";
		$loginInfo = $this->User->query($strSQL);
		if(count($loginInfo) > 0)
		{
			$this->set('userCheck',1);
			$this->set('username',$USERS);
		}
		else
		{
			$this->set('userCheck',0);
		}
	}
	
	function updatepassword(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$USERS = $_POST['USERS'];
		$PASSWORD = $_POST['PASSWORD'];
		$strSQL = 'UPDATE users set password = \''.$PASSWORD.'\' where username = \''.$USERS.'\'';
		
		$this->User->query($strSQL);
		$_SESSION['username'] = $USERS;
	  	$home_url = '../afks/Main';
		header('Location:'.$home_url);
		$this->set('todo','The username has been registered!');  
	}
	
	function view($id = null,$name = null) {
	
		$this->set('title',$name.' - My Todo List App');
		$this->set('todo',$this->Item->select($id));

	}
	
	function logpage() {
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','Main.css');
		$this->set('TERM',$this->User->query('SELECT * FROM terms WHERE PAGENAME = "logpage"'));
	}

	// user pages
	function usershome(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}	
	
	function A(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
		
	function B(){
		session_start();

		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
	
	function C(){
		session_start();

		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
	
	function D(){
		session_start();

		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
		
	function E(){
		session_start();

		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
	
	function F(){
		session_start();
		$this->set('title','Welcome to AFK!');
		$this->set('cssfile','user.css');
	}
	
	
}
