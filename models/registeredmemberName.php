<?php

class registeredmemberName
{
     function __construct()
      {
            // config::setConnect();
            config::pdoConnect();
      }
      
    function searchmember()
    {
        $searchMember ="select name,password from Member";
        $resultMember =  config::$db->query($searchMember);
        $s="可以使用";
        
        while($resultem=$resultMember->fetch(PDO::FETCH_ASSOC))
        {
            if($resultem['name'] == $_GET['txtmemberName'])
            {
                 $s = "帳號重複";
            }
        }
        return $s;
    }
}
