<?php
	if ($user_data['clock1_zone'] == "x") {
		echo '&nbsp;';
	} else if (($user_data['clock1_zone'] == "eniwetok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="eniwetok_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "eniwetok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="eniwetok12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "samoa") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="samoa_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "samoa") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="samoa12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "hawaii") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="hawaii_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "hawaii") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="hawaii12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "alaska") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="hawaii_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "alaska") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="alaska12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "us_pacific") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_pacific_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "us_pacific") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_pacific12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "us_mountain") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_mountain_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "us_mountain") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_mountain12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "us_central") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_central_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "us_central") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_central12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "us_eastern") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_eastern_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "us_eastern") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_eastern12_noSeconds01"></div>';	
	} else if (($user_data['clock1_zone'] == "atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="atlantic_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="atlantic12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "newfoundland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="newfoundland_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "newfoundland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="newfoundland12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "brazil") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="brazil_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "brazil") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="brazil12_noSeconds01"></div>';	
	} else if (($user_data['clock1_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="mid_atlantic_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="mid_atlantic12_noSeconds01"></div>';			
	} else if (($user_data['clock1_zone'] == "azores") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="azores_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "azores") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="azores12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "london") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="london_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "london") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="london12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "madrid") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="madrid_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "madrid") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="madrid12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kaliningrad_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kaliningrad12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "moscow") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="moscow_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "moscow") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="moscow12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "tehran") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tehran_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "tehran") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tehran12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "abudhabi") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="abudhabi_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "abudhabi") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="abudhabi12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "kabul") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kabul_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "kabul") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kabul12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="ekaterinburg_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="ekaterinburg12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "bombay") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bombay_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "bombay") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bombay12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "kathmandu") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kathmandu_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "kathmandu") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kathmandu12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "dhaka") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="dhaka_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "dhaka") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="dhaka12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "bangkok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bangkok_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "bangkok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bangkok12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "beijing") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="beijing_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "beijing") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="beijing12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "tokyo") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tokyo_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "tokyo") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tokyo12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "adelaide") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="adelaide_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "adelaide") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="adelaide12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "e_australia") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="e_australia_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "e_australia") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="e_australia12_noSeconds01"></div>';
	} else if (($user_data['clock1_zone'] == "magadan") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="magadan_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "magadan") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="magadan12_noSeconds01"></div>';	
	} else if (($user_data['clock1_zone'] == "auckland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="auckland_noSeconds01"></div>';
		} else if (($user_data['clock1_zone'] == "auckland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="auckland12_noSeconds01"></div>';
	}
?>