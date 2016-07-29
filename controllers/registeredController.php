<?php 
 session_start();
 class registeredController extends Controller
 {
 
    function index()
    {
   
        unset($_SESSION['message']);
        $this->view("registered",$data);
    } 
        
    function searchmember()
    {
        $resultMember=$this->model("registeredmemberName");
        $data=$resultMember->searchmember();
        $this->view("ajax",$data);
    }
     

 
     function btnOK(){
        if (isset($_POST["btnROK"]))
        {
            
            $registered=$this->model("registeredInsert");
            $registered->insert_registered();
    		header("Location:../login");
    		exit();
    
        }
     }
 }