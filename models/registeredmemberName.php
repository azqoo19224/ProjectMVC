<?php

class registeredmemberName
{
     function __construct()
      {
            config::setConnect();
      }
      
    function searchmember()
    {
        $searchMember ="select name,password from Member";
        $resultMember =  config::$mysqli->query($searchMember);
        $s="可以使用";
        
        while($resultem= mysqli_fetch_array($resultMember))
        {
            if($resultem['name'] == $_GET['txtmemberName'])
            {
                 $s = "帳號重複";
            }
        }
        return $s;
    }
}
