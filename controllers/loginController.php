<?php 
 session_start();

 
 class loginController extends Controller{
      function index()
      {
// 跳轉評論
            if(isset($_GET["message"]))
            {   $_SESSION['message']=$_GET['message'];
                if(isset($_SESSION['UserName']))
                {
                  header("Location: message");
                    exit();
                }
            }
///移除登出SESSION
            if (isset($_GET["logout"]))
            {  
                $_SESSION["UserName"]=null;
	            header("Location: index");
	            exit();
            }
      $this->view("login",$data);
   }
//送出資料
  function btnOK(){
      if(isset($_POST['btnOK'])){
            if(isset($_POST['txtUserName']) && isset($_POST['txtPassword'])){
             $searchMem=$this->model("loginSearchMember");
             $resultMember=$searchMem->searchMember();
             $resultem= mysql_fetch_array($resultMember);
                    if(isset($resultem['name'])){
  	                    $_SESSION["UserName"] = $_POST["txtUserName"];
                        if(isset($_SESSION['message']))
  	                    {
  	                        header("Location:../message");
  	                        exit();
  	                    }
  	                    else
  	                    {  
  	                        header("Location:../index");
  	  	  	                exit();
  	                    }
                    }
                  }
       }
  	                  header("Location:../login");
  	                  exit();
}
        

     
     
 }