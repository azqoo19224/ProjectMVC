<?php 
    
require_once ("config.php");
class indexSeachmsg{
    private $db;
    function __construct()
    {
        $this->db=new config;
    }
   

    function seachmsg()
    {
        $searchMsg ="select name,star,msg from Message where id = '{$_GET['ID']}'";
        $resultMsg = mysql_query ( $searchMsg);
        $i =0;
        $array=array("resultMsg"=>$resultMsg);
        return $array;
    }
}
?>