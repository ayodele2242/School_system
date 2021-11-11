<?php
$conn = @mysql_connect("localhost","wchsogbo_wchs224","fatherwchs2242") or die("Database not connected");
$db=@mysql_select_db("quiz", $conn) or die("Database not connected");
?>