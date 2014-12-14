<?php 
include('dbcon.php');



$get_id=$_POST['get_id'];
$Name=$_POST['Name'];
$Year=$_POST['Year'];
$Seria=$_POST['Seria'];
$Grupa=$_POST['Grupa'];
$Email=$_POST['Email'];
$Tel=$_POST['Tel'];
$Department=$_POST['Department'];


mysql_query("update student set stud_name='$Name',stud_an='$Year',stud_serie='$Seria',stud_grup='$Grupa',stud_mail='$Email',stud_tel='$Tel',department='$Department'
 where id_stud='$get_id'")or die (mysql_error());


$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry Student','$Name','$type')") or die(mysql_error());



header('location:student.php');
?>