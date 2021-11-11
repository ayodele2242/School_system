<?php
	// Require DB Connection
	require_once('../../includes/config.php'); 
    // Get ALl Event
	$sth = $mysqli->prepare("SELECT * FROM sch_events WHERE events.date BETWEEN ? AND ? ORDER BY events.date ASC");
	$sth->execute(array($_GET['start'], $_GET['end']));
	$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($result);
