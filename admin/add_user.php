<?php include('header.php');  include('dbcon.php') ?>
<body>
<?php include('nav-top1.php'); ?>
    
<div class="wrapper">



	

<div id="element" class="hero-body-schedule">


<h2>User Account</h2>
	<a class="btn btn-primary"  href="add_user.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add User</a>
	<hr>
	<form id="save_voter" class="form-horizontal" method="POST" action="save_user.php">	
    <fieldset>
	</br>
	<div class="add_subject_user">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
	<div class="control-group">
    <label class="control-label" for="input01">UserName:</label>
    <div class="controls">
    <input type="text" name="UserName" class="UserName" id="span900">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
    <input type="text" name="Password" class="Password" id="span900">
    </div>
    </div>
		
	<div class="control-group">
    <label class="control-label" for="input01">User Type:</label>
    <div class="controls">
   <select name="User_Type" class="span3"  id="span900">
	<option>--Select--</option>
	<option>Admin</option>
	<option>User</option>

	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName" id="span900">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName" id="span900">
    </div>
    </div>
	
			<div class="control-group">
    <label class="control-label" for="input01">Department:</label>
    <div class="controls">
   <select name="Department" class="Department"  id="span9009">
	<option>--Select Department--</option>
<?php $query=mysql_query("select department from departmet group by department")or die(mysql_error);
while($dep=mysql_fetch_array($query)){
 ?>
 <option><?php echo $dep['department'];?></option>
 <?php }?>
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
	
