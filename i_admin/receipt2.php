<?php include('header.php');
if(isset($_GET['id'])){
$id = $_GET['id'];
$sel = mysqli_query($mysqli, "select * from account where accid = '$id'");
$row = mysqli_fetch_array($sel);
}
?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-money"></i> Print Receipt for <?php echo  ucwords($row['Student_Name']); ?> </h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12"  >


 <div class="receipt-main col-xs-10  col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 printable" style="background:#fff; padding:17px;" id="printableArea">
            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6  col-md-6">
						<div class="receipt-left">
                        <img class="img-responsive" src="<?php echo $set['installUrl']; ?>/logo/<?php echo $set['schoolLogo']; ?>" style="width:80px; height:80px;" />    
                        
                    </div>
					</div>
					<div class="col-xs-6  col-md-6 text-right">
						<div class="receipt-right">
							<h5><?php echo strtoupper($set['school_name']); ?></h5>
							<p><i class="fa fa-phone"></i> <?php echo $set['phone']; ?> </p>
							<p><i class="fa fa-envelope-o"></i> <?php echo $set['siteEmail']; ?> </p>
							<p><i class="fa fa-location-arrow"></i> <?php echo $set['address']; ?> </p>
						</div>
					</div>
				</div>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8  col-md-8 text-left">
						<div class="receipt-right">
							<h5><?php echo  ucwords($row['Student_Name']); ?></h5>
														
						</div>
					</div>
					<div class="col-xs-4  col-md-4">
						<div class="receipt-left">
							<h3>Receipt</h3>
						</div>
					</div>
				</div>
            </div>
			
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><?php echo  ucwords($row['Paid_for']); ?> Amount</td>
                            <td class="col-md-3"><font style="text-decoration:line-through">N</font><?php echo parseCurrency($row['School_fee']); ?>:00</td>
                        </tr>
                        
                        <tr>
                            <td class="text-right">
                           
							<p>
                                <strong>Amount Paid: </strong>
                            </p>
							<p>
                                <strong>Balance Due: </strong>
                            </p>
							</td>
                            <td>
                            
                           <p>
                                <strong><font style="text-decoration:line-through">N</font><?php echo parseCurrency($row['Amount_paid']); ?>:00</strong>
                            </p>
							<p>
                                <strong><font style="text-decoration:line-through">N</font><?php echo parseCurrency($row['Amount_Owning']); ?>:00</strong>
                            </p>
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><font style="text-decoration:line-through">N</font><?php echo parseCurrency($row['Amount_paid']); ?>:00</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-lg-8  col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Payment Date :</b> <?php  if(!empty($row['date']) && !empty($row['update_on'])){ echo $row['update_on']; }else{ echo $row['date']; }; ?></p>
							<p><b>Amount in word:</b> <?php 
                            if($row['Amount_Owning'] == 0){
                                echo ucwords(convert_number_to_words($row['Amount_paid'])) . ' Naira'; 
                            }else{
                            echo  ucwords($row['sum_of']) . ' Naira'; 
                            }
                            ?></p>
						</div>
					</div>
					<div class="col-lg-4  col-md-4">
						<div class="receipt-left">
							<h1>Signature</h1>
						</div>
					</div>
					         

				</div>
				
            </div>
			
        </div>    
		
		<div class="clearfix col-lg-12  col-md-12" align="center" style="margin-top:25px;">
        <a href="javascript:void(0);" onclick="PrintElem('#printableArea')" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a> 
                    </div> 













                </div>



            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   