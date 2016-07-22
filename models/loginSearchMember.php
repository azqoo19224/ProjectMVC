<?php
require_once ("config.php");

class loginSearchMember{
    
    private $db;
      function __construct()
      {
            $this->db=new config;
      }
      function searchMember(){
       $searchMember ="select name,password from Member";
       $resultMember = mysql_query ( $searchMember, $this->db->get_connect() );
       return $resultMember;
    }
    
}




?>