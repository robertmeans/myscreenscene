<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header.php'; 

?>
<div id="home">

<div id="clear_all">
<h1>Clear All</h1>
<span class="errorText">This will clear all fields from the page.<br /><br /></span>
<p>This is a good place to start if you have just opened an account and would like to build your own page. This will clear all the default clocks and hyperlink labels off the page and leave you with a blank canvas to begin filling however you see fit.</p>
<p>If you're new, go ahead and run through the 2 options on this page and see what they do. They are just here to help you get started or to restart if you want.</p>
<p><a href="edit_mode.php" class="dictionaryReverse">Never mind - go back to Edit Mode</a></p>

	<form class="display" action="processing/clear_all.php" method="post">
    <input type="submit" value="Clear All" /> 
    
            <input type="hidden" name="clock_hours" value="12" />
            <input type="hidden" name="clock1_name" value="x" />
            <input type="hidden" name="clock1_zone" value="x" />
            <input type="hidden" name="clock2_name" value="x" />
            <input type="hidden" name="clock2_zone" value="x" />
            <input type="hidden" name="clock3_name" value="x" />
            <input type="hidden" name="clock3_zone" value="x" />
            <input type="hidden" name="clock4_name" value="x" />
            <input type="hidden" name="clock4_zone" value="x" />
            <input type="hidden" name="a1_text" value="x" />
            <input type="hidden" name="b1_text" value="x" />
            <input type="hidden" name="c1_text" value="x" />
            <input type="hidden" name="d1_text" value="x" />       
            <input type="hidden" name="a2_text" value="x" />
            <input type="hidden" name="b2_text" value="x" />
            <input type="hidden" name="c2_text" value="x" />
            <input type="hidden" name="d2_text" value="x" />
            <input type="hidden" name="a3_text" value="x" />
            <input type="hidden" name="b3_text" value="x" />
            <input type="hidden" name="c3_text" value="x" />
            <input type="hidden" name="d3_text" value="x" />
            <input type="hidden" name="a4_text" value="x" />
            <input type="hidden" name="b4_text" value="x" />
            <input type="hidden" name="c4_text" value="x" />
            <input type="hidden" name="d4_text" value="x" />
            <input type="hidden" name="a5_text" value="x" />
            <input type="hidden" name="b5_text" value="x" />
            <input type="hidden" name="c5_text" value="x" />
            <input type="hidden" name="d5_text" value="x" />
            <input type="hidden" name="a6_text" value="x" />
            <input type="hidden" name="b6_text" value="x" />
            <input type="hidden" name="c6_text" value="x" />
            <input type="hidden" name="d6_text" value="x" />
            
            <input type="hidden" name="a1_text_pg2" value="x" />
            <input type="hidden" name="b1_text_pg2" value="x" />
            <input type="hidden" name="c1_text_pg2" value="x" />
            <input type="hidden" name="d1_text_pg2" value="x" />       
            <input type="hidden" name="a2_text_pg2" value="x" />
            <input type="hidden" name="b2_text_pg2" value="x" />
            <input type="hidden" name="c2_text_pg2" value="x" />
            <input type="hidden" name="d2_text_pg2" value="x" />
            <input type="hidden" name="a3_text_pg2" value="x" />
            <input type="hidden" name="b3_text_pg2" value="x" />
            <input type="hidden" name="c3_text_pg2" value="x" />
            <input type="hidden" name="d3_text_pg2" value="x" />
            <input type="hidden" name="a4_text_pg2" value="x" />
            <input type="hidden" name="b4_text_pg2" value="x" />
            <input type="hidden" name="c4_text_pg2" value="x" />
            <input type="hidden" name="d4_text_pg2" value="x" />
            <input type="hidden" name="a5_text_pg2" value="x" />
            <input type="hidden" name="b5_text_pg2" value="x" />
            <input type="hidden" name="c5_text_pg2" value="x" />
            <input type="hidden" name="d5_text_pg2" value="x" />
            <input type="hidden" name="a6_text_pg2" value="x" />
            <input type="hidden" name="b6_text_pg2" value="x" />
            <input type="hidden" name="c6_text_pg2" value="x" />
            <input type="hidden" name="d6_text_pg2" value="x" /> 
            
            <input type="hidden" name="a1_text_pg3" value="x" />
            <input type="hidden" name="b1_text_pg3" value="x" />
            <input type="hidden" name="c1_text_pg3" value="x" />
            <input type="hidden" name="d1_text_pg3" value="x" />       
            <input type="hidden" name="a2_text_pg3" value="x" />
            <input type="hidden" name="b2_text_pg3" value="x" />
            <input type="hidden" name="c2_text_pg3" value="x" />
            <input type="hidden" name="d2_text_pg3" value="x" />
            <input type="hidden" name="a3_text_pg3" value="x" />
            <input type="hidden" name="b3_text_pg3" value="x" />
            <input type="hidden" name="c3_text_pg3" value="x" />
            <input type="hidden" name="d3_text_pg3" value="x" />
            <input type="hidden" name="a4_text_pg3" value="x" />
            <input type="hidden" name="b4_text_pg3" value="x" />
            <input type="hidden" name="c4_text_pg3" value="x" />
            <input type="hidden" name="d4_text_pg3" value="x" />
            <input type="hidden" name="a5_text_pg3" value="x" />
            <input type="hidden" name="b5_text_pg3" value="x" />
            <input type="hidden" name="c5_text_pg3" value="x" />
            <input type="hidden" name="d5_text_pg3" value="x" />
            <input type="hidden" name="a6_text_pg3" value="x" />
            <input type="hidden" name="b6_text_pg3" value="x" />
            <input type="hidden" name="c6_text_pg3" value="x" />
            <input type="hidden" name="d6_text_pg3" value="x" />
	</form>
</div><!-- clear_all -->

<div id="reset">
<h1>Reset Page</h1>
<span class="errorText">This will reset all the labels <b<u>and</u></b> clocks.<br /><br /></span>
<p>This will reset all the labels and clocks to their original values. The hyperlink addresses will not be affected.</p>
<p>If you go into Edit Mode and select an &quot;x&quot; from the hyperlink grid you will still find the address that was there before you pressed this button. Addresses are not visible on the homepage, only their labels.</p>
<p><a href="edit_mode.php" class="dictionaryReverse">Never mind - go back to Edit Mode</a></p>
	<form class="display" action="processing/reset.php" method="post">
    <input type="submit" value="Reset" /> 
    
    		<input type="hidden" name="color_scheme" value="slate" />
            <input type="hidden" name="clock_hours" value="12" />
            <input type="hidden" name="clock1_name" value="Colorado, USA" />
            <input type="hidden" name="clock1_zone" value="us_mountain" />
            <input type="hidden" name="clock2_name" value="London" />
            <input type="hidden" name="clock2_zone" value="london" />
            <input type="hidden" name="clock3_name" value="Tokyo" />
            <input type="hidden" name="clock3_zone" value="tokyo" />
            <input type="hidden" name="clock4_name" value="Fiji" />
            <input type="hidden" name="clock4_zone" value="auckland" />
            <input type="hidden" name="url" value="row1" />
            <input type="hidden" name="bing" value="row2" />
            <input type="hidden" name="google" value="row3" />
            <input type="hidden" name="reference" value="row4" />
            <input type="hidden" name="youtube" value="row5" />
            <input type="hidden" name="reference_swap" value="1" />
            <input type="hidden" name="a1_text" value="Speed Test" />
            <input type="hidden" name="b1_text" value="Wikipedia" />
            <input type="hidden" name="c1_text" value="Reverse Lookup" />
            <input type="hidden" name="d1_text" value="GoDaddy" />       
            <input type="hidden" name="a2_text" value="PHP" />
            <input type="hidden" name="b2_text" value="US Bank" />
            <input type="hidden" name="c2_text" value="W1k" />
            <input type="hidden" name="d2_text" value="Weather" />
            <input type="hidden" name="a3_text" value="Keepvid" />
            <input type="hidden" name="b3_text" value="1st Bank" />
            <input type="hidden" name="c3_text" value="WSJ" />
            <input type="hidden" name="d3_text" value="Metric Conversion" />
            <input type="hidden" name="a4_text" value="IMDB" />
            <input type="hidden" name="b4_text" value="Google Voice" />
            <input type="hidden" name="c4_text" value="REI" />
            <input type="hidden" name="d4_text" value="Property Assessor" />
            <input type="hidden" name="a5_text" value="Stackoverflow" />
            <input type="hidden" name="b5_text" value="Area Codes" />
            <input type="hidden" name="c5_text" value="MTBR" />
            <input type="hidden" name="d5_text" value="Snow Report" />
            <input type="hidden" name="a6_text" value="Useful Information" />
            <input type="hidden" name="b6_text" value="Facebook" />
            <input type="hidden" name="c6_text" value="Twitter" />
            <input type="hidden" name="d6_text" value="Diacritical Marks" /> 
	</form>
</div><!-- reset -->
<div id="clear_reset_footer_msg">
<p>Neither of these buttons actually destroy anything that is not somehow recoverable. In other words, if you have filled the page with hyperlinks and labels and you click, &quot;Clear all&quot; and/or &quot;Reset&quot; your clocks and their labels will all revert back to the original settings, (which you can go back and reset) and the hyperlink <b>labels</b> will all read their original names. If you open one of the hyperlinks in Edit Mode you will still find the address in the URL field that was there before. If it says &quot;http://www.ilikebigbutts.com&quot; you will have a clear reminder of how you should label it.</p>
</div><!-- clear_reset_footer_msg -->
<?php
include 'includes/overall/footer.php'; 
?>