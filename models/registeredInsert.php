<?php


class registeredInsert
{
   
     function __construct()
      {
            config::setConnect();
      }
    function insert_registered()
    {
        $insertMember ="INSERT INTO `Member` (name, password) VALUES ('{$_POST['txtmemberName']}','{$_POST['txtmemberPassword']}')";
         config::$mysqli->query($insertMember);
    }
    
}