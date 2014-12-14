<?php include('header.php'); include('dbcon.php');?>
<body>
<?php include('nav-top1.php'); ?>
    
<div class="wrapper">



	

<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">
<h2>Student List</h2>
	<a class="btn btn-primary"  href="add_student.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add Student</a>
	<hr>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Name</th>
                <th>An</th>
                <th>Seria</th>
                <th>Grupa</th>
			    <th>Email</th>
				<th>Tel</th>
				<th>Department</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>

<?php $result=mysql_query("select * from student") or die(mysql_error());
while($row=mysql_fetch_array($result)){ $id=$row['id_stud'];
 ?>
<tr class="del<?php echo $id ?>">
	<td><?php echo $row['stud_name']; ?></td>
    <td><?php echo $row['stud_an']; ?></td>
    <td><?php echo $row['stud_serie']; ?></td>
    <td><?php echo $row['stud_grup']; ?></td>
	<td><?php echo $row['stud_mail']; ?></td>
	<td><?php echo $row['stud_tel']; ?></td>
	<td><?php echo $row['department']; ?></td>
	
	<td align="center" width="160">
	
	<a class="btn btn-info" href="edit_student.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>Edit &nbsp;&nbsp;</a>&nbsp;
	
	
		
	<div class="modal hide fade" id="<?php echo $id; ?>">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
		      <div class="alert alert-info">
   <p><font color="gray">Are you Sure you Want to Delete this Student Entry?</font></p>
    </div>
	  </div>
	  <div class="modal-body">

   
<a class="btn btn-info" href="delete_student.php<?php echo '?id='.$id; ?>"><i class="icon-check icon-large"></i>&nbsp;Yes</a>&nbsp;
	
	   <a href="#" class="btn" data-dismiss="modal">No</a>
	  
  
	  </div>
	  <div class="modal-footer">
	 
		</div>
		</div>
	
	
	<a class="btn btn-danger1"  data-toggle="modal" href="#<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>&nbsp;Delete</a>
</td>




	<?php } ?>
	</tr>

			</tbody>
		</table>

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
		
	