  
<?php
//Include database connection
include("../includes/functions.php");

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
	 $query = mysqli_query($mysqli,"SELECT * FROM jobs WHERE id = '$id'");
	 while($row_employer  = mysqli_fetch_array($query)){
	 
 
?>
<div class="col-lg-12" style="text-align: center; padding: 5px;">

<div class="row">
<div class="col-lg-12 heading">
<?php echo '<strong>'.$row_employer['jtitle'].'</strong>';?>
</div>
<div class="col-lg-12">
<textarea row="" class="form-control" readonly><?php echo $row_employer['jdiscrib']; ?></textarea>

</div>

</div>

<div class="">
By: <?php echo $row_employer['industry']; ?>.  Posted on:  <?php echo $row_employer['edate'];?>
</div>			
  <?php
	 }
}
?>
<div>
 
</div>
    </div>         
    