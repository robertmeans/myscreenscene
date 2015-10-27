	<div id="loginBar">

<?php 
	if (logged_in() === true) {
		include 'includes/widgets/loggedin.php';
	} else {
	include 'includes/widgets/login.php'; 
	}
	// don't need/want to show count
	// include 'includes/widgets/user_count.php';
	?>    
     
	<?php // include 'includes/menu.php';  ?>
</div><!-- loginBar -->