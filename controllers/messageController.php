<?php 
 session_start();
 class messageController extends Controller{
function index(){
unset($_SESSION["logi"]);
unset($_SESSION['result']);
        
// $searchMember="select name from Message where id = '{$_SESSION['id']}' and name ='{$_SESSION['UserName']}'";
// $haveM=mysql_fetch_array(mysql_query($searchMember,$link));
        $haveM=$this->model("messageSearchinsert");
        $have=$haveM->seachinsert();
        

    $name=($have!=null)? "修改評論": "評論"; 

    if(isset($_POST["btnOK"])){
	
	    
	    $haveM->insert();
	    
	
	    header("Location: index");

        exit(); 

}
    
    $this->view("message");
}
     
     
     
     
 }
?>