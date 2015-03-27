
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.139.184
-- Generation Time: Feb 15, 2014 at 05:20 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homepage80439`
--

-- --------------------------------------------------------

--
-- Table structure for table `dblist`
--

CREATE TABLE `dblist` (
  `dbId` int(11) NOT NULL auto_increment,
  `userId` int(11) NOT NULL,
  `note_url` varchar(1024) NOT NULL,
  `label` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY  (`dbId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `dblist`
--

INSERT INTO `dblist` VALUES(4, 4, '', 'Stanton Rules!', 'I love you. - Daddy-O!', 8);
INSERT INTO `dblist` VALUES(5, 5, '', 'Meredith Rules!', 'I love you! - Daddy-O!', 9);
INSERT INTO `dblist` VALUES(10, 1, 'http://www.ups.com/', 'Router return', '1Z3136V79030437693', 15);
INSERT INTO `dblist` VALUES(11, 1, 'https://www.healthcare.gov/marketplace/individual/', 'Affordable Health Care', 'apply', 16);
INSERT INTO `dblist` VALUES(14, 1, 'https://accounts.google.com/AccountChooser?service=CPanel&continue=https%3A%2F%2Fadmin.google.com%2FDashboard&hl=en', 'Google Admin', 'Need to login here to get to DNS settings for Josh\\''s site.', 18);
INSERT INTO `dblist` VALUES(15, 20, 'http://www.lynda.com', 'HTML5', 'Look up videos on HTML5.', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `joined` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `email_code` varchar(32) NOT NULL,
  `active` int(11) NOT NULL default '0',
  `password_recover` int(11) NOT NULL,
  `profile` varchar(55) NOT NULL,
  `type` int(1) NOT NULL default '2',
  `allow_email` int(11) NOT NULL default '1',
  `color_scheme` varchar(10) NOT NULL default 'slate',
  `clock1_name` varchar(14) NOT NULL default 'x',
  `clock1_zone` varchar(20) NOT NULL,
  `clock2_name` varchar(14) NOT NULL default 'x',
  `clock2_zone` varchar(20) NOT NULL,
  `clock3_name` varchar(14) NOT NULL default 'x',
  `clock3_zone` varchar(20) NOT NULL,
  `clock4_name` varchar(14) NOT NULL default 'Colorado, USA',
  `clock4_zone` varchar(20) NOT NULL default 'us_mountain',
  `clock_hours` int(2) NOT NULL default '24',
  `url` varchar(4) NOT NULL default 'row1',
  `bing` varchar(4) NOT NULL default 'row2',
  `google` varchar(4) NOT NULL default 'row3',
  `reference` varchar(4) NOT NULL default 'row4',
  `youtube` varchar(4) NOT NULL default 'row5',
  `reference_swap` int(1) NOT NULL default '1',
  `page_number` int(1) NOT NULL default '1',
  `a1_url` varchar(1024) NOT NULL,
  `a1_url_pg2` text NOT NULL,
  `a1_url_pg3` text NOT NULL,
  `a1_text` varchar(30) NOT NULL default 'x',
  `a1_text_pg2` varchar(30) NOT NULL default 'x',
  `a1_text_pg3` varchar(30) NOT NULL default 'x',
  `b1_url` varchar(1024) NOT NULL,
  `b1_url_pg2` text NOT NULL,
  `b1_url_pg3` text NOT NULL,
  `b1_text` varchar(30) NOT NULL default 'x',
  `b1_text_pg2` varchar(30) NOT NULL default 'x',
  `b1_text_pg3` varchar(30) NOT NULL default 'x',
  `c1_url` varchar(1024) NOT NULL,
  `c1_url_pg2` text NOT NULL,
  `c1_url_pg3` text NOT NULL,
  `c1_text` varchar(30) NOT NULL default 'x',
  `c1_text_pg2` varchar(30) NOT NULL default 'x',
  `c1_text_pg3` varchar(30) NOT NULL default 'x',
  `d1_url` varchar(1024) NOT NULL,
  `d1_url_pg2` text NOT NULL,
  `d1_url_pg3` text NOT NULL,
  `d1_text` varchar(30) NOT NULL default 'x',
  `d1_text_pg2` varchar(30) NOT NULL default 'x',
  `d1_text_pg3` varchar(30) NOT NULL default 'x',
  `a2_url` varchar(1024) NOT NULL,
  `a2_url_pg2` text NOT NULL,
  `a2_url_pg3` text NOT NULL,
  `a2_text` varchar(30) NOT NULL default 'x',
  `a2_text_pg2` varchar(30) NOT NULL default 'x',
  `a2_text_pg3` varchar(30) NOT NULL default 'x',
  `b2_url` varchar(1024) NOT NULL,
  `b2_url_pg2` text NOT NULL,
  `b2_url_pg3` text NOT NULL,
  `b2_text` varchar(30) NOT NULL default 'x',
  `b2_text_pg2` varchar(30) NOT NULL default 'x',
  `b2_text_pg3` varchar(30) NOT NULL default 'x',
  `c2_url` varchar(1024) NOT NULL,
  `c2_url_pg2` text NOT NULL,
  `c2_url_pg3` text NOT NULL,
  `c2_text` varchar(30) NOT NULL default 'x',
  `c2_text_pg2` varchar(30) NOT NULL default 'x',
  `c2_text_pg3` varchar(30) NOT NULL default 'x',
  `d2_url` varchar(1024) NOT NULL,
  `d2_url_pg2` text NOT NULL,
  `d2_url_pg3` text NOT NULL,
  `d2_text` varchar(30) NOT NULL default 'x',
  `d2_text_pg2` varchar(30) NOT NULL default 'x',
  `d2_text_pg3` varchar(30) NOT NULL default 'x',
  `a3_url` varchar(1024) NOT NULL,
  `a3_url_pg2` text NOT NULL,
  `a3_url_pg3` text NOT NULL,
  `a3_text` varchar(30) NOT NULL default 'x',
  `a3_text_pg2` varchar(30) NOT NULL default 'x',
  `a3_text_pg3` varchar(30) NOT NULL default 'x',
  `b3_url` varchar(1024) NOT NULL,
  `b3_url_pg2` text NOT NULL,
  `b3_url_pg3` text NOT NULL,
  `b3_text` varchar(30) NOT NULL default 'x',
  `b3_text_pg2` varchar(30) NOT NULL default 'x',
  `b3_text_pg3` varchar(30) NOT NULL default 'x',
  `c3_url` varchar(1024) NOT NULL,
  `c3_url_pg2` text NOT NULL,
  `c3_url_pg3` text NOT NULL,
  `c3_text` varchar(30) NOT NULL default 'x',
  `c3_text_pg2` varchar(30) NOT NULL default 'x',
  `c3_text_pg3` varchar(30) NOT NULL default 'x',
  `d3_url` varchar(1024) NOT NULL,
  `d3_url_pg2` text NOT NULL,
  `d3_url_pg3` text NOT NULL,
  `d3_text` varchar(30) NOT NULL default 'x',
  `d3_text_pg2` varchar(30) NOT NULL default 'x',
  `d3_text_pg3` varchar(30) NOT NULL default 'x',
  `a4_url` varchar(1024) NOT NULL,
  `a4_url_pg2` text NOT NULL,
  `a4_url_pg3` text NOT NULL,
  `a4_text` varchar(30) NOT NULL default 'x',
  `a4_text_pg2` varchar(30) NOT NULL default 'x',
  `a4_text_pg3` varchar(30) NOT NULL default 'x',
  `b4_url` varchar(1024) NOT NULL,
  `b4_url_pg2` text NOT NULL,
  `b4_url_pg3` text NOT NULL,
  `b4_text` varchar(30) NOT NULL default 'x',
  `b4_text_pg2` varchar(30) NOT NULL default 'x',
  `b4_text_pg3` varchar(30) NOT NULL default 'x',
  `c4_url` varchar(1024) NOT NULL,
  `c4_url_pg2` text NOT NULL,
  `c4_url_pg3` text NOT NULL,
  `c4_text` varchar(30) NOT NULL default 'x',
  `c4_text_pg2` varchar(30) NOT NULL default 'x',
  `c4_text_pg3` varchar(30) NOT NULL default 'x',
  `d4_url` varchar(1024) NOT NULL,
  `d4_url_pg2` text NOT NULL,
  `d4_url_pg3` text NOT NULL,
  `d4_text` varchar(30) NOT NULL default 'x',
  `d4_text_pg2` varchar(30) NOT NULL default 'x',
  `d4_text_pg3` varchar(30) NOT NULL default 'x',
  `a5_url` varchar(1024) NOT NULL,
  `a5_url_pg2` text NOT NULL,
  `a5_url_pg3` text NOT NULL,
  `a5_text` varchar(30) NOT NULL default 'x',
  `a5_text_pg2` varchar(30) NOT NULL default 'x',
  `a5_text_pg3` varchar(30) NOT NULL default 'x',
  `b5_url` varchar(1024) NOT NULL,
  `b5_url_pg2` text NOT NULL,
  `b5_url_pg3` text NOT NULL,
  `b5_text` varchar(30) NOT NULL default 'x',
  `b5_text_pg2` varchar(30) NOT NULL default 'x',
  `b5_text_pg3` varchar(30) NOT NULL default 'x',
  `c5_url` varchar(1024) NOT NULL,
  `c5_url_pg2` text NOT NULL,
  `c5_url_pg3` text NOT NULL,
  `c5_text` varchar(30) NOT NULL default 'x',
  `c5_text_pg2` varchar(30) NOT NULL default 'x',
  `c5_text_pg3` varchar(30) NOT NULL default 'x',
  `d5_url` varchar(1024) NOT NULL,
  `d5_url_pg2` text NOT NULL,
  `d5_url_pg3` text NOT NULL,
  `d5_text` varchar(30) NOT NULL default 'x',
  `d5_text_pg2` varchar(30) NOT NULL default 'x',
  `d5_text_pg3` varchar(30) NOT NULL default 'x',
  `a6_url` varchar(1024) NOT NULL,
  `a6_url_pg2` text NOT NULL,
  `a6_url_pg3` text NOT NULL,
  `a6_text` varchar(30) NOT NULL default 'x',
  `a6_text_pg2` varchar(30) NOT NULL default 'x',
  `a6_text_pg3` varchar(30) NOT NULL default 'x',
  `b6_url` varchar(1024) NOT NULL,
  `b6_url_pg2` text NOT NULL,
  `b6_url_pg3` text NOT NULL,
  `b6_text` varchar(30) NOT NULL default 'x',
  `b6_text_pg2` varchar(30) NOT NULL default 'x',
  `b6_text_pg3` varchar(30) NOT NULL default 'x',
  `c6_url` varchar(1024) NOT NULL,
  `c6_url_pg2` text NOT NULL,
  `c6_url_pg3` text NOT NULL,
  `c6_text` varchar(30) NOT NULL default 'x',
  `c6_text_pg2` varchar(30) NOT NULL default 'x',
  `c6_text_pg3` varchar(30) NOT NULL default 'x',
  `d6_url` varchar(1024) NOT NULL,
  `d6_url_pg2` text NOT NULL,
  `d6_url_pg3` text NOT NULL,
  `d6_text` varchar(30) NOT NULL default 'x',
  `d6_text_pg2` varchar(30) NOT NULL default 'x',
  `d6_text_pg3` varchar(30) NOT NULL default 'x',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, '0000-00-00 00:00:00', 'robert', '73ff703b37db6a8421fba37093735855', 'Robert', 'Means', 'robert@robertmeans.com', '2d6bf77b51d1e472f408ce3fc4139cc0', 1, 0, '', 2, 1, 'slate', 'Pacific', 'us_pacific', 'Mountain', 'us_mountain', 'Central', 'us_central', 'Eastern', 'us_eastern', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.speedtest.net/', 'http://www.robertmeans.com', 'http://www.monster.com', 'Speed Test', 'Robert Means', 'Monster', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', 'http://papermashup.com/20-complete-scripts-to-download/', 'http://cdn.colorado.gov/cs/Satellite/DORA-DRE/CBON/DORA/1251627343540', 'US Bank', 'jQuery tooltips', 'Real Estate', 'http://email.robertmeans.com', 'http://www.connectclearcreekschools.com/', 'http://www.courts.state.co.us/Forms/SubCategory.cfm?Category=Divorce', 'Webmail', 'Connect CC Schools', 'CC Family Docs', 'http://www.godaddy.com', 'http://www.youtube.com/watch?v=dH-1JZ2jKSo', 'http://www.verizon.com', 'GoDaddy', 'Meredith\\''s Piercing', 'Verizon', 'http://www.bbc.co.uk/', 'https://www.youtube.com/playlist?list=PLfdtiltiRHWFD41D_LDomY1Fb-O9MtFqq', 'http://www.dice.com', 'BBC', 'PHP 101', 'Dice', 'https://www.efirstbank.com/', 'http://ulyssesonline.com/?attachment_id=4990', 'http://www.thedailyshow.com/watch/mon-june-27-2011/oh--for-fox-sake', '1st Bank', 'FB Share Links', 'FoxNews 01', 'http://www.computerhope.com/areacode.htm', 'http://www.robertmeans.com/pictures', 'http://www.politifact.com/truth-o-meter/article/2013/sep/24/top-16-myths-about-health-care-law/', 'Area Codes', 'rm.com/pictures', 'ObamaCare', 'https://p3nlmysqladm002.secureserver.net/grid50/5909/index.php?lang=en-utf-8&amp;token=2a518a79353f330b408691ffee3684d0', 'http://www.youtube.com/watch?v=5Q_akWyekoY', 'https://login.comcast.net/login?forceAuthn=1&amp;continue=%2fSecure%2fHome.aspx&amp;s=ccentral-cima&amp;r=comcast.net', 'DB', 'Firewood, The Art', 'Comcast', 'http://online.wsj.com/home-page', 'http://www.white-hat-web-design.co.uk/blog/resizing-images-with-php/', 'http://www.indeed.com', 'WSJ', 'PHP resize img', 'Indeed', 'http://www.google.com/voice', 'http://support.addthis.com/customer/portal/articles/381263-addthis-client-api#rendering-preferred-services', 'http://www.okcupid.com', 'Google Voice', 'Add This widget', 'OKC', 'http://www.whitepages.com/9901/reverse_phone', 'http://www.jeffcopublicschools.org/jeffco_connect/index.html', 'http://www.youtube.com/user/HowToBasic?feature=watch', 'Reverse Lookup', 'Jeffco Connect', 'How to Basic', 'https://www.khanacademy.org/?view_dashboard=1', 'http://www.youtube.com/watch?v=rFzUNkrQknw', 'http://www.geico.com/manageyourpolicy/auto/', 'Khan Academy', 'Firewood, 11 Steps', 'Gieco', 'http://www.cnn.com', 'http://forums.mtbr.com/forumdisplay.php?f=70', 'https://www.facebook.com/photo.php?v=1418399461711690', 'CNN', 'MTBR', 'FB chicken', 'http://www.worth1000.com/', 'http://www.lydiaannlee.com/blog/?p=331', 'http://www.pof.com', 'W1k', 'social network icons', 'POF', 'http://jeffco.us/ats/addresssearch.do', 'https://campus.jeffco.k12.co.us/campus/portal/jeffco_IC.jsp', 'https://maps.google.com/maps?q=evergreen+colorado', 'Property Assessor', 'Parent Portal', 'map', 'http://www.php.net', 'http://www.youtube.com/watch?v=Z8WOMtcydSE', 'https://myaccount.xcelenergy.com/#', 'PHP', 'Christmas 2012', 'Xcel Energy', 'http://www.huffingtonpost.com', 'http://www.lynda.com', 'http://www.unbelievable-facts.com/2013/07/according-to-scientists-this-is-most.html', 'Huffington Post', 'Lynda', 'relax', 'https://plus.google.com/', 'https://www.myschoolanywhere.com/directory-login.a5w', 'http://charlesmartinbooks.com/blog/entry/my_big_steaming_putrid_pile', 'Google+', 'EMS Directory', 'putrid pile', 'http://www.metric-conversions.org/', 'https://sites.google.com/a/jeffcoschools.us/evergreen-ms/', 'http://www.bennmediation.com/beta', 'Metric Conversion', 'EMS', 'Benn Mediation', 'http://www.phpfreaks.com/tutorial/php-custom-list-order', 'http://www.w3.org/2005/10/howto-favicon', 'http://www.evergreenmetrodistrict.com/', 'PHP Freaks', 'favicon', 'Evergreen Metro', 'http://www.theonion.com/', 'http://www.colt-green.com/drafts', 'http://www.leehigh89.com', 'The Onion', 'Colt-Green', 'Lee \\''89', 'http://www.facebook.com/', 'http://msdn.microsoft.com/en-us/library/ms537656(v=VS.85).aspx', 'http://www.codecademy.com/', 'Facebook', 'IE Favicon', 'Code Academy', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', 'http://youtu.be/aXIGH0Jt7X8', 'https://www.gogecapital.com/en/consumer-credit-financing/merchants/healthcare/carecredit/login.html', 'Diacritical Marks', 'MSS on YouTube', 'CareCredit', 'http://stackoverflow.com', 'http://evergreenlakepresents.com/concert-schedule/', 'http://www.statefarm.com/logoff/logoff.asp', 'Stackoverflow', 'Lake Concerts', 'State Farm');
INSERT INTO `users` VALUES(2, '0000-00-00 00:00:00', 'Bobby', '73ff703b37db6a8421fba37093735855', 'Bobby', 'Means', 'bobby@robertmeans.com', '4a8dc53f96ef41523feebb8a7d865654', 1, 0, '', 2, 1, 'slate', 'Evergreen, CO', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 12, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.speedtest.net/', 'http://pando.com/2014/01/07/how-colorado-disrupted-the-drug-war/', 'http://www.resumewriters.com/', 'Speed Test', 'Pot Article', 'Resume 01', 'http://www.wikipedia.org', 'http://www.youtube.com/watch?v=0Jd-iaYLO1A', 'http://', 'Wikipedia', '2013 Gov Shtdwn', 'x', 'http://www.whitepages.com/9901/reverse_phone', 'http://www.youtube.com/watch?v=-taU9d26wT4', 'http://', 'Reverse Lookup', 'GW Martial law', 'x', 'http://www.godaddy.com', 'http://www.thedailyshow.com/watch/thu-january-9-2014/slumdogs-vs--millionaires---moral-hazard', 'http://', 'GoDaddy', 'Slumbog v Millionaire', 'x', 'http://www.php.net', 'http://www.amazon.com/MagicShine-Cycling-Improved-Battery-1600-Lumen/dp/B0054N48WY/ref=sr_1_5?ie=UTF8&amp;qid=1389650688&amp;sr=8-5&amp;keywords=magicshine', 'http://www.youtube.com/watch?v=o0bhjGneCk0', 'PHP', 'Magicshine AMZ', 'fluid grid', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', 'http://', 'http://', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', 'http://', 'http://', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', 'http://', 'http://', 'Weather', 'x', 'x', 'http://keepvid.com/', 'http://', 'http://', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', 'http://', 'http://', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', 'http://', 'http://', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', 'http://', 'http://', 'Metric Conversion', 'x', 'x', 'http://www.imdb.com', 'http://', 'http://', 'IMDB', 'x', 'x', 'http://www.google.com/voice', 'http://', 'http://', 'Google Voice', 'x', 'x', 'http://www.rei.com', 'http://', 'http://', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', 'http://', 'http://', 'Property Assessor', 'x', 'x', 'http://stackoverflow.com', 'http://', 'http://', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', 'http://', 'http://', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.Twitter.com', '', '', 'Twitter', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(3, '0000-00-00 00:00:00', 'bob', '73ff703b37db6a8421fba37093735855', 'Bob', 'Means', 'bob@robertmeans.com', '72698c739ce4f83c40ab1b8fc2719d6c', 1, 0, '', 2, 1, 'spring', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 12, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 2, 'http://www.rei.com/product/821386/zamberlan-1025-tofane-nw-gt-rr-hiking-boots-mens', 'http://', '', 'Speed Test', 'x', 'x', 'http://', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', 'http://www.amazon.com/NETGEAR-Push2TV-Wireless-Display-Adapter/dp/B00904JILO/ref=sr_1_10?ie=UTF8&amp;qid=1386039842&amp;sr=8-10&amp;keywords=wireless+hdmi', '', 'GoDaddy', 'PC to TV', 'x', 'http://www.php.net', 'http://', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', 'http://', 'Weather', 'x', 'x', 'http://keepvid.com/', 'http://', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', 'http://', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric Conversion', 'x', 'x', 'http://www.imdb.com', 'http://', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', 'http://', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Property Assessor', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Twitter', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(4, '0000-00-00 00:00:00', 'Stanton', '645f5fa81a30f54d0371c196093f1fc2', 'Stanton', 'Means', 'stanton@stantonmeans.com', '603b4ac8addd7dec0dadba4d94fc97c7', 1, 0, '', 2, 1, 'slate', 'x', 'x', 'x', 'x', 'x', 'x', 'Home', 'us_mountain', 12, 'row5', 'row3', 'row2', 'row4', 'row1', 1, 1, 'http://www.youtube.com/user/JackFrostMiner', '', '', 'Jackfrostminer', 'x', 'x', 'http://www.youtube.com/watch?v=X2dm_PEZ5uc', '', '', 'Jailbreak iPod', 'x', 'x', 'https://drive.google.com/a/jeffcoschools.us/#my-drive', '', '', 'Google Docs', 'x', 'x', 'https://login.secureserver.net/index.php?ci=84443&amp;prog_id=GoDaddy&amp;app=wbe', '', '', 'Mail', 'x', 'x', 'http://minecraft.gamepedia.com/Crafting/CompleteList', '', '', 'Minecraft Crafting', 'x', 'x', 'http://www.nfl.com/standings', '', '', 'NFL Standings', 'x', 'x', 'https://idm.jeffco.k12.co.us/schoologylogin/', '', '', 'Schoology', 'x', 'x', 'http://www.khanacademy.com', '', '', 'Khan Academy', 'x', 'x', 'http://www.bigideasmath.com/', '', '', 'Big Ideas Math', 'x', 'x', 'https://www.efirstbank.com/', '', '', 'x', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'x', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'x', 'x', 'x', 'http://www.imdb.com', '', '', 'x', 'x', 'x', 'http://www.google.com/voice', '', '', 'x', 'x', 'x', 'http://www.rei.com', '', '', 'x', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'x', 'x', 'x', 'http://stackoverflow.com', '', '', 'x', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'x', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'x', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'x', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'x', 'x', 'x', 'http://www.facebook.com/', '', '', 'x', 'x', 'x', 'http://www.zappos.com', '', '', 'x', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(5, '0000-00-00 00:00:00', 'Meredith', '8480b47f07e55fe134732b2447281328', 'Meredith', 'Means', 'meredith@meredithmeans.com', '1361310f261e459d6ee7234f137b969b', 1, 0, '', 2, 1, 'spring', 'x', 'x', 'x', 'x', 'x', 'x', 'Evergreen, CO', 'us_mountain', 12, 'row5', 'row3', 'row2', 'row4', 'row1', 1, 1, 'http://www.youtube.com/watch?v=dH-1JZ2jKSo', '', '', 'My Ear Piercing', 'x', 'x', 'http://www.wikipedia.org', '', '', 'x', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'x', 'x', 'x', 'http://www.godaddy.com', '', '', 'x', 'x', 'x', 'http://www.youtube.com/watch?v=pfTi7j31jFc', '', '', 'monster high', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'x', 'x', 'x', 'http://www.worth1000.com/', '', '', 'x', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'x', 'x', 'x', 'http://www.youtube.com/watch?v=0MIbtbBF5h8&amp;list=PLOklt6-bKH9iVxjNgYG05OEDLwD-jdWhm', '', '', 'my froggy stuff', 'x', 'x', 'https://www.efirstbank.com/', '', '', 'x', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'x', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'x', 'x', 'x', 'http://www.youtube.com/watch?v=a-4Ny4URgf4', '', '', 'my favorite song', 'x', 'x', 'http://www.google.com/voice', '', '', 'x', 'x', 'x', 'http://www.rei.com', '', '', 'x', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'x', 'x', 'x', 'http://store.americangirl.com/agshop/static/saigedoll.jsp', '', '', 'american girl', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'x', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'x', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'x', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'x', 'x', 'x', 'http://www.facebook.com/', '', '', 'x', 'x', 'x', 'http://www.zappos.com', '', '', 'x', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(6, '0000-00-00 00:00:00', 'Soulshiner', 'cb32154ec178b88cb055c4b8f50aeaae', 'Gary', 'Lind', 'soulshiner80439@msn.com', '5c8e54e7d0467ca12b35270f762f4fee', 1, 0, '', 2, 1, 'spring', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 12, 'row3', 'row2', 'row1', 'row4', 'row5', 1, 1, 'http://www.cnn.com', 'http://', 'http://', 'CNN', 'x', 'x', 'http://www.wikipedia.org', 'http://', 'http://', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', 'http://', 'http://', 'Reverse Lookup', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://www.drudgereport.com', 'http://', 'http://', 'Drudge Report', 'x', 'x', 'https://www.break.com', 'http://', 'http://', 'Break', 'x', 'x', 'http://www.amazon.com/', 'http://', 'http://', 'Amazon', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://philzone.org/', 'http://', 'http://', 'Phil Zone', 'x', 'x', 'https://www.slamomaha.com', 'http://', 'http://', 'SLAM Omaha', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://www.9news.com', 'http://', 'http://', '9 News', 'x', 'x', 'http://www.apple.com/trailers', 'http://', 'http://', 'Apple Trailers', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://', 'http://', 'http://', 'x', 'x', 'x', 'http://perezhilton.com', 'http://', 'http://', 'Perez Hilton', 'x', 'x', 'http://285bound.com', 'http://', 'http://', '285Bound', 'x', 'x', 'http://', '', '', 'x', 'x', 'x', 'http://', '', '', 'x', 'x', 'x', 'http://www.craigslist.com/', '', '', 'Craigs List', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://', '', '', 'x', 'x', 'x', 'http://', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(7, '0000-00-00 00:00:00', 'limperiale', '8208f34766d940555893e4563aae9881', 'Larry', 'Imperiale', 'larryi@rmi.net', 'aac7cbc51e7f185c1b39e7140fbc3b1b', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'x', 'x', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 12, 'row4', 'row2', 'row3', 'row1', 'row5', 2, 1, 'http://www.lynda.com', 'http://', 'http://', 'Lynda', 'x', 'x', 'http://www.wikipedia.org', 'http://', 'http://', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', 'http://', 'http://', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', 'http://', 'http://', 'GoDaddy', 'x', 'x', 'http://www.php.net', 'http://', 'http://', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', 'http://', 'http://', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', 'http://', 'http://', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', 'http://', 'http://', 'Weather', 'x', 'x', 'http://keepvid.com/', 'http://', 'http://', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', 'http://', 'http://', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', 'http://', 'http://', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', 'http://', 'http://', 'Metric', 'x', 'x', 'http://www.imdb.com', 'http://', 'http://', 'IMDB', 'x', 'x', 'http://www.google.com/voice', 'http://', 'http://', 'Google Voice', 'x', 'x', 'http://www.rei.com', 'http://', 'http://', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', 'http://', 'http://', 'Assessor''s Office', 'x', 'x', 'http://stackoverflow.com', 'http://', 'http://', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', 'http://', 'http://', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Zappos', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(8, '0000-00-00 00:00:00', 'Anne', '800e0d5ec433d352aee4b9adebe4eeef', 'Anne', 'Irwin', 'anneirwinbld@yahoo.com', 'cf9ef6e819ea2d85009f13d6a2094ac0', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 12, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.lynda.com', '', '', 'Speed Test', 'x', 'x', 'http://www.wikipedia.org', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', '', '', 'GoDaddy', 'x', 'x', 'http://www.php.net', '', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'Weather', 'x', 'x', 'http://keepvid.com/', '', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', '', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric Conversion', 'x', 'x', 'http://www.imdb.com', '', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', '', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Property Assessor', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Twitter', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(9, '0000-00-00 00:00:00', 'badmotherfucker', 'aad3b034bd2a61e6b74dad5e881d459c', 'Clark', 'Green', 'stewart@satillainc.com', 'eadfb6d6c5af64c9d5f4db4e256db56c', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 3, 'http://www.lynda.com', '', '', 'Lynda', 'x', 'x', 'http://www.wikipedia.org', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', '', '', 'GoDaddy', 'x', 'x', 'http://www.php.net', '', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'Weather', 'x', 'x', 'http://keepvid.com/', '', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', '', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric', 'x', 'x', 'http://www.imdb.com', '', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', '', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Assessor''s Office', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Zappos', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(10, '0000-00-00 00:00:00', 'dnewcomer', 'e65b868dc411f55b52b4ec278c5523a9', 'David', 'Newcomer', 'dnewcomer@mac.com', '92fa5a8b871ed53577687b796626bf0e', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.lynda.com', '', '', 'Lynda', 'x', 'x', 'http://www.wikipedia.org', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', '', '', 'GoDaddy', 'x', 'x', 'http://www.php.net', '', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'Weather', 'x', 'x', 'http://keepvid.com/', '', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', '', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric', 'x', 'x', 'http://www.imdb.com', '', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', '', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Assessor''s Office', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Zappos', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(11, '0000-00-00 00:00:00', 'DeanAdam', 'bc81bd0d05744173a8743fca1eccea20', 'Dean', 'Adam', 'deanadam@comcast.net', '294e70f94adb467ac0a4a58c376ba5de', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://', '', '', 'x', 'x', 'x', 'http://www.wikipedia.org', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', '', '', 'GoDaddy', 'x', 'x', 'http://www.php.net', '', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'Weather', 'x', 'x', 'http://keepvid.com/', '', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', '', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric', 'x', 'x', 'http://www.imdb.com', '', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', '', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Assessor''s Office', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Zappos', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(12, '0000-00-00 00:00:00', 'billmeans', 'b64e6d24b1e0820b433d03ee112bc5a2', 'Bill', 'Means', 'bill.means2@gmail.com', '99f13e2b34f64a3c28053dd87ab1e945', 1, 0, '', 2, 1, 'slate', 'Colorado, USA', 'us_mountain', 'London', 'london', 'Tokyo', 'tokyo', 'Fiji', 'auckland', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.lynda.com', '', '', 'Lynda', 'x', 'x', 'http://www.wikipedia.org', '', '', 'Wikipedia', 'x', 'x', 'http://www.whitepages.com/9901/reverse_phone', '', '', 'Reverse Lookup', 'x', 'x', 'http://www.godaddy.com', '', '', 'GoDaddy', 'x', 'x', 'http://www.php.net', '', '', 'PHP', 'x', 'x', 'https://www4.usbank.com/internetBanking/RequestRouter?requestCmdId=DisplayLoginPage', '', '', 'US Bank', 'x', 'x', 'http://www.worth1000.com/', '', '', 'W1k', 'x', 'x', 'http://www.wunderground.com/cgi-bin/findweather/hdfForecast?query=evergreen+colorado', '', '', 'Weather', 'x', 'x', 'http://keepvid.com/', '', '', 'Keepvid', 'x', 'x', 'https://www.efirstbank.com/', '', '', '1st Bank', 'x', 'x', 'http://online.wsj.com/home-page', '', '', 'WSJ', 'x', 'x', 'http://www.metric-conversions.org/', '', '', 'Metric', 'x', 'x', 'http://www.imdb.com', '', '', 'IMDB', 'x', 'x', 'http://www.google.com/voice', '', '', 'Google Voice', 'x', 'x', 'http://www.rei.com', '', '', 'REI', 'x', 'x', 'http://jeffco.us/ats/addresssearch.do', '', '', 'Assessor''s Office', 'x', 'x', 'http://stackoverflow.com', '', '', 'Stackoverflow', 'x', 'x', 'http://www.computerhope.com/areacode.htm', '', '', 'Area Codes', 'x', 'x', 'http://forums.mtbr.com/forumdisplay.php?f=70', '', '', 'MTBR', 'x', 'x', 'http://www.onthesnow.com/summit-county/skireport.html', '', '', 'Snow Report', 'x', 'x', 'http://www.chucknorrisfacts.com/', '', '', 'Useful Information', 'x', 'x', 'http://www.facebook.com/', '', '', 'Facebook', 'x', 'x', 'http://www.zappos.com', '', '', 'Zappos', 'x', 'x', 'http://www.vistawide.com/languages/typing_foreign_language_characters.htm', '', '', 'Diacritical Marks', 'x', 'x');
INSERT INTO `users` VALUES(17, '0000-00-00 00:00:00', 'test', '5f4dcc3b5aa765d61d8327deb882cf99', 'test', 'account', 'ai@robertmeans.com', '4956b353c127f5157f4bee52dc963b8d', 1, 0, '', 2, 1, 'spring', 'x', '', 'x', '', 'Work Contact', 'tokyo', 'Colorado, USA', 'us_mountain', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.robertmeans.com', '', '', 'Robert Means', 'x', 'x', 'http://', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(18, '0000-00-00 00:00:00', 'edith', '047ff87ab4bcbf21beae24717c6a161e', 'edith', 'Armendariz', 'edith_adz@hotmail.com', '9be088e3c7d081ad9a3499ea8598793d', 1, 0, '', 2, 1, 'slate', 'x', '', 'x', '', 'x', '', 'Colorado, USA', 'us_mountain', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.facebook.com', '', '', 'fb', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(19, '2013-11-10 08:30:00', 'aventa24', 'a0402f666ad6bfbe389f2f44dca4922e', 'Arnis', 'Venta', 'arnis.venta@gmail.com', '158e9ea4ac69a26aa2c210676e8f0820', 1, 0, '', 2, 1, 'slate', 'x', '', 'x', '', 'x', '', 'Colorado, USA', 'us_mountain', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x');
INSERT INTO `users` VALUES(20, '2014-01-23 14:10:37', 'design', '73ff703b37db6a8421fba37093735855', 'Design', 'Means', 'design@robertmeans.com', '3b853207af6c6ab4e07d76d6bea7923c', 1, 0, '', 2, 1, 'slate', 'x', '', 'x', '', 'x', '', 'Colorado, USA', 'us_mountain', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, 'http://www.google.com/fonts/#', 'http://positioniseverything.net', 'http://support.godaddy.com/help/article/8902/setting-up-office-365-in-outlook?locale=en&amp;ci=46061', 'Google Fonts', 'PosIsEverything', 'MS 365 setup', 'http://vectormagic.com/home', 'http://www.fontsquirrel.com', 'http://support.godaddy.com/help/article/5862/backing-up-your-email-with-outlook?locale=en&amp;ci=46061', 'Vector Magic', 'Font Squirrel', 'pst backup', 'http://www.webpagesthatsuck.com/', 'http://www.whatwg.org/', '', 'WbPgs That Suck', 'WHATWG HTML5 Specs', 'x', 'http://www.typetester.org', '', 'http://kirkhings.com/code/css/space-critical-css-selectors/65/', 'Typetester', 'x', 'CSS White Space!', 'http://www.loripsum.net/', 'http://css3wizardry.com/2011/01/30/the-holy-grail-of-mobile-layout/', 'http://www.godaddy.com/', 'Lorem ipsum', 'Mobile CSS H Grail', 'GoDaddy', 'http://www.spoon.net/browsers', 'http://www.google.com/webfonts', 'http://www.cssnewbie.com/easy-css-dropdown-menus/#.UvwMZPldX2F', 'Browser Sandbox', 'Google Web Fonts', 'CSS dropdown', 'https://developer.mozilla.org/en/Mozilla_CSS_support_chart', 'http://www.robertmeans.com/temp/grid_resources.htm', '', 'Moz CSS Support', 'Grid Resources', 'x', 'http://kuler.adobe.com', '', 'http://www.amazon.com/HighRise-Electric-Height-Adjustable-Table/dp/B00FBTN6RY/ref=sr_1_1?s=office-products&amp;ie=UTF8&amp;qid=1392355539&amp;sr=1-1&amp;keywords=height+adjustable+desk', 'Adobe Kuler', 'x', 'desk 04', 'http://psd.tutsplus.com/tutorials/designing-tutorials/9-essential-principles-for-good-web-design/', 'http://www.w3.org/TR/CSS2', 'http://www.bennmediation.com/beta', 'Good Design', 'CSS 2.1 Specf', 'Benn Mediation - beta', 'http://www.sitepoint.com/style-web-forms-css/', 'http://www.cssbeauty.com', '', 'Contact - CSS', 'CSS Beauty', 'x', 'http://reference.sitepoint.com/css', 'http://gsnedders.html5.org/outliner/', '', 'Sitepoint CSS', 'HTML5 Outliner', 'x', 'http://www.w3schools.com/cssref/default.asp', '', 'http://www.innovativeessentials.com/conset-501-electric-adjustable-height-desk-base-black-frame-p-1133.html', 'CSS Reference', 'x', 'Desk 03', 'http://www.binvisions.com/articles/tablet-smartphone-resolutions-screen-size-list/', 'http://www.css3generator.com', 'http://www.randomsnippets.com/2008/02/12/how-to-hide-and-show-your-div/', 'Screen Resolutions', 'CSS Generator', 'Random Snippets', 'http://www.opera.com/docs/specs', 'http://patterntap.com', '', 'Opera CSS Support', 'Pattern Tap', 'x', 'http://quirksmode.org', '', '', 'Quirksmode', 'x', 'x', 'http://www.w3.org/Style/CSS/current-work.en.html', '', 'http://www.innovativeessentials.com/conset-501-8s084-sit-stand-adjustable-height-electric-desk-base-p-1120.html?7500=608&amp;osCsid=jnnj6cff62v0sv1l7shiupbhc3#tabs-1', 'CSS Current Wk', 'x', 'Desk 02', 'http://localhost/robertmeans/responsive/index.php', 'http://www.colorzilla.com/gradient-editor', 'https://saucelabs.com/home', 'Local Responsive', 'Gradient Editor', 'SauceLabs', 'http://www.robertmeans.com/responsive', 'http://www.bestcssvault.com', '', 'Responsive', 'Best CSS Vault', 'x', 'http://caniuse.com', '', '', 'Can I use...', 'x', 'x', 'http://www.w3.org/TR/selectors/', '', 'http://www.versatables.com/products/electric-lift-table/', 'CSS Selectors', 'x', 'Desk 01', 'http://www.lynda.com/Dreamweaver-CS5-training/Create-a-Rotating-Carousel-with-jQuery-and-Dreamweaver/93386-2.html', 'http://www.w3.org/Style/CSS/current-work.en.html', 'http://www.fredhq.com/', 'Lynda - CSS', 'CSS Current Wk', 'jQuery stuff', 'http://www.facebook.com', 'http://www.instantshift.com/2012/03/27/html5-best-practices-for-designers/', '', 'Facebook', 'HTML5 Best Practices', 'x', 'http://msdn.microsoft.com/en-us/library/cc351024(v=vs.85).aspx', '', 'http://www.amazon.com/Jarvis-Electric-Adjustable-Height-Standing/dp/B00HRFEIF4/ref=pd_sim_sbs_op_4', 'Microsoft CSS Supp', 'x', 'Desk 05', 'http://www.w3.org/TR/CSS21/propidx.html', '', 'http://support.gateway.com/s/Checklists/BPC/ck2007021226.shtml', 'CSS Appendix F', 'x', 'Gateway WiFi Fix');
INSERT INTO `users` VALUES(21, '2014-01-26 07:41:54', 'Charlesrurb', '449d8e6c1bbc85c812ad2ffe8a9330f3', 'CharlesrurbBZ', 'CharlesrurbBZ', '1@ekosdom.net', '2ae665ca003e03386b87aa5430059814', 0, 0, '', 2, 1, 'slate', 'x', '', 'x', '', 'x', '', 'Colorado, USA', 'us_mountain', 24, 'row1', 'row2', 'row3', 'row4', 'row5', 1, 1, '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x');
