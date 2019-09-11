<?php
DEFINE ('DB_USER', 'sumi');
DEFINE ('DB_PASSWORD', 'Sumi1234@');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'donate1');

$idEdit = 0;

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 
OR die('Could not connect to server ' . mysqli_connect_error());

?>