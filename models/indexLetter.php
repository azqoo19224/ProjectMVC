<?php
    require_once ("config.php");
    
    class indexLetter
    {
        function __construct()
        {
            new config;
        }
        function letterArea()
        {
            $searchletter ="select id, area, name, summary, address, tel, payex from Park 
            where area like '%{$_GET['letter']}%' and name like '%{$_GET['txtUse']}%'";
            $resultID= mysql_query ( $searchletter);
            return $resultID;
        }
        
    }

?>