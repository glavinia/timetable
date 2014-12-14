<?php 
include('dbcon.php');


if (isset($_POST['save'])){

$id_get=$_POST['id_get'];
$Subject_Title=$_POST['Subject_Title'];
$Category=$_POST['Category'];
$Semester=$_POST['Semester'];
$Teacher=$_POST['Teacher'];


mysql_query("update subject set subject_title='$Subject_Title',subject_category='$Category',semester='$Semester',
teacher='$Teacher'

 where subject_id='$id_get'")or die(mysql_error());



$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Entry subject','$Subject_Title','$type')") or die(mysql_error());


header('location:subject.php');

}
?>