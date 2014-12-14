<?php 
include('dbcon.php');



$Year=$_POST['Year'];
$Serie=$_POST['Serie'];
$Grup=$_POST['Grup'];
$Subject=$_POST['Subject'];
$Department=$_POST['Department'];


mysql_query("insert into course (year, serie, grupa, subject ,Department)
VALUES('$Year','$Serie','$Grup','$Subject','$Department')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry Course','$Year','$type')") or die(mysql_error());


header('location:course.php');
?>