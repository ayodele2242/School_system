<?php
$link = mysqli_connect('localhost', 'wchsogbo_wchs224', 'fatherwchs2242');
if (!$link)
{
  echo 'Unable to connect to the database server.';
  exit();
}

if (!mysqli_set_charset($link, 'UTF8'))
{
  echo 'Unable to set database connection encoding.';
  exit();
}

if(!mysqli_select_db($link, 'wchsogbo_studentinfo'))
{
  echo 'Unable to locate database.';
  exit();  
}
?>