<?php include('header.php'); 
$query = mysqli_query($mysqli, "SELECT MAX(accid) FROM account");
$results = mysqli_fetch_array($query);
$cur_auto_id = $results['MAX(accid)'] + 1;
//Generate number
$string = $_SESSION['sch_name'];
$expr = '/(?<=\s|^)[a-z]/i';
preg_match_all($expr, $string, $matches);
$result = implode('', $matches[0]);
//second number
$string2 = 'Payment Receipt';
$expr2 = '/(?<=\s|^)[a-z]/i';
preg_match_all($expr2, $string2, $matches2);
$result2 = implode('', $matches2[0]);

$rno =$result.$result2.$cur_auto_id;

$date = date("d/M/Y");
$num = rand(1111, 0000); 


?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   <?php  if(!isset($_GET['id'])){ ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-money"></i> Make Payment</h2>
            </div>

            <div class="row clearfix">
            <div id="message"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

                	<form method="post" id="addAccount">
										<div class="form-group">
                                          <div class="controls">
                                            <input class="form-control" name="Receipt_Code" id="focusedInput" type="text" placeholder = "Receipt Code" value="<?php echo $rno.$num  ?>" readonly>
                                          </div>
                                        </div>
										
										<div class="form-group">
                                          <div class="controls">
                                            <input class="form-control" name="date" id="focusedInput" type="text" value="<?php echo $date  ?>"  readonly>
                                          </div>
                                        </div>

                                         <div class="form-group">
                                          <div class="controls">
                                          <?php
                                          $ccsql="SELECT id, fee_name, class FROM fees_payment";
                                          $ccsql_run = mysqli_query($mysqli, $ccsql);
                                          $count = mysqli_num_rows($ccsql_run);
                                          
                                          ?>
                                          <select name="Paid_for" id="paid_for" class="form-control input-data">

                                        <?php
                                        if($count < 1){
                                          echo '<option>Please go and add fee categories</option>';
                                        }else{
                                          echo '<option>Paying for</option>';
                                          while($row = mysqli_fetch_array($ccsql_run)){
                                            echo '<option value="'.$row['fee_name'].'">'.$row['fee_name'].'  -  '.$row['class'].'</oprion>';
                                          }
                                        }
                                        ?>

                                        </select>
                                  </div>
                                        </div>
										
											<div class="form-group">
                                          <div class="controls">
                                            <input class="form-control amount myamt" name="School_fee" id="myNumber" type="text" 
                                            placeholder = "Fee Amount i.e. Overall amount of the fee(School fee, hostel etc)" required readonly
                                             style="background:#fff; font-weight:bolder;">
                                          </div>
                                        </div>
										
										<div class="form-group">
                                          <div class="controls">
                                            <input class="form-control Student_reg_code regno" name="Student_reg_code" id="Student_reg_code" type="text" placeholder = "Student Roll/Admission Number" required>
                                         
                                          </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                          <div class="controls col-lg-4">
                                            <input class="form-control lname" name="lname" id="lname" type="text" placeholder = "Last Name" required readonly style="background:#fff;">
                                          </div>
                                          <div class="controls col-lg-4">
                                            <input class="form-control mname" name="mname" id="mname" type="text" placeholder = "Middle Name" required readonly style="background:#fff;">
                                          </div>
                                          <div class="controls col-lg-4">
                                            <input class="form-control fname" name="fname" id="fname" type="text" placeholder = "First Name" required readonly style="background:#fff;">
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <div class="controls">
                                            <input class="form-control" name="Amount_paid" id="focusedInput" type="text" placeholder = "Amount Paying" required>
                                          </div>
                                        </div>
                                        
                                                                                
                                       
                                        
                                         <div class="form-group">
                                          <div class="controls">
                                           <input type="hidden" name="Amount_Owning" />
                                          </div>
                                        </div>
										
											<div class="form-group">
                                          <div align="center">
												<button name="save" class="btn btn-info btn-md" id="btn-submit" data-placement="right" title="Click to Save"><i class="fa fa-check"></i> Pay</button>
                                               
                                          </div>
                                        </div>
                                </form>


                
</div>
                </div>
            </div>


        </div>
    </section>
   <?php }else if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sel = mysqli_query($mysqli, "select * from account where accid = '$id'");
    $uit = mysqli_fetch_array($sel);

   
   ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-money"></i> Update <?php echo $uit['Student_Name']; ?> Payment Details</h2>
            </div>

            <div class="row clearfix">
            <div id="message"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="rid">

                	<form method="post" id="updateAccount" class="">
										<div class="form-group">
                                        <label>Receipt Number</label>
                                          <div class="controls">
                                            <input class="form-control" name="Receipt_Code" id="focusedInput" type="text" placeholder = "Receipt Code" value="<?php echo $uit['Receipt_Code']; ?>" readonly>
                                          </div>
                                        </div>
																				
											<div class="form-group">
                                            <label>Total Amount</label>
                                          <div class="controls">
                                            <input class="form-control" name="School_fee" value="<?php echo $uit['School_fee']; ?>" id="focusedInput" type="text" placeholder = "Enter Fee Amount i.e. Overall amount of the fee(School fee, hostel etc)" readonly>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Amount Already Paid</label>
                                          <div class="controls">
                                            <input class="form-control" name="l_fee" value="<?php echo $uit['Amount_paid']; ?>" id="focusedInput" type="text" placeholder = "Enter Fee Amount i.e. Overall amount of the fee(School fee, hostel etc)" readonly>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Amount To Balance</label>
                                          <div class="controls">
                                            <input class="form-control" name="l_fee" value="<?php echo $uit['Amount_Owning']; ?>" id="focusedInput" type="text" placeholder = "Enter Fee Amount i.e. Overall amount of the fee(School fee, hostel etc)" readonly>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                        <label>Balancing for</label>
                                          <div class="controls">
                                            <input class="form-control" name="Paid_for" value="<?php echo $uit['Paid_for']; ?>" id="focusedInput" type="text" placeholder = "Paying For(e.g school fee, lesson etc.)" readonly>
                                          </div>
                                        </div>
										
                                       
                                        
                                        <div class="form-group">
                                        <label>Amount Paying</label>
                                          <div class="controls">
                                            <input class="form-control mnumber" name="Amount_paid" id="focusedInput" type="text" placeholder = "Amount Paying" required>
                                          </div>
                                        </div>
                                        
                                                                                
                                        
                                        
                                         <div class="form-group">
                                          <div class="controls">
                                           <input type="hidden" name="uid" value="<?php echo $uit['accid']; ?>" />
                                           <input class="form-control" name="Student_Name" value="<?php echo $uit['Student_Name']; ?>"  id="focusedInput" type="hidden" placeholder = "Student Name">
                                           <input class="form-control" name="Student_reg_code" value="<?php echo $uit['Student_reg_code']; ?>" id="focusedInput" type="hidden" placeholder = "Student Roll/Admission Number">
                                         
                                          </div>
                                        </div>
										
											<div class="form-group">
                                          <div align="center">
												<button name="save" class="btn btn-info btn-md" id="btn-submit" data-placement="right" title="Click to Save"><i class="fa fa-check"></i> Pay</button>
                                               
                                          </div>
                                        </div>
                                </form>


                
</div>
                </div>
            </div>


        </div>
    </section>
   <?php } ?>

<?php include('footer.php'); ?>    

   