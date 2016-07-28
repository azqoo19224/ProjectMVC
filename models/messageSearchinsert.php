<?php


class messageSearchinsert
{
    
    private  $insertMember;
    
      function __construct()
      {
           config::setConnect();
      }
      function seachinsert()
      {
                $searchMember="SELECT `NAME` FROM `Message` WHERE `id` = '{$_SESSION['id']}' and name ='{$_SESSION['UserName']}'";
                $this->haveM=mysqli_fetch_array( config::$mysqli->query($searchMember));
                $name=($this->haveM !=null)? "修改評論": "評論";
                if($this->haveM != null)
                {
                    $this->insertMember ="UPDATE `Message` SET `msg` = '{$_POST['message']}' , `star` ='{$_POST['rdoPet']}' WHERE `name` = '{$_SESSION['UserName']}' and `id` ='{$_SESSION['id']}'";
                }
                else
                {
                    $this->insertMember ="INSERT INTO `Message` (id, msg, name, star) VALUES ('{$_SESSION['id']}','{$_POST['message']}','{$_SESSION['UserName']}','{$_POST['rdoPet']}')";
                }
                return  $name;
               

      }
      
      function insert(){
           config::$mysqli->query( $this->insertMember);
      }
}
 
    
              
          