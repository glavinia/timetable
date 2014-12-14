<?php 
include('dbcon.php');


$Person=$_POST['Person'];
$Title=$_POST['Title'];
$Department=$_POST['Department'];


mysql_query("insert into departmet (person_incharge,title,department)
VALUES('$Person','$Title','$Department')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry Department','$Department','$type')") or die(mysql_error());
header('location:department.php');
?>