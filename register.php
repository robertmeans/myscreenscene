<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php'; 

if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Fields marked with an asterisk are required.</span>';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Sorry, The username "' . $_POST['username'] . '" is already taken.</span>';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your username must not contain any spaces.</span>';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your password must be at least 6 characters.</span>';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your passwords do not match.</span>';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">A valid email address is required.</span>';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">The email "' . $_POST['email'] . '" is already in use.</span>';
		}
	}
}

?>

<div id="home">
<h1>Register</h1>

<?php
if (isset($_GET['success']) && empty($_GET['success'])) {
	echo 'You\'ve been registered successfully but there is 1 more step: <br><ol><li><b>Please check your email to activate your account</b> (This was sent immediately. Check your Spam folder if you don\'t see it.)</li><ol>';	
} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$register_data = array(
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'first_name' 	=> $_POST['first_name'],
			'last_name' 	=> $_POST['last_name'],
			'email' 		=> $_POST['email'],
			'email_code'	=> md5($_POST['username'] + microtime())
		);
			
			register_user($register_data);
			header('Location: register.php?success');
			exit();
			
			
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
?>
<div id="dhtmltooltip"></div>
<script type="text/javascript">
var offsetxpoint=-580 //Customize x offset of tooltip
var offsetypoint=-113 //Customize y offset of tooltip
var ie=document.all
var ns6=document.getElementById && !document.all
var enabletip=false
if (ie||ns6)
var tipobj=document.all? document.all["dhtmltooltip"] : document.getElementById? document.getElementById("dhtmltooltip") : ""

function ietruebody(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function ddrivetip(thetext, thecolor, thewidth){
if (ns6||ie){
if (typeof thewidth!="undefined") tipobj.style.width=thewidth+"px"
if (typeof thecolor!="undefined" && thecolor!="") tipobj.style.backgroundColor=thecolor
tipobj.innerHTML=thetext
enabletip=true
return false
}
}

function positiontip(e){
if (enabletip){
var curX=(ns6)?e.pageX : event.clientX+ietruebody().scrollLeft;
var curY=(ns6)?e.pageY : event.clientY+ietruebody().scrollTop;
//Find out how close the mouse is to the corner of the window
var rightedge=ie&&!window.opera? ietruebody().clientWidth-event.clientX-offsetxpoint : window.innerWidth-e.clientX-offsetxpoint-20
var bottomedge=ie&&!window.opera? ietruebody().clientHeight-event.clientY-offsetypoint : window.innerHeight-e.clientY-offsetypoint-20

var leftedge=(offsetxpoint<0)? offsetxpoint*(-1) : -1000

//if the horizontal distance isn't enough to accomodate the width of the context menu
if (rightedge<tipobj.offsetWidth)
//move the horizontal position of the menu to the left by it's width
tipobj.style.left=ie? ietruebody().scrollLeft+event.clientX-tipobj.offsetWidth+"px" : window.pageXOffset+e.clientX-tipobj.offsetWidth+"px"
else if (curX<leftedge)
tipobj.style.left="5px"
else
//position the horizontal position of the menu where the mouse is positioned
tipobj.style.left=curX+offsetxpoint+"px"

//same concept with the vertical position
if (bottomedge<tipobj.offsetHeight)
tipobj.style.top=ie? ietruebody().scrollTop+event.clientY-tipobj.offsetHeight-offsetypoint+"px" : window.pageYOffset+e.clientY-tipobj.offsetHeight-offsetypoint+"px"
else
tipobj.style.top=curY+offsetypoint+"px"
tipobj.style.visibility="visible"
}
}

function hideddrivetip(){
if (ns6||ie){
enabletip=false
tipobj.style.visibility="hidden"
tipobj.style.left="-1000px"
tipobj.style.backgroundColor=''
tipobj.style.width=''
}
}

document.onmousemove=positiontip
</script>
<div id="clear_all">
    <form action="" method="post">
    <ul>
        <li>Username*: <a href="#" class="tooltips" onMouseover="ddrivetip('Used for identification purposes only. You will use this to sign in. Must be unique.','#fffff0', 270)"; onMouseout="hideddrivetip()" onClick="return false;">note</a><br />
        <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']); ?>" size="30" maxlength="32" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="5"><br />
        <li>Password*:<br />
        <input type="password" name="password" value="<?php echo htmlspecialchars($_POST['password']); ?>" size="30" maxlength="32" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="5"><br />
        <li>Confirm password*:<br />
        <input type="password" name="password_again" value="<?php echo htmlspecialchars($_POST['password_again']); ?>" size="30" maxlength="32" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="5"><br />
        <li>First name*: <a href="#" class="tooltips" onMouseover="ddrivetip('I will use this to greet you. Enter whatever you prefer to be called.','#fffff0', 270)"; onMouseout="hideddrivetip()" onClick="return false;">note</a><br />
        <input type="text" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name']); ?>" size="30" maxlength="20" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="5"><br />
        <li>Last name:<br />
        <input type="text" name="last_name" value="<?php echo htmlspecialchars($_POST['last_name']); ?>" size="30" maxlength="32" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="5"><br />
        <li>Email*: <a href="#" class="tooltips" onMouseover="ddrivetip('I respect your privacy and will not share your email address.','#fffff0', 270)"; onMouseout="hideddrivetip()" onClick="return false;">note</a><br />
        <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" size="30" maxlength="1024" /></li>
        <img src="images/spacer.gif" border="0" width="1" height="10"><br />
        <li><input type="submit" value="Register" /></li>
    </ul>
    </form>
</div><!-- clear_all -->
<div id="reset">
<span class="errorText">Why do I need to register?<br /></span>
<p>The registration process ensures you are a real person by using your email address to send a unique activation link. This prevents the database from being spammed and protects all of our data.</p>
</div><!-- reset --> 
<?php

}
include 'includes/overall/footer.php'; ?>