<?php


class registeredInsert
{
   
     function __construct()
      {
            // config::setConnect();
            config::pdoConnect();
      }
    function insert_registered()
    {
        $insertMember ="INSERT INTO `Member` (name, password) VALUES ('{$_POST['txtmemberName']}','{$_POST['txtmemberPassword']}')";
         config::$db->query($insertMember);
    }
    
}