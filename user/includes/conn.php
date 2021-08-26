<?php
	$set = new mysqli('localhost', 'root', '', 'librarymanagementsystem');

	if ($set->connect_error) {
	    die("Connection failed: " . $set->connect_error);
	}
	
?>