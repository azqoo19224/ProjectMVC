<?php
require_once ("config.php");

class registeredmemberName{
    private $db;
      function __construct()
      {
            $this->db=new config;
      }
      
    function searchmember(){
        $searchMember ="select name,password from Member";
        $resultMember = mysql_query ( $searchMember);
        return $resultMember;
    }
}