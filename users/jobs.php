<?php include('header.php'); ?>
<?php if ($msgBox) { echo $msgBox; } ?>

<div class="container">

<div class="alert col-lg-12" style="font-size:16px;">

<?php
// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo 'Good Morning: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo 'Good Afternoon: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo 'Good Evening: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
}
?>
</div>

<div class="alert col-lg-12" style="padding:5px;">
<div class="row">

<div class="alert col-lg-4 bg-white" style="margin-left:4px;">
<div class="header">Personal Info...</div>
<div class"break"><i class="fa fa-envelope-open-o"></i> <?php echo $email; ?></div>
<div class"break"><i class="fa  fa-phone"></i> <?php if(empty($detail['phone'])){echo '<span class="osun">Contact number not available</span>';}else{ echo $detail['phone'];}  ?></div>
<div class"break"><i class="fa  fa-address-card"></i> <?php if(empty($caddy)){ echo '<span class="osun">Company address not available</span>';}else{ echo $caddy;}  ?></div>
</div>

<div class="alert col-lg-6 table-responsive col-md-offset-1  bg-white" >




</div>



</div>


</div>


</div><!--container end--> 
 


<?php include('footer.php'); ?>    