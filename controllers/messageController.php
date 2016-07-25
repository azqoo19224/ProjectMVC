<?php 
 session_start();
 class messageController extends Controller{
function index(){

unset($_SESSION['result']);
unset($_SESSION['message']);

        $Message=$this->model("messageSearchinsert");
        $get_Message=$Message->seachinsert();
        

    $name=($get_Message!=null)? "修改評論": "評論"; 

    if(isset($_POST["btnOK"])){
	
	    
	    $Message->insert();
	    
	
	    header("Location: index");

        exit(); 

}
    $data =$name;
    
    $this->view("message",$data);
}
     
     
     
     
 }
?>
        