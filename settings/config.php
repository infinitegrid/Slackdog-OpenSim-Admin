<?php
/*
 * Copyright (c) 2007, 2008 Contributors, http://opensimulator.org/
 * See CONTRIBUTORS for a full list of copyright holders.
 *
 * See LICENSE for the full licensing terms of this file.
 *
*/
/*
 *
 * Config from support module addin
 *
 */
$mysql_host = "";		//mysql host (localhost if mysql is running on this machine)
$mysql_user = "";			//mysql user name
$mysql_pwd = "";				//mysql password
$mysql_db = "";		//mysql database name

/********************	directory to put files associated with the tickets	********************************/
// it is recommended that you choose the directory below your www directory, say: $filesdir = "../../files";
// below is the default, not recommended since the files are visible by http unless you .htaccess the directory
$filesdir = "./files";
/********************	choose your date and datetime format	********************************************/
//$dateformat = "m/d/y"; // example: 10/02/04 (U.S.A.)
$dateformat = "Y-m-d";
//$dateformat = "y/m/d"; // Europe....
//$datetimeformat = "m/d/y \a\\t g:ia"; // example: 01/27/04 at 1:55pm
$datetimeformat = "Y-m-d H:i:s";


/********************************* Which language will I use? *********************************************/
/**********************************************************************************************************/
// en = english
// es = spanish
// pt = portuguese - portugal
// nl = dutch
// de = german
// fr = french
// br = portuguese - brazil
$language="en";
 
 
/***************	You shouldn't need to change anything below here.	***********************************/
/**********************************************************************************************************/
/**********************************************************************************************************/

// prepended sup_ to table names to easily distinguish them in the wiredux db
$mysql_sessions_table = "sup_sessions";				// store sessions - necessary for load balanced systems like sourceforge
$mysql_announcement_table = "sup_announcements";	// mysql announcement table name
$mysql_tcategories_table = "sup_tcategories";		// mysql ticket categories table
$mysql_tpriorities_table = "sup_tpriorities";		// mysql ticket priority table
$mysql_tstatus_table = "sup_tstatus";				// mysql ticket status table
$mysql_platforms_table = "sup_platforms";			// mysql platforms table
$mysql_settings_table = "sup_settings";				// mysql settings table
$mysql_themes_table = "sup_themes";					// mysql themes table
$mysql_whosonline_table = "sup_whosonline";			// mysql whosonline table
$mysql_people_table = "sup_people";					// replaces $mysql_users_table
$mysql_companies_table = "sup_companies";           // people belong to companies
$mysql_groups_table = "sup_groups";					// groups hold supporters
$mysql_supporters_table = "sup_supporters";			// maps supporters to groups
$mysql_modules_table = "sup_modules";				// modules
$mysql_versions_table = "sup_versions";				// versions
$mysql_tickets_table = "sup_tickets";				// tickets
$mysql_tracktime_table = "sup_tracktime";			// keep track of time
$mysql_ticketmodules_table = "sup_ticketmodules";	// maps modules referenced in a ticket
$mysql_diskid_table = "sup_diskid";					// diskid is id of a cd-rom
$mysql_faqcategories_table = "sup_faqcategories";	// faqs categories
$mysql_faqs_table = "sup_faqs";						// faqs
$mysql_ticketdiskid_table = "sup_ticketdiskid";		// holds diskid for a ticket. this is a temporary solution
$mysql_ticketfiles_table = "sup_ticketfiles";		// maps files associated with ticket
$mysql_files_table = "sup_files";					// files

$sourceforge = "off";							// on/off to display sourceforge thanks
$session_save_db = "off";						// on/off to save session in mysql or tmp directory. sourceforge requires on

/**********************************************************************************************************/
/**********************************************************************************************************/

 /*
  *
  *              END OF SUPPORT CONFIG MERGE
  *
  *
  */
 
##################### System #########################
define("SYSNAME","Your Grid Name Here");
define("SYSURL","http://localhost");
define("SYSMAIL","your@email.com");


$userInventoryURI="http://localhost:8003/";
$userAssetURI="http://localhost:8003/";

############ Delete Unconfirmed accounts ################
// e.g. 24 for 24 hours  leave empty for no timed delete
$unconfirmed_deltime="24";

###################### Money Settings ####################

// Key of the account that all fees go to:
$economy_sink_account="<UUID of your Money Avatar>";

// Key of the account that all purchased currency is debited from:
$economy_source_account="<UUID of your Money Avatar>";

// Minimum amount of real currency (in CENTS!) to allow purchasing:
$minimum_real=1;

// Error message if the amount is not reached:
$low_amount_error="You tried to buy less than the minimum amount of currency. You cannot buy currency for less than US$ %.2f.";

// Sets wich Pageeditor should be used:
$editor_to_use='standard';
// $editor_to_use='fckeditor';


################### GridMap Settings  #####################
//Allowing Zoom on your Map
$ALLOW_ZOOM=TRUE;

//Default StartPoint for Map
$mapstartX=4471;
$mapstartY=5726;

//Direction where Info Image has to stay ex.: dr = down right ; dl =down left ; tr = top right ; tl = top left ; c = center 
$display_marker="dr";

##################### Database ########################
define("C_DB_TYPE","mysql");
//Your Hostname here:
define("C_DB_HOST","");
//Your Databasename here:
define("C_DB_NAME","");
//Your Username from Database here:
define("C_DB_USER","");
//Your Database Password here:
define("C_DB_PASS","");

################ Database Tables #########################
define("C_ADMIN_TBL","admin");
define("C_WIUSR_TBL","users");
define("C_USRBAN_TBL","banned");
define("C_CODES_TBL","codetable");
define("C_ADM_TBL","adminsetting");
define("C_COUNTRY_TBL","country");
define("C_NAMES_TBL","lastnames");
define("C_CURRENCY_TBL","economy_money");
define("C_TRANSACTION_TBL","economy_transactions");
define("C_INFOWINDOW_TBL","startscreen_infowindow");
define("C_NEWS_TBL","startscreen_news");
define("C_PAGE_TBL","pagemanager");
define("C_SITES_TBL","sitemanagement");
// REGION MANAGER 
define("C_MAP_REGIONS_TBL", "regions");
// OFFLINE IM'S
define("C_OFFLINE_IM_TBL", "offline_msgs");
// STATISTICS
define("C_STATS_REGIONS_TBL", "statistics");

//OPENSIM DEFAULT TABLES (NEEDED FOR LOGINSCREEN & MONEY SYSTEM)
define("C_ASSETS_TBL","opensim.assets");
define("C_USERS_TBL","opensim.UserAccounts");
define("C_AUTH_TBL","opensim.auth");
define("C_AGENTS_TBL","opensim.GridUser");
define("C_REGIONS_TBL","opensim.regions");
define("C_APPEARANCE_TBL", "opensim.Avatars");

//GROUPS DEFAULT TABLES (NEEDED FOR THE GROUP PARTS)
//  The module can be configured to use it's own db, or opensim's.  
//  But the table names need to be those below.
define("G_MEMBERSHIP_TBL", "osgroups.osgroupmembership");
define("G_MEMBERSHIP_ROLES_TBL", "osgroups.osgrouprolemembership");
define("G_NAMES_TBL", "osgroups.osgroup");
define("G_ROLES_TBL", "osgroups.osrole");
?>

