<?php
    require_once ("config.php");
    
    class indexSeachID{
        private $db;
        function __construct()
        {
            $this->db=new config;
        }
        
       function seachID(){
        unset($_SESSION['result']);
        $_SESSION["id"]=$_GET["ID"];
        $Mname=0;
        $m ="select name from Message where id = '{$_SESSION['id']}' and name ='{$_SESSION['UserName']}'";
        $searchMemberName=mysql_query ($m,$this->db->get_connect());
        
        $Mname=mysql_fetch_array($searchMemberName);
        $searchID ="select id,area, name, summary, address, tel, payex from Park where id = '{$_GET['ID']}'";
        $resultID = mysql_fetch_array(mysql_query ( $searchID, $this->db->get_connect()));
        $resultArray=array("Mname"=>$Mname,"resultID"=>$resultID);
        return $resultArray;
    }
        
    }
       
 ?>


