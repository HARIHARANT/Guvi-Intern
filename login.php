<?php
    include("config.php");
    ob_start();
    ?>

<!Doctype HTML>
<html>
     <head>
           <title>DataBank LogIn</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Damion|Fugaz+One" rel="stylesheet">
     </head>
	 <style>
	 body,html{
	    height:100%;
	 }
	 body{
	     background-image:url('Water.jpg');
		 background-repeat:no-repeat;
		 background-size:cover;
		 background-position:center;
		 height:100%;
	 }
	    #bdr{
		  position:absolute;
		  align:center;
		  height:450px;
		  width:350px;
		  margin:10% 35%;
		  padding:0px;
		  border-radius:20px;
		  background-color:rgba(0,0,0,.5);
		  margin-top:50px;
		}
		#t1{
		   background:transparent;
		   margin-top:10%;
		   height:35px;
		   width:250px;
		   margin-left:45px;
		   border-radius:5px;
		   border-left:transparent;
		   border-right:transparent;
		   text-align:center;
		   border-top:white;
		   font-size:15px;
		   
		}
		#t1:hover{
		    background-color:white;
		}
		#t2{
		   background:transparent;
		   margin-top:10%;
		   height:35px;
		   width:250px;
		   margin-left:45px;
		   border-radius:5px;
		   border-left:transparent;
		   border-right:transparent;
		   text-align:center;
		   border-top:white;
		    font-size:15px;
		}
		#t2:hover{
		    background-color:white;
		}
		#phto{
		    height:100px;
			margin-left:calc(240px/2);
		
		}
		#b1{
		   margin-top:10%;
		   margin-left:45px;
		   width:250px;
		   border-radius:15px;
		   font-weight:bold;
		   font-size:16px;
		}
		#fp{
		  color:white;
		  font-style:italic;
		  font-weight:bold;
		  margin-left:120px;
		  margin-top:20px;
		}
		#arrow{
		    margin-left:-200px;
			margin-bottom:10px;
			color:white;
		
		}
		#arrow:hover{
		    color:yellow;
		
		}
                .error{
		    color:yellow;
		}
                 #tophead{
                background-color:#FFFFFF;
                height:50px;
                width:100%;
                }
              #btn1{
                  width:150px;
                  margin-top:5px;
                  }
              #btn2{
                  width:150px;
                  float: right;
                   margin-top:5px;
                  }
	 
     
      </style>
     <body>
<header>
<div id="tophead">
                 <div id="buttonlink">
                     <a href="index.php"><button id="btn1" class="btn btn-danger"><span class="fa fa-home" aria-hidden="true"> Home</span> </button></a>
                     <a href="signup.php"><button id="btn2" class="btn btn-danger"><span class="fa fa-user-plus" aria-hidden="true"> SignUp</span></button></a>
                 </div>
</header>	
<form method="post" >
<br><br>
       <h3 align="center" style="color:white;font-family:'Damion', cursive;font-size:25px;">Login</h3>
           <div id="bdr" class="animated flip">
		        
		        <div id="sheet">
				    <img src="user.png" id="phto">
					<a href="signup.php"><i class="fa fa-arrow-circle-o-right fa-2x" title="Click here to SignUp" aria-hidden="true" id="arrow"></i></a>
					<br>
					<br>
					<br>
					<br>
                    <input  type="Email" placeholder="Enter User Name or Email Id" name="email"  size="28" id="t1"/>				   
                    <input type="Password" placeholder="  Enter Your Password" name="password" size="28" id="t2"/>
                    <button class="btn btn-danger" type="submit" name="submit" id="b1">LogIn</button>
          					
		        </div>
                		   
           </div>
</form>
<?php

if(isset($_POST["submit"])){
	$email=$_POST["email"];
	$pass=$_POST["password"];

	if($email!=""&&$pass!="")
	{
		$sql="SELECT email,password FROM signup WHERE email='$email' AND password='$pass'";
	    $result=$con->query($sql);
		if($result->num_rows==1)
		{
			echo "Success";
                        header("location:page3.php");
		}
		else
                  {
		echo"<p class='error'>Invalid Users or Password.</p>";
	          }
	    }
	  else{
		echo"<p class='error'>Please Enter All The Details</p>";
	      }
       } 
          else{
	//echo"<p> Please Fill The Details For Complete Access</p>";
              }
?>
     </body>
</html>