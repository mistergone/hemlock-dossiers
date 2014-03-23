<?php

# Connect to der database
$link = mysql_connect('localhost', 'mg_dba', 'fnordpez');

# Select table
$db_selected = mysql_select_db('mistergone', $link);

# UTF-8 makes the world go `round
define('DB_CHARSET', 'utf8');


?>