<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2><i class="fa fa-money"></i> Account</h2>
            </div>

            <div class="row clearfix">
            <div class="alert alert-default">
                        <a href="generate_receipt" class="btn btn-info pull-right">Make Payment</a>
                    </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table id="accountTable" class="table table_view" >
                <thead>
	            <tr>
				<th>#ID</th>
				<th>Receipt Code</th>
				<th>Name</th>
                <th>Student ID.</th>
                <th>Fee</th>
				 <th>Amount Paid</th>
                 <th>Amount Owing</th>
                 <th>In Words</th>
				 <th>Action</th>
				
				</tr>
				</thead>


                </table>
                </div>
            </div>


        </div>
    </section>

<?php include('footer.php'); ?>    

   