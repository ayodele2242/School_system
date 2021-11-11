<?php
	// Require DB Connection
	require_once('../../includes/config.php'); 
    // Get Event By Id
	$sth = $mysqli->prepare("SELECT * FROM sch_events WHERE id = ?");
	$sth->execute(array($_GET['id']));
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	echo json_encode($result);
