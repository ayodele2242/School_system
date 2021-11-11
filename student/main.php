<?php include("header.php"); ?>
<?php include("top-bar.php"); ?>
<?php //include("links.php"); 
	
?>

<section class="" style="margin-top:5%; padding:20px;">
        <div class="container-fluid">
             <div class="block-header">
                <h2><i class="material-icons">person</i> Hello <?php echo $fullname; ?></h2>
                </div>
               <?php if ($msgBox) { echo $msgBox; } ?>
            <div class="row">

			<div class="col-lg-6 bg-white" style="overflow:hidden;">
			<h4 class="text text-info">All Payments History</h4>
            <table id="accountTable" class="table table_view" >
                <thead>
	            <tr>
				<th>#ID</th>
                <th>Description</td>
				<th>Receipt Code</th>
                <th>Fee</th>
				 <th>Amount Paid</th>
                 <th>Amount Owing</th>
                 <th>Amount Paid In Words</th>
				 <!--<th>Action</th>-->
				
				</tr>
				</thead>
                <tbody>
<?php
$x = 1;
$count = mysqli_num_rows($acct);
if($count < 1){
    echo '<tr>
    <td colspan="8"><span  class="text-danger">You don\'t have payment history at the moment</span></td>
    </tr>';
}else{
while ($row = mysqli_fetch_array($acct)) {
 
	$School_fee = $row['School_fee'];
	$Amount_paid = $row['Amount_paid'];
	$owning =  $row['Amount_Owning'];
	$owning2 =  $row['Amount_Owning'];
	$accid = $row['accid'];
	if($owning == 0){
	$get =  '<span class="text-success">Fully Paid <i class="fa fa-check"></i></span>';
	}else{
	$get = $owning;
	}

	$sf = $row['sum_of'] . '  naira';
	
	
		$act ='
	<a class="text-info" href="receipt2?token='.randnumber().'&id='.$accid.'" target="_blank"  title="Print"><span class="glyphicon glyphicon-print"></span></a>
	';
   

	
	?>
		<tr>
        <td><?php echo $x; ?></td>
        <td><?php echo $row['Paid_for'];?></td>
		<td><?php echo $row['Receipt_Code'];?></td>
		<td><?php echo $School_fee; ?></td>
		<td><?php echo $Amount_paid; ?></td>
		<td><?php echo $get; ?></td>
		<td><?php echo $sf; ?></td>
		<!--<td><?php //echo $act; ?></td>-->

        </tr>
		
<?php

	$x++;
}
}

?>

</tbody>
</table>
			
			</div>

<div class="col-lg-6">
<?php
include("result_menu.php");
?>

</div>
            
            <div class="col-lg-12 padding">
            
          
           
            </div><!--//Col-lg-12 ends-->
            


            </div>
            </div>
    </section>
    
  
    
<?php include("footer.php"); ?>