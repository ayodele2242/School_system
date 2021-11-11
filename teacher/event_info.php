<style>
.header{
	text-align: left;
	font-family:"Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, sans-serif;
	padding:5px;
    color: #fff;
    font-size: 22px;
}
	</style>
    
<?php
//Include database connection
include("../includes/functions.php");

if($_POST['rowid']) {
$id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
	 $query = mysqli_query($mysqli,"SELECT * FROM events WHERE  id = '$id'");
	 $row  = mysqli_fetch_array($query);
	 ?>
    
 <p class="alert alert-info header"><?php echo $row['page_title']; ?></p>
 <p><?php echo $row['details']; ?></p>











     <?php } ?>