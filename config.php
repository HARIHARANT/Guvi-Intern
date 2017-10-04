<?php
//error_reporting(0);
$con=new mysqli("localhost","id3091309_guvi","guvi2017","id3091309_loginform");
//mysql_select_db('folder',$con)or die($error);
if($con->connect_error)
{
   echo $con->connect_error;
   die("Sorry Database Connection Failed");
}
else
{
    
}
?>