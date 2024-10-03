<?php
// Get these values from https://www.inaturalist.org/oauth/applications.
$app_id = '';
$app_secret = '';
$redirect_uri = '';

// iNaturalist username and password
$username = '';
$password = '';

// Database connection
$dbname = '';
$server = '';
$dbuser = '';
$dbpass = '';
$link = mysqli_connect($server, $dbuser, $dbpass, $dbname);

// Once you've filled in the values above, rename this file to conf.php.
