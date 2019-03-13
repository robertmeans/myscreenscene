<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
// to turn on see:
// includes\overall\header.php
// includes\head.php
// includes\head_edit_mode.php
// includes\overall\footer.php
//
//$time = microtime();
//$time = explode(' ', $time);
//$time = $time[1] + $time[0];
//$start = $time;
?>
<!-- 0422131158 -->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="icon" type="image/ico" href="http://www.myscreenscene.com/images/favicon.ico">
<title>MyScreenScene</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-Equiv="Cache-Control" Content="no-cache" />
<meta http-Equiv="Pragma" Content="no-cache" />
<meta http-Equiv="Expires" Content="0" />
<meta http-Equiv="refresh" content="600">
<link rel="image_src" href="http://www.myscreenscene.com/images/thumbnails/thumb001.jpg" />
<link rel="image_src" href="http://www.myscreenscene.com/images/thumbnails/thumb02.jpg" />
<meta name="keywords" content="homepage, ultimate homepage, homepage project, ultimate homepage project, custom homepage, browser utility">
<meta name="description" content="Your custom launch pad for everything Internet.">
<link rel="stylesheet" href="css/styles.css">  
<link rel="stylesheet" href="css/spring.css">
<script type="text/javascript" src="scripts/scripts.js?<?= time(); ?>"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<!-- have fun with these. I lost a few brain cells on this one. if you can code it more succinctly please show me how! -->
<script type="text/javascript" src="scripts/jclock.js"></script>
<script type="text/javascript" src="scripts/jclocks.js"></script>

<script type="text/javascript">  
// edit box 
$(document).ready(function() {
    $('a.edit_window').click(function() {
        var editBox = $(this).attr('href');
        $(editBox).fadeIn(300);
        var popMargTop = ($(editBox).height() + 24) / 2; 
        var popMargLeft = ($(editBox).width() + 24) / 2; 
        
        $(editBox).css({ 
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        $('body').append('<div id="mask"></div>');
        $('#mask').fadeIn(300);
        
        return false;
    });
        $('a.close, #mask').live('click', function() { 
        $('#mask , .edit_popup').fadeOut(300 , function() {
        $('#mask').remove();  
        }); 
    return false;
    });
});  

$(document).ready(function() {
    $('a.edit_window_add_note').click(function() {
        var editBox = $(this).attr('href');
        $(editBox).fadeIn(300);
        var popMargTop = ($(editBox).height() + 24) / 2; 
        var popMargLeft = ($(editBox).width() + 24) / 2; 
        
        $(editBox).css({ 
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        $('body').append('<div id="mask"></div>');
        $('#mask').fadeIn(300);
        
        return false;
    });
        $('a.close, #mask').live('click', function() { 
        $('#mask , .edit_popup').fadeOut(300 , function() {
        $('#mask').remove();  
        }); 
    return false;
    });
});  

// make that radio button grid work like it's supposed to!
function uncheck_move(objRadio) {
// get column and row from radio id (last 2 chars)
var col = objRadio.id.substr(objRadio.id.length-2, 1);
var row = objRadio.id.substr(objRadio.id.length-1, 1) * 1; // make number!

var sav; // will be holding the column that was cleared on this row

// following structure of code below: now uncheck all others with the same row but different column
for (var c2 = 0; c2 < 5; c2++) {
	var col2 = String.fromCharCode(97+c2);
	if (col2 != col) {
		if (document.getElementById(col2+row).checked) {
			sav = col2;
			document.getElementById(col2+row).checked = false;
			break;
		}
	}
}

// check if entire row is empty, then set the missing one
for (var row2 = 1; row2 <= 5; row2++) {
	if (row2 != row) {
		var emp = true;
		for (var c2 = 0; c2 < 5; c2++) {
			var col2 = String.fromCharCode(97+c2);
			if (document.getElementById(col2+row2).checked) {
				emp = false;
				break;
			}
		}
		if (emp) {
			document.getElementById(sav+row2).checked = true;
			break;
		}
	}
}
}
</script>

<!-- begin Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57692923-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end Google Analytics -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        function recaptchaCallback() {
            $('#confirm').addClass('display');
            $('#send').removeAttr('disabled');
            $('#send').removeClass('display');
        };
    </script>
</head>
