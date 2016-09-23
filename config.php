<?php
/**
 * Created by PhpStorm.
 * User: fredericd
 * Date: 23-09-16
 * Time: 12:34
 */
/**
 * General settings
 */
define('MODE_DEBUG', false);
define('MODE_DEBUG_LOG', false);
define('MODE_DEBUG_DISPLAY', false);
/**
 * MySQL settings
 */
define('DB_NAME', 'dbname');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbpass');
define('DB_HOST', 'dbhost');
/**
 * Local organisation information
 */
define('LOCAL_ORGANISATION', 'local_organisation');
define('LOCAL_LOGO', '/url/to.logo');
/**
 * Workflow configuration
 */
define('WKF_SIMPLE', 1);
define('WKF_CONCURRENT', 2);
define('WKF_COLLABORATIF', 3);
/**
 * SMTP configuration
 */
define ('SMTPAUTH',	false);
define ('SMTPUSERNAME',	'aperuwel');
define ('SMTPPASSWORD', 'peruwelz');