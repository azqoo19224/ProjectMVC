<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>停車場車位查詢系統</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

    <style type="text/css">
     
      #map-canvas {
          width: 800px;
          min-height: 800px;}
    </style>
    
  <!--星星-->
<link rel="stylesheet" href="stylesheet/jquery.raty.css">
<link rel="stylesheet" href="stylesheets/labs.css">
<script src="javascripts/jquery.js"></script><script src="javascripts/jquery.raty.js"></script>
<script src="javascripts/labs.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="jquery.js"></script>-->
<script type="text/javascript">
	  

//-----------------------------------AREA CHANGE----------------------
$(document).ready(initArea).ready(initTxtUse).ready(fristReady);
//---------------------------letterArea 搜尋地區 -------------------------------

function fristReady(){
  $.ajax({
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
function initArea() {

Change();

$("#Area").on("change",function(){
		Change()});

}
//--------------------------------------changetxt_搜尋名稱-----------------------------
function initTxtUse() {
	      
$("#txtUse").on("change",function(){
		Change()});

}
//--------------------------------------change_呼叫跟改資料---------------------------------
function Change() {

	var s = $("#Area option:selected").val();
	var u = $("#txtUse").val();
	$.ajax({
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
	    $.ajax({
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
	          
	   
	         if(obj.o=='0')
	         $("#Msg").text("我要評論")
	         else
	         $("#Msg").text("我要修改評論");
	         }
	      });
	      
	 }
//---------------------------------------顯示評論-----------------------------	 
function seachmsg(ID){
	     
	       $.ajax({
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
	function Show(){
  $("#ShowM").toggle();
 
};
	 
	 	</script>

	</head>

	<body>

<div id="wrap">

 
<header class="masthead">

  	<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/img/car88.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>停車場查詢系統</h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/img/tt.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>停車場查詢系統</h1>
              <p></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/img/t6.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h2>停車場查詢系統</h2>
              <p></p>
            </div>
          </div>
        </div>       
      </div><!-- /.carousel-inner -->
      <div class="logo"></div> 
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>  
    </div>
    <!-- /.carousel -->
  
</header>
  
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
           <li><a href="#section1">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Map <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#Place">place</a></li>
              <li><a href="#Map">Map</a></li>
            </ul>
            
          </li>
          
          <?php echo $data;?>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
          
<!-- Begin page content -->

<div class="divider" id="section1"  align="center">

<!----------------------   查詢條  --------------------------------    -->

      <select name="Area" id="Area" style ="font-family:DFKai-sb;color:#666666;font-size:20pt"  >
        
    　     <option value="區">區域</option>
        　<option value="信義" option:selected>信義區</option>
　        <option value="北投">北投區</option>
          <option value="大安">大安區</option>
          <option value="內湖">內湖區</option>
          <option value="文山">文山區</option>
          <option value="士林">士林區</option>
          <option value="大同">大同區</option>
          <option value="中山">中山區</option>
          <option value="南港">南港區</option>
          <option value="松山">松山區</option>
          <option value="中正">中正區</option>
          <option value="萬華">萬華區</option>
               
      </select>
         
    
      <input type="text" size="55" style="font-size:16pt" name="txtUse" id="txtUse"/>

</div>

<div class="container">
  <div id="content1" class="col-sm-10 col-sm-offset-1" style="overflow: scroll;height:500px;"></div>
    
     <div class="page-header text-center">
        <div class="divider"></div>
  </div>
</div>
    
<div class="divider"></div>
  
<section class="bg-3" id="Place">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Place</h2></div>
</section>

<!--------  場地詳細 --------------->
<div class="divider" id="section2"></div>
   
<div class="row">
  	<div class="col-sm-10 col-sm-offset-1">
 
    <h1><p id="nameid"></p></h1>

      <hr>
     <h4>
      <p id="area"></p>
	    <p id="tel"></p>
      <p id="address"></p> 
      <p id="payex"></p></p>  
      <p id="summary"></p> 
  
     </h4>
     <hr>
     
    <div>
          <div><h3>
              <A id="ShowMsg" taregt="_self"  href="#Place" onclick="Show()">評論</A>
              <A id="Msg" taregt="_self" href="login?message=1"></A>
              </h3>                              
          </div>
          <div id = "ShowM" data-theme="a" style = "display:none">
              <p id="msg"></p>
              <div id="score"></div>  
          </div>
    </div>
     
      <hr>
      
      <div class="divider"></div>
      
  	</div><!--/col-->
</div><!--/場地詳細-->


  
<section class="bg-3" id="Map">
  <div class="col-sm-6 col-sm-offset-3 text-center">
    <h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Map</h2></div>
</section>
  <div class="col-sm-10 col-sm-offset-1">

        <input id="pac-input" class="controls" type="text">
        <div id="map-canvas"></div>
        
  </div>   

</div><!--/row-->

</div><!--/wrap-->

		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	
		<!---------------------------------------star-------------------------------------------->
		<script>

  $.fn.raty.defaults.path = 'images';

</script>

		<!--//--------------------------------------------------------MAP----------------------------------->
		<script type="text/javascript">

      		
function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: {lat: 25.047853, lng: 121.522508},
    zoom: 13,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

 
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }


    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];


    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

   
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {

        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });

}

      
    </script>
    
		
		 <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwHm8ZEG7iU0_DttL1sul-eddqbuokVYk&libraries=places&callback=initAutocomplete" async defer></script>
    </script>
		
		   
		
	</body>
</html>

