
    <div class="navbar navbar-fixed-top">

	<div class="banner">
	  
		
	<div class="brand">
	 <h1>Timetable Management System</h1>
	 
 	</div>
<div class="time_top">	

  <?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
<?php
$logout_query=mysql_query("select * from users");
$row=mysql_fetch_array($logout_query);
$type=$row['User_Type'];


?>

</div>
	</div>
	
 
	<div class="navbar-inner">
    <ul class="nav">
  <li>
    <a href="home.php"><i class="icon-home icon-large"></i>Home</a>
  </li>
   <li class="divider-vertical"></li>
  <li><a href="schedule.php"><i class="icon-group icon-large"></i>Class Schedule</a></li>
     <li class="divider-vertical"></li>
  <li><a href="teacher.php"><i class="icon-list icon-large"></i>Entry</a></li>
   <li class="divider-vertical"></li>
  <li><a href="history_log.php"><i class="icon-table icon-large"></i>History Log</a></li>
     <li class="divider-vertical"></li>
  <li><a href="user_account.php"><i class="icon-user icon-large"></i>User Account</a></li>
  <li class="divider-vertical"></li>
  <li><a id="logout" data-toggle="modal" href="#myModal"><i class="icon-signout icon-large"></i>Logout</a></li>
   <li class="divider-vertical"></li>
</ul>
 </div>
    </div>
    </div>