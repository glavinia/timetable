<?php 
include('dbcon.php');



$Name=$_POST['Name'];
$Academic_Rank=$_POST['Academic_Rank'];

$Department=$_POST['Department'];


mysql_query("insert into teacher (Name,Academic_Rank,Department)
VALUES('$Name','$Academic_Rank','$Department')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry Teacher','$Name','$type')") or die(mysql_error());


header('location:teacher.php');
?>