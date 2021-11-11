 <?php
include '../registration/db.inc.php';
session_start();


$id  = @$_GET['id'];
$sub = "update pins set pins  = '$id' where  pin = '$id'";
$d   = @mysql_query($sub);

	  
//echo $_GET['id'];
	//echo '<h3>Registration is successful.</h3>';
if(isset($_SESSION['member_id']))
{
	$uid = $_SESSION['member_id'];
	
	$sql = "select * from members where user_id='$uid'";
	$result = mysqli_query($link, $sql);
	
	
	if(!$result){
		echo 'Error fetching data';
		exit();
	}
	
	while ($row = mysqli_fetch_array($result))
	{  
	  
	?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Wesley Application Page</title>
	<link href="../registration/style.css" rel="stylesheet" type="text/css"/>
	<link href="../css/confirm.css" rel="stylesheet" type="text/css"/>
	
	
	
	
	
	
</head>
<body>
 <div id="clogo"><img src="../img/white logo.png" title="GlobalTechs Computer"/></div>
<div id="main">

	<div id="header" class="ctrdiv">
		<h2 id="hdr_title">Wesley Confirmation Page</h2>
	</div>
	
<div id="content" class="ctrdiv">
<div class="mid">

	<table class="confirm">
	<tbody>
	<tr>	<td class="one"><font color="#fff"><b>Your Name:</b></font></td><td><?php  echo  $row['lname'] . ' ' . $row['fname'];?></td></tr>
	<tr><td class="two"><font color="#fff"><b>E-mail Address:</b></font></td><td><?php  echo  $row['email'];     ?></td>	</tr>
	<tr><td class="two"><font color="#fff"><b>Username:</b></font></td><td><?php  echo  $row['username'];     ?></td>	</tr>
	<tr><td class="three"><font color="#fff"><b>Date of Birth:</b></font></td><td><?php  echo  $row['birth_date'];     ?></td>	</tr>
	<tr><td class="four"><font color="#fff"><b>Password:</b></font></td><td><?php  echo  $row['password'];   ?></td></tr>	
	<tr><td class="four"><font color="#fff"><b>Course Registered For:</b></font></td><td><?php  echo  $row['course'];   ?></td></tr>	
	<tr><td class="four"><font color="#fff"><b>Phone Number:</b></font></td><td><?php  echo  $row['contact'];     ?></td></tr>	
		</tbody>
	</table>	
	</div>
	<div >
	<p>
	
	<a href="../php/index.php">Click here to continue....</a>	</p>
	</div>
	<div align="center"><div id="printer"><button onClick="myFunction()" id="btn"><img src="../img/printer.png"></button></div></div>
</div>
</div>
<?php		
	}
	
	
}	
?>
</body>
</html>

