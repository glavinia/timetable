<?php include('header.php'); include('dbcon.php');;
$id_get=$_GET['id'];
 ?>
<body>
<?php include('nav-top1.php'); ?>
     
<div class="wrapper">



	
<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">
<h2><font color="white">Edit Subject</font></h2>
	<a class="btn btn-primary"  href="subject.php"><i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	 <form id="save_voter" class="form-horizontal" method="POST" action="update_subject.php">	
    <fieldset>
	</br>
	<?php $result=mysql_query("select * from subject where Subject_id='$id_get'")or die(mysql_error());
$row=mysql_fetch_array($result);
	?>
	
	<input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get; ?>">
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
  
	<div class="control-group">
    <label class="control-label" for="input01">Subject Title:</label>
    <div class="controls">
    <input type="text" id="span900" name="Subject_Title" class="Subject_Title" value="<?php echo $row['subject_title']; ?>">
    </div>
    </div>
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Subject Category:</label>
    <div class="controls">
   <select name="Category" id="span900" class="Category">
	<option><?php echo $row['subject_category']; ?></option>
	<option>Curs</option>
	<option>Laborator</option>
    <option>Seminar</option>
	</select>
    </div>
    </div>
	
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Semester:</label>
    <div class="controls">
   <select name="Semester" class="Semester" id="span900">
	<option><?php echo $row['semester']; ?></option>
	<option>1</option>
	<option>2</option>
	</select>
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Teacher:</label>
    <div class="controls">
   <select name="Teacher" class="Teacher2"  id="span900">
	<option><?php echo $row['teacher'];  ?></option>
<?php 

$Teacher=mysql_query("select * from teacher GROUP BY Name")or die(mysql_error());
while($row=mysql_fetch_array($Teacher)){
?>
<option><?php echo $row['Name']; ?></option>	
	<?php } ?>
	</select>
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
		


	   
	  	