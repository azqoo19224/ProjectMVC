<?php
require_once ("config.php");

class messageSearchinsert
{
    
    private  $insertMember;
    
      function __construct()
      {
            new config;
      }
      function seachinsert()
      {
                $searchMember="SELECT `NAME` FROM `Message` WHERE `id` = '{$_SESSION['id']}' and name ='{$_SESSION['UserName']}'";
                $this->haveM=mysql_fetch_array(mysql_query($searchMember));
                if($this->haveM != null)
                {
                    $this->insertMember ="UPDATE `Message` SET `msg` = '{$_POST['message']}' , `star` ='{$_POST['rdoPet']}' WHERE `name` = '{$_SESSION['UserName']}' and `id` ='{$_SESSION['id']}'";
                }
                else
                {
                    $this->insertMember ="INSERT INTO `Message` (id, msg, name, star) VALUES ('{$_SESSION['id']}','{$_POST['message']}','{$_SESSION['UserName']}','{$_POST['rdoPet']}')";
                }
                return  $this->haveM;
               

      }
      
      function insert(){
          mysql_query( $this->insertMember);
      }
}
 
    
              
          