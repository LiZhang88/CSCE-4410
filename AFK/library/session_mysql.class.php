<?php
class session {
	var $lifetime = 1800;
	var $op = '';
	var $sess;
	var $table;
	
	function __construct($op = '') {
		$this->op = $op;
		session_set_save_handler ( array (&$this, 'open' ), array (&$this, 'close' ), array (&$this, 'read' ), array (&$this, 'write' ), array (&$this, 'destroy' ), array (&$this, 'gc' ) );
		$this->debug ( 'session_id:' . $_COOKIE [session_name ()] );
		ini_set ( 'session.cookie_domain', '.chf.com' );
		session_start ();
	}
	
	function debug($str) {
		$file = dirname ( __FILE__ ) . '/session.log';
		$content = date ( "Y-m-d H:i:s" ) . ' operate:' . $this->op . ' ' . $str . "\n";
		$fp = @fopen ( $file, "ab" );
		if (! $fp)
			die ( "Open file $file failed!" );
		@fwrite ( $fp, $content );
		if ($fp)
			@fclose ( $fp );
	}
	
	function session() {
		$this->__construct ();
	}
	
	function open($save_path, $session_name) {
		$this->debug ( 'opening...' );
		global $db;
		$this->lifetime = 20; //session life
		$this->time = time ();
		$this->sess = &$db;
		$this->pre = '';
		return true;
	}
	

	function close() {
		return $this->gc($this->lifetime);
	}

	function read($id) {
		$this->debug ( 'reading...' );
		$sql = "SELECT data FROM `{$this->pre}sessions` WHERE sessionid='$id'";
		$r = $this->sess->get_one ( $sql );
		$this->debug ( "sql:$sql" );
		return $r ? $r ['data'] : '';
	}
	
	function write($id, $sess_data) {
		$this->debug ( 'writing...' );
		$sql = "REPLACE INTO `{$this->pre}sessions` (sessionid, data, lastvisit) VALUES('$id', '" . addslashes ( $sess_data ) . "', '" . time () . "')";
		$this->sess->query ( $sql );
		$this->debug ( "sql:$sql" );
		return true;
	}
	
	function destroy($id) {
		$this->debug ( 'destroying...' );
		$sql = "DELETE FROM `{$this->pre}sessions` WHERE sessionid='$id'";
		$this->sess->query ( $sql );
		$this->debug ( "sql:$sql" );
		return true;
	}
	
	function gc($maxlifetime) {
		$this->debug ( "gcing...\n" );
		$expiretime = $this->time - $maxlifetime;
		$sql = "DELETE FROM `{$this->pre}sessions` WHERE lastvisit<$expiretime";
		$this->sess->query ( $sql );
		$this->debug ( "sql:$sql" );
		return true;
	}
}

?>
