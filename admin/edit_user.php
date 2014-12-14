<?php include('header.php'); include('dbcon.php') ;
$id_get=$_GET['id'];
?>
<body>
<?php include('nav-top1.php'); ?>
    
<div class="wrapper">



	

<div class="row-fluid">


<h2>User Account</h2>
	<a class="btn btn-primary"  href="user_account.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<form id="save_voter" class="form-horizontal" method="POST" action="update_user.php">	
    <fieldset>
	</br>
	<div class="add_subject_user">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
	<?php

		$result=mysql_query("select * from users where User_id='$id_get'")or die(mysql_error());
		$row=mysql_fetch_array($result);
		
	?>
	<input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get;?>">
	<div class="control-group">
    <label class="control-label" for="input01">UserName:</label>
    <div class="controls">
    <input type="text" name="UserName" class="UserName" value="<?php echo $row['UserName']; ?>" id="span900">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
    <input type="text" name="Password" class="Password" value="<?php echo $row['Password']; ?>" id="span900">
    </div>
    </div>
		
	<div class="control-group">
    <label class="control-label" for="input01">User Type:</label>
    <div class="controls">
   <select name="User_Type" class="User_Type" id="span9000">
     <option>--Select User Type--</option>
	<option><?php echo $row['User_Type']; ?></option>
	<option>Admin</option>
	<option>User</option>

	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">FirstName:</label>
    <div class="controls">
    <input type="text" name="FirstName" class="FirstName" value="<?php echo $row['FirstName']; ?>" id="span900">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">LastName:</label>
    <div class="controls">
    <input type="text" name="LastName" class="LastName" value="<?php echo $row['LastName']; ?>" id="span900">
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
	