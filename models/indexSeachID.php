<?php

    
    class indexSeachID
    {
       function __construct()
      {
         config::setConnect();
      }
        
       function seachID()
       {
        unset($_SESSION['result']);
        $_SESSION["id"]=$_GET["ID"];
        $Mname=0;
        $m ="select name from Message where id = '{$_SESSION['id']}' and name ='{$_SESSION['UserName']}'";
        $searchMemberName=config::$mysqli->query($m);
        
        $Mname=mysqli_fetch_array($searchMemberName);
        $searchID ="select id,area, name, summary, address, tel, payex from Park where id = '{$_GET['ID']}'";
        $resultID = mysqli_fetch_array(config::$mysqli->query( $searchID));
        $IDarray=array("Mname"=>$Mname,"resultID"=>$resultID);
        $array=array("area"=>$IDarray['resultID']['area'],"name"=>$IDarray['resultID']['name'],"summary"=>$IDarray['resultID']['summary'],
            "address"=>$IDarray['resultID']["address"],"tel"=>$IDarray['resultID']["tel"],"payex"=>$IDarray['resultID']['payex'],"id"=>$IDarray['resultID']["id"],"o"=>$IDarray['Mname']);
            $result= json_encode($array,JSON_UNESCAPED_UNICODE);
        return $result;
    }
        
    }
       
 ?>


