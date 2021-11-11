<?php
	// Require DB Connection
	require_once('../../includes/config.php'); 
    // Delete Event
	$sth = $mysqli->prepare("DELETE FROM sch_events WHERE id = ?");
	$sth->execute(array($_GET['id']));
	
