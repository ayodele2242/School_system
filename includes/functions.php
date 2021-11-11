<?php
error_reporting(0);
include_once('config.php');

include_once('paginator.php');

	/*
     * Functions to format Dates and/or Times from the database
	 * http://php.net/manual/en/function.date.php for a full list of format characters
	 * Uncomment (remove the double slash - //) from the one you want to use
	 * Comment (Add a double slash - //) to the front of the ones you do NOT to use
	 * If you have any questions at all, please contact me through my CodeCanyon profile.
	 * http://codecanyon.net/user/Luminary
     *
     * @param string $v   		The database value (ie. 2014-10-31 20:00:00)
     * @return string           The formatted Date and/or Time
     */
	function myucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1)).mb_substr($str, 1, mb_strlen($str));
}

//page menu
function display_children($parent, $level) {
    global $mysqli;
    $result = mysqli_query($mysqli,"SELECT a.id, a.name, a.link, Deriv1.Count FROM `navigation_bar` a  LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `navigation_bar` GROUP BY parent_id) Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id='$parent' ORDER BY position");
    if(!$result){ echo $mysqli->error; }
    echo "<ul>";
    while ($row = mysqli_fetch_array($result)) {
        if ($row['Count'] > 0) {
            echo "<li><a href='post?pid=" . $row['link'] . "'>" . $row['name'] . "</a>";
			display_children($row['id'], $level + 1);
			echo "</li>";
        } elseif ($row['Count']==0) {
            echo "<li><a href='post?pid=" . $row['link'] . "'>" . $row['name'] . "</a></li>";
        } else;
    }
    echo "</ul>";
}

	
	function randnumber(){
	$length = 1000;
	return $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);	 
	 }

	 function underscore($str) {
		return ucwords(str_replace("_", " ", $str));
	}

	function getCurrentPage(){
	$current_uri = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
	return $current_uri;
}

function getCurrentPageUrl(){
	$query_string = $_SERVER['QUERY_STRING'];

	$url = SITE_URL.getCurrentPage();
	if($query_string != ""){
		$url .= "?".$query_string;
	}
	return $url;
}
	 
	 function currency(){
	 $currency = 'Naira';
	 return $currency;
	 }
	 
	 //adding seperator to money in thousand, million etc
	 function parseCurrency($value) {
    if ( intval($value) == $value ) {
        $return = number_format($value, 0, ".", ",");
    }
    else {
        $return = number_format($value, 2, ".", ",");
        /*
        If you don't want to remove trailing zeros from decimals,
        eg. 19.90 to become: 19.9, remove the next line
        */
        $return = rtrim($return, 0);
    }

    return $return;
}
	 
	function dateFormat($v) {
		// $theDate = date("Y-m-d",strtotime($v));				// 2014-10-31
		// $theDate = date("m-d-Y",strtotime($v));				// 10-31-2014
		$theDate = date("F d, Y",strtotime($v));				// October 31, 2014
		return $theDate;
	}
	function dateTimeFormat($v) {
		// $theDateTime = date("Y-m-d g:i a",strtotime($v));	// 2014-10-31 8:00 pm
		// $theDateTime = date("m-d-Y g:i a",strtotime($v));	// 10-31-2014 8:00 pm
		$theDateTime = date("F d, Y at g:i a",strtotime($v));	// October 31, 2014 8:00 pm
		return $theDateTime;
	}
	function timeFormat($v) {
		$theTime = date("g:i a",strtotime($v));					// 8:00 pm
		return $theTime;
	}
	function dbDateFormat($v) {
		$theTime = date("Y-m-d",strtotime($v));					// 2014-10-31
		return $theTime;
	}
	function dbTimeFormat($v) {
		$theTime = date("H:i",strtotime($v));		// 20:00
		return $theTime;
	}

    /*
     * Function to show an Alert type Message Box
     *
     * @param string $message   The Alert Message
     * @param string $icon      The Font Awesome Icon
     * @param string $type      The CSS style to apply
     * @return string           The Alert Box
     */
    function alertBox($message, $icon = "", $type = "") {
        return "<div class=\"alertMsg alert-dismissible $type\" id=\"fades\"><span>$icon</span> $message </div>";
	}
	

//Encryption function
function easy_crypt($string) {
    return base64_encode($string . "_@#!@");
}

//Decodes encryption
function easy_decrypt($str) {
    $str = base64_decode($str);
    return str_replace("_@#!@", "", $str);
}

function getParentCategoryName($id) {
    global $db_con;
    $sql = "SELECT * FROM mp_pages WHERE 1 AND page_id = :id";
    try {
        $stmt = $db_con->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }
    
   return ($results[0]["page_title"] <> "" ) ? $results[0]["page_title"] : "None";
}

function getPageDetailsByName($pageAlias) {
    global $db_con;
    $rs = array();
    $sql = "SELECT * FROM mp_pages WHERE 1 AND page_alias = :pname";
    
    try {
        $stmt = $db_con->prepare($sql);
        $stmt->bindValue(":pname", $pageAlias);
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }

    if (count($results) > 0) {
       $rs =  $results[0];
    }
    return $rs;
}	

function strlimit($value, $limit = 250, $end = '...')
{
    if (mb_strwidth($value, 'UTF-8') <= $limit) {
        return $value;
    }

    return rtrim(mb_strimwidth($value, 0, $limit, '', 'UTF-8')).$end;
}


    /*
     * Function to ellipse-ify text to a specific length
     *
     * @param string $text      The text to be ellipsified
     * @param int    $max       The maximum number of characters (to the word) that should be allowed
     * @param string $append    The text to append to $text
     * @return string           The shortened text
     */
    function ellipsis($text, $max = '', $append = '&hellip;') {
        if (strlen($text) <= $max) return $text;

        $replacements = array(
            '|<br /><br />|' => ' ',
            '|&nbsp;|' => ' ',
            '|&rsquo;|' => '\'',
            '|&lsquo;|' => '\'',
            '|&ldquo;|' => '"',
            '|&rdquo;|' => '"',
        );

        $patterns = array_keys($replacements);
        $replacements = array_values($replacements);

        // Convert double newlines to spaces.
        $text = preg_replace($patterns, $replacements, $text);
        // Remove any HTML.  We only want text.
        $text = strip_tags($text);
        $out = substr($text, 0, $max);
        if (strpos($text, ' ') === false) return $out.$append;
        return preg_replace('/(\W)&(\W)/', '$1&amp;$2', (preg_replace('/\W+$/', ' ', preg_replace('/\w+$/', '', $out)))).$append;
    }

    /*
     * Function to Encrypt sensitive data for storing in the database
     *
     * @param string	$value		The text to be encrypted
	 * @param 			$encodeKey	The Key to use in the encryption
     * @return						The encrypted text
     */
	function encryptIt($value) {
		// The encodeKey MUST match the decodeKey
		$encodeKey = 'swGn@7q#5y0z%E4!C#5y@9Tx@';
		$encoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($encodeKey), $value, MCRYPT_MODE_CBC, md5(md5($encodeKey))));
		return($encoded);
	}

    /*
     * Function to decrypt sensitive data from the database for displaying
     *
     * @param string	$value		The text to be decrypted
	 * @param 			$decodeKey	The Key to use for decryption
     * @return						The decrypted text
     */
	function decryptIt($value) {
		// The decodeKey MUST match the encodeKey
		$decodeKey = 'swGn@7q#5y0z%E4!C#5y@9Tx@';
		$decoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($decodeKey), base64_decode($value), MCRYPT_MODE_CBC, md5(md5($decodeKey))), "\0");
		return($decoded);
	}

	/*
     * Function to strip slashes for displaying database content
     *
     * @param string	$value		The string to be stripped
     * @return						The stripped text
     */
	function clean($value) {
		$str = str_replace('\\', '', $value);
		return $str;
	}
	
	function slug($text){ 

  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

function get_timeago( $ptime )
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $mysqlidition = array(
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $mysqlidition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}



function class_maillist($class) {

	$emails = array();

	$query = "SELECT email FROM users WHERE grad_year = '$class'";
	$result = mysqli_query($mysqli, $query);
	$j = mysqli_fetch_array($result);
	$emails[] = $j['email'];
	while($row = mysqli_fetch_array($result)) {
		$emails[] .= implode("\t", $row);
	}
	$emails = implode(",", $emails);
	return $emails;
	
}

function echo_class_maillist($class) {

	$emails = array();

	$query = "SELECT email FROM users WHERE grad_year = '$class'";
	$result = mysqli_query($mysqli, $query);
	$j = mysqli_fetch_array($result);
	$emails[] = $j['email'];
	while($row = mysqli_fetch_array($result)) {
		$emails[] .= implode("\t", $row);
	}
	$emails = implode(",", $emails);
	echo $emails;
	
}

function getSlider(){
	global $mysqli;
	$get_slider = "select * from slider";
	$run_slider = mysqli_query($mysqli, $get_slider);
	while($row_slider=mysqli_fetch_array($run_slider)){
		//$slider_id = $row_slider['slider_id'];
		$slider_file = $row_slider['slider_file'];
		$slider_img_text = $row_slider['slider_img_text'];
		echo "<li><img src='image/img/$slider_file' title='$slider_img_text'></li>";
	}
}

function myclass($mysqli)
{ 
global $mysqli;	
 $output = '';
 $query = "SELECT * FROM class ORDER BY class ASC";
 $statement = $mysqli->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["class"].'">'.$row["class"].'</option>';
 }
 return $output;
}

function getNotice1(){
	global $mysqli;
	$getright = "SELECT * FROM `notice` WHERE `notice_cat` = '1' ORDER BY `notice`.`notice_id` DESC LIMIT 3 ";
	$getright_run = mysqli_query($mysqli, $getright);
	while($getright_row = mysqli_fetch_array($getright_run)){
		$notice_name = $getright_row['notice_name'];
		$notice_date = $getright_row['notice_date'];
		$notice_path = $getright_row['notice_path'];
		echo "<a href='$notice_path' style='color: rgb(6, 49, 102);'><div class='right'>
						<div class='rname'>
							<h3>$notice_name</h3>
						</div>
						<div class='rdate'>
							Date: $notice_date
						</div>
						
					</div></a>";
	}
}


function getNotice2(){
	global $mysqli;
	$getright = "SELECT * FROM `notice` WHERE `notice_cat` = '2' ORDER BY `notice`.`notice_id` DESC LIMIT 3 ";
	$getright_run = mysqli_query($mysqli, $getright);
	while($getright_row = mysqli_fetch_array($getright_run)){
		$notice_name = $getright_row['notice_name'];
		$notice_date = $getright_row['notice_date'];
		$notice_path = $getright_row['notice_path'];
		echo "<a href='$notice_path' style='color: rgb(6, 49, 102);'><div class='right'>
						<div class='rname'>
							<h3>$notice_name</h3>
						</div>
						<div class='rdate'>
							Date: $notice_date
						</div>
						
					</div></a>";
	}
}

function getNotice3(){
	global $mysqli;
	$getright = "SELECT * FROM `notice` WHERE `notice_cat` = '3' ORDER BY `notice`.`notice_id` DESC LIMIT 3 ";
	$getright_run = mysqli_query($mysqli, $getright);
	while($getright_row = mysqli_fetch_array($getright_run)){
		$notice_name = $getright_row['notice_name'];
		$notice_date = $getright_row['notice_date'];
		$notice_path = $getright_row['notice_path'];
		echo "<a href='$notice_path' style='color: rgb(6, 49, 102);'><div class='right'>
						<div class='rname'>
							<h3>$notice_name</h3>
						</div>
						<div class='rdate'>
							Date: $notice_date
						</div>
						
					</div></a>";
	}
}


function getNotice4(){
	global $mysqli;
	$getright = "SELECT * FROM `notice` WHERE `notice_cat` = '4' ORDER BY `notice`.`notice_id` DESC LIMIT 3 ";
	$getright_run = mysqli_query($mysqli, $getright);
	while($getright_row = mysqli_fetch_array($getright_run)){
		$notice_name = $getright_row['notice_name'];
		$notice_date = $getright_row['notice_date'];
		$notice_path = $getright_row['notice_path'];
		echo "<a href='$notice_path' style='color: rgb(6, 49, 102);'><div class='right'>
						<div class='rname'>
							<h3>$notice_name</h3>
						</div>
						<div class='rdate'>
							Date: $notice_date
						</div>
						
					</div></a>";
	}
}


function getNotice5(){
	global $mysqli;
	$getright = "SELECT * FROM `notice` WHERE `notice_cat` = '5' ORDER BY `notice`.`notice_id` DESC LIMIT 3 ";
	$getright_run = mysqli_query($mysqli, $getright);
	while($getright_row = mysqli_fetch_array($getright_run)){
		$notice_name = $getright_row['notice_name'];
		$notice_date = $getright_row['notice_date'];
		$notice_path = $getright_row['notice_path'];
		echo "<a href='$notice_path' style='color: rgb(6, 49, 102);'><div class='right'>
						<div class='rname'>
							<h3>$notice_name</h3>
						</div>
						<div class='rdate'>
							Date: $notice_date
						</div>
						
					</div></a>";
	}
}

function getClass(){
	global $mysqli;
	$ccsql="SELECT * FROM class";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($row=mysqli_fetch_array($ccsql_run)) {
			echo '<option value="'.$row["class"].'">'.$row["class"].'</option>';
	}
}

function getSubjects(){
	global $mysqli;
	$ccsql="SELECT * FROM subjects";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($row=mysqli_fetch_array($ccsql_run)) {
			echo '<option value="'.$row["subect_code"].'">'.$row["subjects"].'</option>';
	}
}



function getSMSGroup(){
	global $mysqli;
	$ccsql="SELECT * FROM `sms_group` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$id = $ccsql_get['id'];
			$class_name = $ccsql_get['group_name'];
			echo "<option value=".$id.">$class_name</option>";
	}
}


function getClassN(){
	global $mysqli;
	$ccsql="SELECT * FROM `class` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['class'];
			//$numeric_value = $ccsql_get['numeric_value'];
			echo "<option value='".$class_name."'>$class_name</option>";
	}
}

function getClassDropDown(){
	global $mysqli;
	$ccsql="SELECT * FROM `class` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['class_name'];
			$numeric_value = $ccsql_get['numeric_value'];
			echo "<li><a href='member_student.php?class=".$class_name."'>Class ".$class_name."</a>";
	}
}

function getShift(){
	global $mysqli;
	$ccsql="SELECT * FROM `shift` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['shift_name'];
			echo "<option>$class_name</option>";
	}
}
function getSection(){
	global $mysqli;
	$ccsql="SELECT * FROM `section` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['sec_name'];
			echo "<option>$class_name</option>";
	}
}

function getExamtype(){
	global $mysqli;
	$ccsql="SELECT * FROM `exam_type` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['exam_type'];
			echo "<option>$class_name</option>";
	}
}
function getGroup(){
	global $mysqli;
	$ccsql="SELECT * FROM `group_type` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['group_name'];
			echo "<option>$class_name</option>";
	}
}

function getAccount(){
	global $mysqli;
	$ccsql="SELECT * FROM `account_info` ";
		$ccsql_run = mysqli_query($mysqli, $ccsql);

		while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
			$class_name = $ccsql_get['ac_number'];
			echo "<option>$class_name</option>";
	}
}




function getGrade($mark){
	if($mark>=80){
		$grade = 'A+';
	}else if($mark<=79&&$mark>=70){
		$grade = 'A';
	}else if($mark<=69&&$mark>=60){
		$grade = 'A-';
	}else if($mark<=59&&$mark>=50){
		$grade = 'B';
	}else if($mark<=49&&$mark>=40){
		$grade = 'C';
	}else if($mark<=39&&$mark>=33){
		$grade = 'D';
	}else if($mark<=32&&$mark>=0){
		$grade = 'F';
	}

	return $grade;
}

function getGradePoint($grade){
	if($grade == 'A+'){
		$point = 5.00;
	}else if($grade == 'A'){
		$point = 4.00;
	}else if($grade == 'A-'){
		$point = 3.50;
	}else if($grade == 'B'){
		$point = 3.00;
	}else if($grade == 'C'){
		$point = 2.00;
	}else if($grade == 'D'){
		$point = 1.00;
	}else if($grade == 'F'){
		$point = 0.00;
	}

	return $point;
}
function getGradeToPoint($mark){
	if($mark>=5){
		$grade = 'A+';
	}else if($mark<5&&$mark>=4){
		$grade = 'A';
	}else if($mark<4&&$mark>=3.5){
		$grade = 'A-';
	}else if($mark<3.5&&$mark>=3){
		$grade = 'B';
	}else if($mark<3&&$mark>=2){
		$grade = 'C';
	}else if($mark<2&&$mark>=1){
		$grade = 'D';
	}else if($mark<1&&$mark>=0){
		$grade = 'F';
	}

	return $grade;
}

function getPersentage($gain, $full){
	$get = ($gain/$full) * 100;
	return $get;
}


function getPosition($num){
	if ($num == 1) {
		$pos = "1st";
	}else if ($num == 2) {
		$pos = "2nd";
	}else if ($num == 3) {
		$pos = "3rd";
	}else if ($num > 3) {
		$pos = $num."th";
	}
	return $pos;
}

function getEvent(){
	global $mysqli;
	$ccsql="SELECT * FROM `event` ";
	$ccsql_run = mysqli_query($mysqli, $ccsql);
$file=" ";
	
	while ($ccsql_get=mysqli_fetch_array($ccsql_run)) {
		$event_id = $ccsql_get['event_id'];
		$event_description = $ccsql_get['event_description'];
		$event_year = $ccsql_get['event_year'];
		$event_month = $ccsql_get['event_month'];
		$event_day = $ccsql_get['event_day'];
		$event_hour = $ccsql_get['event_hour'];
			echo "{title: '', description: '".$event_description."', datetime: new Date(".$event_year.",".$event_month.", ".$event_day.", ".$event_hour.")},";
			
		}
}

function getMonth(){
	echo '<option value="01">January</option>
	<option value="02">February</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>';
}

function getMonthName($month){
	if ($month == 1) {
		$month_name = "January";
	}else if ($month == 2) {
		$month_name = "February";
	}else if ($month == 3) {
		$month_name = "March";
	}else if ($month == 4) {
		$month_name = "April";
	}else if ($month == 5) {
		$month_name = "May";
	}else if ($month == 6) {
		$month_name = "June";
	}else if ($month == 7) {
		$month_name = "July";
	}else if ($month == 8) {
		$month_name = "August";
	}else if ($month == 9) {
		$month_name = "September";
	}else if ($month == 10) {
		$month_name = "October";
	}else if ($month == 11) {
		$month_name = "November";
	}else if ($month == 12) {
		$month_name = "December";
	}
	return $month_name;
}

function sendShortSMS($sms,$num){
	global $mysqli;
	$sql="SELECT * FROM `sms_config` ";
	$sql_run = mysqli_query($mysqli, $sql);
	$sql_get=mysqli_fetch_array($sql_run);

		$username = $sql_get['username'];
		$pass = $sql_get['pass'];
		$sender = $sql_get['sender'];
		$sms = urlencode($sms);

		//$str = file("http://app.itsolutionbd.net/api/sendsms/plain?user=".$username."&password=".$pass."&sender=".$sender."&SMSText=".$sms."&GSM=".$num."");
		//var_dump($str);
}



function sendLongSMS($sms,$num){
	global $mysqli;
	$sql="SELECT * FROM `sms_config` ";
	$sql_run = mysqli_query($mysqli, $sql);
	$sql_get=mysqli_fetch_array($sql_run);

		$username = $sql_get['username'];
		$pass = $sql_get['pass'];
		$sender = $sql_get['sender'];
		$sms = urlencode($sms);

		//$str = file("http://app.itsolutionbd.net/api/v3/sendsms/plain?user=".$username."&password=".$pass."&sender=".$sender."&SMSText=".$sms."&GSM=".$num."&type=longSMS");
		//var_dump($str);
}


function studentP(){
	global $mysqli;
	$d = date("d");
	$m = date("m");
	$Y = date("Y");

	$sql = "SELECT `p_or_a` FROM `student_attendence` WHERE `day`='$d' AND `month` = '$m' AND `year` = '$Y' AND `p_or_a`= 1";
	$sql_run = mysqli_query($mysqli, $sql);
	$p = mysqli_num_rows($sql_run);

	echo $p;		


}

function studentA(){
	global $mysqli;
	$d = date("d");
 $m = date("m");
 $Y = date("Y");


	$sql = "SELECT `p_or_a` FROM `student_attendence` WHERE `day`='$d' AND `month` = '$m' AND `year` = '$Y' AND `p_or_a`= 0";
	$sql_run = mysqli_query($mysqli, $sql);
	$a = mysqli_num_rows($sql_run);

	echo $a;	

}

function studentAtten(){
	global $mysqli;
	$d = date("d");
 $m = date("m");
 $Y = date("Y");
 	$sql = "SELECT `p_or_a` FROM `student_attendence` WHERE `day`='$d' AND `month` = '$m' AND `year` = '$Y' AND `p_or_a`= 1";
	$sql_run = mysqli_query($mysqli, $sql);
	$p = mysqli_num_rows($sql_run);

	$sql = "SELECT `p_or_a` FROM `student_attendence` WHERE `day`='$d' AND `month` = '$m' AND `year` = '$Y' AND `p_or_a`= 0";
	$sql_run = mysqli_query($mysqli, $sql);
	$a = mysqli_num_rows($sql_run);

	echo '{  y: '.$p.', indexLabel: "Present" },
{  y: '.$a.', indexLabel: "Absent" }';	

}


$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getOS() { 

    global $user_agent;

    $os_platform  = "Unknown OS Platform";

    $os_array     = array(
                          '/windows nt 10/i'      =>  'Windows 10',
                          '/windows nt 6.3/i'     =>  'Windows 8.1',
                          '/windows nt 6.2/i'     =>  'Windows 8',
                          '/windows nt 6.1/i'     =>  'Windows 7',
                          '/windows nt 6.0/i'     =>  'Windows Vista',
                          '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                          '/windows nt 5.1/i'     =>  'Windows XP',
                          '/windows xp/i'         =>  'Windows XP',
                          '/windows nt 5.0/i'     =>  'Windows 2000',
                          '/windows me/i'         =>  'Windows ME',
                          '/win98/i'              =>  'Windows 98',
                          '/win95/i'              =>  'Windows 95',
                          '/win16/i'              =>  'Windows 3.11',
                          '/macintosh|mac os x/i' =>  'Mac OS X',
                          '/mac_powerpc/i'        =>  'Mac OS 9',
                          '/linux/i'              =>  'Linux',
                          '/ubuntu/i'             =>  'Ubuntu',
                          '/iphone/i'             =>  'iPhone',
                          '/ipod/i'               =>  'iPod',
                          '/ipad/i'               =>  'iPad',
                          '/android/i'            =>  'Android',
                          '/blackberry/i'         =>  'BlackBerry',
                          '/webos/i'              =>  'Mobile'
                    );

    foreach ($os_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $os_platform = $value;

    return $os_platform;
}

function getBrowser() {

    global $user_agent;

    $browser        = "Unknown Browser";

    $browser_array = array(
                            '/msie/i'      => 'Internet Explorer',
                            '/firefox/i'   => 'Firefox',
                            '/safari/i'    => 'Safari',
                            '/chrome/i'    => 'Chrome',
                            '/edge/i'      => 'Edge',
                            '/opera/i'     => 'Opera',
                            '/netscape/i'  => 'Netscape',
                            '/maxthon/i'   => 'Maxthon',
                            '/konqueror/i' => 'Konqueror',
                            '/mobile/i'    => 'Handheld Browser'
                     );

    foreach ($browser_array as $regex => $value)
        if (preg_match($regex, $user_agent))
            $browser = $value;

    return $browser;
}




//Money to words
function convertNumberToWordsForIndia($number){
	//A function to convert numbers into Indian readable words with Cores, Lakhs and Thousands.
	$words = array(
	'0'=> '' ,'1'=> 'one' ,'2'=> 'two' ,'3' => 'three','4' => 'four','5' => 'five',
	'6' => 'six','7' => 'seven','8' => 'eight','9' => 'nine','10' => 'ten',
	'11' => 'eleven','12' => 'twelve','13' => 'thirteen','14' => 'fouteen','15' => 'fifteen',
	'16' => 'sixteen','17' => 'seventeen','18' => 'eighteen','19' => 'nineteen','20' => 'twenty',
	'30' => 'thirty','40' => 'fourty','50' => 'fifty','60' => 'sixty','70' => 'seventy',
	'80' => 'eighty','90' => 'ninty');
	
	//First find the length of the number
	$number_length = strlen($number);
	//Initialize an empty array
	$number_array = array(0,0,0,0,0,0,0,0,0);        
	$received_number_array = array();
	
	//Store all received numbers into an array
	for($i=0;$i<$number_length;$i++){    $received_number_array[$i] = substr($number,$i,1);    }

	//Populate the empty array with the numbers received - most critical operation
	for($i=9-$number_length,$j=0;$i<9;$i++,$j++){ $number_array[$i] = $received_number_array[$j]; }
	$number_to_words_string = "";        
	//Finding out whether it is teen ? and then multiplying by 10, example 17 is seventeen, so if 1 is preceeded with 7 multiply 1 by 10 and add 7 to it.
	for($i=0,$j=1;$i<9;$i++,$j++){
		if($i==0 || $i==2 || $i==4 || $i==7){
			if($number_array[$i]=="1"){
				$number_array[$j] = 10+$number_array[$j];
				$number_array[$i] = 0;
			}        
		}
	}
	
	$value = "";
	for($i=0;$i<9;$i++){
		if($i==0 || $i==2 || $i==4 || $i==7){    $value = $number_array[$i]*10; }
		else{ $value = $number_array[$i];    }            
		if($value!=0){ $number_to_words_string.= $words["$value"]." "; }
		if($i==1 && $value!=0){    $number_to_words_string.= "Crores "; }
		if($i==3 && $value!=0){    $number_to_words_string.= "Lakhs ";    }
		if($i==5 && $value!=0){    $number_to_words_string.= "Thousand "; }
		if($i==6 && $value!=0){    $number_to_words_string.= "Hundred &amp; "; }
	}
	if($number_length>9){ $number_to_words_string = "Sorry This does not support more than 99 Crores"; }
	return ucwords(strtolower($number_to_words_string)." Only.");
}




function convert_number_to_words($number) {
    $hyphen      = ' ';
    $mysqlijunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );
    if (!is_numeric($number)) {
        return false;
    }
    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }
    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }
    $string = $fraction = null;
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $mysqlijunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $mysqlijunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    return $string;
}


/*function money_format($format, $number) {
	$regex = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?' .
			'(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
	if (setlocale(LC_MONETARY, 0) == 'C') {
		setlocale(LC_MONETARY, '');
	}
	$locale = localeconv();
	preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
	foreach ($matches as $fmatch) {
		$value = floatval($number);
		$flags = array(
			'fillchar' => preg_match('/\=(.)/', $fmatch[1], $match) ?
					$match[1] : ' ',
			'nogroup' => preg_match('/\^/', $fmatch[1]) > 0,
			'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
					$match[0] : '+',
			'nosimbol' => preg_match('/\!/', $fmatch[1]) > 0,
			'isleft' => preg_match('/\-/', $fmatch[1]) > 0
		);
		$width = trim($fmatch[2]) ? (int) $fmatch[2] : 0;
		$left = trim($fmatch[3]) ? (int) $fmatch[3] : 0;
		$right = trim($fmatch[4]) ? (int) $fmatch[4] : $locale['int_frac_digits'];
		$conversion = $fmatch[5];

		$positive = true;
		if ($value < 0) {
			$positive = false;
			$value *= -1;
		}
		$letter = $positive ? 'p' : 'n';

		$prefix = $suffix = $cprefix = $csuffix = $signal = '';

		$signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
		switch (true) {
			case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
				$prefix = $signal;
				break;
			case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
				$suffix = $signal;
				break;
			case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
				$cprefix = $signal;
				break;
			case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
				$csuffix = $signal;
				break;
			case $flags['usesignal'] == '(':
			case $locale["{$letter}_sign_posn"] == 0:
				$prefix = '(';
				$suffix = ')';
				break;
		}
		if (!$flags['nosimbol']) {
			$currency = $cprefix .
					($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']) .
					$csuffix;
		} else {
			$currency = $cprefix .$csuffix;
		}
		$space = $locale["{$letter}_sep_by_space"] ? ' ' : '';

		$value = number_format($value, $right, $locale['mon_decimal_point'], $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
		$value = @explode($locale['mon_decimal_point'], $value);

		$n = strlen($prefix) + strlen($currency) + strlen($value[0]);
		if ($left > 0 && $left > $n) {
			$value[0] = str_repeat($flags['fillchar'], $left - $n) . $value[0];
		}
		$value = implode($locale['mon_decimal_point'], $value);
		if ($locale["{$letter}_cs_precedes"]) {
			$value = $prefix . $currency . $space . $value . $suffix;
		} else {
			$value = $prefix . $value . $space . $currency . $suffix;
		}
		if ($width > 0) {
			$value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
							STR_PAD_RIGHT : STR_PAD_LEFT);
		}

		$format = str_replace($fmatch[0], $value, $format);
	}
	return $format;
}*/

function new_members_year_only() {
global $mysqli;
	
	$query = "SELECT count(grad_year) as num, grad_year FROM alumni_users WHERE status='active' GROUP BY grad_year ORDER BY grad_year DESC";
    $result = mysqli_query($mysqli, $query);
	$get = mysqli_num_rows($result);
	
	if($get < 1){
		echo '<div class="alert alert-warning">No register users at the moment</div>';
	}else{
		echo '<ul class="list-group">';
	while($row = mysqli_fetch_array($result))
		{
			if($row['num'] < 2){
				$nums = "Member";
			}else {
				$nums = "Members";
			}
		echo '<a href="year-list?class=' . $row['grad_year'] . '">
		<li class="list-group-item list-group-item-action list-group-item-light">
		' . $row['grad_year'] .' ('.$row['num']. ' '.$nums.')</li></a>';
		}
		echo '</ul>';
	}
	}

	function grad_list_register() {
		global $mysqli;
		$query_grad_year = "SELECT grad_year FROM alumni_users WHERE grad_year > 1900 GROUP BY grad_year ORDER BY grad_year DESC";
		$grad_year = mysqli_query($mysqli, $query_grad_year);
		$row_grad_year = mysqli_fetch_assoc($grad_year);
		$totalRows_grad_year = mysqli_num_rows($grad_year);
		?>	
		  <select name="grad_year"  class="form-control">
		  <option value="">Select Your Class</option>
		<?php
	do {  
	global $grad;
	?>
		<option value="<?php echo $row_grad_year['grad_year']?>"><?php echo $row_grad_year['grad_year']?></option>
		<?php
	} while ($row_grad_year = mysqli_fetch_assoc($grad_year));
	  $rows = mysqli_num_rows($grad_year);
	  if($rows > 0) {
		  mysqli_data_seek($grad_year, 0);
		  $row_grad_year = mysqli_fetch_assoc($grad_year);
	  }
	?>
	  </select>
	<?php  
	 }


	 
function getNavigation($row){
 global $mysqli;
 echo "<li class='nav-item'><a class='nav-link' href=index?nav_id={$row['id']}&parent_id={$row['parent_id']}";
 if(isset($_GET['nav_id'])
 && $_GET['nav_id']==($row['id'])){
 echo " class=\"selected\"";
 }
 
 if(isset($_GET['parent_id']) 
 && $_GET['parent_id']==($row['id'])){
 echo " class=\"selected\"";
 }
 echo ">".$row['name']."</a>";
 $select_subnav="select * from navigation_bar where parent_id=".$row['id']. " order
  by position ";
 $run_subnav=mysqli_query($mysqli,$select_subnav);
 if(mysqli_num_rows($run_subnav)>0){
	 echo "<ul>";
	 while($row=mysqli_fetch_array($run_subnav)){
		  getNavigation($row);
		 }
	 echo "</ul>";
	 }
	 echo "</li>";
	}
	
	
	// getting category list
	function cat_list($p_id=0,$space=''){  
     global $mysqli;
    $q="SELECT * FROM navigation_bar WHERE parent_id='$p_id' order by position ASC ";  
$r=mysqli_query($mysqli,$q);  
 $count=mysqli_num_rows($r);  
 
if($p_id==0){  
    $space='';  
}else{  
   $white_space= "&nbsp; &nbsp; &nbsp;";
   
    $space = $space . $white_space;
}  
if($count > 0){  
      
    while($row=mysqli_fetch_array($r)){  
	    
        echo "<option value=".$row['id'].">".$space.$row['name']."</option>";  
          
        cat_list($row['id'],$space);  
    }  
      
}  
  
  
}  	

// getting category list
function menu_list($p_id=0,$space=''){  
	global $mysqli;
   $q="SELECT * FROM navigation_bar WHERE parent_id='$p_id' order by position ASC ";  
$r=mysqli_query($mysqli,$q);  
$count=mysqli_num_rows($r);  

if($p_id==0){  
   $space='';  
}else{  
  $white_space= "&nbsp; &nbsp; &nbsp;";
  
   $space = $space . $white_space;
}  
if($count > 0){  
	 
   while($row=mysqli_fetch_array($r)){  
	   
	   echo "<option value=".$row['link'].">".$space.$row['name']."</option>";  
		 
	   cat_list($row['id'],$space);  
   }  
	 
}  
 
 
}  	

function edit_cat_list($p_id=0,$space=''){  
     global $mysqli;
    $q="SELECT * FROM navigation_bar WHERE parent_id='$p_id' order by position ASC ";  
$r=mysqli_query($mysqli,$q);  
 $count=mysqli_num_rows($r);  
 
if($p_id==0){  
    $space='';  
}else{  
   $white_space= "&nbsp; &nbsp; &nbsp;";
   
    $space = $space . $white_space;
}  
if($count > 0){  
      
    while($row=mysqli_fetch_array($r)){ 
	    
	    $edit_navid=$row['id'];
        echo "<option value=".$row['id']."";
		// selected menu for edit navigation
		if(isset($_GET['parent_id'])){
		$pid=$_GET['parent_id'];
		if($pid==$edit_navid){
		echo " selected ";
		}else{echo " ";}
		}
		// selected menu for edit post
		if(isset($_GET['menu_id'])){
			$menu_id=$_GET['menu_id'];
			if($menu_id==$edit_navid ){
				echo " selected " ;
				}else{echo "";}
			}	
					
		echo ">".$space.$row['name']."</option>";  
        edit_cat_list($row['id'],$space);  
    }  
 }  
} 


function selected_parent($p_id=0,$space=''){  
     global $mysqli;
    $q="SELECT * FROM navigation_bar WHERE parent_id='$p_id' order by position ASC ";  
$r=mysqli_query($mysqli,$q);  
 $count=mysqli_num_rows($r);  
 
if($p_id==0){  
    $space='';  
}else{  
   $white_space= "&nbsp; &nbsp; &nbsp;";
   
    $space = $space . $white_space;
}  
if($count > 0){  
      
    while($row=mysqli_fetch_array($r)){  
	    $nav_id=$row['id'];
        echo "<option value=".$row['id']."";
		if(isset($_GET['select_pid'])){
			$select_pid=$_GET['select_pid'];
			if($select_pid==$nav_id){
				echo " selected " ;
				
				}else{echo "";}
			}
		echo ">".$space.$row['name']."</option>";  
          
        selected_parent($row['id'],$space);  
    }  
   }  
 }  



 /*
 * Function requested by Ajax
 */
if(isset($_POST['func']) && !empty($_POST['func'])){
    switch($_POST['func']){
        case 'getCalender':
            getCalender($_POST['year'],$_POST['month']);
            break;
        case 'getEvents':
            getEvents($_POST['date']);
            break;
        default:
            break;
    }
}

/*
 * Get calendar full HTML
 */
function getCalender($year = '',$month = '')
{
    global $mysqli;
    $dateYear = ($year != '')?$year:date("Y");
    $dateMonth = ($month != '')?$month:date("m");
    $date = $dateYear.'-'.$dateMonth.'-01';
    $currentMonthFirstDay = date("N",strtotime($date));
    $totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
    $totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
    $boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
?>
    <div id="calender_section">
        <h2>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
            <select name="year_dropdown" class="year_dropdown dropdown"><?php echo getYearList($dateYear); ?></select>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
        </h2>
        <div id="event_list" class="none"></div>
        <div id="calender_section_top">
            <ul>
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
        </div>
        <div id="calender_section_bot">
            <ul>
            <?php 
                $dayCount = 1; 
                for($cb=1;$cb<=$boxDisplay;$cb++){
                    if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
                        //Current date
                        $currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
                        $eventNum = 0;
                        //Include db configuration file
                        //include '../includes/config.php';
                        //Get number of events based on the current date
                        $result = $mysqli->query("SELECT page_title FROM events WHERE posted_on = '".$currentDate."' ");
                        $eventNum = $result->num_rows;
                        //Define date cell color
                        if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
                            echo '<li date="'.$currentDate.'" class="grey date_cell">';
                        }elseif($eventNum > 0){
                            echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
                        }else{
                            echo '<li date="'.$currentDate.'" class="date_cell">';
                        }
                        //Date cell
                        echo '<span>';
                        echo $dayCount;
                        echo '</span>';
                        
                        //Hover event popup
                        echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
                        echo '<div class="date_window">';
                        echo '<div class="popup_event">Events ('.$eventNum.')</div>';
                        echo ($eventNum > 0)?'<a href="javascript:;" onclick="getEvents(\''.$currentDate.'\');">view events</a>':'';
                        echo '</div></div>';
                        
                        echo '</li>';
                        $dayCount++;
            ?>
            <?php }else{ ?>
                <li><span>&nbsp;</span></li>
            <?php } } ?>
            </ul>
        </div>
    </div>

   
<?php
}

/*
 * Get months options list.
 */
function getAllMonths($selected = ''){
	global $mysqli;
    $options = '';
    for($i=1;$i<=12;$i++)
    {
        $value = ($i < 10)?'0'.$i:$i;
        $selectedOpt = ($value == $selected)?'selected':'';
        $options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
    }
    return $options;
}

/*
 * Get years options list.
 */
function getYearList($selected = ''){
	global $mysqli;
    $options = '';
    for($i=2015;$i<=2025;$i++)
    {
        $selectedOpt = ($i == $selected)?'selected':'';
        $options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
    }
    return $options;
}

/*
 * Get events by date
 */
function getEvents($date = ''){
    //Include db configuration file
    global $mysqli;
    $eventListHTML = '';
    $date = $date?$date:date("Y-m-d");
    //Get events based on the current date
    $result = $mysqli->query("SELECT page_title FROM events WHERE posted_on = '".$date."'");
    if($result->num_rows > 0){
        $eventListHTML = '<h2>Events on '.date("l, d M Y",strtotime($date)).'</h2>';
        $eventListHTML .= '<ul>';
        while($row = $result->fetch_assoc()){ 
            $eventListHTML .= '<li>'.$row['title'].'</li>';
        }
        $eventListHTML .= '</ul>';
    }
    echo $eventListHTML;
}
 
	
?>