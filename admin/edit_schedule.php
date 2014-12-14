<?php include('header.php');  include('dbcon.php');
$id_get=$_GET['id'];
 ?>
<body>
<?php include('nav-top1.php'); ?>
     
<div class="wrapper">



	

<div class="row-fluid">


<h2>Edit Schedule</h2>
	<a class="btn btn-primary"  href="schedule.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<div class="edit_margin">
<form id="save_voter" class="form-horizontal1" method="POST" action="update_schedule.php">	
    <fieldset>
	</br>
	
    <li class="span6">

    <?php 
	$result=mysql_query("select * from schedule where schedule_id='$id_get'")or die(mysql_error());
	$row=mysql_fetch_array($result);
	
	?>
	<input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get;?>">
		
		
		<div class="control-group">
		<label class="control-label" for="input01">Day:</label>

    <div class="controls">
	<br>
    <div class="span3">
	<div class="day_margin">
	Monday:
	<br>
	Tuesday:
	<br>
	Wednesday:
	<br>
	Thursday:
	<br>
	Friday:
	<br>
	Saturday:

	</div>
    </div>
    <div class="span3">
	<div class="radio_day">
<input type="checkbox" value="Monday" name="Monday" id="day">
<br>
<input type="checkbox" value="Tuesday" name="Tuesday" id="day">
<br>
<input type="checkbox" value="Wednesday" name="Wednesday" id="day">
<br>
<input type="checkbox" value="Thursday" name="Thursday" id="day">
<br>
<input type="checkbox" value="Friday" name="Friday" id="day">
<br>
<input type="checkbox" value="Saturday" name="Saturday" id="day">

	</div>
	</div>
    </div>
    </div>
	<div class="clear"></div>
		<div class="control-group">
    <label class="control-label" for="input01">Time Start:</label>
    <div class="controls">
   <select name="time_start" class="span3333" id="time_start">
	<option><?php echo $row['time']; ?></option>
	<?php $time_query=mysql_query("select * from time_start")or die(mysql_error());
while($time_row=mysql_fetch_array($time_query)){
	?>
	<option><?php echo $time_row['time']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
			<div class="control-group">
    <label class="control-label" for="input01">Time End:</label>
    <div class="controls">
   <select name="time_end" id="time_end" class="span3333">
	<option><?php echo $row['time_end']; ?></option>
	<?php $time_end_query=mysql_query("select * from time_end")or die(mysql_error());
while($time_end_row=mysql_fetch_array($time_end_query)){
	?>
	<option><?php echo $time_end_row['time_end']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	

		
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="semester" class="span3333" id="semester">
	<option>--Select--</option>
	<option>1</option>
	<option>2</option>

	</select>
    </div>
    </div>
	
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Year:</label>
    <div class="controls">
   <select name="year" class="span3333" id="year">
	<option>--Select--</option>
	<option>1</option>
	<option>2</option>
    <option>3</option>
	</select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="input01">Serie:</label>
    <div class="controls">
   <select name="serie" class="span3333" id="serie">
	<option>--Select--</option>
	<option>1</option>
	<option>2</option>
    <option>3</option>
	</select>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="input01">Grupa:</label>
    <div class="controls">
   <select name="grupa" class="span3333" id="grupa">
	<option>--Select--</option>
	<option>1</option>
	<option>2</option>
    <option>3</option>
	</select>
    </div>
    </div>
	
    <div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="department" class="department"  id="span9009">
	<option>--Select Department--</option>
<?php $query=mysql_query("select * from departmet group by department")or die(mysql_error);
while($dep=mysql_fetch_array($query)){
 ?>
 <option><?php echo $dep['department'];?></option>
 <?php }?>
	</select>
    </div>
    </div>
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Subject:</label>
    <div class="controls">
   <select name="subject" class="span333" id="subject">
	<option><?php echo $row['subject']; ?></option>
<?php $subject_query=mysql_query("select * from subject group by subject_title")or die(mysql_error());
while($subject_row=mysql_fetch_array($subject_query)){
 ?>
 <option><?php echo $subject_row['subject_title']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	
	<div class="control-group">
    <label class="control-label" for="input01">teacher:</label>
    <div class="controls">
   <select name="teacher" class="span333" id="teacher">
	<option><?php echo $row['teacher']; ?></option>
	<?php $teacher_query=mysql_query("select * from teacher group by Name")or die(mysql_error());
while($teacher_row=mysql_fetch_array($teacher_query)){
	?>
	<option><?php echo $teacher_row['Name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">Room:</label>
    <div class="controls">
   <select name="room" class="span333" id="room">
	<option><?php echo $row['room']; ?></option>
	<?php $room_query=mysql_query("select * from room")or die(mysql_error());
while($room_row=mysql_fetch_array($room_query)){
	?>
	<option><?php echo $room_row['room_name']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01">Nr. stud.:</label>
    <div class="controls">
    <input type="text" name="nr" class="nr" value="<?php echo $row['nr'];  ?>"  id="span900">
    </div>
    </div>
    
	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
	
    </fieldset>
    </form>

</div>
</div>






<?php include('footer.php');?>
</div>
</body>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
	
		
			
	 
