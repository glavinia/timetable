<?php 
include('dbcon.php');



$Name=$_POST['Name'];
$Year=$_POST['Year'];
$Seria=$_POST['Seria'];
$Grupa=$_POST['Grupa'];
$Email=$_POST['Email'];
$Tel=$_POST['Tel'];
$Department=$_POST['Department'];


mysql_query("insert into student (stud_name,stud_an, stud_serie, stud_grup, stud_mail, stud_tel, department)
VALUES('$Name','$Year','$Seria','$Grupa','$Email','$Tel','$Department')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry Student','$Name','$type')") or die(mysql_error());


header('location:student.php');
?>