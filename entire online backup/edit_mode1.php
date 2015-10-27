<?php 
include 'core/init.php';
protect_page();
include 'includes/overall/header_edit_mode.php'; 

?>
 
<div id="home">

<div id="page_select_edit_mode">
<div class="page_nav_selected">1</div><!-- page_nav_selected -->

<form class="searchform" name="page_number2" action="processing/page_number_edit_mode.php" method="post">
<input type="hidden" name="page_number" value="2">
<a href="javascript:document.page_number2.submit();" class="page_nav">2</a>
</form>

<form class="searchform" name="page_number3" action="processing/page_number_edit_mode.php" method="post">
<input type="hidden" name="page_number" value="3">
<a href="javascript:document.page_number3.submit();" class="page_nav">3</a>
</form>

</div><!-- page_select_home -->

<div id="clear_reset">
	<!-- <a href="clear_reset.php" class="clear_reset_link">Global Options</a> -->
    &nbsp;
</div><!-- clear_reset -->
<div id="clock_12_24">

<form action="processing/clocks_12_24.php" method="post">
Clocks <input type="radio" name="clock_hours" value="12" onClick="this.form.action='processing/clocks_12_24.php';this.form.submit()"<?php if (($user_data['clock_hours']) == 12) { echo 'checked="checked"';}; ?>><span class="clock_red">12</span>hr | <input type="radio" name="clock_hours" value="24" onClick="this.form.action='processing/clocks_12_24.php';this.form.submit()"<?php if (($user_data['clock_hours']) == 24) { echo 'checked="checked"';}; ?>><span class="clock_red">24</span>HR

</div></form><!-- clock_12_24 -->

<div id="color_scheme_float">
	<div id="color_scheme_container">
	<div id="color_scheme_header">Color scheme</div><!-- color_scheme_header -->
<form action="processing/color_scheme.php" method="post">
    <div id="color_scheme_row1">
    	<input type="radio" name="color_scheme" value="slate" onClick="this.form.action='processing/color_scheme.php';this.form.submit()"<?php if (($user_data['color_scheme']) == "slate") { echo 'checked="checked"';}; ?>> Slate
    </div><!-- color_scheme_row1 -->
    
    <!--
    <div id="color_scheme_row2">
    	<input type="radio" name="color_scheme" value="sofa" onClick="this.form.action='processing/color_scheme.php';this.form.submit()"<?php //if (($user_data['color_scheme']) == "sofa") { echo 'checked="checked"';}; ?>> Granola
    </div><!-- color_scheme_row2       -->    
    
    <div id="color_scheme_bottom_row">
		<input type="radio" name="color_scheme" value="spring" onClick="this.form.action='processing/color_scheme.php';this.form.submit()"<?php if (($user_data['color_scheme']) == "spring") { echo 'checked="checked"';}; ?>> Spring
    </div><!-- color_scheme_row2 -->
    </div><!-- color_scheme_container -->
</div></form><!-- color_scheme_float -->

<div id="edit_mode_h1">&nbsp;</div><!-- edit_mode_h1 -->
<!-- clock names start -->
<div id="clock1_name">
<div class="container">   
<a href="#edit_clock1" class="edit_window"><?php echo '<b>' . stripslashes($user_data['clock1_name']) . '</b>'; ?></a>
<div id="edit_clock1" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
<form method="post" class="edit" action="processing/clock1_process.php">
    <fieldset class="textbox"><label class="url"><span>Label</span>
    <input name="clock1_name" id="clock1_zone" type="text" value="<?php echo stripslashes($user_data['clock1_name']); ?>" maxlength="14"><br />
    </label><label class="text"><span>Timezone</span>
    <select name="clock1_zone" id="clock1_zone">
      <option value="x" <?php if ($user_data['clock1_zone'] == 'x') { echo 'selected'; } ?>>Leave Empty</option>
      <option value="x">&nbsp;</option>
      <option value="us_pacific" <?php if ($user_data['clock1_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock1_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock1_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock1_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="x">&nbsp;</option>
      <option value="eniwetok" <?php if ($user_data['clock1_zone'] == 'eniwetok') { echo 'selected'; } ?>>Eniwetok, Kwajalein</option>
      <option value="samoa" <?php if ($user_data['clock1_zone'] == 'soma') { echo 'selected'; } ?>>Midway Island, Samoa</option>
      <option value="hawaii" <?php if ($user_data['clock1_zone'] == 'hawaii') { echo 'selected'; } ?>>Hawaii</option>
      <option value="alaska" <?php if ($user_data['clock1_zone'] == 'alaska') { echo 'selected'; } ?>>Alaska</option>
      <option value="us_pacific" <?php if ($user_data['clock1_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock1_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock1_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock1_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="atlantic" <?php if ($user_data['clock1_zone'] == "atlantic") { echo 'selected'; } ?>>Atlantic Time (Canada), Caracas, La Paz</option>
      <option value="newfoundland" <?php if ($user_data['clock1_zone'] == "newfoundland") { echo 'selected'; } ?>>Newfoundland</option>
      <option value="brazil" <?php if ($user_data['clock1_zone'] == "brazil") { echo 'selected'; } ?>>Brazil, Buenos Aires, Georgetown</option>
      <option value="mid_atlantic" <?php if ($user_data['clock1_zone'] == "mid_atlantic") { echo 'selected'; } ?>>Mid-Atlantic</option>
      <option value="azores" <?php if ($user_data['clock1_zone'] == "azores") { echo 'selected'; } ?>>Azores, Cape Verde Islands</option>
      <option value="london" <?php if ($user_data['clock1_zone'] == "london") { echo 'selected'; } ?>>Western Europe Time, London, Lisbon, Casablanca</option>
      <option value="madrid" <?php if ($user_data['clock1_zone'] == "madrid") { echo 'selected'; } ?>>Brussels, Copenhagen, Madrid, Paris</option>
      <option value="kaliningrad" <?php if ($user_data['clock1_zone'] == "kaliningrad") { echo 'selected'; } ?>>Kaliningrad, South Africa</option>
      <option value="moscow" <?php if ($user_data['clock1_zone'] == "moscow") { echo 'selected'; } ?>>Baghdad, Riyadh, Moscow, St. Petersburg</option>
      <option value="tehran" <?php if ($user_data['clock1_zone'] == "tehran") { echo 'selected'; } ?>>Tehran</option>
      <option value="abudhabi" <?php if ($user_data['clock1_zone'] == "abudhabi") { echo 'selected'; } ?>>Abu Dhabi, Muscat, Baku, Tbilisi</option>
      <option value="kabul" <?php if ($user_data['clock1_zone'] == "kabul") { echo 'selected'; } ?>>Kabul</option>
      <option value="ekaterinburg" <?php if ($user_data['clock1_zone'] == "ekaterinburg") { echo 'selected'; } ?>>Ekaterinburg, Islamabad, Karachi, Tashkent</option>
      <option value="bombay" <?php if ($user_data['clock1_zone'] == "bombay") { echo 'selected'; } ?>>Bombay, Calcutta, Madras, New Delhi</option>
      <option value="kathmandu" <?php if ($user_data['clock1_zone'] == "kathmandu") { echo 'selected'; } ?>>Kathmandu</option>
      <option value="dhaka" <?php if ($user_data['clock1_zone'] == "dhaka") { echo 'selected'; } ?>>Almaty, Dhaka, Colombo</option>
      <option value="bangkok" <?php if ($user_data['clock1_zone'] == "bangkok") { echo 'selected'; } ?>>Bangkok, Hanoi, Jakarta</option>
      <option value="beijing" <?php if ($user_data['clock1_zone'] == "beijing") { echo 'selected'; } ?>>Beijing, Perth, Singapore, Hong Kong</option>
      <option value="tokyo" <?php if ($user_data['clock1_zone'] == "tokyo") { echo 'selected'; } ?>>Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
      <option value="adelaide" <?php if ($user_data['clock1_zone'] == "adelaide") { echo 'selected'; } ?>>Adelaide, Darwin</option>
      <option value="e_australia" <?php if ($user_data['clock1_zone'] == "e_australia") { echo 'selected'; } ?>>Eastern Australia, Guam, Vladivostok</option>
      <option value="magadan" <?php if ($user_data['clock1_zone'] == "magadan") { echo 'selected'; } ?>>Magadan, Solomon Islands, New Caledonia</option>
      <option value="auckland" <?php if ($user_data['clock1_zone'] == "auckland") { echo 'selected'; } ?>>Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
    </label><button class="submit button" type="submit">Update</button></fieldset>
</form>
</div><!-- id="edit_link" class="edit_popup" -->  
</div><!-- container -->
</div><!-- clock1_name -->

<div id="clock2_name">
<div class="container">   
<a href="#edit_clock2" class="edit_window"><?php echo '<b>' . stripslashes($user_data['clock2_name']) . '</b>'; ?></a>
<div id="edit_clock2" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
<form method="post" class="edit" action="processing/clock2_process.php">
    <fieldset class="textbox"><label class="url"><span>Label</span>
    <input name="clock2_name" type="text" value="<?php echo stripslashes($user_data['clock2_name']); ?>" maxlength="14"><br />
    </label><label class="text"><span>Timezone</span>
    <select name="clock2_zone" id="clock2_zone">
      <option value="x" <?php if ($user_data['clock2_zone'] == 'x') { echo 'selected'; } ?>>Leave Empty</option>
      <option value="x">&nbsp;</option>
      <option value="us_pacific" <?php if ($user_data['clock2_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock2_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock2_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock2_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="x">&nbsp;</option>
      <option value="eniwetok" <?php if ($user_data['clock2_zone'] == 'eniwetok') { echo 'selected'; } ?>>Eniwetok, Kwajalein</option>
      <option value="samoa" <?php if ($user_data['clock2_zone'] == 'soma') { echo 'selected'; } ?>>Midway Island, Samoa</option>
      <option value="hawaii" <?php if ($user_data['clock2_zone'] == 'hawaii') { echo 'selected'; } ?>>Hawaii</option>
      <option value="alaska" <?php if ($user_data['clock2_zone'] == 'alaska') { echo 'selected'; } ?>>Alaska</option>
      <option value="us_pacific" <?php if ($user_data['clock2_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock2_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock2_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock2_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="atlantic" <?php if ($user_data['clock2_zone'] == "atlantic") { echo 'selected'; } ?>>Atlantic Time (Canada), Caracas, La Paz</option>
      <option value="newfoundland" <?php if ($user_data['clock2_zone'] == "newfoundland") { echo 'selected'; } ?>>Newfoundland</option>
      <option value="brazil" <?php if ($user_data['clock2_zone'] == "brazil") { echo 'selected'; } ?>>Brazil, Buenos Aires, Georgetown</option>
      <option value="mid_atlantic" <?php if ($user_data['clock2_zone'] == "mid_atlantic") { echo 'selected'; } ?>>Mid-Atlantic</option>
      <option value="azores" <?php if ($user_data['clock2_zone'] == "azores") { echo 'selected'; } ?>>Azores, Cape Verde Islands</option>
      <option value="london" <?php if ($user_data['clock2_zone'] == "london") { echo 'selected'; } ?>>Western Europe Time, London, Lisbon, Casablanca</option>
      <option value="madrid" <?php if ($user_data['clock2_zone'] == "madrid") { echo 'selected'; } ?>>Brussels, Copenhagen, Madrid, Paris</option>
      <option value="kaliningrad" <?php if ($user_data['clock2_zone'] == "kaliningrad") { echo 'selected'; } ?>>Kaliningrad, South Africa</option>
      <option value="moscow" <?php if ($user_data['clock2_zone'] == "moscow") { echo 'selected'; } ?>>Baghdad, Riyadh, Moscow, St. Petersburg</option>
      <option value="tehran" <?php if ($user_data['clock2_zone'] == "tehran") { echo 'selected'; } ?>>Tehran</option>
      <option value="abudhabi" <?php if ($user_data['clock2_zone'] == "abudhabi") { echo 'selected'; } ?>>Abu Dhabi, Muscat, Baku, Tbilisi</option>
      <option value="kabul" <?php if ($user_data['clock2_zone'] == "kabul") { echo 'selected'; } ?>>Kabul</option>
      <option value="ekaterinburg" <?php if ($user_data['clock2_zone'] == "ekaterinburg") { echo 'selected'; } ?>>Ekaterinburg, Islamabad, Karachi, Tashkent</option>
      <option value="bombay" <?php if ($user_data['clock2_zone'] == "bombay") { echo 'selected'; } ?>>Bombay, Calcutta, Madras, New Delhi</option>
      <option value="kathmandu" <?php if ($user_data['clock2_zone'] == "kathmandu") { echo 'selected'; } ?>>Kathmandu</option>
      <option value="dhaka" <?php if ($user_data['clock2_zone'] == "dhaka") { echo 'selected'; } ?>>Almaty, Dhaka, Colombo</option>
      <option value="bangkok" <?php if ($user_data['clock2_zone'] == "bangkok") { echo 'selected'; } ?>>Bangkok, Hanoi, Jakarta</option>
      <option value="beijing" <?php if ($user_data['clock2_zone'] == "beijing") { echo 'selected'; } ?>>Beijing, Perth, Singapore, Hong Kong</option>
      <option value="tokyo" <?php if ($user_data['clock2_zone'] == "tokyo") { echo 'selected'; } ?>>Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
      <option value="adelaide" <?php if ($user_data['clock2_zone'] == "adelaide") { echo 'selected'; } ?>>Adelaide, Darwin</option>
      <option value="e_australia" <?php if ($user_data['clock2_zone'] == "e_australia") { echo 'selected'; } ?>>Eastern Australia, Guam, Vladivostok</option>
      <option value="magadan" <?php if ($user_data['clock2_zone'] == "magadan") { echo 'selected'; } ?>>Magadan, Solomon Islands, New Caledonia</option>
      <option value="auckland" <?php if ($user_data['clock2_zone'] == "auckland") { echo 'selected'; } ?>>Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
    </label><button class="submit button" type="submit">Update</button></fieldset>
  </form>
</div><!-- id="edit_link" class="edit_popup" -->  
</div><!-- container -->
</div><!-- clock2_name -->

<div id="clock3_name">
<div class="container">   
<a href="#edit_clock3" class="edit_window"><?php echo '<b>' . stripslashes($user_data['clock3_name']) . '</b>'; ?></a>
<div id="edit_clock3" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
<form method="post" class="edit" action="processing/clock3_process.php">
    <fieldset class="textbox"><label class="url"><span>Label</span>
    <input name="clock3_name" type="text" value="<?php echo stripslashes($user_data['clock3_name']); ?>" maxlength="14"><br />
    </label><label class="text"><span>Timezone</span>
    <select name="clock3_zone" id="clock3_zone">
      <option value="x" <?php if ($user_data['clock3_zone'] == 'x') { echo 'selected'; } ?>>Leave Empty</option>
      <option value="x">&nbsp;</option>
      <option value="us_pacific" <?php if ($user_data['clock3_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock3_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock3_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock3_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="x">&nbsp;</option>
      <option value="eniwetok" <?php if ($user_data['clock3_zone'] == 'eniwetok') { echo 'selected'; } ?>>Eniwetok, Kwajalein</option>
      <option value="samoa" <?php if ($user_data['clock3_zone'] == 'soma') { echo 'selected'; } ?>>Midway Island, Samoa</option>
      <option value="hawaii" <?php if ($user_data['clock3_zone'] == 'hawaii') { echo 'selected'; } ?>>Hawaii</option>
      <option value="alaska" <?php if ($user_data['clock3_zone'] == 'alaska') { echo 'selected'; } ?>>Alaska</option>
      <option value="us_pacific" <?php if ($user_data['clock3_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock3_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock3_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock3_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="atlantic" <?php if ($user_data['clock3_zone'] == "atlantic") { echo 'selected'; } ?>>Atlantic Time (Canada), Caracas, La Paz</option>
      <option value="newfoundland" <?php if ($user_data['clock3_zone'] == "newfoundland") { echo 'selected'; } ?>>Newfoundland</option>
      <option value="brazil" <?php if ($user_data['clock3_zone'] == "brazil") { echo 'selected'; } ?>>Brazil, Buenos Aires, Georgetown</option>
      <option value="mid_atlantic" <?php if ($user_data['clock3_zone'] == "mid_atlantic") { echo 'selected'; } ?>>Mid-Atlantic</option>
      <option value="azores" <?php if ($user_data['clock3_zone'] == "azores") { echo 'selected'; } ?>>Azores, Cape Verde Islands</option>
      <option value="london" <?php if ($user_data['clock3_zone'] == "london") { echo 'selected'; } ?>>Western Europe Time, London, Lisbon, Casablanca</option>
      <option value="madrid" <?php if ($user_data['clock3_zone'] == "madrid") { echo 'selected'; } ?>>Brussels, Copenhagen, Madrid, Paris</option>
      <option value="kaliningrad" <?php if ($user_data['clock3_zone'] == "kaliningrad") { echo 'selected'; } ?>>Kaliningrad, South Africa</option>
      <option value="moscow" <?php if ($user_data['clock3_zone'] == "moscow") { echo 'selected'; } ?>>Baghdad, Riyadh, Moscow, St. Petersburg</option>
      <option value="tehran" <?php if ($user_data['clock3_zone'] == "tehran") { echo 'selected'; } ?>>Tehran</option>
      <option value="abudhabi" <?php if ($user_data['clock3_zone'] == "abudhabi") { echo 'selected'; } ?>>Abu Dhabi, Muscat, Baku, Tbilisi</option>
      <option value="kabul" <?php if ($user_data['clock3_zone'] == "kabul") { echo 'selected'; } ?>>Kabul</option>
      <option value="ekaterinburg" <?php if ($user_data['clock3_zone'] == "ekaterinburg") { echo 'selected'; } ?>>Ekaterinburg, Islamabad, Karachi, Tashkent</option>
      <option value="bombay" <?php if ($user_data['clock3_zone'] == "bombay") { echo 'selected'; } ?>>Bombay, Calcutta, Madras, New Delhi</option>
      <option value="kathmandu" <?php if ($user_data['clock3_zone'] == "kathmandu") { echo 'selected'; } ?>>Kathmandu</option>
      <option value="dhaka" <?php if ($user_data['clock3_zone'] == "dhaka") { echo 'selected'; } ?>>Almaty, Dhaka, Colombo</option>
      <option value="bangkok" <?php if ($user_data['clock3_zone'] == "bangkok") { echo 'selected'; } ?>>Bangkok, Hanoi, Jakarta</option>
      <option value="beijing" <?php if ($user_data['clock3_zone'] == "beijing") { echo 'selected'; } ?>>Beijing, Perth, Singapore, Hong Kong</option>
      <option value="tokyo" <?php if ($user_data['clock3_zone'] == "tokyo") { echo 'selected'; } ?>>Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
      <option value="adelaide" <?php if ($user_data['clock3_zone'] == "adelaide") { echo 'selected'; } ?>>Adelaide, Darwin</option>
      <option value="e_australia" <?php if ($user_data['clock3_zone'] == "e_australia") { echo 'selected'; } ?>>Eastern Australia, Guam, Vladivostok</option>
      <option value="magadan" <?php if ($user_data['clock3_zone'] == "magadan") { echo 'selected'; } ?>>Magadan, Solomon Islands, New Caledonia</option>
      <option value="auckland" <?php if ($user_data['clock3_zone'] == "auckland") { echo 'selected'; } ?>>Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
    </label><button class="submit button" type="submit">Update</button></fieldset>
  </form>
</div><!-- id="edit_link" class="edit_popup" -->  
</div><!-- container -->
</div><!-- clock3_name -->

<div id="clock4_name">
<div class="container">   
<a href="#edit_clock4" class="edit_window"><?php echo '<b>' . stripslashes($user_data['clock4_name']) . '</b>'; ?></a>
<div id="edit_clock4" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
<form method="post" class="edit" action="processing/clock4_process.php">
<fieldset class="textbox"><label class="url"><span>Label</span>
<input name="clock4_name" type="text" value="<?php echo stripslashes($user_data['clock4_name']); ?>" maxlength="14"></label><br />
      <label class="text">
      <span>Timezone</span>
      <select name="clock4_zone" id="clock4_zone">
      <option value="x" <?php if ($user_data['clock4_zone'] == 'x') { echo 'selected'; } ?>>Leave Empty</option>
      <option value="x">&nbsp;</option>
      <option value="us_pacific" <?php if ($user_data['clock4_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock4_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock4_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock4_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="x">&nbsp;</option>
      <option value="eniwetok" <?php if ($user_data['clock4_zone'] == 'eniwetok') { echo 'selected'; } ?>>Eniwetok, Kwajalein</option>
      <option value="samoa" <?php if ($user_data['clock4_zone'] == 'soma') { echo 'selected'; } ?>>Midway Island, Samoa</option>
      <option value="hawaii" <?php if ($user_data['clock4_zone'] == 'hawaii') { echo 'selected'; } ?>>Hawaii</option>
      <option value="alaska" <?php if ($user_data['clock4_zone'] == 'alaska') { echo 'selected'; } ?>>Alaska</option>
      <option value="us_pacific" <?php if ($user_data['clock4_zone'] == 'us_pacific') { echo 'selected'; } ?>>Pacific Time (US &amp; Canada)</option>
      <option value="us_mountain" <?php if ($user_data['clock4_zone'] == 'us_mountain') { echo 'selected'; } ?>>Mountain Time (US &amp; Canada)</option>
      <option value="us_central" <?php if ($user_data['clock4_zone'] == 'us_central') { echo 'selected'; } ?>>Central Time (US &amp; Canada), Mexico City</option>
      <option value="us_eastern" <?php if ($user_data['clock4_zone'] == 'us_eastern') { echo 'selected'; } ?>>Eastern Time (US &amp; Canada), Bogota, Lima</option>
      <option value="atlantic" <?php if ($user_data['clock4_zone'] == "atlantic") { echo 'selected'; } ?>>Atlantic Time (Canada), Caracas, La Paz</option>
      <option value="newfoundland" <?php if ($user_data['clock4_zone'] == "newfoundland") { echo 'selected'; } ?>>Newfoundland</option>
      <option value="brazil" <?php if ($user_data['clock4_zone'] == "brazil") { echo 'selected'; } ?>>Brazil, Buenos Aires, Georgetown</option>
      <option value="mid_atlantic" <?php if ($user_data['clock4_zone'] == "mid_atlantic") { echo 'selected'; } ?>>Mid-Atlantic</option>
      <option value="azores" <?php if ($user_data['clock4_zone'] == "azores") { echo 'selected'; } ?>>Azores, Cape Verde Islands</option>
      <option value="london" <?php if ($user_data['clock4_zone'] == "london") { echo 'selected'; } ?>>Western Europe Time, London, Lisbon, Casablanca</option>
      <option value="madrid" <?php if ($user_data['clock4_zone'] == "madrid") { echo 'selected'; } ?>>Brussels, Copenhagen, Madrid, Paris</option>
      <option value="kaliningrad" <?php if ($user_data['clock4_zone'] == "kaliningrad") { echo 'selected'; } ?>>Kaliningrad, South Africa</option>
      <option value="moscow" <?php if ($user_data['clock4_zone'] == "moscow") { echo 'selected'; } ?>>Baghdad, Riyadh, Moscow, St. Petersburg</option>
      <option value="tehran" <?php if ($user_data['clock4_zone'] == "tehran") { echo 'selected'; } ?>>Tehran</option>
      <option value="abudhabi" <?php if ($user_data['clock4_zone'] == "abudhabi") { echo 'selected'; } ?>>Abu Dhabi, Muscat, Baku, Tbilisi</option>
      <option value="kabul" <?php if ($user_data['clock4_zone'] == "kabul") { echo 'selected'; } ?>>Kabul</option>
      <option value="ekaterinburg" <?php if ($user_data['clock4_zone'] == "ekaterinburg") { echo 'selected'; } ?>>Ekaterinburg, Islamabad, Karachi, Tashkent</option>
      <option value="bombay" <?php if ($user_data['clock4_zone'] == "bombay") { echo 'selected'; } ?>>Bombay, Calcutta, Madras, New Delhi</option>
      <option value="kathmandu" <?php if ($user_data['clock4_zone'] == "kathmandu") { echo 'selected'; } ?>>Kathmandu</option>
      <option value="dhaka" <?php if ($user_data['clock4_zone'] == "dhaka") { echo 'selected'; } ?>>Almaty, Dhaka, Colombo</option>
      <option value="bangkok" <?php if ($user_data['clock4_zone'] == "bangkok") { echo 'selected'; } ?>>Bangkok, Hanoi, Jakarta</option>
      <option value="beijing" <?php if ($user_data['clock4_zone'] == "beijing") { echo 'selected'; } ?>>Beijing, Perth, Singapore, Hong Kong</option>
      <option value="tokyo" <?php if ($user_data['clock4_zone'] == "tokyo") { echo 'selected'; } ?>>Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
      <option value="adelaide" <?php if ($user_data['clock4_zone'] == "adelaide") { echo 'selected'; } ?>>Adelaide, Darwin</option>
      <option value="e_australia" <?php if ($user_data['clock4_zone'] == "e_australia") { echo 'selected'; } ?>>Eastern Australia, Guam, Vladivostok</option>
      <option value="magadan" <?php if ($user_data['clock4_zone'] == "magadan") { echo 'selected'; } ?>>Magadan, Solomon Islands, New Caledonia</option>
      <option value="auckland" <?php if ($user_data['clock4_zone'] == "auckland") { echo 'selected'; } ?>>Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
</label><button class="submit button" type="submit">Update</button></fieldset>
</form>
</div><!-- id="edit_link" class="edit_popup" -->  
</div><!-- container -->
</div><!-- clock4_name -->
<!-- clock names end -->

<!-- clocks start -->
<div id="clock1">
<?php
include 'scripts/clock1_homepage.php';
?>
</div><!-- clock1 -->

<div id="clock2">
<?php
include 'scripts/clock2_homepage.php';
?>
</div><!-- clock2 -->

<div id="clock3">
<?php
include 'scripts/clock3_homepage.php';
?>
</div><!-- clock3 -->

<div id="clock4">
<?php
include 'scripts/clock4_homepage.php';
?>
</div><!-- clock4 -->
<!-- clocks end -->

<div id="floatlayer">
    <div id="floatlayerTop">
    	<div id="columnHeader">
        	1 &nbsp; 2 &nbsp; 3 &nbsp; 4 &nbsp; 5
        </div><!-- columnHeader -->
    	<div id="row1">
        <form action="row_order/row_processing.php" method="post">
<?php 
	if ($user_data['url'] == "row1") { 
		include 'row_order/url_row1.php'; 
	} else if ($user_data['bing'] == "row1") { 
		include 'row_order/bing_row1.php'; 
	} else if ($user_data['google'] == "row1") { 
		include 'row_order/google_row1.php'; 
	} else if ($user_data['reference'] == "row1") { 
		include 'row_order/reference_row1.php'; 
	} else { 
		include 'row_order/youtube_row1.php'; 
	} 
?>
        </div><!-- row1 -->
        <div id="row2">
<?php 
	if ($user_data['url'] == "row2") { 
		include 'row_order/url_row2.php'; 
	} else if ($user_data['bing'] == "row2") { 
		include 'row_order/bing_row2.php'; 
	} else if ($user_data['google'] == "row2") { 
		include 'row_order/google_row2.php'; 
	} else if ($user_data['reference'] == "row2") { 
		include 'row_order/reference_row2.php'; 
	} else { 
		include 'row_order/youtube_row2.php'; 
	} 
?>
        </div><!-- row2 -->
        <div id="row3">
<?php 
	if ($user_data['url'] == "row3") { 
		include 'row_order/url_row3.php'; 
	} else if ($user_data['bing'] == "row3") { 
		include 'row_order/bing_row3.php'; 
	} else if ($user_data['google'] == "row3") { 
		include 'row_order/google_row3.php'; 
	} else if ($user_data['reference'] == "row3") { 
		include 'row_order/reference_row3.php'; 
	} else { 
		include 'row_order/youtube_row3.php'; 
	} 
?>
        </div><!-- row3 -->
        <div id="row4">
<?php 
	if ($user_data['url'] == "row4") { 
		include 'row_order/url_row4.php'; 
	} else if ($user_data['bing'] == "row4") { 
		include 'row_order/bing_row4.php'; 
	} else if ($user_data['google'] == "row4") { 
		include 'row_order/google_row4.php'; 
	} else if ($user_data['reference'] == "row4") { 
		include 'row_order/reference_row4.php'; 
	} else { 
		include 'row_order/youtube_row4.php'; 
	} 
?>
        </div><!-- row4 -->
     </div><!-- floatlayerTop -->

        <div id="rowSpacer">
        	&nbsp;
        </div><!-- rowSpacer -->

        <div id="floatlayerBottom">
        <div id="row5">
<?php 
	if ($user_data['url'] == "row5") { 
		include 'row_order/url_row5.php'; 
	} else if ($user_data['bing'] == "row5") { 
		include 'row_order/bing_row5.php'; 
	} else if ($user_data['google'] == "row5") { 
		include 'row_order/google_row5.php'; 
	} else if ($user_data['reference'] == "row5") { 
		include 'row_order/reference_row5.php'; 
	} else { 
		include 'row_order/youtube_row5.php'; 
	} 
?>
        </div><!-- row5 -->
        <div id="submitBtn">
        	<input type="submit" value="Update" />
            </form>
        </div><!-- submitBtn -->
        </div><!-- floatlayerBottom -->
    </div><!-- floatlayer -->     

<div id="primary_row_01">
	
<?php 
	if ($user_data['url'] == "row1") { 
		include 'row_order/urlBar.php'; 
	} else if ($user_data['bing'] == "row1") { 
		include 'row_order/bingBar.php'; 
	} else if ($user_data['google'] == "row1") { 
		include 'row_order/googleBar.php'; 
	} else if (($user_data['reference'] == "row1") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar.php'; 
	} else if (($user_data['reference'] == "row1") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBarSwap.php'; 
	} else { 
		include 'row_order/youtubeBar.php'; 
	} 
?>

</div><!-- primary_row_01 -->
<div id="primary_row_02">

<?php 
	if ($user_data['url'] == "row2") { 
		include 'row_order/urlBar.php'; 
	} else if ($user_data['bing'] == "row2") { 
		include 'row_order/bingBar.php'; 
	} else if ($user_data['google'] == "row2") { 
		include 'row_order/googleBar.php'; 
	} else if (($user_data['reference'] == "row2") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar.php'; 
	} else if (($user_data['reference'] == "row2") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBarSwap.php'; 
	} else { 
		include 'row_order/youtubeBar.php'; 
	} 
?>
    
</div><!-- primary_row_02 -->
<div id="primary_row_03">
 
<?php 
	if ($user_data['url'] == "row3") { 
		include 'row_order/urlBar.php'; 
	} else if ($user_data['bing'] == "row3") { 
		include 'row_order/bingBar.php'; 
	} else if ($user_data['google'] == "row3") { 
		include 'row_order/googleBar.php'; 
	} else if (($user_data['reference'] == "row3") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar.php'; 
	} else if (($user_data['reference'] == "row3") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBarSwap.php'; 
	} else { 
		include 'row_order/youtubeBar.php'; 
	} 
?>
    
</div><!-- primary_row_03 -->
<div id="primary_row_04">
   
<?php 
	if ($user_data['url'] == "row4") { 
		include 'row_order/urlBar.php'; 
	} else if ($user_data['bing'] == "row4") { 
		include 'row_order/bingBar.php'; 
	} else if ($user_data['google'] == "row4") { 
		include 'row_order/googleBar.php'; 
	} else if (($user_data['reference'] == "row4") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar.php'; 
	} else if (($user_data['reference'] == "row4") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBarSwap.php'; 
	} else { 
		include 'row_order/youtubeBar.php'; 
	} 
?>
    
</div><!-- primary_row_04 -->

<div id="linkBoxWrapper">
<div id="top_spacer">&nbsp;</div><!-- top_spacer -->
<div id="leftGutter">&nbsp;</div><!-- leftGutter -->

<!-- ***************************************************** row 1 begin **************************************************** -->   
    <span class="linkBox"><!-- a1 -->
    <div class="container">   
    <a href="#edit_link_a1" class="edit_window"><?php echo stripslashes($user_data['a1_text']); ?></a>
            <div id="edit_link_a1" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a1_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a1_url" type="text" value="<?php echo $user_data['a1_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a1_text" type="text" value="<?php echo stripslashes($user_data['a1_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a1 -->
     
    <span class="linkBox"><!-- b1 -->
    <div class="container">   
    <a href="#edit_link_b1" class="edit_window"><?php echo stripslashes($user_data['b1_text']); ?></a>
            <div id="edit_link_b1" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b1_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b1_url" type="text" value="<?php echo $user_data['b1_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b1_text" type="text" value="<?php echo stripslashes($user_data['b1_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b1 -->
       
    <span class="linkBox"><!-- c1 -->
    <div class="container">   
    <a href="#edit_link_c1" class="edit_window"><?php echo stripslashes($user_data['c1_text']); ?></a>
            <div id="edit_link_c1" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c1_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c1_url" type="text" value="<?php echo $user_data['c1_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c1_text" type="text" value="<?php echo stripslashes($user_data['c1_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c1 -->
    
    <span class="linkBox"><!-- d1 -->
    <div class="container">   
    <a href="#edit_link_d1" class="edit_window"><?php echo stripslashes($user_data['d1_text']); ?></a>
            <div id="edit_link_d1" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d1_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d1_url" type="text" value="<?php echo $user_data['d1_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d1_text" type="text" value="<?php echo stripslashes($user_data['d1_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d1 -->
    
<!-- ****************************************************** row 1 end ***************************************************** -->
<!-- ****************************************************** row 2 begin *************************************************** -->    

    <span class="linkBox"><!-- a2 -->
    <div class="container">   
    <a href="#edit_link_a2" class="edit_window"><?php echo stripslashes($user_data['a2_text']); ?></a>
            <div id="edit_link_a2" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a2_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a2_url" type="text" value="<?php echo $user_data['a2_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a2_text" type="text" value="<?php echo stripslashes($user_data['a2_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a2 -->
    
    <span class="linkBox"><!-- b2 -->
    <div class="container">   
    <a href="#edit_link_b2" class="edit_window"><?php echo stripslashes($user_data['b2_text']); ?></a>
            <div id="edit_link_b2" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b2_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b2_url" type="text" value="<?php echo $user_data['b2_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b2_text" type="text" value="<?php echo stripslashes($user_data['b2_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b2 -->
    
    <span class="linkBox"><!-- c2 -->
    <div class="container">   
    <a href="#edit_link_c2" class="edit_window"><?php echo stripslashes($user_data['c2_text']); ?></a>
            <div id="edit_link_c2" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c2_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c2_url" type="text" value="<?php echo $user_data['c2_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c2_text" type="text" value="<?php echo stripslashes($user_data['c2_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c2 -->
    
    <span class="linkBox"><!-- d2 -->
    <div class="container">   
    <a href="#edit_link_d2" class="edit_window"><?php echo stripslashes($user_data['d2_text']); ?></a>
            <div id="edit_link_d2" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d2_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d2_url" type="text" value="<?php echo $user_data['d2_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d2_text" type="text" value="<?php echo stripslashes($user_data['d2_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d2 -->
    
<!-- ****************************************************** row 2 end ***************************************************** -->
<!-- ****************************************************** row 3 begin *************************************************** -->    

    <span class="linkBox"><!-- a3 -->
    <div class="container">   
    <a href="#edit_link_a3" class="edit_window"><?php echo stripslashes($user_data['a3_text']); ?></a>
            <div id="edit_link_a3" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a3_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a3_url" type="text" value="<?php echo $user_data['a3_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a3_text" type="text" value="<?php echo stripslashes($user_data['a3_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a3 -->
    
    <span class="linkBox"><!-- b3 -->
    <div class="container">   
    <a href="#edit_link_b3" class="edit_window"><?php echo stripslashes($user_data['b3_text']); ?></a>
            <div id="edit_link_b3" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b3_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b3_url" type="text" value="<?php echo $user_data['b3_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b3_text" type="text" value="<?php echo stripslashes($user_data['b3_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b3 -->
    
    <span class="linkBox"><!-- c3 -->
    <div class="container">   
    <a href="#edit_link_c3" class="edit_window"><?php echo stripslashes($user_data['c3_text']); ?></a>
            <div id="edit_link_c3" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c3_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c3_url" type="text" value="<?php echo $user_data['c3_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c3_text" type="text" value="<?php echo stripslashes($user_data['c3_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c3 -->
    
    <span class="linkBox"><!-- d3 -->
    <div class="container">   
    <a href="#edit_link_d3" class="edit_window"><?php echo stripslashes($user_data['d3_text']); ?></a>
            <div id="edit_link_d3" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d3_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d3_url" type="text" value="<?php echo $user_data['d3_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d3_text" type="text" value="<?php echo stripslashes($user_data['d3_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d3 -->
    
<!-- ****************************************************** row 3 end ***************************************************** -->
<!-- ****************************************************** row 4 begin *************************************************** -->    

    <span class="linkBox"><!-- a4 -->
    <div class="container">   
    <a href="#edit_link_a4" class="edit_window"><?php echo stripslashes($user_data['a4_text']); ?></a>
            <div id="edit_link_a4" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a4_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a4_url" type="text" value="<?php echo $user_data['a4_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a4_text" type="text" value="<?php echo stripslashes($user_data['a4_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a4 -->
    
    <span class="linkBox"><!-- b4 -->
    <div class="container">   
    <a href="#edit_link_b4" class="edit_window"><?php echo stripslashes($user_data['b4_text']); ?></a>
            <div id="edit_link_b4" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b4_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b4_url" type="text" value="<?php echo $user_data['b4_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b4_text" type="text" value="<?php echo stripslashes($user_data['b4_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b4 -->
    
    <span class="linkBox"><!-- c4 -->
    <div class="container">   
    <a href="#edit_link_c4" class="edit_window"><?php echo stripslashes($user_data['c4_text']); ?></a>
            <div id="edit_link_c4" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c4_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c4_url" type="text" value="<?php echo $user_data['c4_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c4_text" type="text" value="<?php echo stripslashes($user_data['c4_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c4 -->
    
    <span class="linkBox"><!-- d4 -->
    <div class="container">   
    <a href="#edit_link_d4" class="edit_window"><?php echo stripslashes($user_data['d4_text']); ?></a>
            <div id="edit_link_d4" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d4_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d4_url" type="text" value="<?php echo $user_data['d4_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d4_text" type="text" value="<?php echo stripslashes($user_data['d4_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d4 -->
    
<!-- ****************************************************** row 4 end ***************************************************** -->
<!-- ****************************************************** row 5 begin *************************************************** -->    

    <span class="linkBox"><!-- a5 -->
    <div class="container">   
    <a href="#edit_link_a5" class="edit_window"><?php echo stripslashes($user_data['a5_text']); ?></a>
            <div id="edit_link_a5" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a5_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a5_url" type="text" value="<?php echo $user_data['a5_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a5_text" type="text" value="<?php echo stripslashes($user_data['a5_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a5 -->
    
    <span class="linkBox"><!-- b5 -->
    <div class="container">   
    <a href="#edit_link_b5" class="edit_window"><?php echo stripslashes($user_data['b5_text']); ?></a>
            <div id="edit_link_b5" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b5_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b5_url" type="text" value="<?php echo $user_data['b5_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b5_text" type="text" value="<?php echo stripslashes($user_data['b5_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b5 -->
    
    <span class="linkBox"><!-- c5 -->
    <div class="container">   
    <a href="#edit_link_c5" class="edit_window"><?php echo stripslashes($user_data['c5_text']); ?></a>
            <div id="edit_link_c5" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c5_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c5_url" type="text" value="<?php echo $user_data['c5_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c5_text" type="text" value="<?php echo stripslashes($user_data['c5_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c5 -->
    
    <span class="linkBox"><!-- d5 -->
    <div class="container">   
    <a href="#edit_link_d5" class="edit_window"><?php echo stripslashes($user_data['d5_text']); ?></a>
            <div id="edit_link_d5" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d5_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d5_url" type="text" value="<?php echo $user_data['d5_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d5_text" type="text" value="<?php echo stripslashes($user_data['d5_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d5 -->
    
<!-- ****************************************************** row 5 end ***************************************************** -->
<!-- ****************************************************** row 6 begin *************************************************** -->    

    <span class="linkBox"><!-- a6 -->
    <div class="container">   
    <a href="#edit_link_a6" class="edit_window"><?php echo stripslashes($user_data['a6_text']); ?></a>
            <div id="edit_link_a6" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/a6_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="a6_url" type="text" value="<?php echo $user_data['a6_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="a6_text" type="text" value="<?php echo stripslashes($user_data['a6_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end a6 -->
    
    <span class="linkBox"><!-- b6 -->
    <div class="container">   
    <a href="#edit_link_b6" class="edit_window"><?php echo stripslashes($user_data['b6_text']); ?></a>
            <div id="edit_link_b6" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/b6_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="b6_url" type="text" value="<?php echo $user_data['b6_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="b6_text" type="text" value="<?php echo stripslashes($user_data['b6_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end b6 -->
    
    <span class="linkBox"><!-- c6 -->
    <div class="container">   
    <a href="#edit_link_c6" class="edit_window"><?php echo stripslashes($user_data['c6_text']); ?></a>
            <div id="edit_link_c6" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/c6_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="c6_url" type="text" value="<?php echo $user_data['c6_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="c6_text" type="text" value="<?php echo stripslashes($user_data['c6_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end c6 -->
    
    <span class="linkBox"><!-- d6 -->
    <div class="container">   
    <a href="#edit_link_d6" class="edit_window"><?php echo stripslashes($user_data['d6_text']); ?></a>
            <div id="edit_link_d6" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="edit" action="processing/d6_process.php">
                    <fieldset class="textbox"><label class="url"><span>URL</span>
                    
                    <input name="d6_url" type="text" value="<?php echo $user_data['d6_url']; ?>" maxlength="1024">
                    </label><label class="text"><span>Label - limit 30 characters</span>
                    
                    <input name="d6_text" type="text" value="<?php echo stripslashes($user_data['d6_text']); ?>" maxlength="30">
                    
                    </label><button class="submit button" type="submit">Update</button></fieldset>
              </form>
            </div><!-- id="edit_link" class="edit_popup" -->  
    </div><!-- container -->
    </span><!-- end d6 -->
    
<!-- ****************************************************** row 6 end ***************************************************** -->

</div><!-- linkBoxWrapper -->
<div id="bottom_spacer">&nbsp;</div><!-- bottom_spacer -->
<div id="primary_row_05">

<?php 
	if ($user_data['url'] == "row5") { 
		include 'row_order/urlBar.php'; 
	} else if ($user_data['bing'] == "row5") { 
		include 'row_order/bingBar.php'; 
	} else if ($user_data['google'] == "row5") { 
		include 'row_order/googleBar.php'; 
	} else if (($user_data['reference'] == "row5") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar.php'; 
	} else if (($user_data['reference'] == "row5") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBarSwap.php'; 
	} else { 
		include 'row_order/youtubeBar.php'; 
	} 
?>
    
</div><!-- primary_row_05 --> 

<div id="messagesBar">&nbsp;</div><!-- messagesBar -->

<?php
include 'includes/overall/footer.php'; 
?>