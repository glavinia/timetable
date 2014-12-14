<?php 
include('dbcon.php');


$id_get=$_POST['id_get'];
$UserName=$_POST['UserName'];
$Password=$_POST['Password'];
$User_Type=$_POST['User_Type'];
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];



mysql_query("update users set UserName='$UserName',Password='$Password',User_Type='$User_Type',FirstName='$FirstName',LastName='$LastName' where User_id='$id_get'")or die(mysql_error());


$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update User','$FirstName&nbsp;$LastName','$type')") or die(mysql_error());

header('location:user_account.php');
?>