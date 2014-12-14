<?php 
include('dbcon.php');


$Monday=$_POST['Monday'];
$Tuesday=$_POST['Tuesday'];
$Wednesday=$_POST['Wednesday'];
$Thursday=$_POST['Thursday'];
$Friday=$_POST['Friday'];
$Saturday=$_POST['Saturday'];
$Sunday=$_POST['Sunday'];

if (isset($_POST['save'])){


$id_get=$_POST['id_get'];
$day=$Monday." ".$Tuesday." ".$Wednesday." ".$Thursday." ".$Friday." ".$Saturday." ".$Sunday;
$time_start=$_POST['time_start'];
$time_end=$_POST['time_end'];
$semester=$_POST['semester'];
$year=$_POST['year'];
$serie=$_POST['serie'];
$grupa=$_POST['grupa'];
$department=$_POST['department'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$room=$_POST['room'];
$nr=$_POST['nr'];




mysql_query("update schedule set semester='$semester',year='$year',serie='$serie',grupa='$grupa',department='$department',subject='$subject',teacher='$teacher',room='$room',day='$day',nr='$nr',time='$time_start',time_end='$time_end' where schedule_id='$id_get'")or die(mysql_error());


$logout_query=mysql_query("select User_id from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Schedule','$time_start&nbsp;$time_end','$type')") or die(mysql_error());
header('location:schedule.php');
}


?>