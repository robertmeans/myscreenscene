<?php 
include 'core/init.php';
include 'includes/overall/header.php'; 
?>


<?php
if (empty($_POST) === false) {
    $errors = array();
    
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $message    = $_POST['message'];
    
    if (empty($name) === true || empty($email) === true || empty($message) === true) {
        $errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Speak up, I can\'t hear you! ...You\'ve got to type a message. :) </span>';
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $erors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">That is not a valid email address.</span>';
        }
    }

    if (empty($errors) === true) {


            function post_captcha($user_response) {
            $fields_string = '';
            $fields = array(
                'secret' => '6LcnVW4UAAAAAGMsBA5Fv4FLq9FxrKtoKGLx34YB',
                'response' => $user_response
            );
            foreach($fields as $key=>$value)
            $fields_string .= $key . '=' . $value . '&';
            $fields_string = rtrim($fields_string, '&');
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
            $result = curl_exec($ch);
            curl_close($ch);
            return json_decode($result, true);
        }
        // Call the function post_captcha
        $res = post_captcha($_POST['g-recaptcha-response']);
        if (!$res['success']) {

            // What happens when the CAPTCHA wasn't checked - Fallback validation
            // echo '<p style="color: red; padding: 10px; border: 1px solid red; background-color: white; float: left;"><b>Submission Unsuccessful</b><br />Please refresh and make sure you check the security CAPTCHA box.</p><br>';
            // All error checking is handled on the front end. No need for this.
        } else {





   error_reporting(E_ALL ^ E_NOTICE);

    // set a variable to hold g-recaptcha-response so you can 
    // leave it out of the email body when message is composed
    if (isset($_POST['g-recaptcha-response'])) { 
        $captcha = $_POST['g-recaptcha-response'];
    }

    $my_email = "bob@myscreenscene.com";
    // for testing
    // $my_email = "robert@robertmeans.com";

    // to let visitor fill in the "from" field leave string below empty 
    $from_email = "";

    $errors = array();

    if (count($_COOKIE)) {
        foreach(array_keys($_COOKIE) as $value) {
            unset($_REQUEST[$value]);
        }
    }

    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $_REQUEST['email'] = trim($_REQUEST['email']);
        if (substr_count($_REQUEST['email'],"@") != 1 || stristr($_REQUEST['email']," ") || stristr($_REQUEST['email'],"\\") || stristr($_REQUEST['email'],":")) {
            $errors[] = "Email address is invalid";
        } else {
            $exploded_email = explode("@",$_REQUEST['email']);
            if (empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])) {
                $errors[] = "Email address is invalid";
            } else {
                if (substr_count($exploded_email[1],".") == 0) {
                    $errors[] = "Email address is invalid";
                } else {
                    $exploded_domain = explode(".",$exploded_email[1]);
                    if (in_array("",$exploded_domain)) {
                        $errors[] = "Email address is invalid";
                    } else {
                        foreach ($exploded_domain as $value) {
                            if (strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)) {
                                $errors[] = "Email address is invalid"; 
                                break;
                            }
                        }
                    }
                }
            }
        }

    }

    if (!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))) {
        $errors[] = "There are many other scripts out there that are much easier to hijack. Please leave this one alone.";
    }

    function recursive_array_check_blank($element_value) {
        global $set;

        if (!is_array($element_value)) { 
            if (!empty($element_value)) {
                $set = 1;
            }
        } else {
            foreach($element_value as $value) {
                if($set) {
                    break;
                } recursive_array_check_blank($value);
            }
        }
    }

    recursive_array_check_blank($_REQUEST);

    if (!$set) {
        $errors[] = "<script>alert('\\n\\nYou cannot submit a blank form.');window.location.replace('index.php');</script>";
    }

    unset($set);

    if (count($errors)){
        foreach($errors as $value){
            print "$value<br>";
        } exit;
    }

    if (!defined("PHP_EOL")){
        define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");
    }

    function build_message($request_input){
        if (!isset($message_output)) {
            $message_output ="";
        } if (!is_array($request_input)) {
            $message_output = $request_input;
        } else {
            foreach($request_input as $key => $value) {
                // check that the key of the $_POST variable is not the
                // g-recaptcha-response before adding it to the message
                if ($key != 'g-recaptcha-response') {

                    if(!empty($value)) {
                        if (!is_numeric($key)) {
                            $message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;
                        } else {
                            $message_output .= build_message($value).", ";
                        }
                    }
                }
            }   
        } return rtrim($message_output,", ");
    }

    $message = build_message($_REQUEST);
    $message = $message . PHP_EOL.PHP_EOL."".PHP_EOL."";
    $message = stripslashes($message);
    $subject = "Message From MyScreenScene";
    $subject = stripslashes($subject);

    if ($from_email) {
        $headers = "From: " . $from_email;
        $headers .= PHP_EOL;
        $headers .= "Reply-To: " . $_REQUEST['email'];
        } else {
            $from_name = "";
            if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
                $from_name = stripslashes($_REQUEST['name']);
            }

        $headers = "From: {$from_name} <{$_REQUEST['email']}>"."\r\n";
        /* BCC if needed */
        // $headers .= "BCC: robert@evergreenwebdesign.com\r\n";

        }

        mail($my_email,$subject,$message,$headers);


    header('Location: message.php?sent');
    exit(); 
    } }
}
?>

<div id="home">

<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Email Bob</h1>
<p><?php echo $user_data['name']; ?></p>
    <?php
    if (isset($_GET['sent']) === true) {
        echo '<p>Your message was sent successfully. I will see it soon.</p>';
    } else {
        
    if (empty($errors) === false) {
        echo '<ul>';
        foreach($errors as $error) {
            echo '<li>', $error, '</li>';   
        }
        echo '</ul>';
    }
    ?>    

<!-- <img src="images/spacer.gif" border="0" width="1" height="10" /><br /> -->

<form action="" method="post">
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
    <?php
    }
    ?>

<?php include 'includes/overall/footer.php'; ?>