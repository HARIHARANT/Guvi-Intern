<?php
    include("config.php");
?>

<!Doctype HTML>
<html>
     <head>
           <title>DataBank</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 
     </head>
	 <style>
	 body,html{
	    height:100%;
	 }
         #t1{
            margin-left:40px;
            width:90%;
            height:40px;
            }
         #t2{
            margin-left:40px;
            width:90%;
            height:40px;
            }
         #t3{
            margin-left:40px;
            width:90%;
            height:40px;
            }
         #t4{
            margin-left:40px;
            width:90%;
            height:200px;
            }
		#insert{
		          text-align:center;
                          width:100%;
		}
                #tophead{
                background-color:#FFFFFF;
                height:50px;
                width:100%;
                }
              #btn1{
                  width:150px;
                  margin-top:10px;
                  }
              #btn2{
                  width:150px;
                  float: right;
                   margin-top:10px;
                  }
              #dbdetails{
                  background:gray;
                 }
         </style>
		 <script>
		       $(document).ready(function(){
                                        $('#box1').hide();
				   $('#insert').click(function(){
                                      
				      $('#box1').slideToggle(1000);					   
				   });
                                   $('#box1').mouseover(function(){
                                             $('#box1').css('background','#64B5F6');
                                           });
                                    $('#box1').mouseout(function(){
                                             $('#box1').css('background','');
                                           });
			   });
		 </script>
     <body>
         <div id="tophead">
                 <div id="buttonlink">
                     <a href="index.php"><button id="btn1" class="btn btn-danger"><span class="fa fa-home" aria-hidden="true"> Home</span> </button></a>
                     <a href="login.php"><button id="btn2" class="btn btn-danger"><span class="fa fa-power-off " aria-hidden="true"> LogOut</span></button></a>
                 </div>
	 <form method="post" action="#" id="f1" >
	 <h3 id="insert" class=" btn btn-danger" title="click here to hide/show"><strong>Click here to add your data</strong></h3>
                  
	             <div id="box1" class="container-fluid well">
				<br>   
                    <span class="glyphicon glyphicon-user" id="user"></span>&nbsp;&nbsp;<strong>Enter Your Name</strong><br>  
                    <input  type="text" placeholder="Enter Your Name" name="name"  id="t1"/><br>
                    <span class="glyphicon glyphicon-envelope" id="user"></span>&nbsp;&nbsp;<strong>Enter Your Email Id</strong><br>				   
                    <input  type="Email" placeholder="Enter Your Email"  name="email"  id="t2"/><br>
                    <span class="glyphicon glyphicon-lock" id="user"></span>&nbsp;&nbsp;<strong>Enter Your Password</strong><br>				   
                    <input type="Password" placeholder="  Enter Your Password" name="password"  id="t3"/><br>
                    <span class="glyphicon glyphicon-hand-up" id="user"></span>&nbsp;&nbsp;<strong>Enter Your Notes</strong><br>
	            <textarea id="t4" name="comment" placeholder="Enter Your Notes"></textarea><br>
                    <button type="submit" class="btn btn-danger"  name="submit"  id="b1">Submit</button>
          	</div>
	  </form>


         <?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
$comment=$_POST["comment"];

if($name!=""&&$email!=""&&$pass!=""&&$comment!="")
{
	
		$sql="INSERT INTO login(name,email,password,comment)
		VALUES
		('$name','$email','$pass','$comment')";
		if($con->query($sql)){
		
		    echo "<br>Successfully Added.";
		}
		else{
			echo "<br><p class='error'>Some Error Try Again Later.</p>";
		}
	
	
}
     else{
	    echo "<br><p class='error'>All Fields Are Required.</p>";
        }
}
     else{
	    // echo "<br>Please Fill All The Messages";
         }
?>	
<?php
$sql = "SELECT name, email, password,comment FROM login";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["name"]. " <br> Email ID: ". $row["email"]. "<br>Password: " . $row["password"] . "<br>Comments: " . $row["comment"] . "<br>";
    }
} else {
    echo "No Records";
}

$con->close();

?>	    
     </body>
</html>