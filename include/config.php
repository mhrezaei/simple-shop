<?php
################## Session Config ##################
session_start();
################## Session Config ##################

################## Time Config ##################
date_default_timezone_set('Asia/Tehran');
################## Time Config ##################



################## Smarty Config ##################
// SITE_ROOT contains the full path to the eshop folder
define('SITE_ROOT', dirname(dirname(__FILE__)));
// Application directories
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');
// Settings needed to configure the Smarty template engine
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');
################## Smarty Config ##################

################## Error Handller Config ##################
// Added For Error Handling Section
// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', false);
// The error types to be reported
define('ERROR_TYPES', E_ALL);
// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', true);
define('ADMIN_ERROR_MAIL', 'mr.mhrezaei@gmail.com');
define('SENDMAIL_FROM', 'alert@ainol.ir');
ini_set('sendmail_from', SENDMAIL_FROM);
// By default we don't log errors to a file
define('LOG_ERRORS', true);
//define('LOG_ERRORS_FILE', 'c:\\eshop5_error_log.txt'); // Windows
define('LOG_ERRORS_FILE', SITE_ROOT . '/errors.log'); // Linux
/* Generic error message to be displayed instead of debug info
(when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h3>Oops! We Have a Problem! Please Try Again...</h3>');
################## Error Handller Config ##################

################## Database Config ##################
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ainol_site');
define('DB_PASSWORD', '0oE0kYkP');
define('DB_DATABASE', 'ainol_site');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);
################## Database Config ##################

################## Load the application page template ##################
require_once PRESENTATION_DIR . 'application.php';

################## Load the application page template ##################

################## Include utility files ##################
require_once BUSINESS_DIR . 'error_handler.php';
require_once BUSINESS_DIR . 'database_handler.php';
################## Include utility files ##################

?>
