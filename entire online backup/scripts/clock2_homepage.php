<?php
	if ($user_data['clock2_zone'] == "x") {
		echo '&nbsp;';
	} else if (($user_data['clock2_zone'] == "eniwetok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="eniwetok_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "eniwetok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="eniwetok12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "samoa") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="samoa_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "samoa") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="samoa12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "hawaii") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="hawaii_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "hawaii") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="hawaii12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "alaska") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="alaska_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "alaska") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="alaska12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "us_pacific") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_pacific_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "us_pacific") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_pacific12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "us_mountain") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_mountain_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "us_mountain") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_mountain12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "us_central") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_central_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "us_central") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_central12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "us_eastern") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_eastern_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "us_eastern") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_eastern12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_atlantic_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="atlantic12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "newfoundland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="newfoundland_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "newfoundland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="newfoundland12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "brazil") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="brazil_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "brazil") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="brazil12_noSeconds02"></div>';	
	} else if (($user_data['clock2_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="mid_atlantic_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="mid_atlantic12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "azores") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="azores_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "azores") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="azores12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "london") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="london_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "london") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="london12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "madrid") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="madrid_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "madrid") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="madrid12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kaliningrad_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kaliningrad12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "moscow") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="moscow_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "moscow") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="moscow12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "tehran") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tehran_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "tehran") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tehran12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "abudhabi") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="abudhabi_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "abudhabi") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="abudhabi12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "kabul") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kabul_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "kabul") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kabul12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="ekaterinburg_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="ekaterinburg12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "bombay") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bombay_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "bombay") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bombay12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "kathmandu") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kathmandu_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "kathmandu") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kathmandu12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "dhaka") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="dhaka_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "dhaka") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="dhaka12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "bangkok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bangkok_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "bangkok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bangkok12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "beijing") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="beijing_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "beijing") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="beijing12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "tokyo") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tokyo_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "tokyo") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tokyo12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "adelaide") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="adelaide_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "adelaide") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="adelaide12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "e_australia") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="e_australia_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "e_australia") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="e_australia12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "magadan") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="magadan_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "magadan") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="magadan12_noSeconds02"></div>';
	} else if (($user_data['clock2_zone'] == "auckland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="auckland_noSeconds02"></div>';
		} else if (($user_data['clock2_zone'] == "auckland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="auckland12_noSeconds02"></div>';
	}
?>