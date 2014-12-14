<?php 
include('dbcon.php');


$id_get=$_POST['id_get'];
$Title=$_POST['Title'];
$Person=$_POST['Person'];
$Department=$_POST['Department'];


mysql_query("update departmet set department='$Department',title='$Title',person_incharge='$Person' where department_id='$id_get'")or die(mysql_error());


$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Department','$Department','$type')") or die(mysql_error());
header('location:department.php');
?>