<?php 
 session_start();

 
 class indexController extends Controller
 {
 
//*******************************************首頁*************************************************//
   function index()
   {
  
    if(!isset($_SESSION["UserName"]))
    {
       $userName = "Guest";
       $userNmaeLogin ="<li><a href='login'>".$userName."_login</a></li>";
    }
    else
    {
      $userName = $_SESSION["UserName"];
      $userNmaeLogin ="<li><a href='login?logout=1'>".$userName."_logout</a></li>";
    }
    
     $this->view("index",$userNmaeLogin);
   }
 
   
//*****************************************地區*******************************************************//
 function letterArea()
 {
        $letterArea=$this->model("indexLetter");
        $s=$letterArea->letterArea();
       
        $this -> view("ajax",$s);
  
    }

//**********************************************seachID*********************************************//
 function seachID()
 {
            $seachID=$this->model("indexSeachID");
            $result=$seachID->seachID();
            $this -> view("ajax",$result);
 }
 
 //*********************************************SessionID*********************************************/
 function SessionID()
 {
          $this -> view("ajax",$_SESSION['id']);
             
 }
 /**********************************************seachmsg*********************************************/
 function seachmsg()
 {
            $seachmsg=$this->model('indexSeachmsg');
            $Msgarray=$seachmsg->seachmsg();
            $i=0;
            $this -> view("ajax",$Msgarray);
          
            
           }
           
           
           

}

?>