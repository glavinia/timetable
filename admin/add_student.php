<?php include('header.php'); include('dbcon.php');?>
<body>
<?php include('nav-top1.php'); ?>
  
<div class="wrapper">



	

<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">
<h2>Add Student</h2>
	<a class="btn btn-primary"  href="student.php">  <i class=" icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<div class="student">
	   <form id="save_voter" class="form-horizontal" method="POST" action="save_student.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
	<div class="control-group">
    <label class="control-label" for="input01">Name:</label>
    <div class="controls">
    <input type="text" name="Name" class="Name" id="span900">
    </div>
    </div>
	
	
	 <div class="control-group">
    <label class="control-label" for="input01">Year:</label>
    <div class="controls">
   <select name="Year" class="Year"  id="span9000">
    <option>--Select An--</option>
  <option>An 1</option>
	<option>An 2</option>
    <option>An 3</option>
	</select>
    </div>
    </div>
    
    <div class="control-group">
    <label class="control-label" for="input01">Serie:</label>
    <div class="controls">
   <select name="Seria" class="Seria"  id="span9000">
   <option>--Select Serie--</option>
	   <option>Seria 1</option>
	<option>Seria 2</option>
    <option>Seria 3</option>
	</select>
    </div>
    </div>
    
     <div class="control-group">
    <label class="control-label" for="input01">Grupa:</label>
    <div class="controls">
   <select name="Grupa" class="Grupa"  id="span9000">
   <option>--Select Grupa--</option>
	  <option>Grupa 1</option>
	<option>Grupa 2</option>
    <option>Grupa 3</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Email:</label>
    <div class="controls">
    <input type="text" name="Email" class="Email"  id="span900">
    </div>
    </div>
	
		
	<div class="control-group">
    <label class="control-label" for="input01">Tel:</label>
    <div class="controls">
    <input type="text" name="Tel" class="Tel"  id="span900">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="Department" class="Department"  id="span9009">
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
		
