<?php 
include('dbcon.php');


$get_id=$_POST['get_id'];
$room_name=$_POST['room_name'];
$Description=$_POST['Description'];


mysql_query("update room set room_name='$room_name',description='$Description' where room_id='$get_id'")or die(mysql_error());


$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Room','$room_name','$type')") or die(mysql_error());

header('location:room.php');
?>