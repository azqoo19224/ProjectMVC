<?php
require_once ("config.php");

class registeredInsert
{
   
     function __construct()
      {
            new config;
      }
    function insert_registered()
    {
        $insertMember ="INSERT INTO `Member` (name, password) VALUES ('{$_POST['txtmemberName']}','{$_POST['txtmemberPassword']}')";
        mysql_query ($insertMember);
    }
    
}