<div id="login">
    <div class="tr_td_username">
        <form class="searchform" name="login" action="login.php" method="post">
            Username:<br />
            <input type="text" name="username" style="width:98px; height:18px; font-family:tahoma; font-size:10px;"  value="<?php echo @$cookie_site_username; ?>" />
	</div><!-- tr_td_username -->
    <div class="tr_td_password">
            Password:<br />
            <input type="password" name="password" style="width:98px; height:18px; font-family:tahoma; font-size:10px;"  value="<?php echo @$cookie_site_password; ?>" />
	</div><!-- tr_td_password -->
    
    <div class="rememberMe">
    	Remember me<br /><input type="checkbox" name="rememberme"  value="1" <?php if(@$cookie_site_rememberme == 1) echo "checked"; ?>/> 
    </div><!-- rememberMe -->
    
    <div class="tr_tdBtn">
            <input type="submit" name="Log in" value="Login" />
    </div><!-- tr_tdBtn --> 
     
        <div class="tr_tdEnd">   
           <a class="topNavLinks" href="register.php">Register</a> | Recover <a class="topNavLinks" href="recover.php?mode=username">username</a>/<a class="topNavLinks" href="pswd_recover.php?mode=password">password</a> | <a class="topNavLinks" href="message.php">Contact</a> | <a class="topNavLinks" href="/">Home</a>
        
        <script type="text/javascript" language="JavaScript">document.forms['login'].elements['username'].focus();</script>
		</div></form><!-- tr_tdEnd -->
</div><!-- login -->