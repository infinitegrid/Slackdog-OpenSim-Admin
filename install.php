<?php
/*******************************************************************************
**	file:	install.php
********************************************************************************
**	author:	Riseon Kosten
**	date:	2011/06/24
********************************************************************************
*******************************************************************************/

require_once "settings/config.php";
require_once "settings/lang/$language/language.php";

$step = $_POST['step'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$pwd1 = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
$username = $_POST['username'];
$company = $_POST['company'];
$admincomments = $_POST['admincomments'];
$companycomments = $_POST['companycomments'];
$address = $_POST['address'];


echo '<html><head><title>MyHelpdesk '.$lang['installation'].'</title>';
require_once "settings/style.php";
echo '</head><body>';

//connect and select the proper database....die if database not found.
$connection = mysql_connect($mysql_host, $mysql_user, $mysql_pwd);
mysql_select_db($mysql_db) or die(mysql_error());

$step_one_text = str_replace("NEXT", $lang['next'], $lang['step_one_text']);
if(!isset($step)) {
	echo '
	<br>
	<form action=install.php method=post>
	<table class=border cellSpacing=0 cellPadding=0 width=90% align=center border=0>
		<tr>
			<td>
				<table cellSpacing=1 cellPadding=5 width=100% border=0>
					<tr>
						<td class=info align=center>
							<b>MyHelpdesk '.$lang['installation'].'</b>
						</td>
					</tr>
					<tr>
						<td class=back>
							<br>
							<table class=border cellSpacing=0 cellPadding=0 width=80% align=center border=0>
								<tr>
									<td>
										<table cellSpacing=1 cellPadding=5 width=100% border=0>
											<tr>
												<td class=info align=center>
													<b>'.$lang['step_one'].'</b>
												</td>
											</tr>
											<tr>
												<td class=back>
													<center>
														<br>'.$step_one_text.'<br><br>
													</center>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<br>
							<center>
								<input type=hidden name=step value=1>
								<input class=border type=submit name=submit value='.$lang['next'].'>
							</center>
							<br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	</form>';
}	//end no step

if($step == 1) {
	//create the tables from scratch now.
	mysql_query("
			CREATE TABLE $mysql_sessions_table (
				sesskey char(32) not null,
				expiry int(11) unsigned not null,
				value text not null,
				PRIMARY KEY (sesskey)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_announcement_table (
			  id int(11) NOT NULL auto_increment,
			  time int(11) default 0 not null,
			  message text,
			  PRIMARY KEY (id)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_platforms_table (
			  id int(11) NOT NULL auto_increment,
			  rank int(4) NOT NULL default '0',
			  platform varchar(60) NOT NULL default '',
			  PRIMARY KEY  (id),
			  UNIQUE KEY (platform)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_settings_table (
			  name varchar(60) default NULL,
			  site_url varchar(255) default NULL,
			  admin_email varchar(255) default NULL,
			  people_per_page int(4) default '5',
			  sets_per_page int(4) default '5',
			  tickets_per_page int(4) default '10',
			  announcements_limit int(4) default '5',
			  stats varchar(3) default 'on',
			  products_status varchar(3) default 'on',
			  setssl varchar(3) NOT NULL default 'off',
			  default_theme varchar(60) default 'default' not null,
			  smtp varchar(3) default 'off',
			  automatic_notification varchar(3) default 'off',
			  sendmail_path varchar(255),
			  on_off varchar(3) default 'on',
			  reason text,
			  whosonline varchar(3) default 'on',
			  time_tracking varchar(3) default 'off' not null
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_tcategories_table (
			  id int(11) NOT NULL auto_increment,
			  rank int(4) NOT NULL default '0',
			  category varchar(60) NOT NULL default '',
			  PRIMARY KEY  (id),
			  UNIQUE KEY (category)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_tpriorities_table (
			  id int(11) NOT NULL auto_increment,
			  rank int(4) NOT NULL default '0',
			  priority varchar(60) NOT NULL default '',
			  PRIMARY KEY  (id),
			  UNIQUE KEY (priority)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_tstatus_table (
			  id int(11) NOT NULL auto_increment,
			  rank int(4) NOT NULL default '0',
			  status varchar(60) NOT NULL default '',
			  PRIMARY KEY  (id),
			  UNIQUE KEY (status)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_whosonline_table(
			  timestamp int(11) default '0' not null,
			  user varchar(60) not null,
			  ip varchar(40) not null,
			  file varchar(255) not null,
			  primary key(timestamp),
			  key (ip)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_people_table (
				id int(11) NOT NULL auto_increment,
				first_name varchar(60) NOT NULL default '',
				last_name varchar(60) NOT NULL default '',
				user_name varchar(60) NOT NULL default '',
				password varchar(255) NOT NULL default '',
				email varchar(100) NOT NULL default '',
				phone varchar(100) NOT NULL default '',
				fax varchar(100) default NULL,
				company_id int(11) NOT NULL,
				author_id int(11) NOT NULL,
				date_modified int(11) NOT NULL default '0',
				comments text,
				user int(1) NOT NULL default '0',
				supporter int(1) NOT NULL default '0',
				admin int(1) NOT NULL default '0',
				theme varchar(60) default 'default' not null,
				PRIMARY KEY  (id),
				UNIQUE KEY (user_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_companies_table (
				id int(11) NOT NULL auto_increment,
				company_name varchar(100) NOT NULL default '',
				address text,
				main_contact_id int(11) NOT NULL default '0',
				author_id int(11) NOT NULL,
				date_modified int(11) NOT NULL default '0',
				comments text,
				rank int(4) NOT NULL default '0',
				PRIMARY KEY  (id),
				UNIQUE KEY (company_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_groups_table (
				id int(11) NOT NULL auto_increment,
				group_name varchar(100) NOT NULL default '',
				author_id int(11) NOT NULL,
				date_modified int(11) NOT NULL default '0',
				comments text,
				rank int(4) NOT NULL default '0',
				PRIMARY KEY  (id),
				UNIQUE KEY (group_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_supporters_table (
				group_id int(11) NOT NULL,
				supporter_id int(11) NOT NULL,
				UNIQUE KEY (group_id, supporter_id)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
		CREATE TABLE $mysql_tracktime_table (
			ticket_id int(11) not null,
			supporter_id int(11) not null,
			minutes int(11) default 0,
			date_logged int(11) NOT NULL default '0'
		)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_modules_table (
				id int(11) NOT NULL auto_increment,
				module_name varchar(60) NOT NULL default '',
				rank int(4) NOT NULL default '0',
				PRIMARY KEY  (id),
				UNIQUE KEY (module_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_versions_table (
				id int(11) NOT NULL auto_increment,
				version_name varchar(60) NOT NULL default '',
				rank int(4) NOT NULL default '0',
				PRIMARY KEY  (id),
				UNIQUE KEY (version_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_tickets_table (
				id int(11) NOT NULL auto_increment,
				group_id int(11) NOT NULL default '1',
				supporter_id int(11) NOT NULL default '1',
				company_id int(11) NOT NULL default '1',
				contact_id int(11) NOT NULL default '1',
				priority_id int(11) NOT NULL default '1',
				status_id int(11) NOT NULL default '1',
				platform_id int(11) NOT NULL default '1',
				category_id int(11) NOT NULL default '1',
				title varchar(255) NOT NULL default '',
				description text,
				update_log text,
				version_id int(11) NOT NULL default '0',
				diskid_id int(11) NOT NULL default '0',
				date_created int(11) NOT NULL default '0',
				date_modified int(11) NOT NULL default '0',
				author_id int(11) NOT NULL,
				survey int(1) default 0 not null,
				PRIMARY KEY  (id),
				FULLTEXT (title, description, update_log)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_ticketmodules_table (
				ticket_id int(11) NOT NULL,
				module_id int(11) NOT NULL,
				UNIQUE KEY (ticket_id, module_id)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_diskid_table (
				id int(11) NOT NULL auto_increment,
				diskid_name varchar(60) NOT NULL default '',
				client_id int(11) NOT NULL,
				PRIMARY KEY  (id),
				UNIQUE KEY (diskid_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_faqcategories_table (
				id int(11) NOT NULL auto_increment,
				category_name varchar(60) NOT NULL default '',
				rank int(4) NOT NULL default '0',
				PRIMARY KEY  (id),
				UNIQUE KEY (category_name)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_faqs_table (
				id int(11) NOT NULL auto_increment,
				question varchar(255) NOT NULL default '',
				answer text,
				category_id int(11) NOT NULL default '0',
				author_id int(11) NOT NULL,
				date_modified int(11) NOT NULL default '0',
				comments text,
				PRIMARY KEY  (id),
				UNIQUE KEY (question),
				FULLTEXT (question, answer)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_ticketdiskid_table (
				ticket_id int(11) NOT NULL,
				diskid varchar(60)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_ticketfiles_table (
				ticket_id int(11) NOT NULL,
				file_id int(11) NOT NULL,
				UNIQUE KEY (ticket_id, file_id)
			)")or die(mysql_errno() . " " . mysql_error());

	mysql_query("
			CREATE TABLE $mysql_files_table (
				id int(11) NOT NULL auto_increment,
				name varchar(80) not null default '',
				filename varchar(250) not null,
				size bigint(20) not null,
				author_id int(11) NOT NULL,
				date_modified int(11) NOT NULL default '0',
				comments text,
				PRIMARY KEY  (id),
				UNIQUE KEY (filename)
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("			
			CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `adminsetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startregion` varchar(255) NOT NULL,
  `userdir` varchar(255) NOT NULL,
  `griddir` varchar(255) NOT NULL,
  `assetdir` varchar(255) NOT NULL,
  `lastnames` varchar(10) NOT NULL,
  `adress` varchar(32) NOT NULL,
  `region` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `banned` (
  `UUID` varchar(36) NOT NULL,
  `agentIP` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `codetable` (
  `UUID` varchar(36) NOT NULL,
  `code` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `country` (
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `economy_money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CentsPerMoneyUnit` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `economy_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sourceId` varchar(36) NOT NULL,
  `destId` varchar(36) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `flags` int(11) NOT NULL DEFAULT '0',
  `aggregatePermInventory` int(11) NOT NULL DEFAULT '0',
  `aggregatePermNextOwner` int(11) NOT NULL DEFAULT '0',
  `description` varchar(256) DEFAULT NULL,
  `transactionType` int(11) NOT NULL DEFAULT '0',
  `timeOccurred` int(11) NOT NULL,
  `RegionGenerated` varchar(36) NOT NULL,
  `IPGenerated` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `lastnames` (
  `name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL DEFAULT '1',
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `offline_msgs` (
  `uuid` varchar(36) NOT NULL,
  `message` text NOT NULL,
  KEY `uuid` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `pagemanager` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `sitename` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rank` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `active` varchar(30) NOT NULL,
  `url` text NOT NULL,
  `target` varchar(255) NOT NULL,
  `display` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;
				)")or die(mysql_errno() . " " . mysql_error());
				
	mysql_query("
CREATE TABLE IF NOT EXISTS `regions` (
  `serverIP` varchar(64) NOT NULL,
  `serverPort` int(11) NOT NULL,
  `regionMapTexture` varchar(255) NOT NULL,
  `locX` int(11) NOT NULL,
  `locY` int(11) NOT NULL,
  `lastcheck` int(10) NOT NULL,
  `failcounter` int(11) NOT NULL,
  UNIQUE KEY `serverURI` (`serverIP`,`regionMapTexture`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `sitemanagement` (
  `pagecase` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `include` varchar(255) NOT NULL,
  PRIMARY KEY (`pagecase`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `startscreen_infowindow` (
  `gridstatus` varchar(255) NOT NULL,
  `active` varchar(30) NOT NULL,
  `color` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `startscreen_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `statistics` (
  `serverIP` varchar(64) NOT NULL,
  `serverPort` int(11) NOT NULL,
  `dilation` float NOT NULL,
  `simfps` float NOT NULL,
  `phyfps` float NOT NULL,
  `prims` int(11) NOT NULL,
  `scripts` int(11) NOT NULL,
  `script_lps` float NOT NULL,
  `packets_in` float NOT NULL,
  `packets_out` float NOT NULL,
  `memory` float NOT NULL,
  `uptime` varchar(20) NOT NULL,
  `version` varchar(255) NOT NULL,
  `lastcheck` int(10) NOT NULL,
  `failcounter` int(11) NOT NULL,
  UNIQUE KEY `serverIP` (`serverIP`,`serverPort`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	mysql_query("
CREATE TABLE IF NOT EXISTS `users` (
  `UUID` varchar(36) NOT NULL DEFAULT '',
  `username` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `passwordHash` varchar(32) NOT NULL,
  `passwordSalt` varchar(32) NOT NULL,
  `realname1` varchar(255) NOT NULL,
  `realname2` varchar(255) NOT NULL,
  `adress1` varchar(255) NOT NULL,
  `zip1` varchar(255) NOT NULL,
  `city1` varchar(255) NOT NULL,
  `country1` varchar(255) NOT NULL,
  `emailadress` varchar(255) NOT NULL,
  `agentIP` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`UUID`),
  UNIQUE KEY `usernames` (`username`,`lastname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
			)")or die(mysql_errno() . " " . mysql_error());
			
	//insert some data into the platforms table.
	$generic = $lang['generic'];
	$pc = $lang['pc'];
	$macintosh = $lang['macintosh'];	
	mysql_query("INSERT into $mysql_platforms_table values(NULL, 0, '$generic')");
	mysql_query("INSERT into $mysql_platforms_table values(NULL, 1, '$pc')");
	mysql_query("INSERT into $mysql_platforms_table values(NULL, 1, '$macintosh')");

	$bigproblem = $lang['big_problem'];
	$smallproblem = $lang['small_problem'];
	$otherproblem = $lang['other_problem'];
	//insert some data into the categories table.
	mysql_query("INSERT into $mysql_tcategories_table values(NULL, 0, '$bigproblem')");
	mysql_query("INSERT into $mysql_tcategories_table values(NULL, 1, '$smallproblem')");
	mysql_query("INSERT into $mysql_tcategories_table values(NULL, 2, '$otherproblem')");

	$critical = $lang['critical'];
	$high = $lang['high'];
	$medium = $lang['medium'];
	$low = $lang['low'];
	//insert some data into the priorities table.
	mysql_query("INSERT into $mysql_tpriorities_table VALUES(NULL, 0, '$critical')");
	mysql_query("INSERT into $mysql_tpriorities_table VALUES(NULL, 1, '$high')");
	mysql_query("INSERT into $mysql_tpriorities_table VALUES(NULL, 2, '$medium')");
	mysql_query("INSERT into $mysql_tpriorities_table VALUES(NULL, 3, '$low')");

	$open = $lang['open'];
	$inprogress = $lang['in_progress'];
	$waitingforresponse = $lang['waiting_for_response'];
	$closed = $lang['closed'];
	//insert some data into the status table.
	mysql_query("INSERT into $mysql_tstatus_table VALUES(NULL, 1, '$open')");
	mysql_query("INSERT into $mysql_tstatus_table VALUES(NULL, 2, '$inprogress')");
	mysql_query("INSERT into $mysql_tstatus_table VALUES(NULL, 3, '$waitingforresponse')");
	mysql_query("INSERT into $mysql_tstatus_table VALUES(NULL, 4, '$closed')");

//insert the wiredux base data
	mysql_query("
INSERT INTO `admin` (`id`, `username`, `password`) VALUES(1, 'admin', 'f0d998cf0c9cae229a7e0bc1a5aa7ae0');
INSERT INTO `adminsetting` (`id`, `startregion`, `userdir`, `griddir`, `assetdir`, `lastnames`, `adress`, `region`) VALUES(1, '4915916489252352', 'D:\\opensim\\', 'D:\\opensim\\', 'D:\\opensim\\', '1', '1', '1');
INSERT INTO `country` (`name`) VALUES
('Albania'),
('Belgium'),
('Bosnia'),
('Bulgaria'),
('Germany'),
('Denmark'),
('Estonia'),
('Finland'),
('France'),
('Georgia'),
('Greece'),
('United Kingdom'),
('Ireland'),
('Iceland'),
('Italy'),
('Croatia'),
('Latvia'),
('Lithuania'),
('Luxembourg'),
('Malta'),
('Macedonia'),
('Moldova'),
('Netherlands'),
('Norway'),
('Poland'),
('Portugal'),
('Romania'),
('Russia'),
('Sweden'),
('Switzerland'),
('Serbia & Montenegro'),
('Slovakia'),
('Slovenia'),
('Espana'),
('Czech Rep.'),
('Turkey'),
('Ukraine'),
('Hungary'),
('Belarus'),
('Cyprus'),
('Austria'),
('Afghanistan'),
('Armenia'),
('Azerbaijan'),
('Bangladesh'),
('Bhutan'),
('Brunei'),
('India'),
('Indonesia'),
('Japan'),
('Cambodia'),
('Kazakhstan'),
('Kyrgyzstan'),
('Laos'),
('Malaysia'),
('Maldives'),
('Mongolia'),
('Myanmar'),
('Nepal'),
('North Korea'),
('Pakistan'),
('Philippines'),
('Singapore'),
('Sri Lanka'),
('South Korea'),
('Tajikistan'),
('Taiwan'),
('Thailand'),
('Turkmenistan'),
('Uzbekistan'),
('Viet Nam'),
('Canada'),
('Mexico'),
('USA'),
('Antigua und Barbuda'),
('Aruba'),
('Bahamas'),
('Barbados'),
('Belize'),
('Bermuda'),
('Cayman Islands'),
('Costa Rica'),
('Curacao'),
('Dominica'),
('Dominican Rep.'),
('El Salvador'),
('Grenada'),
('Guadeloupe'),
('Guatemala'),
('Haiti'),
('Honduras'),
('Jamaica'),
('Virgin Islands'),
('Cuba'),
('Martinique'),
('Nicaragua'),
('Panama'),
('Puerto Rico'),
('St. Kitts und Nevis'),
('St. Lucia'),
('St. Maarten'),
('St. Vincent & Grenadin'),
('Trinidad & Tobago'),
('Argentina'),
('Bolivia'),
('Brazil'),
('Chile'),
('Ecuador'),
('Guyana'),
('Colombia'),
('Paraguay'),
('Peru'),
('Suriname'),
('Uruguay'),
('Venezuela'),
('Australia'),
('Fiji'),
('Marshall Islands'),
('Micronesia'),
('Nauru'),
('New Zealand'),
('Palau'),
('Papua New Guinea'),
('Samoa'),
('Tonga'),
('Tuvalu'),
('Vanuatu'),
('Bahrain'),
('Iraq'),
('Iran'),
('Israel'),
('Yemen'),
('Jordan'),
('Quatar'),
('Kuwait'),
('Lebanon'),
('Oman'),
('Palestinian authority'),
('Saudi Arabia'),
('Syria'),
('U.A.E.'),
('Algeria'),
('Angola'),
('Benin'),
('Botswana'),
('Burkina Faso'),
('Burundi'),
('Dem. Rep. of the Congo'),
('Djibouti'),
('Cé d''Ivoire'),
('Eritrea'),
('Gabun'),
('Gambia'),
('Ghana'),
('Guinea'),
('Guinea-Bissau'),
('Cameroon'),
('Cape Verde'),
('Kenya'),
('Lesotho'),
('Liberia'),
('Libya'),
('Madagascar'),
('Malawi'),
('Mali'),
('Morocco'),
('Mauritania'),
('Mauritius'),
('Mozambique'),
('Namibia'),
('Niger'),
('Nigeria'),
('Dem. Rep. of the Congo'),
('Zambia'),
('Sao Toménd Principe'),
('Senegal'),
('Seychelles'),
('Sierra Leone'),
('Simbabwe'),
('Somalia'),
('Sudan'),
('Swaziland'),
('South Africa'),
('Tanzania'),
('Togo'),
('Chad'),
('Tunisia'),
('Uganda'),
('Central African Rep.'),
('Egypt'),
('Guinea Equatorial'),
('Ethiopia'),
('La Réion'),
('Solomon Islands'),
('French Guiana');
INSERT INTO `economy_money` (`id`, `CentsPerMoneyUnit`) VALUES(1, 0.415);
INSERT INTO `lastnames` (`name`, `active`) VALUES
('Allen', '1'),
('Babbi', '1'),
('Bauer', '1'),
('Baumeister', '1'),
('Binder', '1'),
('Bloomberg', '1'),
('Bohlen', '1'),
('Crazys', '1'),
('Dredd', '1'),
('Ewing', '1'),
('Gridlock', '1'),
('Hausermann', '1'),
('Heron', '1'),
('Himbaer', '1'),
('Huss', '1'),
('Kandee', '1'),
('Machlam', '1'),
('Maek', '1'),
('Mansworld', '1'),
('McKinsey', '1'),
('McLachlan', '1'),
('Mondial', '1'),
('Moondancer', '1'),
('Mueller', '1'),
('Nala', '1'),
('Noel', '1'),
('Nonsito', '1'),
('Nosemann', '1'),
('Notringham', '1'),
('Obolus', '1'),
('Opus', '1'),
('Pohl', '1'),
('Raptor', '1'),
('Roux', '1'),
('Schnuggy', '1'),
('Schwinge', '1'),
('Simons', '1'),
('Snapper', '1'),
('Sweetheart', '1'),
('Swindlehurst', '1'),
('Tickle', '1'),
('Young', '1');
INSERT INTO `pagemanager` (`id`, `code`, `sitename`, `content`, `rank`, `type`, `active`, `url`, `target`, `display`) VALUES
(1, '1211831857', 'Home', '<p> </p>\r\n<table cellspacing="0" cellpadding="0" border="0" width="100%" height="100%">\r\n    <tbody>\r\n        <tr>\r\n            <td width="63%" valign="top" height="204">\r\n            <table cellspacing="0" cellpadding="5" border="0" bgcolor="#ffffff" align="center" width="90%" height="195">\r\n                <tbody>\r\n                    <tr>\r\n                        <td valign="top">\r\n                        <p><strong>Welcome to Slackdog Grid !</strong><br />\r\n                        <br />\r\n                        <p>This site is currently under construction. Automated account creation is disabled on the website. Please Contact Trinity at trinity93@gmail.com for information on getting an account</p>\r\n                        <p>For now you can see the Status of our System -> <br />\r\n                        <br />\r\n                        Feel free to look around the site. :-)</p>\r\n <br />\r\n<p><strong>Now looking for donations !</strong><br />\r\nWe are currently looking for donations to help support and update the grid. Please contact Trinity at trinity93@gmail.com if you would like to make a donation.</p>\r\n                        </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n            <td valign="top" colspan="2"> </td>\r\n        </tr>\r\n        <tr>\r\n            <td> </td>\r\n            <td width="33%"> </td>\r\n            <td width="3%"> </td>\r\n        </tr>\r\n    </tbody>\r\n</table>', '01', '1', '1', 'index.php?page=home', '_self', '0'),
(28, '1262042911', 'Events', '', '05', '1', '1', 'index.php?page=events', '_self', '1'),
(3, '1211831925', 'Gridstatus', '', '03', '1', '1', 'index.php?page=gridstatus', '_self', '0'),
(5, '1213729504', 'Region List', '', '26', '1', '1', 'index.php?page=regions', '_self', '0'),
(6, '1213811351', 'World Map', '', '27', '1', '1', 'index.php?page=map', '_self', '0'),
(7, '1211832149', 'Create Account', '', '28', '1', '0', 'index.php?page=createaccount', '_self', '0'),
(8, '1211832173', 'Logout', '', '20', '1', '1', 'index.php?page=logout', '_self', '1'),
(17, '1235761445', 'Who''s online', '', '04', '1', '1', 'index.php?page=online', '_self', '0'),
(18, '1262039238', 'Additional Account tasks', '', '3', '2', '1', 'index.php?page=extendedaccount', '_self', '1'),
(25, '1262039238', 'Account', '', '04', '1', '1', '', '_self', '1'),
(26, '1262039238', 'Transaction History', '', '2', '2', '1', 'index.php?page=transactions', '_self', '1'),
(27, '1262039238', 'Change Password', '', '1', '2', '1', 'index.php?page=changepassword', '_self', '1'),
(29, '1262043041', 'Land Manager', '', '07', '1', '1', 'index.php?page=land', '_self', '1'),
(30, '1262043041', 'Group Land', '', '1', '2', '1', 'index.php?page=groupland', '_self', '1'),
(31, '1262043041', 'My Regions', '', '2', '2', '1', 'index.php?page=myregions', '_self', '1'),
(32, '1262043443', 'Shop', '', '06', '1', '1', 'index.php?page=shopping', '_self', '1'),
(33, '1262043540', 'Search', '', '12', '1', '1', 'index.php?page=search', '_self', '2'),
(34, '1304572878', 'About', '', '30', '1', '1', '', '_self', '0');
INSERT INTO `sitemanagement` (`pagecase`, `type`, `include`) VALUES
('activate', 'standard', 'activate.php'),
('activatemail', 'standard', 'activatemail.php'),
('change', 'account', 'changeacc.php'),
('changepassword', 'account', 'changeacc.php'),
('classifieds', 'classifieds', 'classifieds.php'),
('createaccount', 'standard', 'createaccount.php'),
('events', 'events', 'events.php'),
('extendedaccount', 'account', 'extendedaccount.php'),
('forgotpass', 'standard', 'forgotpw.php'),
('gridstatus', 'news', 'gridnews.php'),
('gridstatushistory', 'news', 'newshistory.php'),
('home', 'standard', 'home.php'),
('land', 'landmanager', 'land.php'),
('logout', 'standard', 'logout.php'),
('make-events', 'events', 'make-events.php'),
('map', 'standard', 'map.php'),
('online', 'standard', 'whosonline.php'),
('pwreset', 'standard', 'pwreset.php'),
('regions', 'standard', 'region_list.php'),
('save-events', 'events', 'save-events.php'),
('transactions', 'account', 'transactions.php');


	")
	
				
	$defaultcontact = $lang['defaultcontact'];
	$inactivecontacts = $lang['inactivecontacts'];
	$inactivecontactsaddress = $lang['inactivecontactsaddress'];
	$welcome = $lang['welcome'];

	$time = time();
	$pwd = md5("password");
	//insert default contact for inactive contacts company
	mysql_query("insert into $mysql_people_table values(NULL, 'Default', 'Contact', 'defaultcontact', '$pwd', 'default.contact@inactivecontacts.com', 'XXX-XXX-XXXX', 'XXX-XXX-XXXX', '1', '1', '$time', '$defaultcontact', '1', '0', '0', 'default')") or die(mysql_error());
	//insert inactive contacts company
	mysql_query("insert into $mysql_companies_table values(NULL, 'Inactive Contacts', '$inactivecontactsaddress', '1', '1', '$time', '$inactivecontacts', '0')") or die(mysql_error());
	//insert welcome message in thelass=back>
							<br>
							<table class=border cellSpacing=0 cellPadding=0 width=100% align=center border=0>
								<tr>
									<td>
										<table cellSpacing=1 cellPadding=5 width="100%" border=0>';
	if($first == '') {
		showError("first name");
		$flag = 1;
	}
	if($last == '') {
		showError("last name");
		$flag = 1;
	}
	if($username == '') {
		showError("user name");
		$flag = 1;
	}
	if($email == '') {
		showError("email address");
		$flag = 1;
	}
	if($pwd1 == '' || $pwd2 == '') {
		showError("password");
		$flag = 1;
	}
	if($company == '') {
		showError("company");
		$flag = 1;
	}
	if (!checkPwd($pwd1, $pwd2)) {
		showError("password");
		$flag = 1;
	}
	if(!validEmail($email)) {
		showError("email");
		$flag = 1;
	}
	if($flag == 1) {
	echo '
								<tr>
									<td class=back>
										<center><b>'.$lang['press_back_button'].'</b></center>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<br>
			</td>
		</tr>
				</table>
			</td>
		</tr>
	</table>';
		exit;
	}

	//if nothing is missing or incorrect...put the info in the database
	//since this is the first user account...the admin status is set to 1.
	$pwd = md5($pwd1);
	$time = time();

	//insert admin in people table
	$query = "insert into $mysql_people_table values(NULL, '$first', '$last', '$username', '$pwd', '$email', '$phone', '$fax', '2', '2', '$time', '$admincomments', '0', '1', '1', 'default')";
	mysql_query($query) or die(mysql_error());

	//insert admin company in companies table
	$query = "insert into $mysql_companies_table values(NULL, '$company', '$address', '2', '2', '$time', '$companycomments', '0')";
	mysql_query($query) or die(mysql_error());

	$helpdeskname = $company . " Helpdesk";
	$query = "insert into $mysql_settings_table VALUES('$helpdeskname', '', '$email', 5, 5, 10, 5, 'on', 'on', 'off', 'default', 'off', 'off', NULL, 'on', '', 'on', 'on')";
	mysql_query($query) or die(mysql_error());

	//success!  print everything out so the user knows.
	$loginpage = str_replace("install.php", "", $_SERVER['HTTP_REFERER']);
	$nowlogin = str_replace("LOGIN", "<b><a href=".$loginpage.">login</a></b>", $lang['step_three_text']);
	echo '
								<tr>
									<td class=info align=center>
										<b>'.$lang['step_three'].'</b>
									</td>
								</tr>
								<tr>
									<td class=back>
										<center>
											<br>'.$nowlogin.'<br>
											<br><br>
										</center>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<br>
			</td>
		</tr>
				</table>
			</td>
		</tr>
	</table>';
}	//end step 2

echo '</body></html>';

function showError($msg) {
	$msg = "<font color=red>". $msg ."</font>";
	$fullmsg = str_replace("XXX", $msg, $lang['install_error']);
	echo '
		<tr>
			<td class=back>
				<center><b>'.$fullmsg.'</b></center>
			</td>
		</tr>';
}

function checkPwd($pwd1, $pwd2)	{
	if($pwd1 == $pwd2)
		return true;
	else
		return false;
}

function validEmail($address) {
	if (ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'. '@'. '[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.' . '[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$', $address))
		return true;
	else
		return false;
}

?>
