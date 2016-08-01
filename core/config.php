<?php

	class config{
		  public static $mysqli,$db;
		  //public static function setConnect() {
				
				// $dbhost = 'localhost';
				// $dbuser = 'root';
				// $dbpass = '';
				// $dbname = 'data';
				
				// $mysqli=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
    //         	$mysqli->set_charset("utf8");
    //         	config::$mysqli=$mysqli;
				
				// $this->connect=mysql_connect ( $this->dbhost, $this->dbuser, $this->dbpass ) ;
         		// $this->result = mysql_query ( "set names utf8", $this->connect );
			 //   mysql_selectdb ( $this->dbname, $this->connect );
		  	 
		  //}
		  
		  public static function pdoConnect(){
            
            $config['db']['dsn']='mysql:host=localhost; dbname=data; charset=utf8';
            // 資料庫的帳號密碼 >>> 要依照你的資料做設定
            $config['db']['user'] = 'root';
            $config['db']['password'] = '';
            
            $db = new PDO(
                $config['db']['dsn'],
                $config['db']['user'],
                $config['db']['password'],
                    array(
                        PDO::ATTR_EMULATE_PREPARES=>false,
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                    )
                );
             config::$db=$db;
                
            }

	
	}


		
?>