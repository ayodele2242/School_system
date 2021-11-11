<?php
include('../includes/fetch.php'); 
if(!isset($_SESSION['id'])){
    header('Location: sign-in');
}else{ //Login conditions
 $msgBox = '';
$activeAccount = '';
$nowActive = '';  


$t = date("Y-m-d H:i:s");
$tv = time(); 

$id = $_SESSION['id'];
$user = mysqli_query($mysqli, "select * from employee where id='$id' ");
$d = mysqli_fetch_assoc($user);
$ids = $d['id'];
$fullname = $d['surname'] .' '. $d['othername'];
$uname = $d['username'];
$email = $d['userEmail'];
$pri = $d['dept'];
$tel = $d['phoneno'];
$subject = $d['subject'];
$class = $d['class'];
$_SESSION['fname'] = $fullname;
$_SESSION['uname'] = $uname;
$_SESSION['class'] = $class;


$neverText = '';



// Logout
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'logout') {
          session_unset();
        session_destroy();
         header('Location: sign-in');
    }
}

//get teacher's assigned subjects
$catsubjects = '';
$subs = explode(",", $subject);
foreach($subs as $sub) {
    $sub = trim($sub);
    $catsubjects .=  "'$sub',";
}
$impSub =  rtrim($catsubjects,',');



//Get total number of students in teacher class
$catclass = '';
$cats = explode(",", $class);
foreach($cats as $cat) {
    $cat = trim($cat);
    $catclass .=  "'$cat',";
}
$impclass =  rtrim($catclass,',');


						

    $sqlu = "SELECT * FROM student WHERE class IN($impclass)";
    $result1=mysqli_query($mysqli, $sqlu);
        //$row= mysqli_fetch_array($result);
		$countstu = mysqli_num_rows($result1);
		
    
		function getTeacherClass(){
			global $mysqli;
			global $impclass;
			$ccsql="SELECT * FROM class  WHERE class IN($impclass)";
				$ccsql_run = mysqli_query($mysqli, $ccsql);
		
				while ($row=mysqli_fetch_array($ccsql_run)) {
					echo '<option value="'.$row["class"].'">'.$row["class"].'</option>';
			}
		}
		

		function getTeacherSubjects(){
			global $mysqli;
			global $impSub;
			$ccsql="SELECT * FROM subjects WHERE subjects IN($impSub)";
				$ccsql_run = mysqli_query($mysqli, $ccsql);
		
				while ($row=mysqli_fetch_array($ccsql_run)) {
					echo '<option value="'.$row["subect_code"].'">'.$row["subjects"].'</option>';
			}
		}

		
  
		//$findme = $class;
		
		
		
		// Get Settings Data
		$setSql = "SELECT * FROM sitesettings";
		$setRes = mysqli_query($mysqli, $setSql) or die('site setting failed'.mysqli_error());
		$set = mysqli_fetch_array($setRes);

		$_SESSION['sch_name'] = $set['school_name'];
		

 //$cookie_name = "page";
//$cookie_value = "$_GET['a']";
//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 30;
 //Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
     //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
     //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
		$act = 'user session destroyed';
			
        session_unset();
        session_destroy();
        header("Location: sign-in");
		
		 mysqli_query($mysqli, "insert into user_log (username,name,action,time, user_id, mydate, mtime)values('$uname','$fullname','$act', '$tv', '$id', '$t', '$tv')");
   }
}
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();


$sql = "SELECT * FROM " . TABLE_PAGES . " WHERE status = 'active' AND parent = -1 ORDER BY page_title ASC";
try {
    $stmt = $db_con->prepare($sql);
    $stmt->execute();
    $optionsRs = $stmt->fetchAll();
} catch (Exception $ex) {
    echo errorMessage($ex->getMessage());
}


// post count
$post_count = $db_con->query("SELECT * FROM mp_pages");
// comment count
$comment_count = $db_con->query("SELECT * FROM alumni_comments");


//get users within 2 month
function latestRegisteredUsers()
{
    global $mysqli;
	$sql = "SELECT * FROM alumni_users where status != 'active' AND  date_created >= DATE_SUB(CURDATE(), INTERVAL 2 MONTH) ORDER BY user_id DESC";
	$result=mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($result);
	if($count < 1){
		echo '<div class="alert alert-warning stas">No latest registered user(s)</div>';
	}else{
		echo '<div class="col-lg-12 col-md-12 stas"  style="background:#fff; padding:10px; margin-bottom:15px;">
		<p style="font-size:16px; padding:10px; margin-bottom: 5px; font-weight: bolder; background:">Registered users which are yet to be activated</p>
		<div class="scrollbar" id="style-3">
		';
		while($row = mysqli_fetch_array($result)){
			$status = $row['status'];



			if($row['status']=='inactive' || $row['status']=='')
			 {
			$sta = '
			<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="inactives oks">
				<option value="inactive"  selected >Inactivated</option>
				<option value="active">Activate</option>
				
			</select>
			';
			}elseif($row['status']=='active')
			 {
			$sta  = '
			<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="sta-active oks">
				<option value="active"  selected >Activated</option>
				<option value="inactive"  >Inactivate</option>
				
			</select>
			
			';
			 }	
		echo '<div class="col-lg-3 col-md-4" style="margin-bottom:10px;"><a href="user_profile?uid='.$row['user_id'].'">'.$row['last_name'].' '.$row['maiden_name']. ' '.$row['first_name'].'</a></div>
		<div class="col-lg-1 col-md-1" style="margin-bottom:10px;">'.$row['grad_year']. '</div><div class="col-lg-2 col-md-2" style="margin-bottom:10px;">'.$sta.'</div>';
		}
	}

echo '</div></div>';

	}


//get latest post title 24 hours
function latestPostTitle()
{
    global $mysqli;
	$sql = "SELECT * FROM mp_pages WHERE pdate >= DATE_SUB(CURDATE(), INTERVAL 1 DAY) ORDER BY page_id DESC ";
	$result2 = mysqli_query($mysqli, $sql);
	$count = mysqli_num_rows($result2);
	if($count < 1){
		echo '<div class="alert alert-warning stas">No latest post available</div>';
	}else{
		echo '<div class="col-lg-12 col-md-12 stas"  style="background:#fff; padding:10px; margin-bottom:15px;">
		<p style="font-size:16px; padding:10px; margin-bottom: 5px; font-weight: bolder; background:">Latest Posts. You can only see posts within 24 hours here.</p>
		<div class="scrollbar" id="style-2">
		';
		while($row = mysqli_fetch_array($result2)){
			$status = $row['status'];



			/*if($row['status']=='inactive' || $row['status']=='')
			 {
			$sta = '
			<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="inactives oks">
				<option value="inactive"  selected >Inactivated</option>
				<option value="active">Activate</option>
				
			</select>
			';
			}elseif($row['status']=='active')
			 {
			$sta  = '
			<select id=alumni_'.$row['user_id'].' onchange="getalumni(this,'.$row['user_id'].')" class="sta-active oks">
				<option value="active"  selected >Activated</option>
				<option value="inactive"  >Inactivate</option>
				
			</select>
			
			';
			 }	*/
		echo '<div class="col-lg-12 col-md-12" style="margin-bottom:10px;"><a href="readme?id='.$row['page_id'].'">'.$row['page_title'].'</a></div>
		';
		}
	}

echo '</div></div>';

	}	
	









//Get total number of employers
function employers()
{
    global $mysqli;
    $sql = "SELECT COUNT(*) FROM employer";
    if ($result=mysqli_query($mysqli, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}

	// Settings Data
	
	if ($set['allowRegistrations'] == '1') { $allowRegistrations = 'selected'; } else { $allowRegistrations = ''; }
	if ($set['enableWeather'] == '1') {
		$enableWeather = 'selected';
		$set['enableWeather'] = '1';
	} else {
		$enableWeather = '';
		$set['enableWeather'] = '0';
	}
	if ($set['enableCalendar'] == '1') {
		$enableCalendar = 'selected';
		$set['enableCalendar'] = '1';
	} else {
		$enableCalendar = '';
		$set['enableCalendar'] = '0';
	}
	
	if ($set['localization'] == 'ar') { $ar = 'selected'; } else { $ar = ''; }
	if ($set['localization'] == 'bg') { $bg = 'selected'; } else { $bg = ''; }
	if ($set['localization'] == 'ce') { $ce = 'selected'; } else { $ce = ''; }
	if ($set['localization'] == 'cs') { $cs = 'selected'; } else { $cs = ''; }
	if ($set['localization'] == 'da') { $da = 'selected'; } else { $da = ''; }
	if ($set['localization'] == 'en') { $en = 'selected'; } else { $en = ''; }
	if ($set['localization'] == 'en-ca') { $en_ca = 'selected'; } else { $en_ca = ''; }
	if ($set['localization'] == 'en-gb') { $en_gb = 'selected'; } else { $en_gb = ''; }
	if ($set['localization'] == 'es') { $es = 'selected'; } else { $es = ''; }
	if ($set['localization'] == 'fr') { $fr = 'selected'; } else { $fr = ''; }
	if ($set['localization'] == 'ge') { $ge = 'selected'; } else { $ge = ''; }
	if ($set['localization'] == 'hr') { $hr = 'selected'; } else { $hr = ''; }
	if ($set['localization'] == 'hu') { $hu = 'selected'; } else { $hu = ''; }
	if ($set['localization'] == 'hy') { $hy = 'selected'; } else { $hy = ''; }
	if ($set['localization'] == 'id') { $id = 'selected'; } else { $id = ''; }
	if ($set['localization'] == 'it') { $it = 'selected'; } else { $it = ''; }
	if ($set['localization'] == 'ja') { $ja = 'selected'; } else { $ja = ''; }
	if ($set['localization'] == 'ko') { $ko = 'selected'; } else { $ko = ''; }
	if ($set['localization'] == 'nl') { $nl = 'selected'; } else { $nl = ''; }
	if ($set['localization'] == 'pt') { $pt = 'selected'; } else { $pt = ''; }
	if ($set['localization'] == 'ro') { $ro = 'selected'; } else { $ro = ''; }
	if ($set['localization'] == 'sv') { $sv = 'selected'; } else { $sv = ''; }
	if ($set['localization'] == 'th') { $th = 'selected'; } else { $th = ''; }
	if ($set['localization'] == 'vi') { $vi = 'selected'; } else { $vi = ''; }
	if ($set['localization'] == 'yue') { $yue = 'selected'; } else { $yue = ''; }



// Edit Account
	if (isset($_POST['submit']) && $_POST['submit'] == 'editProfile') {
		if($_POST['userFirst'] == "") {
            $msgBox = alertBox($yourFisrtNameReq, "<i class='fa fa-times-circle'></i>", "danger");
        } else if($_POST['userLast'] == "") {
            $msgBox = alertBox($yourLastNameReq, "<i class='fa fa-times-circle'></i>", "danger");
        } else if($_POST['userEmail'] == "") {
            $msgBox = alertBox($yourEmailReq, "<i class='fa fa-times-circle'></i>", "danger");
		} else if($_POST['passwordNew'] != $_POST['passwordRepeat']) {
			$msgBox = alertBox($passwordsNotMatchMsg, "<i class='fa fa-warning'></i>", "warning");
		} else {
			if($_POST['currentPass'] != '') {
				$currPass = encryptIt($_POST['currentPass']);
			} else {
				$currPass = '';
			}
			
			if($_POST['currentPass'] == '') {
				$userFirst = $mysqli->real_escape_string($_POST['userFirst']);
				$userLast = $mysqli->real_escape_string($_POST['userLast']);
				$userEmail = $mysqli->real_escape_string($_POST['userEmail']);
				$newPassword = $_POST['passwordOld'];
				if ($set['enableWeather'] == '1') {
					$weatherLoc = $mysqli->real_escape_string($_POST['weatherLoc']);
				} else {
					$weatherLoc = '';
				}
				
				// Update the $_SESSION variables
				$_SESSION["userFirst"]	= $userFirst;
				$_SESSION["userLast"] 	= $userLast;
				$_SESSION["userEmail"] 	= $userEmail;
				$_SESSION["weatherLoc"] = $weatherLoc;

				$stmt = $mysqli->prepare("UPDATE
											users
										SET
											userEmail = ?,
											password = ?,
											userFirst = ?,
											userLast = ?,
											weatherLoc = ?
										WHERE
											userId = ?"
				);
				$stmt->bind_param('ssssss',
									$userEmail,
									$newPassword,
									$userFirst,
									$userLast,
									$weatherLoc,
									$userId
				);
				$stmt->execute();
				$msgBox = alertBox($accountProfileUpdatedMsg, "<i class='fa fa-check-square'></i>", "success");
				$stmt->close();
			} else if ($_POST['currentPass'] != '' && encryptIt($_POST['currentPass']) == $_POST['passwordOld']) {
				$newPassword = encryptIt($_POST['passwordNew']);
				$userFirst = $mysqli->real_escape_string($_POST['userFirst']);
				$userLast = $mysqli->real_escape_string($_POST['userLast']);
				$userEmail = $mysqli->real_escape_string($_POST['userEmail']);
				if ($set['enableWeather'] == '1') {
					$weatherLoc = $mysqli->real_escape_string($_POST['weatherLoc']);
				} else {
					$weatherLoc = '';
				}
				
				// Update the $_SESSION variables
				$_SESSION["userFirst"]	= $userFirst;
				$_SESSION["userLast"] 	= $userLast;
				$_SESSION["userEmail"] 	= $userEmail;
				$_SESSION["weatherLoc"] = $weatherLoc;

				$stmt = $mysqli->prepare("UPDATE
											users
										SET
											userEmail = ?,
											password = ?,
											userFirst = ?,
											userLast = ?,
											weatherLoc = ?
										WHERE
											userId = ?"
				);
				$stmt->bind_param('ssssss',
									$userEmail,
									$newPassword,
									$userFirst,
									$userLast,
									$weatherLoc,
									$userId
				);
				$stmt->execute();
				$msgBox = alertBox($accountProfileUpdatedMsg, "<i class='fa fa-check-square'></i>", "success");
				$stmt->close();
			} else {
				$msgBox = alertBox($currentPassError, "<i class='fa fa-warning'></i>", "warning");
			}
		}
	}



}//Login conditions end 



?>