<?php include('header.php'); include('dbcon.php');?>
<body>
<?php include('nav-top1.php'); ?>
    
<div class="wrapper">



	

<div class="row-fluid">
<div class="span2">
<?php include('left_nav.php'); ?>
</div>

<div class="span10">
<h2>Teachers List</h2>
	<a class="btn btn-primary" href="add_teacher.php">  <i class="icon-plus-sign icon-large"></i>&nbsp;Add Teacher</a>
	<hr>
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Name</th>
			    <th>Academic Rank</th>
				
				<th>Department</th>
				<th>Actions</th>
				</tr>
			</thead>
			<tbody>

<?php $result=mysql_query("select * from teacher") or die(mysql_error());
while($row=mysql_fetch_array($result)){ $id=$row['teacher_id'];
 ?>
<tr class="del<?php echo $id ?>">
	<td><?php echo $row['Name']; ?></td>
	<td><?php echo $row['Academic_Rank']; ?></td>
	<td><?php echo $row['Department']; ?></td>
	
	<td align="center" width="160">
	
	<a class="btn btn-info" href="edit_teacher.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>Edit &nbsp;&nbsp;</a>
	
	<br/>
		
	<div class="modal hide fade" id="<?php echo $id; ?>">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
		      <div class="alert alert-info">
   <p><font color="gray">Are you Sure you Want to Delete this Teacher Entry?</font></p>
    </div>
	  </div>
	  <div class="modal-body">

   
<a class="btn btn-info" href="delete_teacher.php<?php echo '?id='.$id; ?>"><i class="icon-check icon-large"></i>&nbsp;Yes</a>&nbsp;
	
	   <a href="#" class="btn" data-dismiss="modal">No</a>
	  
  
	  </div>
	  <div class="modal-footer">
	 
		</div>
		</div>
	
	
	<a class="btn btn-danger1"  data-toggle="modal" href="#<?php echo $id; ?>">  <i class="icon-trash icon-large"></i>Delete</a>
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
		
	<script type="text/javascript">
	$(document).ready( function() {
	

	
	$('.btn-danger1').click( function() {
		
		var id = $(this).attr("id");
		
		if(confirm("Are you sure you want to delete this Teacher?")){
			
		
			$.ajax({
			type: "POST",
			url: "delete_teacher.php",
			data: ({id: id}),
			cache: false,
			success: function(html){
			$(".del"+id).fadeOut('slow'); 
			} 
			}); 
			}else{
			return false;}
		});				
	});

</script>
