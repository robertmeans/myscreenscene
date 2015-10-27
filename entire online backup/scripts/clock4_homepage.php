<?php
	if ($user_data['clock4_zone'] == "x") {
		echo '&nbsp;';
	} else if (($user_data['clock4_zone'] == "eniwetok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="eniwetok04"></div>';
		} else if (($user_data['clock4_zone'] == "eniwetok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="eniwetok1204"></div>';
	} else if (($user_data['clock4_zone'] == "samoa") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="samoa04"></div>';
		} else if (($user_data['clock4_zone'] == "samoa") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="samoa1204"></div>';
	} else if (($user_data['clock4_zone'] == "hawaii") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="hawaii04"></div>';
		} else if (($user_data['clock4_zone'] == "hawaii") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="hawaii1204"></div>';
	} else if (($user_data['clock4_zone'] == "alaska") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="hawaii04"></div>';
		} else if (($user_data['clock4_zone'] == "alaska") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="alaska1204"></div>';
	} else if (($user_data['clock4_zone'] == "us_pacific") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_pacific04"></div>';
		} else if (($user_data['clock4_zone'] == "us_pacific") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_pacific1204"></div>';
	} else if (($user_data['clock4_zone'] == "us_mountain") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_mountain04"></div>';
		} else if (($user_data['clock4_zone'] == "us_mountain") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_mountain1204"></div>';
	} else if (($user_data['clock4_zone'] == "us_central") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_central04"></div>';
		} else if (($user_data['clock4_zone'] == "us_central") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_central1204"></div>';
	} else if (($user_data['clock4_zone'] == "us_eastern") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_eastern04"></div>';
		} else if (($user_data['clock4_zone'] == "us_eastern") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="us_eastern1204"></div>';	
	} else if (($user_data['clock4_zone'] == "atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="us_atlantic04"></div>';
		} else if (($user_data['clock4_zone'] == "atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="atlantic1204"></div>';
	} else if (($user_data['clock4_zone'] == "newfoundland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="newfoundland04"></div>';
		} else if (($user_data['clock4_zone'] == "newfoundland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="newfoundland1204"></div>';
	} else if (($user_data['clock4_zone'] == "brazil") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="brazil04"></div>';
		} else if (($user_data['clock4_zone'] == "brazil") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="brazil1204"></div>';	
	} else if (($user_data['clock4_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="mid_atlantic04"></div>';
		} else if (($user_data['clock4_zone'] == "mid_atlantic") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="mid_atlantic1204"></div>';		
	} else if (($user_data['clock4_zone'] == "azores") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="azores04"></div>';
		} else if (($user_data['clock4_zone'] == "azores") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="azores1204"></div>';
	} else if (($user_data['clock4_zone'] == "london") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="london04"></div>';
		} else if (($user_data['clock4_zone'] == "london") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="london1204"></div>';
	} else if (($user_data['clock4_zone'] == "madrid") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="madrid04"></div>';
		} else if (($user_data['clock4_zone'] == "madrid") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="madrid1204"></div>';
	} else if (($user_data['clock4_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kaliningrad04"></div>';
		} else if (($user_data['clock4_zone'] == "kaliningrad") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kaliningrad1204"></div>';
	} else if (($user_data['clock4_zone'] == "moscow") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="moscow04"></div>';
		} else if (($user_data['clock4_zone'] == "moscow") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="moscow1204"></div>';
	} else if (($user_data['clock4_zone'] == "tehran") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tehran04"></div>';
		} else if (($user_data['clock4_zone'] == "tehran") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tehran1204"></div>';
	} else if (($user_data['clock4_zone'] == "abudhabi") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="abudhabi04"></div>';
		} else if (($user_data['clock4_zone'] == "abudhabi") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="abudhabi1204"></div>';
	} else if (($user_data['clock4_zone'] == "kabul") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kabul04"></div>';
		} else if (($user_data['clock4_zone'] == "kabul") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kabul1204"></div>';
	} else if (($user_data['clock4_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="ekaterinburg04"></div>';
		} else if (($user_data['clock4_zone'] == "ekaterinburg") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="ekaterinburg1204"></div>';
	} else if (($user_data['clock4_zone'] == "bombay") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bombay04"></div>';
		} else if (($user_data['clock4_zone'] == "bombay") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bombay1204"></div>';
	} else if (($user_data['clock4_zone'] == "kathmandu") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="kathmandu04"></div>';
		} else if (($user_data['clock4_zone'] == "kathmandu") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="kathmandu1204"></div>';
	} else if (($user_data['clock4_zone'] == "dhaka") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="dhaka04"></div>';
		} else if (($user_data['clock4_zone'] == "dhaka") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="dhaka1204"></div>';
	} else if (($user_data['clock4_zone'] == "bangkok") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="bangkok04"></div>';
		} else if (($user_data['clock4_zone'] == "bangkok") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="bangkok1204"></div>';
	} else if (($user_data['clock4_zone'] == "beijing") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="beijing04"></div>';
		} else if (($user_data['clock4_zone'] == "beijing") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="beijing1204"></div>';
	} else if (($user_data['clock4_zone'] == "tokyo") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="tokyo04"></div>';
		} else if (($user_data['clock4_zone'] == "tokyo") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="tokyo1204"></div>';
	} else if (($user_data['clock4_zone'] == "adelaide") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="adelaide04"></div>';
		} else if (($user_data['clock4_zone'] == "adelaide") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="adelaide1204"></div>';
	} else if (($user_data['clock4_zone'] == "e_australia") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="e_australia04"></div>';
		} else if (($user_data['clock4_zone'] == "e_australia") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="e_australia1204"></div>';
	} else if (($user_data['clock4_zone'] == "magadan") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="magadan04"></div>';
		} else if (($user_data['clock4_zone'] == "magadan") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="magadan1204"></div>';
	} else if (($user_data['clock4_zone'] == "auckland") && ($user_data['clock_hours'] == 24)) {
		echo '<div id="auckland04"></div>';
		} else if (($user_data['clock4_zone'] == "auckland") && ($user_data['clock_hours'] == 12)) {
		echo '<div id="auckland1204"></div>';
	}
?>