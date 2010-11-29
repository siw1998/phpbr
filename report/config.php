<?php

// Dagon Design Guestbook Script



// *** START OF OPTIONS ***


// Path to ddgb.php
// ----------------
// Enter the _full_ url to the ddgb.php file.

$script_path = "http://www.acdts.cn/report/ddgb.php";



// Path to ddgb-verify.php
// ----------------
// Enter the _full_ url to the ddgb-verify.php file.

$verify_path = "http://www.acdts.cn/report/ddgb-verify.php";


// Locale Setting
// --------------
// Choose from the following:
//
//	english		dutch		french		germanf
//	italian		norwegian	portuguese	romanian
//	spanish		swedish		turkish
//
// For new language files, just place the file in the 'language'
// directory.

$lang = "chinese";


// Added by Hans Nordhaug 19.11.2007 - admin e-mail and notifications.

// Administrator Password
// ----------------------
// Be sure to change this!

$admin_password = 'amarillo';


// Administrator E-mail
// ----------------------
// Used for notifications of new messages.

$admin_email = 'dts@amarilloviridian.co.cc';


// Send notifications of new entries
// ---------------------------------
// If enabled, the admin gets an e-mail for each new entry.

$send_notifications = TRUE;



// Run as Stand-Alone Script
// -------------------------
//   TRUE  = yes, this script will run on its own
//   FALSE = no, this is loaded from another file
//
//   Visit website for important info!

$standalone = FALSE;



// Title Tag
// ---------
// This page title will only be used if the guestbook is ran as 
// a stand-alone script

$title = 'Guestbook';



// Path to Data File
// -----------------
// Be sure to CHMOD for write access

$data_file = 'report/dat/.entries';



// Path to Ban File
// ----------------
// Be sure to CHMOD for write access

$ban_file = 'report/dat/.banlist';



// Requre Manually Entry Approval
// ------------------------------
// If enabled, the admin must manually approve entries
// before they will appear.

$require_approval = FALSE;



// Enable Smiles
// -------------------

$enable_smiles = TRUE;


// Show Introduction Text
// --------------
// Displays intro text above the guestbook
// (text found in language file)

$show_intro_text = TRUE;



// Disable Image Verification
// --------------------------
// Not recommended, but required if your server does not support it

$disable_verification = FALSE;



// Image Verification Colors
// -------------------------
// You can use either 3 or 6 character hex color codes

$verify_background = "DBECFF";
$verify_text = "005ABE";



// Path to CSS File
// ----------------

$css_file = 'ddgb.css';



// Entries Per Page
// ----------------

$items_per_page = 10;



// Allow HTML in Messages
// ----------------------
// Warning: Enabling this can be dangerous!

$allow_html = TRUE;



// Protect Email Addresses
// -----------------------
// If enabled, this will display email addresses 
// like this: user [at] domain [dot] com

$protect_email = TRUE;



// Enable File Locking
// -------------------
// If you would like to enable file locking, set this to TRUE
// (not supported by all servers)

$enable_file_locking = TRUE;







// *** END OF OPTIONS ***







$language = $lang;

setlocale (LC_TIME, $lang);

$loc_de = setlocale (LC_ALL, $lang);

require_once( 'language/'. $language .'.php' );


// Prepare session

if(!isset($_SESSION)) session_start();



?>
