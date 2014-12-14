<?php include('header.php');include('dbcon.php'); 
$get_id=$_GET['id'];
 ?>
<body>
<?php include('nav-top1.php'); ?>
   
<div class="wrapper">



	

<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">

<h2>Edit Course Year Section List</h2>
	<a class="btn btn-primary"  href="course.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<?php
	$result=mysql_query("select * from course where course_id='$get_id'")or die (mysql_query());
	$row=mysql_fetch_array($result);
	?>
	
	<form id="save_voter" class="form-horizontal" method="POST" action="save_update_course.php"> 	
    <fieldset>
	</br>
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
     <input type="hidden" name="get_id" class="get_id" value="<?php echo $get_id;?>">
	<div class="control-group">
    <label class="control-label" for="input01">Year:</label>
    <div class="controls">
    <input type="text" name="Year" class="Year" value="<?php echo $row['year'];?>" id="span900">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="input01">Seria:</label>
    <div class="controls">
    <input type="text" name="Serie" class="Serie" value="<?php echo $row['serie'];?>" id="span900">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="input01">Grupa:</label>
    <div class="controls">
    <input type="text" name="Grup" class="Grup" value="<?php echo $row['grupa'];?>" id="span900">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Subject:</label>
    <div class="controls">
   <select name="Subject" class="subject" id="span9000">
   <option>--Select Subject--</option>
	<option><?php echo $row['subject'];?></option>
	<?php 

$subject=mysql_query("select * from subject group by subject_title")or die(mysql_error());
while($row=mysql_fetch_array($subject)){
?>
<option><?php echo $row['subject_title']; ?></option>	
	<?php } ?>
	</select>
    </div>
    </div>
		
	<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="Department" class="Department" id="span9000">
   <option>--Select Department--</option>
	<option><?php echo $row['Department'];?></option>
	<?php 

$department=mysql_query("select * from departmet")or die(mysql_error());
while($row=mysql_fetch_array($department)){
?>
<option><?php echo $row['department']; ?></option>	
	<?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

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
		
	
	 