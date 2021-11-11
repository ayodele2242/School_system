<?php include('header.php'); ?>


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

<span class="pull-right"><a href="forum" class="btn btn-sm btn-info">Start a Discussion</a></span>
</div>


<div class="alert col-lg-12" style="padding:5px;">
<div class="stas screen2">
<?php
//DO NOT limit this query with LIMIT keyword, or...things will break!
$querys = "SELECT * FROM mp_pages where status='publish' order by page_id desc";

$getifs = mysqli_query ($mysqli, $querys);

if(mysqli_num_rows($getifs) < 1){
    echo '<div class="col-lg-12 alert-danger" style="text-align:center; padding: 7px; font-weight:bolder;">You are yet to create a page.</div>';
}else{

//these variables are passed via URL
$limits = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 15; //jobs per page
$pages = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
$links2 = 10;

$paginators = new Paginator($mysqli, $querys ); //__constructor is called



    $results2 = $paginators->getData( $limits, $pages );
     
for ($ps = 0; $ps < count($results2->data); $ps++):
//store in $get variable for easier reading
        $get = $results2->data[$ps]; 
        if($get['posted_by'] != ''){
            $by = "Posted By: ".$get['posted_by'];
        }else{
           $by = "Posted By: Adminstrator"; 
        }

        if($get['class'] != ''){
            $classof = "Class of: ".$get['class'];
        }else{
            $classof = ""; 
        }
       
        ?>
    <div class="row clearfix " style="background:#fff; padding:5px; margin-bottom:15px;">    
    
   <div class="col-lg-9 alert bg-aqua"><strong style="font-size:18px;"><?php echo $get['page_title'];  ?>   </strong> (<?php echo get_timeago($get['ptime']); ?>)  -  
   <?php echo  $by .', '. $classof;  ?></div>
  
     
   <div class="col-lg-12 alert alert-default text height textbody" id="textbody" >

   <?php echo html_entity_decode(strlimit($get['page_desc']));  ?><a href="readme?id=<?php echo $get['page_id']; ?>" class="forgot-password"> Read More...</a> 
    
   </div>  


   </div>
       
<?php
 endfor;

//} 
echo $paginators->createLinks( $links2, 'pagination pagination-sm' );
}
?>


</div>

</div>
</div>


<?php include('footer.php'); ?>   