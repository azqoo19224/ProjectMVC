<?php
   
    
    class indexLetter
    {
        function __construct()
        {
            config::setConnect();
        }
        function letterArea()
        {
            $searchletter ="select id, area, name, summary, address, tel, payex from Park 
            where area like '%{$_GET['letter']}%' and name like '%{$_GET['txtUse']}%'";
            $resultID= config::$mysqli->query( $searchletter);
            
            
            
             while($row=mysqli_fetch_array($resultID))
            {
                $array=array("id"=>$row['id'],"area"=>$row['area'],$row['name']);
                $s .="<A id='".$row['id']." taregt='_self href='#Place' onclick='seachmsg(".$row['id'].");seachID(".$row['id'].")'> <h4> ".$row["area"]."___".$row['name']."</h4> </A>";
            }
            
            
            
            return $s;
        }
        
    }

?>