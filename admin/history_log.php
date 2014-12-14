<?php include('header.php');include('dbcon.php'); ?>
<body>
<?php include('nav-top1.php'); ?>
   
<div class="wrapper">



	

<div class="row-fluid">
<h2>History Log</h2>
</br>
<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Date/Time</th>
				<th>Action</th> 
				<th>User</th>
				</tr>
			</thead>
			<tbody>


<?php $result=mysql_query("select * from history")or die(mysql_error());
while($row=mysql_fetch_array($result)){
 ?>
<tr>
	<td><?php echo $row['date'] ?></td>
	<td><?php echo $row['action'] ?></td>
	<td><?php echo $row['user']; ?></td>
	



<?php } ?>

	
	</tr>

			</tbody>
		</table>


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