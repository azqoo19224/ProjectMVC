<?php
require_once ("config.php");

class loginSearchMember{
    
  
      function __construct()
      {
            new config;
      }
      function searchMember(){
       $searchMember ="select name,password from Member where name ='{$_POST['txtUserName']}' and password ='{$_POST['txtPassword']}'";
       $resultMember = mysql_query ( $searchMember);
       return $resultMember;
    }
    
}




?>