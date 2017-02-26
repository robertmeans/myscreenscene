<?php 
include 'core/init.php';
include 'includes/overall/header.php'; 
?>

<div id="home">

<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Email Bob</h1>

<form action="formmail.php" method="post" onSubmit="return validateEmail(document.forms[1].email.value);">
	Your name<br />
    <input type="text" name="name" id="name" size="30" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags(stripslashes($_POST['name'])), '"'; } ?>>
    <br />
	Your email address<br />
    <input type="text" name="email" id="email" size="30" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags(stripslashes($_POST['email'])), '"'; } ?>>
    <br />
    Message<br />
    <textarea name="message" id="message" style="width:590px; height:100px;" wrap="soft"><?php if (isset($_POST['message']) === true) { echo strip_tags(stripslashes($_POST['message']));} ?></textarea><br />
    <img src="images/spacer.gif" border="0" width="1" height="5"><br />
    <input type="submit" value="Send" />  
</form>


<?php include 'includes/overall/footer.php'; ?>