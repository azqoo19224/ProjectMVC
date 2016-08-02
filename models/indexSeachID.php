<?php

    
    class indexSeachID
    {
       function __construct()
      {
        //  config::setConnect();
         config::pdoConnect();
      }
        
       function seachID()
       {
        unset($_SESSION['result']);
        $_SESSION["id"]=$_GET["ID"];
        
        $Mname=0;
        $m ="SELECT `name` FROM `Message` WHERE `id` = '{$_SESSION['id']}' AND `name` ='{$_SESSION['UserName']}'";
        $searchMemberName=config::$db->query($m);
        $Mname=$searchMemberName->fetch(PDO::FETCH_ASSOC);
        
        $ID ="SELECT `id`,`area`, `name`, `summary`, `address`, `tel`, `payex` FROM `Park` WHERE `id` = '{$_GET['ID']}'";
        $searchID=config::$db->query($ID);
        $resultID =$searchID->fetch(PDO::FETCH_ASSOC);
        
        $IDarray=array("Mname"=>$Mname,"resultID"=>$resultID);
        $array=array("area"=>$IDarray['resultID']['area'],"name"=>$IDarray['resultID']['name'],"summary"=>$IDarray['resultID']['summary'],
            "address"=>$IDarray['resultID']["address"],"tel"=>$IDarray['resultID']["tel"],"payex"=>$IDarray['resultID']['payex'],"id"=>$IDarray['resultID']["id"],"o"=>$IDarray['Mname']);
            $result= json_encode($array,JSON_UNESCAPED_UNICODE);
        return $result;
    }
        
    }
       
 ?>


