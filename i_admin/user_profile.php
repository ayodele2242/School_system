<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php 
include('links.php'); 
if(isset($_GET['uid'])){
    $uid = $_GET['uid'];

    $get = mysqli_query($mysqli, "select * from alumni_users where user_id='$uid'");
    $detail = mysqli_fetch_array($get);
}

?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><span><i class="fa fa-user"></i> <?php echo $detail['last_name'] .' '. $detail['maiden_name'] .' '.$detail['first_name']; ?> Profile Details</span></h2>         
            </div>

<!-- Widgets -->
<div class="row clearfix">

<div class="profile">   

<form enctype="multipart/form-data" id="reset-form" style="padding: 40px;"> 
                           
                           <div class="form-group">
                              <div class=" alert alert-info" >Personal Details </div>
                            
                          </div>

            
             <div class="form-group" >
           <div class="row">
             <div class="col-lg-12 col-md-12">
           <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $detail['last_name'] .' '. $detail['maiden_name'] .' '.$detail['first_name']; ?>"   placeholder="Last Name" readonly>
              </div>

              <div class="col-lg-12 col-md-12">
              <input type="text" name="email" id="email" class="form-control" value="<?php echo $detail['email']; ?>"   placeholder="Email" readonly>
           
              </div>
            </div> 
             </div>

            <div class="form-group">
           <div class=" alert alert-info" >Contact Details </div>
            </div> 

            <div class="form-group" >
           <div class="row">
             <div class="col-lg-4">
           <input type="text" name="cphone" id="cphone" class="form-control" value="Cell Phone: <?php echo $detail['cell_phone']; ?>"   placeholder="Cell Phone" readonly>
              </div>
              <div class="col-lg-4">
           <input type="text" name="hphone" id="hphone" class="form-control" value="Home Phone: <?php echo $detail['home_phone']; ?>"   placeholder="Home Phone" readonly>
              </div>
              <div class="col-lg-4">
           <input type="text" name="work_phone" id="wphone" class="form-control" value="Work Phone: <?php echo $detail['work_phone']; ?>"   placeholder="Work Phone" readonly>
              </div>
            </div> 
             </div>  

             <div class="form-group" >
           <div class="row">
             <div class="col-lg-12">
           <input type="text" name="city" id="city" class="form-control" value="City: <?php echo $detail['city']; ?>"   placeholder="City" readonly>
              </div>
              <div class="col-lg-12">
           <input type="text" name="state" id="state" class="form-control" value="State: <?php echo $detail['state']; ?>"   placeholder="State" readonly>
              </div>
              <div class="col-lg-12">
           <textarea class="form-control" row="8" name="address" placeholder="Address" readonly>Address: <?php echo $detail['address']; ?></textarea> 
          </div>
            </div> 
             </div> 

             <div class="form-group">
           <div class=" alert alert-info" >Links </div>
            </div> 

           <div class="form-group" >
           <div class="row">
             <div class="col-lg-12">
           <input type="text" name="link1" id="link1" class="form-control" value="<?php echo $detail['link1']; ?>"   placeholder="Link 1" readonly>
              </div>
              <div class="col-lg-12">
              <input type="text" name="link2" id="link2" class="form-control" value="<?php echo $detail['link2']; ?>"   placeholder="Link 2" readonly >
              </div>
              <div class="col-lg-12">
              <input type="text" name="link3" id="link3" class="form-control" value="<?php echo $detail['link3']; ?>"   placeholder="Link 3" readonly>
              </div>
            </div> 
             </div>  


			  
          <div class="form-group" align="center">
          <div id="message"></div>
          <input type="hidden" name="id" value="<?php echo $detail['user_id']; ?>" >
          
          <!--<button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-plu"></span> &nbsp; Update</button>-->
                            
        </div>
                      </form>

</div>


</div>

    </section>

<?php include('footer.php'); ?>    

   