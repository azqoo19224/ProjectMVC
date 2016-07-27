<?php
    require_once ("config.php");
    
    class indexLetter{
        private $db;
        function __construct()
        {
            $this->db=new config;
        }
        
        function letterArea(){
            // global $link;

            $searchletter ="select id, area, name, summary, address, tel, payex from Park 
            where area like '%{$_GET['letter']}%' and name like '%{$_GET['txtUse']}%'";
            $resultID= mysql_query ( $searchletter);
            return $resultID;
           
            
        }
        
    }

?>