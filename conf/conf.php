<?php
// Dolibarr example for conf.php file
//
// Do not edit this file without changing its name.
// This file is an example of empty config file for Dolibarr that can be used to create "conf.php".
//
// Warning: Be sure not to add line feed or spaces after closing php tag!


//###################
// Main parameters
//###################

// dolibarr_main_url_root
// ======================
// This parameter defines the root URL of your Dolibarr index.php page without ending "/".
// It must link to the directory htdocs
// In most cases, this is autodetected but it's still required
// * to show full url bookmarks for some services (ie: agenda rss export url, ...)
// * or when using Apache dir aliases (autodetect fails)
// * or when using nginx (autodetect fails)
//
// Examples:
// $dolibarr_main_url_root='http://localhost';
// $dolibarr_main_url_root='http://mydolibarrvirtualhost';
// $dolibarr_main_url_root='http://myserver/dolibarr/htdocs';
// $dolibarr_main_url_root='http://myserver/dolibarralias';
//
$dolibarr_main_url_root='http://__DOMAIN____PATH__';


// dolibarr_main_document_root
// ===========================
// This parameter contains absolute file system path of Dolibarr htdocs directory
//
// Examples:
// $dolibarr_main_document_root='/var/www/dolibarr/htdocs';
// $dolibarr_main_document_root='C:/My web sites/dolibarr/htdocs';
//
$dolibarr_main_document_root='__INSTALL_DIR__/htdocs';


// dolibarr_main_url_root_alt
// ==========================
// This parameter defines the relative sub URLs to add to $dolibarr_main_url_root to
// forge alternative root directories (used by modules developers).
// You can put several values, separated by a coma, but number of entries must match
// number of entries into $dolibarr_main_document_root_alt.
//
// Examples:
// $dolibarr_main_url_root_alt='/custom';
// $dolibarr_main_url_root_alt='/extensions1,/extensions2';
//
//$dolibarr_main_url_root_alt='/custom';


// dolibarr_main_document_root_alt
// ===============================
// This parameter contains absolute alternative root file system directories (used by modules developers).
// You can put several values, separated by a coma, but number of entries must match
// number of entries into $dolibarr_main_url_root_alt.
//
// Examples:
// $dolibarr_main_document_root_alt='/var/www/dolibarr/htdocs/custom';
// $dolibarr_main_document_root_alt='C:/My web sites/dolibarr/htdocs/extensions1,C:/My web sites/dolibarr/htdocs/extensions2';
//
//$dolibarr_main_document_root_alt='/var/www/dolibarr/htdocs/custom';


// dolibarr_main_data_root
// =======================
// This parameter contains absolute file system directory of Dolibarr
// directory used to store uploaded and generated physical files.
//
// Examples:
// $dolibarr_main_data_root='/var/www/dolibarr/documents';
// $dolibarr_main_data_root='E:/My web sites/dolibarr/documents';
//
$dolibarr_main_data_root='__DATA_DIR__';


// dolibarr_main_db_host
// =====================
// This parameter contains host name or ip address of Dolibarr database server.
//
// Examples:
// $dolibarr_main_db_host='localhost';
// $dolibarr_main_db_host='127.0.0.1';
// $dolibarr_main_db_host='192.168.0.10';
// $dolibarr_main_db_host='mysql.myserver.com';
//
$dolibarr_main_db_host='localhost';


// dolibarr_main_db_port
// =====================
// This parameter contains the port of the Dolibarr database.
//
// Default value: none
// Examples:
// $dolibarr_main_db_host='3306';
//
$dolibarr_main_db_port='3306';


// dolibarr_main_db_name
// =====================
// This parameter contains name of Dolibarr database.
//
// Examples:
// $dolibarr_main_db_name='dolibarr';
// $dolibarr_main_db_name='mydatabase';
//
$dolibarr_main_db_name='__DB_NAME__';


// dolibarr_main_db_user
// =====================
// This parameter contains user name used to read and write into Dolibarr database.
//
// Examples:
// $dolibarr_main_db_user='admin';
// $dolibarr_main_db_user='dolibarruser';
//
$dolibarr_main_db_user='__DB_USER__';


// dolibarr_main_db_pass
// =====================
// This parameter contains password used to read and write into Dolibarr database.
// If content is 'crypted:...', the password is encrypted/decrypted with dol_encode/dol_decode.  
// If content is 'dolcrypt:...', the password is encrypted/decrypted with dolEncrypt/dolDecrypt.  
//
// Examples:
// $dolibarr_main_db_pass='myadminpass';
// $dolibarr_main_db_pass='myuserpassword';
//
$dolibarr_main_db_pass='__DB_PWD__';


// dolibarr_main_db_type
// =====================
// This parameter contains the name of the driver used to access your Dolibarr database.
//
// Default value: none
// Possible values: mysqli, pgsql
// Examples:
// $dolibarr_main_db_type='mysqli';
// $dolibarr_main_db_type='pgsql';
//
$dolibarr_main_db_type='mysqli';


// dolibarr_main_db_character_set
// ==============================
// Database character set used to store data (forced during database creation. value of database is then used).
//
// Default value: depends on database driver
// Examples:
// dolibarr_main_db_character_set='utf8';
//
$dolibarr_main_db_character_set='utf8';


// dolibarr_main_db_collation
// ==========================
// Database character set used to sort data (forced during database creation. value of database is then used).
//
// Default value: depends on database driver
// Examples:
// $dolibarr_main_db_collation='utf8_unicode_ci';
//
$dolibarr_main_db_collation='utf8_unicode_ci';


// dolibarr_main_db_readonly
// =========================
// Set this to 1 to have the application working in readonly mode. All SQL commands INSERT/UPDATE/DELETE/CREATE/ALTER/TRUNCATE/DROP will be disabled. 
// Default value: 0
// Examples:
// $dolibarr_main_db_readonly='0';
//
$dolibarr_main_db_readonly=0;


// dolibarr_main_instance_unique_id
// ================================
// An secret ID that is unique for each installation.
// This value is also visible and never propagated outside of Dolibarr, so it can be used as a salt / key for some encryption (For example to get
//  a unique hashed key, application will hash the value concatenated with a string. Example: md5('dolibarr'+dolibarr_main_instance_unique_id)
// WARNING: Changing this value will also make some sensitive values encrypted in database wrong.
// Default value: randomly defined during installation
// Examples:
// $dolibarr_main_instance_unique_id='84b5bc91f83b56e458db71e0adac2b62';
//
$dolibarr_main_instance_unique_id='84b5bc91f83b56e458db71e0adac2b62';



//##################
// Login
//##################

// dolibarr_main_authentication
// ============================
// This parameter contains the way authentication is done.
// If value "ldap" is used, you must also set parameters dolibarr_main_auth_ldap_*
// Default value: 'dolibarr'
// Possible values: Any values found in files in htdocs/core/login directory after
// the "function_" string and before the ".php" string. You can also separate several
// values using a ",". In this case, Dolibarr will check login/pass for each value in
// order defined into value. However, note that this can't work with all values.
// Examples:
// $dolibarr_main_authentication='dolibarr';       // Use the password defined into application on user file (default).
// $dolibarr_main_authentication='http';           // Use the HTTP Basic authentication
// $dolibarr_main_authentication='ldap';           // Check the password into a LDAP server
// $dolibarr_main_authentication='ldap,dolibarr';  // You can set several mode using a comma as a separator.
// $dolibarr_main_authentication='forceuser';      // This need to add also $dolibarr_auto_user='loginforuser';
// $dolibarr_main_authentication='twofactor';      // To use Google Authenticator. This need the non official external module "Two Factor" available on www.dolistore.com
// $dolibarr_main_authentication='openid_connect'; // See https://wiki.dolibarr.org/index.php?title=Authentication,_SSO_and_SSL
// $dolibarr_main_authentication='googleoauth';    // See https://wiki.dolibarr.org/index.php?title=Authentication,_SSO_and_SSL
//
$dolibarr_main_authentication='http';


// Parameters used to setup LDAP authentication
// --------------------------------------------
// Uncomment them if dolibarr_main_authentication = 'ldap'
//
// $dolibarr_main_auth_ldap_host='127.0.0.1';                  // You can define several servers here separated with a comma.
// $dolibarr_main_auth_ldap_port='389';                        // Port
// $dolibarr_main_auth_ldap_version='3';                       // Version of LDAP
// $dolibarr_main_auth_ldap_servertype='openldap';			       // openldap, activedirectory or egroupware
// $dolibarr_main_auth_ldap_login_attribute='loginfield';	     // Ex: uid or samaccountname for active directory
// $dolibarr_main_auth_ldap_dn='ou=users,dc=my-domain,dc=com'; // Ex: ou=users,dc=my-domain,dc=com
// $dolibarr_main_auth_ldap_filter = '';                       // If defined, the two previous parameters (dolibarr_main_auth_ldap_login_attribute and dolibarr_main_auth_ldap_dn) are not used to find a user into LDAP. Instead we use this search string. Ex: (uid=%1%) or &(uid=%1%)(isMemberOf=cn=Sales,ou=Groups,dc=opencsi,dc=com).
// $dolibarr_main_auth_ldap_admin_login='';					           // Required only if anonymous bind disabled. Ex: cn=admin,dc=example,dc=com
// $dolibarr_main_auth_ldap_admin_pass='';					           // Required only if anonymous bind disabled. Ex: secret
// $dolibarr_main_auth_ldap_debug='false';


// dolibarr_main_demo
// Login and pass to use in a demo mode
// Default value: ''
// Examples:
// $dolibarr_main_demo='autologin,autopass'



//##################
// Security
//##################

// dolibarr_main_force_https
// =========================
// This parameter allows to force the HTTPS mode.
// 0 = No forced redirect
// 1 = Force redirect to https, until SCRIPT_URI start with https into response
// 2 = Force redirect to https, until SERVER["HTTPS"] is 'on' into response
// 'https://my.domain.com' = Force redirect to https using this domain name.
// Warning: If you enable this parameter, your web server must be configured to respond URL with https protocol.
// According to your web server setup, some values may works and other not. Try different values (1,2 or 'https://my.domain.com') if you experience problems.
// Even if a redirect to HTTPS is forced by the webserver, it is recommanded to set this value to another value than 0, so your session cookies will be 
// flagged as secured. 
// Default value: 0
// Possible values: 0, 1, 2 or 'https://my.domain.com'
// Examples:
// $dolibarr_main_force_https='1';
//
$dolibarr_main_force_https='0';

// dolibarr_main_prod
// ==================
// When this parameter is defined, all errors messages are not reported.
// This feature exists for production usage to avoid to give any information to hackers.
// Default value: 1
// Possible values: 0 or 1
// Examples:
// $dolibarr_main_prod='1';
//
$dolibarr_main_prod='1';

// dolibarr_main_restrict_os_commands
// ==================================
// To restrict commands you can execute by the backup feature, enter allowed command here.
// Note: If you can, defining permission on OS linux (using SELinux for example) may be a better choice.
// Default value: 'mysqldump, mysql, pg_dump, pgrestore'
// Examples:
// $dolibarr_main_restrict_os_commands='mysqldump, /usr/local/bin/otherdumptool';
//
$dolibarr_main_restrict_os_commands='mysqldump, mysql, pg_dump, pgrestore';

// dolibarr_main_restrict_ip
// =========================
// To restrict access to backoffice to some ip addresses only. Use a comma to separate values.
// Note: Pages that does not need login (like public pages, web site) are not protected with this.
// Default value: ''
// Examples:
// $dolibarr_main_restrict_ip='127.0.0.1, ::1, 192.168.0.1';
//
$dolibarr_main_restrict_ip='';

// dolibarr_nocsrfcheck
// ====================
// This parameter can be used to disable CSRF protection.
// This might be required if you access Dolibarr behind a proxy that make bad URL rewriting, to avoid false alarms.
// In most cases, you should always keep this to 0.
// Default value: 0
// Possible values: 0 or 1 (no strict CSRF test, only test on referer) or 2 (no CSRF test at all)
// Examples:
// $dolibarr_nocsrfcheck='0';
//
$dolibarr_nocsrfcheck='0';

// dolibarr_cron_allow_cli
// =======================
// If set to 1, you will be able to define some command line in the internale Job scheduler module.
// Default value: '0'
// Examples: '1'
//
$dolibarr_cron_allow_cli='0';

// dolibarr_mailing_limit_sendbyweb
// ================================
// Can set a limit for mailing send by web. This overwrite database value. Can be used to restrict on system level.
// Default value: '25'
// Examples: '-1' (sending by web is forbidden)
//
// $dolibarr_mailing_limit_sendbyweb='25';

// dolibarr_mailing_limit_sendbycli
// ================================
// Can set a limit for mailing send by cli. This overwrite database value. Can be used to restrict on system level.
// Default value: '0' (no hard limit, use soft database value if exists)
// Examples: '-1' (sending by cli is forbidden)
//
// $dolibarr_mailing_limit_sendbycli='0';

// MAIN_ANTIVIRUS_COMMAND (as a constant)
// ======================
// Force a value for the antivirus command line tool so setup for admin user interface has no effect.
// Default value: ''
// Example: '/usr/bin/clamdscan';
// define('MAIN_ANTIVIRUS_COMMAND', '/usr/bin/clamdscan');

// MAIN_ANTIVIRUS_PARAM (as a constant)
// ====================
// Force a value for the antivirus parameters on command line so setup for admin user interface has no effect.
// Default value: ''
// Example: '--fdpass';
// define('MAIN_ANTIVIRUS_PARAM', '--fdpass');

// php_session_save_handler
// ========================
// Try to use the Dolibarr internal session handler that uses a database instead of the PHP handler (experimental).
// If you enable this feature to 'db', you may also want to enable the following constants:
//  $dolibarr_session_db_type, $dolibarr_session_db_host, $dolibarr_session_db_user, $dolibarr_session_db_pass
//  $dolibarr_session_db_pass, $dolibarr_session_db_name, $dolibarr_session_db_type = $dolibarr_main_db_port
// Default value: ''
// Example: 'db';
//
// $php_session_save_handler='';

// force_install_lockinstall
// =========================
// If this value is set to a value, it forces the creation of a file install.lock once an upgrade process into a new version end.
// The value is the octal value of permission to set on created file.
// The file install.lock prevents the use of the migration process another time. You will have to delete it manually for 
// next upgrade.
// Default value: '0'
// Example: '444';
// $force_install_lockinstall='440';



//##################
// Other
//##################

// dolibarr_main_db_prefix
// =======================
// This parameter contains prefix of Dolibarr database. 
// Default value: 'llx_' if not defined
// Examples:
// $dolibarr_main_db_prefix='llx_';

// dolibarr_main_limit_users
// =========================
// Can set a limit on the number of users it will be possible to create
// (the superadmin not included). Can be used for a restricted mode.
// Default value: 0 (unlimited)
// Examples:
// $dolibarr_main_limit_users='0';

// dolibarr_strict_mode
// ====================
// Set this to 1 to enable the PHP strict mode. For dev environment only.
// Default value: 0 (use database value if exist)
// Examples:
// $dolibarr_strict_mode=0;

// dolibarr_allow_download_external_modules
// ========================================
// Provide a link to download the zip of an external modules installed into custom directory from the web admin.
// Default value: 0
// Examples:
// $dolibarr_allow_download_external_modules=0;



//#################################
// Path to external libraries/fonts
//#################################

// Value to overwrite path to use shared libraries instead of embedded one
//$dolibarr_lib_TCPDF_PATH='/usr/share/php/tcpdf';
//$dolibarr_lib_FPDI_PATH='/usr/share/php/fpdi';
//$dolibarr_lib_FPDF_PATH='/usr/share/php/fpdf';
//$dolibarr_lib_GEOIP_PATH='';
//$dolibarr_lib_NUSOAP_PATH='/usr/share/php/nusoap';
//$dolibarr_lib_ODTPHP_PATH='';
//$dolibarr_lib_ODTPHP_PATHTOPCLZIP="/usr/share/php/libphp-pclzip";

// Value to overwrite path to use shared javascript instead of embedded one
//$dolibarr_js_CKEDITOR='/javascript/ckeditor';
//$dolibarr_js_JQUERY='/javascript/jquery';
//$dolibarr_js_JQUERY_UI='/javascript/jquery-ui';

// Value to overwrite some path to use font instead of embedded one
//$dolibarr_font_DOL_DEFAULT_TTF="/usr/share/fonts/truetype/ttf-dejavu/DejaVuSans.ttf";
//$dolibarr_font_DOL_DEFAULT_TTF_BOLD="/usr/share/fonts/truetype/ttf-dejavu/DejaVuSans-Bold.ttf";


//##############################
// External modules
//##############################


