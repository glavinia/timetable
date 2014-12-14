
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head> 
<body>

<div class="wrapper_home">
<?php include('navtop.php');?>
<?php include('slider.php');?>




<ul class="nav nav-tabs"> 
  <li class="active"><a href="" data-toggle="tab"><i class="icon-search icon-large"></i>Student</a></li>
</ul>

<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
			
				<th>Name</th>
				<th>Year</th>
				<th>Serie</th>
				<th>Group</th>
				
                
								</tr>
			</thead>
			<tbody>
<?php 
	$department =$_REQUEST['department'];
	$stud_an =$_REQUEST['stud_an'];
	
$result=mysql_query("select * from student where department='$department' and stud_an='$stud_an' order by stud_name DESC")or die(mysql_error());
while($row=mysql_fetch_array($result)){ $id=$row['id_stud'];

?>

<tr class="del<?php echo $id ?>">
	<td><?php echo $row['stud_name'];?></td>
	<td ><?php echo $row['stud_an'];?></td>
	<td><?php echo $row['stud_serie'];?></td>	
	<td><?php echo $row['stud_grup'];?></td>
	
   
	
	


<?php } ?>

	
	</tr>

			</tbody>
	
		</table>
		
		
		




       
      
 

<br />

<?php include('footer.php'); ?>
 </div>
</div>

  </div>
     </div>
</body>
 <?php include('modal_footer.php');?>
</html>
    