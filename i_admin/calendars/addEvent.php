<?php
	// Require DB Connection
	require_once('../../includes/config.php'); 
    // Add Event
	$sth = $mysqli->prepare("INSERT INTO sch_events (title,  events.date, description, color) VALUES (?,?,?,?)");
	$sth->execute(array($_POST['title'], $_POST['date'], $_POST['description'], $_POST['color']));
	
