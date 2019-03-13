<?php 
include 'core/init.php';
include 'includes/overall/header.php'; 
?>

<div id="home">

<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Email Bob</h1>

<form action="email-to-bob.php" method="post" onSubmit="return validateEmail(document.forms[1].email.value);">
	Your name<br />
    <input type="text" name="name" id="name" size="30" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags(stripslashes($_POST['name'])), '"'; } ?>>
    <br />
	Your email address<br />
    <input type="text" name="email" id="email" size="30" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags(stripslashes($_POST['email'])), '"'; } ?>>
    <br />
    Message<br />
    <textarea name="message" id="message" style="width:590px; height:100px;" wrap="soft"><?php if (isset($_POST['message']) === true) { echo strip_tags(stripslashes($_POST['message']));} ?></textarea><br />
    <img src="images/spacer.gif" border="0" width="1" height="5"><br />


    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LcnVW4UAAAAAMTVHcHjt2ZB0g4WWJlhRY9It2On"></div>
    <img src="images/spacer.gif" border="0" width="1" height="5"><br />

    <button id="confirm" disabled>Check Captcha above to enable Send</button>
    <button id="send" type="submit" class="display" disabled>Send</button>


    
    <!-- <input type="submit" value="Send" />   -->
</form>


<?php include 'includes/overall/footer.php'; ?>