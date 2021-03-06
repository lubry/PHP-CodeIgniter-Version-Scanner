<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database 
|	['password'] The password used to connect to the database 
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
*/

$active_group = "default";

$db['default']['hostname'] = "localhost";
$db['default']['username'] = "";
$db['default']['password'] = "";
$db['default']['database'] = "";
$db['default']['dbdriver'] = "mysql";
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;


?>