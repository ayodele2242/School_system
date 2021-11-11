<?php 
include('header.php'); 
if (isset($_GET['pageno'])) {
	$pageno = $_GET['pageno'];
} else {
	$pageno = 1;
}
$no_of_records_per_page = 6;
$offset = ($pageno-1) * $no_of_records_per_page;

$total_pages_sql = "SELECT COUNT(*) FROM announcement";
$result = mysqli_query($mysqli,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
?>


<?php //include("navs.php"); ?>  
 <?php include("slider3.php"); ?>   
 <!--Navbar-->
 <main>
<div class="container mt-2 postbody">

<div class="row   bg-white">
<div class="col-lg-4" style="margin-top:27px;">

 <img src="<?php echo $set['installUrl']; ?>/img/home.jpg" class="img-fluid img-responsive">

</div>

<div class="col-lg-7 col-md-offset-2">
<p><h3 class="ink">Welcome to TOTALLIGHT COLLEGE</h3></P>
   <?php echo html_entity_decode($home['page_desc']);  ?> 
    

</div>

</div>

<section class="my-5" style="margin-top:15px; background:#f1f1f1;">
<?php

$sql="SELECT * FROM announcement order by id DESC LIMIT $offset, $no_of_records_per_page";
$result = mysqli_query($mysqli,$sql);
$count = mysqli_num_rows($result);
if($count < 1){
    echo '<li class="alert alert-danger">No update at the moment</li>';
}else{
?>

 <!-- Section heading -->
 <h2 class="h1-responsive font-weight-bold  my-5 ink">News and Updates</h2>

 <div class="row">
                <?php
               
                while ($row = mysqli_fetch_array($result)) {
            ?>
                   <!-- Card -->
<div class="card card-image cardme" 

style="
 background-image: url('<?php 
 if(!empty($row['img'])){
 echo $set['installUrl']."i_admin/user_images/".$row['img']; 
}else{
    echo $set['installUrl']."img/update.png"; 
}
 ?>');
    
"
>

<!-- Content -->
<div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
  <div>
    
    <h3 class="card-title pt-2"><strong><?php echo $row['msg_title']; ?></strong></h3>
    <p class="text-white show-read-more"><?php 
    
    echo $row['msg'];


 ?></p>
   
  </div>
</div>

</div>
<!-- Card -->

<?php } } ?>
<div class="col-lg-12">
    <ul class="pagination pg-blue">
        <li class="page-item"><a class="page-link" href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
	</div>
</div>                

</section>


<section>
<h2 class="h1-responsive font-weight-bold  my-5 ink">Gallery</h2>
<div class="gallery">
    <?php
   
    // Retrieve images from the database
    $query = $mysqli->query("SELECT * FROM slider ORDER BY id DESC");
    
    if($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $imageThumbURL = $set['installUrl']."/imaging/".$row['img'];
            $imageURL = $set['installUrl']."/imaging/".$row['img'];
    ?>
    
        <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["name"]; ?>" >
            <img src="<?php echo $imageThumbURL; ?>" alt=""  class="img-thumbnail img-responsive mdb-lightbox" />
        </a>
       
    <?php }
    } ?>
</div>


</section>    

</div>    
</main>

<div class="modal fade" id="inDetails" tabindex="-1" role="dialog" aria-labelledby="inDetailsLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content lg-modal modal-lg">
			<div class="modal-body">
            <div class="fetched-data alert alert-default"></div>
			</div>
			<div class="modal-footer">
           
                <!--<button type="button" class="btn btn-default print" onClick="window.print();return false">Print</button>-->
            </div>
		</div>
	</div>
</div>    



<?php include('footer.php'); ?>