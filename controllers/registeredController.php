<?php 
 session_start();
 class registeredController extends Controller{
 
     function index(){
   

    if (isset($_POST["btnROK"]))
    {
        $registered=$this->model("registeredInsere");
        //$model=User
        // $registered=new User ;
        $registered->registered();
		      header("Location: login");
		      exit();

        }
         
         
    
    $this->view("registered");
     } 
     
     function searchmember(){
      $resultMember=$this->model("registeredmemberName");
      $resultMem=$resultMember->searchmember();
      
      

      $s="可以使用";


      while($resultem= mysql_fetch_array($resultMem)){
      if($resultem['name'] == $_GET['txtmemberName']){
      $s = "帳號重複";
   }
}

echo $s;
      
      
      
      
     }
     
 }