<?php include('header.php'); include('dbcon.php');
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
<h2>Edit Teacher</h2>
	<a class="btn btn-primary"  href="teacher.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<div class="teacher">
	   <form id="save_voter" class="form-horizontal" method="POST" action="update_teacher.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
<?php $result=mysql_query("select * from teacher where teacher_id='$get_id'")or die (mysql_error());
$row=mysql_fetch_array($result);
 ?>	
	<input type="hidden" name="get_id" class="get_id" value="<?php echo $get_id; ?>">
	<div class="control-group">
    <label class="control-label" for="input01">Name:</label>
    <div class="controls">
    <input type="text" name="Name" class="Name" value="<?php echo $row['Name'];  ?>"  id="span900">
    </div>
    </div>
	

	
	<div class="control-group">
    <label class="control-label" for="input01">Academic Rank:</label>
    <div class="controls">
    <input type="text" name="Academic_Rank" class="Academic_Rank" value="<?php echo $row['Academic_Rank'];  ?>"  id="span900">
    </div>
    </div>
	
		
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="Department" class="Department"  id="span9000">
	<option><?php echo $row['Department'];  ?></option>
    <option>--Select Department--</option>
<?php 

$department=mysql_query("select * from departmet GROUP BY department")or die(mysql_error());
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
	    <a href="index.php" class="btn btn-primary">Yes</a>
		</div>
		</div>
		
