<?php

# Connect to der database
$link = mysql_connect($settings['db_server'], $settings['db_username'], $settings['db_password']);

# Select table
$db_selected = mysql_select_db($settings['db_databasename'], $link);

# UTF-8 makes the world go `round
define('DB_CHARSET', 'utf8');


?>