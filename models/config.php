<?php

	class config{
		private $connect;
		private $dbhost = 'localhost',
	$dbuser = 'root',
	$dbpass = '',
	$dbname = 'data';
	
		function __construct()
		{
			$this->connect=mysql_connect ( $this->dbhost, $this->dbuser, $this->dbpass ) ;
        	$this->result = mysql_query ( "set names utf8", $this->connect );
			mysql_selectdb ( $this->dbname, $this->connect );}
			function get_connect()
			{
				return $this->connect;
			}
}


		
?>