 $(document).ready(
    function() {		
       var options; // this way you can re-use it without the 'var' keyword.
// ---------------------------------------------------------------------------------------- change the name of this file to jclocks.js when ready to use
// --------------------------------------------------------------------------------- this is the "summer" clock when we are not in Daylight Savings Time
// --------------------------------------------------------------------------------------------------------- clock1 start 12 hour clocks without seconds
//Eniwetok
       if ($('#eniwetok12_noSeconds01 .time').length>0){ $('#eniwetok12_noSeconds01').remove();}
       $('#eniwetok12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok12_noSeconds01 .time').jclock(options);
//Samoa
       if ($('#samoa12_noSeconds01 .time').length>0){ $('#samoa12_noSeconds01').remove();}
       $('#samoa12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa12_noSeconds01 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii12_noSeconds01 .time').length>0){ $('#hawaii12_noSeconds01').remove();}
       $('#hawaii12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii12_noSeconds01 .time').jclock(options);
//Alaska
       if ($('#alaska12_noSeconds01 .time').length>0){ $('#alaska12_noSeconds01').remove();}
       $('#alaska12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska12_noSeconds01 .time').jclock(options);
//US Pacific
       if ($('#us_pacific12_noSeconds01 .time').length>0){ $('#us_pacific12_noSeconds01').remove();}
       $('#us_pacific12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific12_noSeconds01 .time').jclock(options);
//US Mountain
       if ($('#us_mountain12_noSeconds01 .time').length>0){ $('#us_mountain12_noSeconds01').remove();}
       $('#us_mountain12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain12_noSeconds01 .time').jclock(options);
//US Central
       if ($('#us_central12_noSeconds01 .time').length>0){ $('#us_central12_noSeconds01').remove();}
       $('#us_central12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central12_noSeconds01 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern12_noSeconds01 .time').length>0){ $('#us_eastern12_noSeconds01').remove();}
       $('#us_eastern12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern12_noSeconds01 .time').jclock(options);              
//Atlantic
       if ($('#atlantic12_noSeconds01 .time').length>0){ $('#atlantic12_noSeconds01').remove();}
       $('#atlantic12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic12_noSeconds01 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland12_noSeconds01 .time').length>0){ $('#newfoundland12_noSeconds01').remove();}
       $('#newfoundland12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland12_noSeconds01 .time').jclock(options); 
//Brazil
       if ($('#brazil12_noSeconds01 .time').length>0){ $('#brazil12_noSeconds01').remove();}
       $('#brazil12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil12_noSeconds01 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic12_noSeconds01 .time').length>0){ $('#mid_atlantic12_noSeconds01').remove();}
       $('#mid_atlantic12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic12_noSeconds01 .time').jclock(options); 
//Azores
       if ($('#azores12_noSeconds01 .time').length>0){ $('#azores12_noSeconds01').remove();}
       $('#azores12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores12_noSeconds01 .time').jclock(options); 
//London
       if ($('#london12_noSeconds01 .time').length>0){ $('#london12_noSeconds01').remove();}
       $('#london12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london12_noSeconds01 .time').jclock(options);
//Madrid
       if ($('#madrid12_noSeconds01 .time').length>0){ $('#madrid12_noSeconds01').remove();}
       $('#madrid12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid12_noSeconds01 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad12_noSeconds01 .time').length>0){ $('#kaliningrad12_noSeconds01').remove();}
       $('#kaliningrad12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad12_noSeconds01 .time').jclock(options);	
//Moscow
       if ($('#moscow12_noSeconds01 .time').length>0){ $('#moscow12_noSeconds01').remove();}
       $('#moscow12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow12_noSeconds01 .time').jclock(options);
//Tehran
       if ($('#tehran12_noSeconds01 .time').length>0){ $('#tehran12_noSeconds01').remove();}
       $('#tehran12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran12_noSeconds01 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi12_noSeconds01 .time').length>0){ $('#abudhabi12_noSeconds01').remove();}
       $('#abudhabi12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi12_noSeconds01 .time').jclock(options);	   
//Kabul
       if ($('#kabul12_noSeconds01 .time').length>0){ $('#kabul12_noSeconds01').remove();}
       $('#kabul12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul12_noSeconds01 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg12_noSeconds01 .time').length>0){ $('#ekaterinburg12_noSeconds01').remove();}
       $('#ekaterinburg12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg12_noSeconds01 .time').jclock(options);
//Bombay
       if ($('#bombay12_noSeconds01 .time').length>0){ $('#bombay12_noSeconds01').remove();}
       $('#bombay12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay12_noSeconds01 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu12_noSeconds01 .time').length>0){ $('#kathmandu12_noSeconds01').remove();}
       $('#kathmandu12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu12_noSeconds01 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka12_noSeconds01 .time').length>0){ $('#dhaka12_noSeconds01').remove();}
       $('#dhaka12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka12_noSeconds01 .time').jclock(options);
//bangkok
       if ($('#bangkok12_noSeconds01 .time').length>0){ $('#bangkok12_noSeconds01').remove();}
       $('#bangkok12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok12_noSeconds01 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing12_noSeconds01 .time').length>0){ $('#beijing12_noSeconds01').remove();}
       $('#beijing12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing12_noSeconds01 .time').jclock(options);
//Tokyo
       if ($('#tokyo12_noSeconds01 .time').length>0){ $('#tokyo12_noSeconds01').remove();}
       $('#tokyo12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo12_noSeconds01 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide12_noSeconds01 .time').length>0){ $('#adelaide12_noSeconds01').remove();}
       $('#adelaide12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide12_noSeconds01 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia12_noSeconds01 .time').length>0){ $('#e_australia12_noSeconds01').remove();}
       $('#e_australia12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia12_noSeconds01 .time').jclock(options);
//Magadan
       if ($('#magadan12_noSeconds01 .time').length>0){ $('#magadan12_noSeconds01').remove();}
       $('#magadan12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan12_noSeconds01 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland12_noSeconds01 .time').length>0){ $('#auckland12_noSeconds01').remove();}
       $('#auckland12_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland12_noSeconds01 .time').jclock(options);
// ---------------------------------------------------------------------------------------------------------- clock1 start 24 hour clocks without seconds   
//Eniwetok
       if ($('#eniwetok_noSeconds01 .time').length>0){ $('#eniwetok_noSeconds01').remove();}
       $('#eniwetok_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok_noSeconds01 .time').jclock(options);
//Samoa
       if ($('#samoa_noSeconds01 .time').length>0){ $('#samoa_noSeconds01').remove();}
       $('#samoa_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa_noSeconds01 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii_noSeconds01 .time').length>0){ $('#hawaii_noSeconds01').remove();}
       $('#hawaii_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii_noSeconds01 .time').jclock(options);
//Alaska
       if ($('#alaska_noSeconds01 .time').length>0){ $('#alaska_noSeconds01').remove();}
       $('#alaska_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska_noSeconds01 .time').jclock(options);
//US Pacific
       if ($('#us_pacific_noSeconds01 .time').length>0){ $('#us_pacific_noSeconds01').remove();}
       $('#us_pacific_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific_noSeconds01 .time').jclock(options);
//US Mountain
       if ($('#us_mountain_noSeconds01 .time').length>0){ $('#us_mountain_noSeconds01').remove();}
       $('#us_mountain_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain_noSeconds01 .time').jclock(options);
//US Central
       if ($('#us_central_noSeconds01 .time').length>0){ $('#us_central_noSeconds01').remove();}
       $('#us_central_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central_noSeconds01 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern_noSeconds01 .time').length>0){ $('#us_eastern_noSeconds01').remove();}
       $('#us_eastern_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern_noSeconds01 .time').jclock(options);              
//Atlantic
       if ($('#atlantic_noSeconds01 .time').length>0){ $('#atlantic_noSeconds01').remove();}
       $('#atlantic_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic_noSeconds01 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland_noSeconds01 .time').length>0){ $('#newfoundland_noSeconds01').remove();}
       $('#newfoundland_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland_noSeconds01 .time').jclock(options); 
//Brazil
       if ($('#brazil_noSeconds01 .time').length>0){ $('#brazil_noSeconds01').remove();}
       $('#brazil_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil_noSeconds01 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic_noSeconds01 .time').length>0){ $('#mid_atlantic_noSeconds01').remove();}
       $('#mid_atlantic_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic_noSeconds01 .time').jclock(options); 
//Azores
       if ($('#azores_noSeconds01 .time').length>0){ $('#azores_noSeconds01').remove();}
       $('#azores_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores_noSeconds01 .time').jclock(options); 
//London
       if ($('#london_noSeconds01 .time').length>0){ $('#london_noSeconds01').remove();}
       $('#london_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london_noSeconds01 .time').jclock(options);
//Madrid
       if ($('#madrid_noSeconds01 .time').length>0){ $('#madrid_noSeconds01').remove();}
       $('#madrid_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid_noSeconds01 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad_noSeconds01 .time').length>0){ $('#kaliningrad_noSeconds01').remove();}
       $('#kaliningrad_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad_noSeconds01 .time').jclock(options);	
//Moscow
       if ($('#moscow_noSeconds01 .time').length>0){ $('#moscow_noSeconds01').remove();}
       $('#moscow_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow_noSeconds01 .time').jclock(options);
//Tehran
       if ($('#tehran_noSeconds01 .time').length>0){ $('#tehran_noSeconds01').remove();}
       $('#tehran_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran_noSeconds01 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi_noSeconds01 .time').length>0){ $('#abudhabi_noSeconds01').remove();}
       $('#abudhabi_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi_noSeconds01 .time').jclock(options);	   
//Kabul
       if ($('#kabul_noSeconds01 .time').length>0){ $('#kabul_noSeconds01').remove();}
       $('#kabul_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul_noSeconds01 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg_noSeconds01 .time').length>0){ $('#ekaterinburg_noSeconds01').remove();}
       $('#ekaterinburg_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg_noSeconds01 .time').jclock(options);
//Bombay
       if ($('#bombay_noSeconds01 .time').length>0){ $('#bombay_noSeconds01').remove();}
       $('#bombay_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay_noSeconds01 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu_noSeconds01 .time').length>0){ $('#kathmandu_noSeconds01').remove();}
       $('#kathmandu_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu_noSeconds01 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka_noSeconds01 .time').length>0){ $('#dhaka_noSeconds01').remove();}
       $('#dhaka_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka_noSeconds01 .time').jclock(options);
//bangkok
       if ($('#bangkok_noSeconds01 .time').length>0){ $('#bangkok_noSeconds01').remove();}
       $('#bangkok_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok_noSeconds01 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing_noSeconds01 .time').length>0){ $('#beijing_noSeconds01').remove();}
       $('#beijing_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing_noSeconds01 .time').jclock(options);
//Tokyo
       if ($('#tokyo_noSeconds01 .time').length>0){ $('#tokyo_noSeconds01').remove();}
       $('#tokyo_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo_noSeconds01 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide_noSeconds01 .time').length>0){ $('#adelaide_noSeconds01').remove();}
       $('#adelaide_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide_noSeconds01 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia_noSeconds01 .time').length>0){ $('#e_australia_noSeconds01').remove();}
       $('#e_australia_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia_noSeconds01 .time').jclock(options);
//Magadan
       if ($('#magadan_noSeconds01 .time').length>0){ $('#magadan_noSeconds01').remove();}
       $('#magadan_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan_noSeconds01 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland_noSeconds01 .time').length>0){ $('#auckland_noSeconds01').remove();}
       $('#auckland_noSeconds01').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland_noSeconds01 .time').jclock(options); 
// --------------------------------------------------------------------------------------------------------- clock2 start 12 hour clocks without seconds
//Eniwetok
       if ($('#eniwetok12_noSeconds02 .time').length>0){ $('#eniwetok12_noSeconds02').remove();}
       $('#eniwetok12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok12_noSeconds02 .time').jclock(options);
//Samoa
       if ($('#samoa12_noSeconds02 .time').length>0){ $('#samoa12_noSeconds02').remove();}
       $('#samoa12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa12_noSeconds02 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii12_noSeconds02 .time').length>0){ $('#hawaii12_noSeconds02').remove();}
       $('#hawaii12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii12_noSeconds02 .time').jclock(options);
//Alaska
       if ($('#alaska12_noSeconds02 .time').length>0){ $('#alaska12_noSeconds02').remove();}
       $('#alaska12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska12_noSeconds02 .time').jclock(options);
//US Pacific
       if ($('#us_pacific12_noSeconds02 .time').length>0){ $('#us_pacific12_noSeconds02').remove();}
       $('#us_pacific12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific12_noSeconds02 .time').jclock(options);
//US Mountain
       if ($('#us_mountain12_noSeconds02 .time').length>0){ $('#us_mountain12_noSeconds02').remove();}
       $('#us_mountain12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain12_noSeconds02 .time').jclock(options);
//US Central
       if ($('#us_central12_noSeconds02 .time').length>0){ $('#us_central12_noSeconds02').remove();}
       $('#us_central12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central12_noSeconds02 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern12_noSeconds02 .time').length>0){ $('#us_eastern12_noSeconds02').remove();}
       $('#us_eastern12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern12_noSeconds02 .time').jclock(options);              
//Atlantic
       if ($('#atlantic12_noSeconds02 .time').length>0){ $('#atlantic12_noSeconds02').remove();}
       $('#atlantic12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic12_noSeconds02 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland12_noSeconds02 .time').length>0){ $('#newfoundland12_noSeconds02').remove();}
       $('#newfoundland12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland12_noSeconds02 .time').jclock(options); 
//Brazil
       if ($('#brazil12_noSeconds02 .time').length>0){ $('#brazil12_noSeconds02').remove();}
       $('#brazil12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil12_noSeconds02 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic12_noSeconds02 .time').length>0){ $('#mid_atlantic12_noSeconds02').remove();}
       $('#mid_atlantic12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic12_noSeconds02 .time').jclock(options); 
//Azores
       if ($('#azores12_noSeconds02 .time').length>0){ $('#azores12_noSeconds02').remove();}
       $('#azores12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores12_noSeconds02 .time').jclock(options); 
//London
       if ($('#london12_noSeconds02 .time').length>0){ $('#london12_noSeconds02').remove();}
       $('#london12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london12_noSeconds02 .time').jclock(options);
//Madrid
       if ($('#madrid12_noSeconds02 .time').length>0){ $('#madrid12_noSeconds02').remove();}
       $('#madrid12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid12_noSeconds02 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad12_noSeconds02 .time').length>0){ $('#kaliningrad12_noSeconds02').remove();}
       $('#kaliningrad12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad12_noSeconds02 .time').jclock(options);	
//Moscow
       if ($('#moscow12_noSeconds02 .time').length>0){ $('#moscow12_noSeconds02').remove();}
       $('#moscow12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow12_noSeconds02 .time').jclock(options);
//Tehran
       if ($('#tehran12_noSeconds02 .time').length>0){ $('#tehran12_noSeconds02').remove();}
       $('#tehran12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran12_noSeconds02 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi12_noSeconds02 .time').length>0){ $('#abudhabi12_noSeconds02').remove();}
       $('#abudhabi12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi12_noSeconds02 .time').jclock(options);	   
//Kabul
       if ($('#kabul12_noSeconds02 .time').length>0){ $('#kabul12_noSeconds02').remove();}
       $('#kabul12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul12_noSeconds02 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg12_noSeconds02 .time').length>0){ $('#ekaterinburg12_noSeconds02').remove();}
       $('#ekaterinburg12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg12_noSeconds02 .time').jclock(options);
//Bombay
       if ($('#bombay12_noSeconds02 .time').length>0){ $('#bombay12_noSeconds02').remove();}
       $('#bombay12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay12_noSeconds02 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu12_noSeconds02 .time').length>0){ $('#kathmandu12_noSeconds02').remove();}
       $('#kathmandu12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu12_noSeconds02 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka12_noSeconds02 .time').length>0){ $('#dhaka12_noSeconds02').remove();}
       $('#dhaka12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka12_noSeconds02 .time').jclock(options);
//bangkok
       if ($('#bangkok12_noSeconds02 .time').length>0){ $('#bangkok12_noSeconds02').remove();}
       $('#bangkok12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok12_noSeconds02 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing12_noSeconds02 .time').length>0){ $('#beijing12_noSeconds02').remove();}
       $('#beijing12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing12_noSeconds02 .time').jclock(options);
//Tokyo
       if ($('#tokyo12_noSeconds02 .time').length>0){ $('#tokyo12_noSeconds02').remove();}
       $('#tokyo12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo12_noSeconds02 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide12_noSeconds02 .time').length>0){ $('#adelaide12_noSeconds02').remove();}
       $('#adelaide12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide12_noSeconds02 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia12_noSeconds02 .time').length>0){ $('#e_australia12_noSeconds02').remove();}
       $('#e_australia12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia12_noSeconds02 .time').jclock(options);
//Magadan
       if ($('#magadan12_noSeconds02 .time').length>0){ $('#magadan12_noSeconds02').remove();}
       $('#magadan12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan12_noSeconds02 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland12_noSeconds02 .time').length>0){ $('#auckland12_noSeconds02').remove();}
       $('#auckland12_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland12_noSeconds02 .time').jclock(options);
// ---------------------------------------------------------------------------------------------------------- clock2 start 24 hour clocks without seconds   
//Eniwetok
       if ($('#eniwetok_noSeconds02 .time').length>0){ $('#eniwetok_noSeconds02').remove();}
       $('#eniwetok_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok_noSeconds02 .time').jclock(options);
//Samoa
       if ($('#samoa_noSeconds02 .time').length>0){ $('#samoa_noSeconds02').remove();}
       $('#samoa_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa_noSeconds02 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii_noSeconds02 .time').length>0){ $('#hawaii_noSeconds02').remove();}
       $('#hawaii_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii_noSeconds02 .time').jclock(options);
//Alaska
       if ($('#alaska_noSeconds02 .time').length>0){ $('#alaska_noSeconds02').remove();}
       $('#alaska_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska_noSeconds02 .time').jclock(options);
//US Pacific
       if ($('#us_pacific_noSeconds02 .time').length>0){ $('#us_pacific_noSeconds02').remove();}
       $('#us_pacific_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific_noSeconds02 .time').jclock(options);
//US Mountain
       if ($('#us_mountain_noSeconds02 .time').length>0){ $('#us_mountain_noSeconds02').remove();}
       $('#us_mountain_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain_noSeconds02 .time').jclock(options);
//US Central
       if ($('#us_central_noSeconds02 .time').length>0){ $('#us_central_noSeconds02').remove();}
       $('#us_central_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central_noSeconds02 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern_noSeconds02 .time').length>0){ $('#us_eastern_noSeconds02').remove();}
       $('#us_eastern_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern_noSeconds02 .time').jclock(options);              
//Atlantic
       if ($('#atlantic_noSeconds02 .time').length>0){ $('#atlantic_noSeconds02').remove();}
       $('#atlantic_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic_noSeconds02 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland_noSeconds02 .time').length>0){ $('#newfoundland_noSeconds02').remove();}
       $('#newfoundland_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland_noSeconds02 .time').jclock(options); 
//Brazil
       if ($('#brazil_noSeconds02 .time').length>0){ $('#brazil_noSeconds02').remove();}
       $('#brazil_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil_noSeconds02 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic_noSeconds02 .time').length>0){ $('#mid_atlantic_noSeconds02').remove();}
       $('#mid_atlantic_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic_noSeconds02 .time').jclock(options); 
//Azores
       if ($('#azores_noSeconds02 .time').length>0){ $('#azores_noSeconds02').remove();}
       $('#azores_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores_noSeconds02 .time').jclock(options); 
//London
       if ($('#london_noSeconds02 .time').length>0){ $('#london_noSeconds02').remove();}
       $('#london_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london_noSeconds02 .time').jclock(options);
//Madrid
       if ($('#madrid_noSeconds02 .time').length>0){ $('#madrid_noSeconds02').remove();}
       $('#madrid_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid_noSeconds02 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad_noSeconds02 .time').length>0){ $('#kaliningrad_noSeconds02').remove();}
       $('#kaliningrad_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad_noSeconds02 .time').jclock(options);	
//Moscow
       if ($('#moscow_noSeconds02 .time').length>0){ $('#moscow_noSeconds02').remove();}
       $('#moscow_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow_noSeconds02 .time').jclock(options);
//Tehran
       if ($('#tehran_noSeconds02 .time').length>0){ $('#tehran_noSeconds02').remove();}
       $('#tehran_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran_noSeconds02 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi_noSeconds02 .time').length>0){ $('#abudhabi_noSeconds02').remove();}
       $('#abudhabi_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi_noSeconds02 .time').jclock(options);	   
//Kabul
       if ($('#kabul_noSeconds02 .time').length>0){ $('#kabul_noSeconds02').remove();}
       $('#kabul_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul_noSeconds02 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg_noSeconds02 .time').length>0){ $('#ekaterinburg_noSeconds02').remove();}
       $('#ekaterinburg_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg_noSeconds02 .time').jclock(options);
//Bombay
       if ($('#bombay_noSeconds02 .time').length>0){ $('#bombay_noSeconds02').remove();}
       $('#bombay_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay_noSeconds02 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu_noSeconds02 .time').length>0){ $('#kathmandu_noSeconds02').remove();}
       $('#kathmandu_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu_noSeconds02 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka_noSeconds02 .time').length>0){ $('#dhaka_noSeconds02').remove();}
       $('#dhaka_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka_noSeconds02 .time').jclock(options);
//bangkok
       if ($('#bangkok_noSeconds02 .time').length>0){ $('#bangkok_noSeconds02').remove();}
       $('#bangkok_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok_noSeconds02 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing_noSeconds02 .time').length>0){ $('#beijing_noSeconds02').remove();}
       $('#beijing_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing_noSeconds02 .time').jclock(options);
//Tokyo
       if ($('#tokyo_noSeconds02 .time').length>0){ $('#tokyo_noSeconds02').remove();}
       $('#tokyo_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo_noSeconds02 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide_noSeconds02 .time').length>0){ $('#adelaide_noSeconds02').remove();}
       $('#adelaide_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide_noSeconds02 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia_noSeconds02 .time').length>0){ $('#e_australia_noSeconds02').remove();}
       $('#e_australia_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia_noSeconds02 .time').jclock(options);
//Magadan
       if ($('#magadan_noSeconds02 .time').length>0){ $('#magadan_noSeconds02').remove();}
       $('#magadan_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan_noSeconds02 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland_noSeconds02 .time').length>0){ $('#auckland_noSeconds02').remove();}
       $('#auckland_noSeconds02').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland_noSeconds02 .time').jclock(options);
// --------------------------------------------------------------------------------------------------------- clock3 start 12 hour clocks without seconds
//Eniwetok
       if ($('#eniwetok12_noSeconds03 .time').length>0){ $('#eniwetok12_noSeconds03').remove();}
       $('#eniwetok12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok12_noSeconds03 .time').jclock(options);
//Samoa
       if ($('#samoa12_noSeconds03 .time').length>0){ $('#samoa12_noSeconds03').remove();}
       $('#samoa12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa12_noSeconds03 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii12_noSeconds03 .time').length>0){ $('#hawaii12_noSeconds03').remove();}
       $('#hawaii12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii12_noSeconds03 .time').jclock(options);
//Alaska
       if ($('#alaska12_noSeconds03 .time').length>0){ $('#alaska12_noSeconds03').remove();}
       $('#alaska12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska12_noSeconds03 .time').jclock(options);
//US Pacific
       if ($('#us_pacific12_noSeconds03 .time').length>0){ $('#us_pacific12_noSeconds03').remove();}
       $('#us_pacific12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific12_noSeconds03 .time').jclock(options);
//US Mountain
       if ($('#us_mountain12_noSeconds03 .time').length>0){ $('#us_mountain12_noSeconds03').remove();}
       $('#us_mountain12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain12_noSeconds03 .time').jclock(options);
//US Central
       if ($('#us_central12_noSeconds03 .time').length>0){ $('#us_central12_noSeconds03').remove();}
       $('#us_central12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central12_noSeconds03 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern12_noSeconds03 .time').length>0){ $('#us_eastern12_noSeconds03').remove();}
       $('#us_eastern12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern12_noSeconds03 .time').jclock(options);              
//Atlantic
       if ($('#atlantic12_noSeconds03 .time').length>0){ $('#atlantic12_noSeconds03').remove();}
       $('#atlantic12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic12_noSeconds03 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland12_noSeconds03 .time').length>0){ $('#newfoundland12_noSeconds03').remove();}
       $('#newfoundland12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland12_noSeconds03 .time').jclock(options); 
//Brazil
       if ($('#brazil12_noSeconds03 .time').length>0){ $('#brazil12_noSeconds03').remove();}
       $('#brazil12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil12_noSeconds03 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic12_noSeconds03 .time').length>0){ $('#mid_atlantic12_noSeconds03').remove();}
       $('#mid_atlantic12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic12_noSeconds03 .time').jclock(options); 
//Azores
       if ($('#azores12_noSeconds03 .time').length>0){ $('#azores12_noSeconds03').remove();}
       $('#azores12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores12_noSeconds03 .time').jclock(options); 
//London
       if ($('#london12_noSeconds03 .time').length>0){ $('#london12_noSeconds03').remove();}
       $('#london12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london12_noSeconds03 .time').jclock(options);
//Madrid
       if ($('#madrid12_noSeconds03 .time').length>0){ $('#madrid12_noSeconds03').remove();}
       $('#madrid12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid12_noSeconds03 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad12_noSeconds03 .time').length>0){ $('#kaliningrad12_noSeconds03').remove();}
       $('#kaliningrad12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad12_noSeconds03 .time').jclock(options);	
//Moscow
       if ($('#moscow12_noSeconds03 .time').length>0){ $('#moscow12_noSeconds03').remove();}
       $('#moscow12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow12_noSeconds03 .time').jclock(options);
//Tehran
       if ($('#tehran12_noSeconds03 .time').length>0){ $('#tehran12_noSeconds03').remove();}
       $('#tehran12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran12_noSeconds03 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi12_noSeconds03 .time').length>0){ $('#abudhabi12_noSeconds03').remove();}
       $('#abudhabi12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi12_noSeconds03 .time').jclock(options);	   
//Kabul
       if ($('#kabul12_noSeconds03 .time').length>0){ $('#kabul12_noSeconds03').remove();}
       $('#kabul12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul12_noSeconds03 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg12_noSeconds03 .time').length>0){ $('#ekaterinburg12_noSeconds03').remove();}
       $('#ekaterinburg12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg12_noSeconds03 .time').jclock(options);
//Bombay
       if ($('#bombay12_noSeconds03 .time').length>0){ $('#bombay12_noSeconds03').remove();}
       $('#bombay12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay12_noSeconds03 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu12_noSeconds03 .time').length>0){ $('#kathmandu12_noSeconds03').remove();}
       $('#kathmandu12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu12_noSeconds03 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka12_noSeconds03 .time').length>0){ $('#dhaka12_noSeconds03').remove();}
       $('#dhaka12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka12_noSeconds03 .time').jclock(options);
//bangkok
       if ($('#bangkok12_noSeconds03 .time').length>0){ $('#bangkok12_noSeconds03').remove();}
       $('#bangkok12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok12_noSeconds03 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing12_noSeconds03 .time').length>0){ $('#beijing12_noSeconds03').remove();}
       $('#beijing12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing12_noSeconds03 .time').jclock(options);
//Tokyo
       if ($('#tokyo12_noSeconds03 .time').length>0){ $('#tokyo12_noSeconds03').remove();}
       $('#tokyo12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo12_noSeconds03 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide12_noSeconds03 .time').length>0){ $('#adelaide12_noSeconds03').remove();}
       $('#adelaide12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide12_noSeconds03 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia12_noSeconds03 .time').length>0){ $('#e_australia12_noSeconds03').remove();}
       $('#e_australia12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia12_noSeconds03 .time').jclock(options);
//Magadan
       if ($('#magadan12_noSeconds03 .time').length>0){ $('#magadan12_noSeconds03').remove();}
       $('#magadan12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan12_noSeconds03 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland12_noSeconds03 .time').length>0){ $('#auckland12_noSeconds03').remove();}
       $('#auckland12_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %I:%M %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland12_noSeconds03 .time').jclock(options);
// ---------------------------------------------------------------------------------------------------------- clock3 start 24 hour clocks without seconds   
//Eniwetok
       if ($('#eniwetok_noSeconds03 .time').length>0){ $('#eniwetok_noSeconds03').remove();}
       $('#eniwetok_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok_noSeconds03 .time').jclock(options);
//Samoa
       if ($('#samoa_noSeconds03 .time').length>0){ $('#samoa_noSeconds03').remove();}
       $('#samoa_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa_noSeconds03 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii_noSeconds03 .time').length>0){ $('#hawaii_noSeconds03').remove();}
       $('#hawaii_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii_noSeconds03 .time').jclock(options);
//Alaska
       if ($('#alaska_noSeconds03 .time').length>0){ $('#alaska_noSeconds03').remove();}
       $('#alaska_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska_noSeconds03 .time').jclock(options);
//US Pacific
       if ($('#us_pacific_noSeconds03 .time').length>0){ $('#us_pacific_noSeconds03').remove();}
       $('#us_pacific_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific_noSeconds03 .time').jclock(options);
//US Mountain
       if ($('#us_mountain_noSeconds03 .time').length>0){ $('#us_mountain_noSeconds03').remove();}
       $('#us_mountain_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain_noSeconds03 .time').jclock(options);
//US Central
       if ($('#us_central_noSeconds03 .time').length>0){ $('#us_central_noSeconds03').remove();}
       $('#us_central_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central_noSeconds03 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern_noSeconds03 .time').length>0){ $('#us_eastern_noSeconds03').remove();}
       $('#us_eastern_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern_noSeconds03 .time').jclock(options);              
//Atlantic
       if ($('#atlantic_noSeconds03 .time').length>0){ $('#atlantic_noSeconds03').remove();}
       $('#atlantic_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic_noSeconds03 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland_noSeconds03 .time').length>0){ $('#newfoundland_noSeconds03').remove();}
       $('#newfoundland_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland_noSeconds03 .time').jclock(options); 
//Brazil
       if ($('#brazil_noSeconds03 .time').length>0){ $('#brazil_noSeconds03').remove();}
       $('#brazil_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil_noSeconds03 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic_noSeconds03 .time').length>0){ $('#mid_atlantic_noSeconds03').remove();}
       $('#mid_atlantic_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic_noSeconds03 .time').jclock(options); 
//Azores
       if ($('#azores_noSeconds03 .time').length>0){ $('#azores_noSeconds03').remove();}
       $('#azores_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores_noSeconds03 .time').jclock(options); 
//London
       if ($('#london_noSeconds03 .time').length>0){ $('#london_noSeconds03').remove();}
       $('#london_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london_noSeconds03 .time').jclock(options);
//Madrid
       if ($('#madrid_noSeconds03 .time').length>0){ $('#madrid_noSeconds03').remove();}
       $('#madrid_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid_noSeconds03 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad_noSeconds03 .time').length>0){ $('#kaliningrad_noSeconds03').remove();}
       $('#kaliningrad_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad_noSeconds03 .time').jclock(options);	
//Moscow
       if ($('#moscow_noSeconds03 .time').length>0){ $('#moscow_noSeconds03').remove();}
       $('#moscow_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow_noSeconds03 .time').jclock(options);
//Tehran
       if ($('#tehran_noSeconds03 .time').length>0){ $('#tehran_noSeconds03').remove();}
       $('#tehran_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran_noSeconds03 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi_noSeconds03 .time').length>0){ $('#abudhabi_noSeconds03').remove();}
       $('#abudhabi_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi_noSeconds03 .time').jclock(options);	   
//Kabul
       if ($('#kabul_noSeconds03 .time').length>0){ $('#kabul_noSeconds03').remove();}
       $('#kabul_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul_noSeconds03 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg_noSeconds03 .time').length>0){ $('#ekaterinburg_noSeconds03').remove();}
       $('#ekaterinburg_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg_noSeconds03 .time').jclock(options);
//Bombay
       if ($('#bombay_noSeconds03 .time').length>0){ $('#bombay_noSeconds03').remove();}
       $('#bombay_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay_noSeconds03 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu_noSeconds03 .time').length>0){ $('#kathmandu_noSeconds03').remove();}
       $('#kathmandu_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu_noSeconds03 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka_noSeconds03 .time').length>0){ $('#dhaka_noSeconds03').remove();}
       $('#dhaka_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka_noSeconds03 .time').jclock(options);
//bangkok
       if ($('#bangkok_noSeconds03 .time').length>0){ $('#bangkok_noSeconds03').remove();}
       $('#bangkok_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok_noSeconds03 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing_noSeconds03 .time').length>0){ $('#beijing_noSeconds03').remove();}
       $('#beijing_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing_noSeconds03 .time').jclock(options);
//Tokyo
       if ($('#tokyo_noSeconds03 .time').length>0){ $('#tokyo_noSeconds03').remove();}
       $('#tokyo_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo_noSeconds03 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide_noSeconds03 .time').length>0){ $('#adelaide_noSeconds03').remove();}
       $('#adelaide_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide_noSeconds03 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia_noSeconds03 .time').length>0){ $('#e_australia_noSeconds03').remove();}
       $('#e_australia_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia_noSeconds03 .time').jclock(options);
//Magadan
       if ($('#magadan_noSeconds03 .time').length>0){ $('#magadan_noSeconds03').remove();}
       $('#magadan_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan_noSeconds03 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland_noSeconds03 .time').length>0){ $('#auckland_noSeconds03').remove();}
       $('#auckland_noSeconds03').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%A, %H:%M</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland_noSeconds03 .time').jclock(options);
// -------------------------------------------------------------------------------------------------------------- clock4 start 12 hour clocks with seconds
//Eniwetok
       if ($('#eniwetok1204 .time').length>0){ $('#eniwetok12 .time04').remove();}
       $('#eniwetok1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok1204 .time').jclock(options);
//Samoa
       if ($('#samoa1204 .time').length>0){ $('#samoa12 .time04').remove();}
       $('#samoa1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa1204 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii1204 .time').length>0){ $('#hawaii12 .time04').remove();}
       $('#hawaii1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii1204 .time').jclock(options);
//Alaska
       if ($('#alaska1204 .time').length>0){ $('#alaska12 .time04').remove();}
       $('#alaska1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska1204 .time').jclock(options);
//US Pacific
       if ($('#us_pacific1204 .time').length>0){ $('#us_pacific12 .time04').remove();}
       $('#us_pacific1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific1204 .time').jclock(options);
//US Mountain
       if ($('#us_mountain1204 .time').length>0){ $('#us_mountain12 .time04').remove();}
       $('#us_mountain1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain1204 .time').jclock(options);
//US Central
       if ($('#us_central1204 .time').length>0){ $('#us_central12 .time04').remove();}
       $('#us_central1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central1204 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern1204 .time').length>0){ $('#us_eastern12 .time04').remove();}
       $('#us_eastern1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern1204 .time').jclock(options);              
//Atlantic
       if ($('#atlantic1204 .time').length>0){ $('#atlantic12 .time04').remove();}
       $('#atlantic1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic1204 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland1204 .time').length>0){ $('#newfoundland12 .time04').remove();}
       $('#newfoundland1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland1204 .time').jclock(options); 
//Brazil
       if ($('#brazil1204 .time').length>0){ $('#brazil12 .time04').remove();}
       $('#brazil1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil1204 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic1204 .time').length>0){ $('#mid_atlantic12 .time04').remove();}
       $('#mid_atlantic1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic1204 .time').jclock(options); 
//Azores
       if ($('#azores1204 .time').length>0){ $('#azores12 .time04').remove();}
       $('#azores1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores1204 .time').jclock(options); 
//London
       if ($('#london1204 .time').length>0){ $('#london12 .time04').remove();}
       $('#london1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london1204 .time').jclock(options);
//Madrid
       if ($('#madrid1204 .time').length>0){ $('#madrid12 .time04').remove();}
       $('#madrid1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid1204 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad1204 .time').length>0){ $('#kaliningrad12 .time04').remove();}
       $('#kaliningrad1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad1204 .time').jclock(options);	
//Moscow
       if ($('#moscow1204 .time').length>0){ $('#moscow12 .time04').remove();}
       $('#moscow1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow1204 .time').jclock(options);
//Tehran
       if ($('#tehran1204 .time').length>0){ $('#tehran12 .time04').remove();}
       $('#tehran1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran1204 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi1204 .time').length>0){ $('#abudhabi12 .time04').remove();}
       $('#abudhabi1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi1204 .time').jclock(options);	   
//Kabul
       if ($('#kabul1204 .time').length>0){ $('#kabul12 .time04').remove();}
       $('#kabul1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul1204 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg1204 .time').length>0){ $('#ekaterinburg12 .time04').remove();}
       $('#ekaterinburg1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg1204 .time').jclock(options);
//Bombay
       if ($('#bombay1204 .time').length>0){ $('#bombay12 .time04').remove();}
       $('#bombay1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay1204 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu1204 .time').length>0){ $('#kathmandu12 .time04').remove();}
       $('#kathmandu1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu1204 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka1204 .time').length>0){ $('#dhaka12 .time04').remove();}
       $('#dhaka1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka1204 .time').jclock(options);
//bangkok
       if ($('#bangkok1204 .time').length>0){ $('#bangkok12 .time04').remove();}
       $('#bangkok1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok1204 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing1204 .time').length>0){ $('#beijing12 .time04').remove();}
       $('#beijing1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing1204 .time').jclock(options);
//Tokyo
       if ($('#tokyo1204 .time').length>0){ $('#tokyo12 .time04').remove();}
       $('#tokyo1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo1204 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide1204 .time').length>0){ $('#adelaide12 .time04').remove();}
       $('#adelaide1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide1204 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia1204 .time').length>0){ $('#e_australia12 .time04').remove();}
       $('#e_australia1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia1204 .time').jclock(options);
//Magadan
       if ($('#magadan1204 .time').length>0){ $('#magadan12 .time04').remove();}
       $('#magadan1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan1204 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland1204 .time').length>0){ $('#auckland12 .time04').remove();}
       $('#auckland1204').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %I:%M:%S %p</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland1204 .time').jclock(options);  
// -------------------------------------------------------------------------------------------------------------- clock4 start 24 hour clocks with seconds   	
//Eniwetok
       if ($('#eniwetok04 .time').length>0){ $('#eniwetok .time04').remove();}
       $('#eniwetok04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#eniwetok04 .time').jclock(options);
//Samoa
       if ($('#samoa04 .time').length>0){ $('#samoa .time04').remove();}
       $('#samoa04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -11   // set offset
       };
       $('#samoa04 .time').jclock(options);	   
//Hawaii
       if ($('#hawaii04 .time').length>0){ $('#hawaii .time04').remove();}
       $('#hawaii04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -10   // set offset
       };
       $('#hawaii04 .time').jclock(options);
//Alaska
       if ($('#alaska04 .time').length>0){ $('#alaska .time04').remove();}
       $('#alaska04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -8   // set offset
       };
       $('#alaska04 .time').jclock(options);
//US Pacific
       if ($('#us_pacific04 .time').length>0){ $('#us_pacific .time04').remove();}
       $('#us_pacific04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -7   // set offset
       };
       $('#us_pacific04 .time').jclock(options);
//US Mountain
       if ($('#us_mountain04 .time').length>0){ $('#us_mountain .time04').remove();}
       $('#us_mountain04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -6   // set offset
       };
       $('#us_mountain04 .time').jclock(options);
//US Central
       if ($('#us_central04 .time').length>0){ $('#us_central .time04').remove();}
       $('#us_central04').append('<div class="time"></div>');
       options = {		   
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -5   // set offset
       };
       $('#us_central04 .time').jclock(options); 
//US Eastern
       if ($('#us_eastern04 .time').length>0){ $('#us_eastern .time04').remove();}
       $('#us_eastern04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -4   // set offset
       };
       $('#us_eastern04 .time').jclock(options);              
//Atlantic
       if ($('#atlantic04 .time').length>0){ $('#atlantic .time04').remove();}
       $('#atlantic04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#atlantic04 .time').jclock(options); 
//Newfoundland
       if ($('#newfoundland04 .time').length>0){ $('#newfoundland .time04').remove();}
       $('#newfoundland04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2.5   // set offset
       };
       $('#newfoundland04 .time').jclock(options); 
//Brazil
       if ($('#brazil04 .time').length>0){ $('#brazil .time04').remove();}
       $('#brazil04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -3   // set offset
       };
       $('#brazil04 .time').jclock(options); 
//Mid-Atlantic
       if ($('#mid_atlantic04 .time').length>0){ $('#mid_atlantic .time04').remove();}
       $('#mid_atlantic04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: -2   // set offset
       };
       $('#mid_atlantic04 .time').jclock(options); 
//Azores
       if ($('#azores04 .time').length>0){ $('#azores .time04').remove();}
       $('#azores04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: 0   // set offset
       };
       $('#azores04 .time').jclock(options); 
//London
       if ($('#london04 .time').length>0){ $('#london .time04').remove();}
       $('#london04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +1   // set offset
       };
       $('#london04 .time').jclock(options);
//Madrid
       if ($('#madrid04 .time').length>0){ $('#madrid .time04').remove();}
       $('#madrid04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +2   // set offset
       };
       $('#madrid04 .time').jclock(options);
//Kaliningrad
       if ($('#kaliningrad04 .time').length>0){ $('#kaliningrad .time04').remove();}
       $('#kaliningrad04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +3   // set offset
       };
       $('#kaliningrad04 .time').jclock(options);	
//Moscow
       if ($('#moscow04 .time').length>0){ $('#moscow .time04').remove();}
       $('#moscow04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4   // set offset
       };
       $('#moscow04 .time').jclock(options);
//Tehran
       if ($('#tehran04 .time').length>0){ $('#tehran .time04').remove();}
       $('#tehran04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#tehran04 .time').jclock(options);
//Abudhabi
       if ($('#abudhabi04 .time').length>0){ $('#abudhabi .time04').remove();}
       $('#abudhabi04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4  // set offset
       };
       $('#abudhabi04 .time').jclock(options);	   
//Kabul
       if ($('#kabul04 .time').length>0){ $('#kabul .time04').remove();}
       $('#kabul04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +4.5   // set offset
       };
       $('#kabul04 .time').jclock(options);
//Ekaterinburg
       if ($('#ekaterinburg04 .time').length>0){ $('#ekaterinburg .time04').remove();}
       $('#ekaterinburg04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#ekaterinburg04 .time').jclock(options);
//Bombay
       if ($('#bombay04 .time').length>0){ $('#bombay .time04').remove();}
       $('#bombay04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.5   // set offset
       };
       $('#bombay04 .time').jclock(options);	   	   	   	   		      	   	      	   	    
//Kathmandu
       if ($('#kathmandu04 .time').length>0){ $('#kathmandu .time04').remove();}
       $('#kathmandu04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +5.75   // set offset
       };
       $('#kathmandu04 .time').jclock(options);	   
//Dhaka
       if ($('#dhaka04 .time').length>0){ $('#dhaka .time04').remove();}
       $('#dhaka04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +6   // set offset
       };
       $('#dhaka04 .time').jclock(options);
//bangkok
       if ($('#bangkok04 .time').length>0){ $('#bangkok .time04').remove();}
       $('#bangkok04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +7   // set offset
       };
       $('#bangkok04 .time').jclock(options);	   	   
//Beijing
       if ($('#beijing04 .time').length>0){ $('#beijing .time04').remove();}
       $('#beijing04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +8   // set offset
       };
       $('#beijing04 .time').jclock(options);
//Tokyo
       if ($('#tokyo04 .time').length>0){ $('#tokyo .time04').remove();}
       $('#tokyo04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9   // set offset
       };
       $('#tokyo04 .time').jclock(options);	   	   
//Adelaide
       if ($('#adelaide04 .time').length>0){ $('#adelaide .time04').remove();}
       $('#adelaide04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +9.5   // set offset
       };
       $('#adelaide04 .time').jclock(options);
//Eastern Australia
       if ($('#e_australia04 .time').length>0){ $('#e_australia .time04').remove();}
       $('#e_australia04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +10   // set offset
       };
       $('#e_australia04 .time').jclock(options);
//Magadan
       if ($('#magadan04 .time').length>0){ $('#magadan .time04').remove();}
       $('#magadan04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#magadan04 .time').jclock(options);	   	   	   
//Auckland
       if ($('#auckland04 .time').length>0){ $('#auckland .time04').remove();}
       $('#auckland04').append('<div class="time"></div>');
       options = {
         format: '<span class=\"dt\">%a, %d %b %H:%M:%S</span>',
         timeNotation: '12h',
         am_pm: true,
         utc: true,
         utc_offset: +12   // set offset
       };
       $('#auckland04 .time').jclock(options);
});