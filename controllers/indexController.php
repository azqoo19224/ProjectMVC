<?php 
 session_start();

 
 class indexController extends Controller{
 
//*******************************************首頁*************************************************//
   function index(){
   unset($_SESSION["logi"]);
    if(!isset($_SESSION["UserName"])){
       $userName = "Guest";
       $userNmaeLogin ="<li><a href='login'>".$userName."_login</a></li>";
    
  }
  else{
    
      $userName = $_SESSION["UserName"];
      $userNmaeLogin ="<li><a href='login?logout=1'>".$userName."_logout</a></li>";
    
  }
  
  $this->view("index",$userNmaeLogin);
   }
 
   
//*****************************************地區*******************************************************//
   function letterArea()
   {
       $letterArea=$this->model("indexLetter");
       $resultID=$letterArea->letterArea();
        while($row=mysql_fetch_array($resultID))
        {
           $array=array("id"=>$row['id'],"area"=>$row['area'],$row['name']);
            $s .="<A id='".$row['id']." taregt='_self href='#Place' onclick='seachmsg(".$row['id'].");seachID(".$row['id'].")'> <h4> ".$row["area"]."___".$row['name']."</h4> </A>";
       }
      
    echo $s;
  
    }
    
    
    
//**********************************************seachID*********************************************//
 function seachID(){
            $seachID=$this->model("indexSeachID");
            $IDarray=$seachID->seachID();
     
            $array=array("area"=>$IDarray['resultID']['area'],"name"=>$IDarray['resultID']['name'],"summary"=>$IDarray['resultID']['summary'],
"address"=>$IDarray['resultID']["address"],"tel"=>$IDarray['resultID']["tel"],"payex"=>$IDarray['resultID']['payex'],"id"=>$IDarray['resultID']["id"],"o"=>$IDarray['Mname']);
// echo json_encode($resultID ,JSON_UNESCAPED_UNICODE);
echo json_encode($array,JSON_UNESCAPED_UNICODE);
            
            
 }
 
 //*********************************************SessionID*********************************************/
 function SessionID(){
            // $SessionID=$this->model("indexSessionID");
             echo $_SESSION['id'];
            
 }
 
 /**********************************************seachmsg*********************************************/
 function seachmsg(){
            $seachmsg=$this->model('indexSeachmsg');
            $Msgarray=$seachmsg->seachmsg();
            $i=0;
            
            while($msg = mysql_fetch_array($Msgarray['resultMsg'])){
             $array[$i]=array("name"=>$msg['name'],"star"=>$msg['star'],"msg"=>$msg['msg']);
             json_encode($array,JSON_UNESCAPED_UNICODE);
             $s =$array[$i]["name"].":".$msg['msg']."<div id ='".$i."'></div> <script> $('#".$i."').raty({ readOnly: true, score: ".$array[$i]["star"]." });</script>";
             echo $s;
             $i++;
             }
            
           }
           
           
           

}

?>