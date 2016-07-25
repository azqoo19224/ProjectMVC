<?php
require_once ("config.php");

class loginSearchMember{
    
    private $db;
      function __construct()
      {
            $this->db=new config;
      }
      function searchMember(){
       $searchMember ="select name,password from Member where name ='{$_POST['txtUserName']}' and password ='{$_POST['txtPassword']}'";
       $resultMember = mysql_query ( $searchMember, $this->db->get_connect() );
       return $resultMember;
    }
    
}




?>