<?php
require_once ("config.php");

class registeredmemberName
{
     function __construct()
      {
            new config;
      }
      
    function searchmember()
    {
        $searchMember ="select name,password from Member";
        $resultMember = mysql_query ( $searchMember);
        return $resultMember;
    }
}