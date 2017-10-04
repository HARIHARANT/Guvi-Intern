<?php
    include("config.php");
    
	
?>
<!DOCTYPE html>
<html>
<head>
<title>DataBank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Damion|Fugaz+One|Germania+One" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
</head>

<style>
#myCarousel{
margin-top:50px;
}
.img-wrapper {
    display: inline-block;
    overflow: hidden;
}

.img-wrapper img {
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    -ms-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
    vertical-align: middle;
}

.img-wrapper img:hover {
    transform:scale(1.2);
    -ms-transform:scale(1.2); /* IE 9 */
    -moz-transform:scale(1.2); /* Firefox */
    -webkit-transform:scale(1.2); /* Safari and Chrome */
    -o-transform:scale(1.2); /* Opera */
}
#headpart{
	background-color:#FAFAFA;
}
#alink:hover{
	color:black;
}
#box1{
	background-color:white;
	height:700px;
}
#storage{
	color:white;
	font-size:30px;
	padding-top:70px;
}
#box2{
	background-color:#E91E63;
	height:700px;
}
#text1{
color:white;
font-family: 'Lemon', cursive;;
font-size:25px;
}
#storage2{
	color:white;
	font-size:30px;
	padding-top:70px;
}
#box3{
	background-color:rgba(0,0,0,.8);
	height:400px;
}
#storage3{
	color:white;
	font-size:30px;
	padding-top:70px;
}
#space1{
	height:100px;
}
#photo1{
	margin-top:30px;
	border-radius:50%;
}
#ib{
	background-color:black;
}
li{
list-style-type:none;
display:inline;
}
#gitup{
    background:white;
    height:400px;
    
}
#downloadbtn{
    margin-left:30%;
    width:300px;
    height:50px;
}
</style>
<body style="background-color:#E0E0E0">
<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
   <div id="headpart" class="container-fluid">
       <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                 <span id="ib" class="icon-bar"></span>
				 <span id="ib" class="icon-bar"></span>
				 <span id="ib" class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="index.php" id="alink">DataBank</a>
    </div>
       <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li class="active" id="alink"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
               <li><a href="login.php" id="alink"><i class="glyphicon glyphicon-briefcase"></i> Login</a></li>
               <li><a href="signup.php" id="alink" ><i class="glyphicon glyphicon-list"></i> SignUp</a></li>
               
            </ul>
        </div>
    </div>
</nav>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" width="100%">
    <!-- Indicators -->
    <ol class="carousel-indicators">

      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <div>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        
		<img src="6.gif" alt="Los Angeles" style="width:100%;height:70%">
		
      </div>

      <div class="item">
        <img src="5.jpg" alt="Chicago" style="width:100%;height:70%">
      </div>
	   <div class="item">
        <img src="1.png" alt="Chicago" style="width:100%;height:70%">
      </div>
	  <div class="item">
        <img src="3.jpg" alt="Chicago" style="width:100%;height:70%">
      </div>
   </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    </div>
	</div>
</div>

    <br>

	<form>
	<div id="box1" class="jumbotron col-md-4 col-xs-12">
	<marquee behavior="alternate" id="marqueeitem">

     <img id="photo1"  src="7.gif" width="150px" height="120px">
    <p style="font-family: 'Germania One', cursive;">Unlimited Storage</p>
     <img id="photo1" src="8.gif"  width="150px" height="120px">   
   <p  style="font-family: 'Germania One', cursive;margin-right:40px;">Very Fast Data Handling</p>
 <img id="photo1" src="9.gif"  width="150px" height="120px">   
   <p style="font-family: 'Germania One', cursive;">Safe and Secure</p>
</marquee>
</div>
</form>
<div id="box2" class="jumbotron col-md-8 col-xs-12">
<img src="thankyou.png" width="100%" id="tphoto">
<h3 id="text1" align="center">For Visiting Here</h3>
</div>
<div id="gitup" class=" col-md-3  col-xs-12" >
    
    <img id="photo1" style="margin-top:30%;margin-left:20px" src="gitup.png" width="250px" height="220px">
    <h3 align="center">Gitup Link</h3>
    
</div>
<div id="gitup" class=" col-md-9  col-xs-12" >
    
    <i style="margin-top:10%;margin-left:40%;color:#00E676;" class="fa fa-cloud-download fa-5x " aria-hidden="true" ></i>
    <h1 align="center">If you want this site codes just click "Download Button"</h1><br><br>
    <a href=""><button class="btn btn-success" id="downloadbtn">Download</button></a>
</div>
</body>
</html>