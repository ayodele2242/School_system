<?php	
include_once '../includes/functions.php';
if(!isset($_SESSION['id'])){
	header("Location: ../join-ojobs?employer&Action=Access denied. Enter your login details.");
}
$id = $_SESSION['id'];
$get = mysqli_query($mysqli, "select certificate_of_incorporation from employer where id='$id'");
$img = mysqli_fetch_assoc($get);
$im = $img['certificate_of_incorporation'];

//Empty the row
$em = mysqli_query($mysqli, "UPDATE employer SET certificate_of_incorporation = '' where id='$id' " );

if($em) {
	unlink("../certificate/$img");
	}											
?>