<?php
session_start();
unset($_SESSION['member_id']);
session_destroy();

header('Location: registration.php');
?>