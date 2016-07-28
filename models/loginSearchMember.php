<?php


class loginSearchMember{
    
  
      function __construct()
      {
            config::setConnect();
      }
      function searchMember(){
       $searchMember ="select name,password from Member where name ='{$_POST['txtUserName']}' and password ='{$_POST['txtPassword']}'";
       $resultMember = config::$mysqli->query( $searchMember);
       return $resultMember;
    }
    
}




?>