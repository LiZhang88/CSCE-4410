<?php

class SQLQuery {
    protected $_dbHandle;
    protected $_result;

    //database

    function connect($address, $account, $pwd, $name) {
        $this->_dbHandle = @mysql_connect($address, $account, $pwd);
        if ($this->_dbHandle != 0) {
            if (mysql_select_db($name, $this->_dbHandle)) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else {
            return 0;
        }
    }
	

    function disconnect() {
        if (@mysql_close($this->_dbHandle) != 0) {
            return 1;
        }  else {
            return 0;
        }
    }
  
    function selectAll() {
    	$query = 'select * from `'.$this->_table.'`';
    	return $this->query($query);
    }
    
    function select($id) {
    	$query = 'select * from `'.$this->_table.'` where `id` = \''.mysql_real_escape_string($id).'\'';
    	return $this->query($query, 1);    
    }

	
	// Users SQL 
	function query($query, $singleResult = 0) {

		$this->_result = mysql_query($query, $this->_dbHandle);

		if (preg_match("/select/i",$query)) {
		$result = array();
		$table = array();
		$field = array();
		$tempResults = array();
		$numOfFields = mysql_num_fields($this->_result);
		for ($i = 0; $i < $numOfFields; ++$i) {
		    array_push($table,mysql_field_table($this->_result, $i));
		    array_push($field,mysql_field_name($this->_result, $i));
		}

		
			while ($row = mysql_fetch_row($this->_result)) {
				for ($i = 0;$i < $numOfFields; ++$i) {
					$table[$i] = ucfirst($table[$i]);
					$tempvalue = $table[$i];
					$table[$i] = ('s'==$tempvalue[strlen($tempvalue)-1])?(substr($tempvalue,0,strlen($tempvalue)-1)):$tempvalue;
					$tempResults[$table[$i]][$field[$i]] = $row[$i];
				}
				if ($singleResult == 1) {
		 			mysql_free_result($this->_result);
					return $tempResults;
				}
				array_push($result,$tempResults);
			}
			mysql_free_result($this->_result);
			return($result);
		}		
	}


    function getNumRows() {
        return mysql_num_rows($this->_result);
    }

	function freeResult() {
        mysql_free_result($this->_result);
    }

    function getError() {
        return mysql_error($this->_dbHandle);
    }
}

