<?php

	class config{
		  public static $mysqli;
		  public static function setConnect() {
				
				$dbhost = 'localhost';
				$dbuser = 'root';
				$dbpass = '';
				$dbname = 'data';
				
				$mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 
                
            	$mysqli->set_charset("utf8");
            	config::$mysqli=$mysqli;
				
				// $this->connect=mysql_connect ( $this->dbhost, $this->dbuser, $this->dbpass ) ;
    //     		$this->result = mysql_query ( "set names utf8", $this->connect );
			 //   mysql_selectdb ( $this->dbname, $this->connect );
		  	 
		  }

	
	}


		
?>