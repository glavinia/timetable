<?php 
include('dbcon.php');



if (isset($_POST['save'])){

$room_name=$_POST['room_name'];
$Description=$_POST['Description'];


$query=mysql_query("select * from room where room_name='$room_name' and description='$Description' ") or die(mysql_error());
$count=mysql_num_rows($query);

if ($count==1){
?>
<script type="text/javascript">
alert('Entry Already Exist');
window.location="add_room.php";
</script>
<?php 
}else{

mysql_query("insert into room (room_name,description)
VALUES('$room_name','$Description')")or die(mysql_error());




$logout_query=mysql_query("select User_id from users ");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add Entry Room','$room_name','$type')") or die(mysql_error());

header('location:room.php');
}
}
?>