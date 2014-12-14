<?php 
include('dbcon.php');


$id=$_GET['id'];

$logout_query=mysql_query("select User_id from users")or die(mysql_error());
$user_row=mysql_fetch_array($logout_query);
$user_name=$user_row['User_Type'];


$result=mysql_query("select * from student where id_stud='$id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$f=$row['Name'];



mysql_query("delete from student where id_stud='$id'")or die(mysql_error());
mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Delete Student', NOW(),'$user_name')")or die(mysql_error());



header('location:student.php');
?>