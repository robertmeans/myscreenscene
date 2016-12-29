<div id="loggedIn">
	<img src="images/spacer.gif" border="0" width="700" height="10" /><br /><!-- have to pad this way due to Opera's funkiness with padding -->
    <div id="loggedin_greet">
		<b>Hello <?php echo $user_data['first_name']; ?>!</b>
    </div><!-- loggedin_greet -->
    <div id="loggedin_nav">
    	<a class="topNavLinks" href="logout.php">Logout</a> | <a class="topNavLinks" href="settings.php">Settings</a> | <a class="topNavLinks" href="contact.php">Contact</a> | <a class="topNavLinks" href="edit_mode.php">Edit Mode</a> | <a class="topNavLinks" href="index.php">Home</a>
    </div><!-- loggedin_nav -->
</div><!-- loggedIn -->