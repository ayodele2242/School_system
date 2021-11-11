<?php
	session_start();
	unset($_SESSION['matricno']);
	
	if(session_destroy())
	{
		header("Location: validator?=You have logged out");
	}
?>