<?php 
include('dbcon.php');



$get_id=$_POST['get_id'];
$Name=$_POST['Name'];
$Academic_Rank=$_POST['Academic_Rank'];

$Department=$_POST['Department'];


mysql_query("update teacher set Name='$Name',Academic_Rank='$Academic_Rank',Department='$Department'
 where teacher_id='$get_id'")or die (mysql_error());


$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Teacher','$Name','$type')") or die(mysql_error());


header('location:teacher.php');
?>