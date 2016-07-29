//-----------------------------------AREA CHANGE----------------------
$(document).ready(initArea).ready(initTxtUse).ready(fristReady);
//---------------------------letterArea 搜尋地區 -------------------------------

function fristReady()
{

  $.ajax(
    {
	        type:"GET",
	        url:"index/SessionID",
	        dataType:"text",
	        error:function(Xhr)
	        {
	          alert("error");
	        },
	        success:function(data)
	        { 
	          if(data==0){ data=1;}
	          seachID(data);
	          seachmsg(data);
	        }
	   });
}
function initArea()
{

	Change();
	$("#Area").on("change",function()
	{
			Change()
	});

}
//--------------------------------------changetxt_搜尋名稱-----------------------------
function initTxtUse()
{
		      
	$("#txtUse").on("change",function()
	{
			Change()
	});

}
//--------------------------------------change_呼叫跟改資料---------------------------------
function Change()
{

	var s = $("#Area option:selected").val();
	var u = $("#txtUse").val();
	$.ajax(
	  {
		        type:"GET",
		        url:"index/letterArea?letter="+s+"&txtUse="+u,
		        dataType:"text",
		        error:function(Xhr)
		        {
		          alert("error");
		        },
		        success:function(data)
		        { 
		        	$("#content1").html(data);
		        }
	      });
}
//---------------------------------------顯示選取地點資料-------------------
function seachID(ID)
{
	    $.ajax(
	      {
	        type:"GET",
	        url:"index/seachID?ID="+ID,
	        dataType:"text",
	        error:function(Xhr)
	        {
	          alert("error");
	        },
	        success:function(json)
	        {
	          var obj=JSON.parse(json);
	          $("#pac-input").val(obj.name);
	          $("#nameid").text(obj.name);
	        
	          $("#area").text("地區: "+obj.area);
	          $("#summary").text("規格: "+obj.summary);
	          $("#tel").text("電話: "+obj.tel);
	          $("#address").text("地點: "+obj.address);
	          $("#payex").text("收費: "+obj.payex);
	          
	   
   	 		 if(obj.o==null)
				$("#Msg").text("我要評論")
			 else
				$("#Msg").text("我要修改評論");
	         }
	      });
	      
	 }
//---------------------------------------顯示評論-----------------------------	 
function seachmsg(ID)
{
	     
	       $.ajax(
	         {
	            type:"GET",
	            url:"index/seachmsg?ID="+ID,
	            dataType:"text",
	            error:function(Xhr)
  	        	{
  	        		alert("error");
  	        	},
  	        		success:function(json1)
  	        	{
  	        		$("#msg").html(json1);
  	        	}
  	         });
	     }
//---------------------------------------評論/隱藏 顯示---------------------------------
	function Show()
	{
    	$("#ShowM").toggle();
    };