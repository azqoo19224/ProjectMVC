<?php 
 session_start();

 
 class loginController extends Controller{
      
     
      function index()
      {
            
            $searchMem=$this->model("loginSearchMember");
            $resultMember=$searchMem->searchMember();
           
           

// 跳轉評論
            if(isset($_GET["message"]))
            {
                if(isset($_SESSION['UserName']))
                {
                  header("Location: message");
                    exit();
                    }
             $_SESSION["logi"]=$_GET["message"];
             $Lurl ="onclick=\"location.href='message'\"";
             }else
             {
                    $Lurl ="onclick=\"location.href='index'\"";
             }

 
 

///移除登出SESSION
            if (isset($_GET["logout"]))
            {  
                $_SESSION["UserName"]=null;
	            header("Location: index");
	            exit();
            }
    


////btnOK
            if (isset($_POST["btnOK"]))
            {
                while($resultem= mysql_fetch_array($resultMember)){
                    if($_POST['txtUserName']!=0 && $_POST['txtPassword']!=0 ){
                    if($resultem['name'] == $_POST['txtUserName'] && $resultem['password'] == $_POST['txtPassword'])
                    {
  	                    $_SESSION["UserName"] = $_POST["txtUserName"];
                        if(isset($_SESSION["logi"]))
  	                    {
  	                        header("Location: message");
  	                        exit();
  	                    }
  	                    else
  	                    {  
  	                    header("Location: message");
  	  	  	            exit();
  	                    }
                    }
                }
            }
  	                 // header("Location: login.php");
  	                 // exit();
  	
        }
      
  

          
          
  
  
      $this->view("login",$Lurl);
   }
     
     
 }