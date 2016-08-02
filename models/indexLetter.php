<?php
   
    
    class indexLetter
    {
        function __construct()
        {
            config::pdoConnect();
            // config::setConnect();
        }
        function letterArea()
        {
            $searchletter ="SELECT `id`, `area`, `name`, `summary`, `address`, `tel`, `payex` FROM `Park` 
            WHERE `area` LIKE '%{$_GET['letter']}%' AND `name` LIKE '%{$_GET['txtUse']}%'";
            $resultID= config::$db->query( $searchletter);
            
            
            
             while($row=$resultID->fetch(PDO::FETCH_ASSOC))
            {
                $array=array("id"=>$row['id'],"area"=>$row['area'],$row['name']);
                $s .="<A id='".$row['id']." taregt='_self href='#Place' onclick='seachmsg(".$row['id'].");seachID(".$row['id'].")'> <h4> ".$row["area"]."___".$row['name']."</h4> </A>";
            }
            return $s;
        }
        
    }

?>