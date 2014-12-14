<?php 
include('dbcon.php');
 


$Subject_Title=$_POST['Subject_Title'];
$Category=$_POST['Category'];
$Semester=$_POST['Semester'];
$Teacher=$_POST['Teacher'];



mysql_query("insert into subject (subject_title,subject_category,semester,teacher)
VALUES('$Subject_Title','$Category','$Semester','$Teacher')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry subject','$Subject_Title','$type')") or die(mysql_error());



header('location:subject.php');
?>