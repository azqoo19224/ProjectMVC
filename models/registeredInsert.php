<?php
require_once ("config.php");

class registeredContrller{
    private $db;
      function __construct()
      {
            $this->db=new config;
      }
    function registered(){
        
        $insertMember ="INSERT INTO `Member` (name, password) VALUES ('{$_POST['txtmemberName']}','{$_POST['txtmemberPassword']}')";
        mysql_query ($insertMember, $this->db->get_connect() );

        
    }
    
}