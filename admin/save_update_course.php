<?php 
include('dbcon.php');
 

$get_id=$_POST['get_id'];
$Year=$_POST['Year'];
$Serie=$_POST['Serie'];
$Grup=$_POST['Grup'];
$Subject=$_POST['Subject'];
$Department=$_POST['Department'];


mysql_query("update course set year='$Year', serie='$Serie', grupa='$Grup',subject='$Subject',Department='$Department' where course_id='$get_id'")or die(mysql_error());



$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Course','$Year','$type')") or die(mysql_error());


header('location:course.php');
?>