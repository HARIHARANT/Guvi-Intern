<?php
    include("config.php");
    ob_start();
?>

<!Doctype HTML>
<html>
     <head>
           <title>DataBank SignUp</title>
       
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
		#t3{
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
		#t2:hover{
		    background-color:white;
		}
		#t3:hover{
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
		  margin-left:100px;
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
     <div id="tophead">
                 <div id="buttonlink">
                     <a href="index.php"><button id="btn1" class="btn btn-danger"><span class="fa fa-home" aria-hidden="true"> Home</span></button></a>
                     <a href="login.php"><button id="btn2" class="btn btn-danger"><span class="fa fa-user-plus" aria-hidden="true"> SignIn</span></button></a>
                 </div>
     </div>
<h3 align="center" style="color:white;font-family:'Damion', cursive;font-size:25px;">SignUp</h3>
	 <form method="post"  >
           <div id="bdr" class="animated flip">
		        
		        <div id="sheet">
				    <img src="user.png" id="phto">
	<a href="login.php"><i class="fa fa-arrow-circle-o-left fa-2x" title="Click here to SignIn" aria-hidden="true" id="arrow"></i></a>

					<br><br>
					<br><br>
                    <input  type="text" placeholder="Enter Your Name"  size="28" name="name" id="t1"/>				   
                    <input  type="Email" placeholder="Enter Your Email"  size="28" name="email" id="t2"/>				   
                    <input type="Password" placeholder="  Enter Your Password" size="28" name="password" id="t3"/>
                    <button type="submit" class="btn btn-danger" name="submit" id="b1">Create Account</button>
          					
		        </div>
                		   
           </div>
	  </form>
         <?php

if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
if($name!=""&&$email!=""&&$pass!="")
{
	
		$sql="INSERT INTO signup(name,email,password)
		VALUES
		('$name','$email','$pass')";
		if($con->query($sql)){
		
		   echo "Member You Are Joined Successfully.Please Login Here.";
                   header("location:login.php");
		}
		else{
			echo "<p class='error'>Some Error Try Again Later.</p>";
		}
	
	
}
     else{
	    echo "<p class='error'>All Fields Are Required.</p>";
        }
}
     else{
	     echo "Please Fill All The Messages";
         }
?>	  
     </body>
</html>