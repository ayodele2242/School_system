<?php
require_once '../../includes/fetch.php';
if($_POST){


$addr = $_POST['emaillist'];
$emailist = explode(";",$addr);

  if(!empty($_POST["venue"])){
	$venue = 'Venue: '. $_POST["venue"];
	}else{
	$venue = '';	
	}
	if(!empty($_POST["date"])){
	$date = 'Date: '. $_POST["date"];
	}else{
		$date = '';	
	}
//-------------------log email invite into db-------------------
foreach ($emailist AS $addy) {
$subject = $_POST['subject'];
$msg = $_POST['msg'];   
$site_name = $set['siteName'];
$link = $set['siteEmail'];
$to = $addy;	

 $message = "";
        $message .= '<html><body><div style="width:100%; background:rgba(255,0,0,0.1); padding:2px;">
        <p style="text-align:center; padding:1px;"> <img src="'. $set['installUrl'].'logo/'.$set['schoolLogo'] .'"/></p>
		<p style="text-align:left; font-weight:bolder; padding:5px; color:000;">'.$subject.'</p>
		<p style="color:#842A2A; padding:6px; font-weight:bolder;"><span>'.$venue. '</span></p>
		<p style="color:#842A2A; padding:6px; font-weight:bolder;"><span>'. $date.'</span></p>
		<p>'.$msg.'</p>
		<p></p>
		<p></p>
		<p></p>
		<p><b>Osun Job Center Team</b></p>
		</div></body></html>';
		
		$from_mail = $site_name.'<'.$link.'>';

       
		
		$from = $from_mail;
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();	
			

  //$stmt =  mysqli_query($mysqli,"INSERT INTO emailinvite_log (sentto_addresses,title,body) VALUES ('$to','$subject','$message')");
   
  $sendit =  @mail($to, $subject, $message, $headers);
   	
}

if($sendit)
{
	echo "Mail Sent";
}
else{
echo $mysqli->error;	
}


}

?>