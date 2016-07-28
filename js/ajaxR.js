 
$(document).ready(inputTXT);
//---------------------------判斷帳號是否重複-------------------------------
function inputTXT()
{

$("#txtmemberName").on("change",function()
{

if(!$("#txtmemberName").val())
{
  $("#txtN").text("請輸入帳號密碼");
}else
{
  memberName();
}

});
}
	  function memberName()
	  {
	    var s = $("#txtmemberName").val();
	    $.ajax(
	      {
  	      type:"GET",
  	      url:"registered/searchmember?txtmemberName="+s,
  	      dataType:"text",
  	      error:function(Xhr){
  	        alert("error");
  	      },
  	      success:function(data)
  	      {
  	          $("#txtN").text(data);
  	      }
  	      
  	    });
	  }
	  
	  