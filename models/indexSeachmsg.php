<?php 
    

class indexSeachmsg{
    
   function __construct()
      {
            // config::setConnect();
            config::pdoConnect();
      }

    function seachmsg()
    {
        $searchMsg ="SELECT `name`, `star`, `msg` FROM `Message` WHERE `id` = '{$_GET['ID']}'";
        $resultMsg = config::$db->query($searchMsg);
        $i=0;
        while($msg = $resultMsg->fetch(PDO::FETCH_ASSOC))
        {
               $array[$i]=array("name"=>$msg['name'],"star"=>$msg['star'],"msg"=>$msg['msg']);
               json_encode($array,JSON_UNESCAPED_UNICODE);
               $s .=$array[$i]["name"].":".$msg['msg']."<div id ='".$i."'></div> <script> $('#".$i."').raty({ readOnly: true, score: ".$array[$i]["star"]." });</script>";
             
               $i++;
        }


        return $s;
    }
}
?>