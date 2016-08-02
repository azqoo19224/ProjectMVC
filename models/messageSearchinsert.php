<?php


class messageSearchinsert
{
    
    private  $insertMember;
    
      function __construct()
      {
        //   config::setConnect();
           config::pdoConnect();
      }
      function seachinsert()
      {
                $searchMember="SELECT `NAME` FROM `Message` WHERE `id` = '{$_SESSION['id']}' AND `name` ='{$_SESSION['UserName']}'";
                $Member =config::$db->query($searchMember);
                $this->haveM=$Member->fetch(PDO::FETCH_ASSOC);
                $name=($this->haveM !=null)? "修改評論": "評論";
                if($this->haveM != null)
                {
                    $this->insertMember ="UPDATE `Message` SET `msg` = '{$_POST['message']}' , `star` ='{$_POST['rdoPet']}' WHERE `name` = '{$_SESSION['UserName']}' AND `id` ='{$_SESSION['id']}'";
                }
                else
                {
                    $this->insertMember ="INSERT INTO `Message` (`id`, `msg`, `name`, `star`) VALUES ('{$_SESSION['id']}','{$_POST['message']}','{$_SESSION['UserName']}','{$_POST['rdoPet']}')";
                }
                return  $name;
               

      }
      
      function insert(){
           config::$db->query( $this->insertMember);
      }
}
 
    
              
          