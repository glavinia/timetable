
<?php include('header.php'); include('hover.php'); include('admin/dbcon.php'); ?>
</head> 
<body>

<div class="wrapper_home">
<?php include('navtop.php');?>
<?php include('slider.php');?>





<ul class="nav nav-tabs"> 
  <li class="active"><a href="" data-toggle="tab"><i class="icon-search icon-large"></i>Timetable</a></li>
</ul>

<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
			
				<th>Day</th>
				<th>Time </th>
				<th>Time </th>
				<th>Sem</th>
				<th>Year</th>
				<th>Seria</th>
                <th>Grup</th>
                <th>Dep.</th>
				<th>Subject</th>
				<th>Teacher</th>
				<th>Room</th>
                <th>Nr.</th>
                
								</tr>
			</thead>
			<tbody>
<?php 
	$department =$_REQUEST['department'];
	$year =$_REQUEST['year'];
$result=mysql_query("select * from schedule where department='$department' and year='$year' order by schedule_id DESC")or die(mysql_error());
while($row=mysql_fetch_array($result)){ $id=$row['schedule_id'];

?>

<tr class="del<?php echo $id ?>">
	<td><?php echo $row['day'];?></td>
	<td ><?php echo $row['time'];?></td>
	<td><?php echo $row['time_end'];?></td>	
	<td><?php echo $row['semester'];?></td>
	<td><?php echo $row['year'];?></td>
	<td><?php echo $row['serie'];?></td>
    <td><?php echo $row['grupa'];?></td>
    <td><?php echo $row['department'];?></td>
	<td><?php echo $row['subject'];?></td>
	<td><?php echo $row['teacher'];?></td>
	<td><?php echo $row['room'];?></td>
    <td><?php echo $row['nr'];?></td>
   
	
	


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
  <?php include('modal_footer.php');?>
</body>
</html>
    