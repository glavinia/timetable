<?php include('header.php'); include('dbcon.php'); 
  $get_id=$_GET['id']; ?>
<body>
<?php include('nav-top1.php'); ?>
   
<div class="wrapper">



	

<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">
<h2>Edit Room</h2>
	<a class="btn btn-primary"  href="room.php">  <i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	<hr>
	<form id="save_voter" class="form-horizontal" method="POST" action="update_room.php">	
    <fieldset>
	</br>
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    
	<?php $result=mysql_query("select * from room where room_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
	?>
	  <input type="hidden" name="get_id" class="get_id" value="<?php echo $get_id; ?>">
	<div class="control-group">
    <label class="control-label" for="input01">Room Name:</label>
    <div class="controls">
    <input type="text" id="span900" name="room_name" class="room_name" value="<?php echo $row['room_name']; ?>">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Description:</label>
    <div class="controls">
    <input type="text" id="span900" name="Description" class="Description" value="<?php echo $row['description'];?>">
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
		
	