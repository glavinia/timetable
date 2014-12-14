	<div class="modal hide fade" id="student">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">

   
  <h2>Search Year and Grup</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal2" method="POST" action="students.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="department" class="span333">
	<option>--Select--</option>
		<?php $teacher_query=mysql_query("select department from student group by  department")or die(mysql_error());
while($teacher_row=mysql_fetch_array($teacher_query)){
	?>
	<font size="30"><option><?php echo $teacher_row['department']?></option></font>
	<?php } ?>
	</select>
    </div>
    </div>
	
		
	
		<div class="control-group">
    <label class="control-label" for="input01">Year:</label>
    <div class="controls">
   <select name="stud_an" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysql_query("select stud_an from student group by stud_an")or die(mysql_error());
while($sy_row=mysql_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['stud_an']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
  
  
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
				
				
								<div class="modal hide fade" id="timetable">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">


  <h2>Search Course Year Section Schedule</h2>
Please select data on each field to filter.
<hr>
	   <form id="save_voter" class="form-horizontal2" method="POST" action="timetable.php">	
    <fieldset>
	</br>
	<div class="new_voter_margin">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter601">
    
	<div class="control-group">
    <label class="control-label" for="input01">Section:</label>
    <div class="controls">
   <select name="department" class="span333">
	<option>--Select--</option>
	<?php $CYS_query=mysql_query("select * from schedule group by department")or die(mysql_error());
while($CYS_row=mysql_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['department']; ?></option>
	<?php } ?>
	</select>
    </div>
    </div>
	
	
	
	
	<div class="control-group">
    <label class="control-label" for="input01">Year:</label>
    <div class="controls">
   <select name="year" class="span333">
	<option>--Select--</option>
<?php $sy_query=mysql_query("select * from schedule group by year")or die(mysql_error());
while($sy_row=mysql_fetch_array($sy_query)){
 ?>
<option><?php echo $sy_row['year']; ?></option>
 <?php } ?>
	</select>
    </div>
    </div>
	
	<div class="control-group">

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-ok icon-large"></i>Submit</button>
    </div>
    </div>
	
    </fieldset>
    </form>
 
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		
		
		
				
		
	