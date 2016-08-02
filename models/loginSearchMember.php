<?php


class loginSearchMember{
    
  
      function __construct()
      {
            // config::setConnect();
            config::pdoConnect();
      }
      function searchMember(){
       $searchMember ="SELECT `name`, `password` FROM `Member` WHERE `name` ='{$_POST['txtUserName']}' and password ='{$_POST['txtPassword']}'";
       $resultMember = config::$db->query( $searchMember);
       $result = $resultMember->fetch(PDO::FETCH_ASSOC);
       return $result;
    }
    
}




?>