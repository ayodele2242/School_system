<?php

include('db.php');


if(isset($_POST['username']))
{
$username = $_POST['username'];
$sql = mysql_query("select user_id from members where username='$username'");
if(mysql_num_rows($sql))
{
echo '<STRONG><font color="green">'.$username.'</font></STRONG><font color="red"> is already in use, please enter another one.</font>';
}
else
{
echo 'OK';
}
}

?>