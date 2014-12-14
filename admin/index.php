<?php session_start(); include('header.php'); include('dbcon.php');?>
<body>
<?php include('index-nav.php'); 

?>


    <?php
    //Start session
   // 	
    //Unset the variables stored in session
    unset($_SESSION['SESS_MEMBER_ID']);
    unset($_SESSION['SESS_FIRST_NAME']);
    unset($_SESSION['SESS_LAST_NAME']);
    ?>

<div class="wrapper">



<div class="row-fluid white-back">
<div class="span7 offset2">
	<p><h2>Login</h2></p>
	<form method="POST" action="login.php" >
    	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
?>
	<table>
    <tr><td>UserName:&nbsp;&nbsp;</td><td><input type="text"  name="UserName" class="UserName" id="span9001"></td></tr>
	<tr><td>&nbsp;&nbsp;</td></tr>
    <tr><td>Password:&nbsp;&nbsp;</td><td><input type="Password" name="Password" class="Password " id="span9001"></td></tr>
	<tr><td>&nbsp;&nbsp;</td></tr>
	<tr><td></td><td>	<button class="btn btn-primary" name="Login"><i class="icon-ok-sign icon-large"></i>&nbsp;Login</button>

	</td></tr>
	<tr><td>
	</td><tr>
	</form>
	</table>
	
	</br>
	
</div>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
<?php include('footer.php');?>


</div>
</div>
</body>
</html>