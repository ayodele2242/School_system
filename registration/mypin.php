<?php 
include('header.php'); 

?>



<main>
<div class="container mt-6">
<div style="margin-bottom:10px; padding:12px;" class="hideme"><a href="<?php echo $set['installUrl']; ?>"> <i class="fa fa-long-arrow-left"></i> Back Home</a></div> 

<div class="mypin">
<div align="center" class="animated fadeIn moblogo">
    	<a href="javascript:void(0);"><img src="<?php echo $set['installUrl']; ?>logo/692386.jpg" width="100" height="100"></a>
	</div>
<div style="margin-bottom:10px;" class="mobile"><a href="<?php echo $set['installUrl']; ?>"> <i class="fa fa-long-arrow-left"></i> Back Home</a></div> 
<div id="geterror" class="col-lg-12 "></div>
<form id="pinForm" class="animated slideUp">
  <!-- Grid row -->
  <div class="row">
	 
    <!-- Grid column -->
    <div class="col-lg-12">
	  <!-- Default input -->
	  <div class="form-group">
      <input type="text" class="form-control input" id="pin" name="pin" placeholder="Enter scratch card pin">
	</div>
	</div>
    <!-- Grid column -->


    <!-- Grid column -->
    <div class="col-lg-12">
	<div class="form-group" align="center">
	<button type="submit" class="btn btn-primary btn-sm waves-effect" name="btn-pin" id="btn-pin">Continue</button>
	
</div>
<span id="err" class="err_info text-danger closeit"></span>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</form>



</div>


</div>    
</main>



<div class="mobile">
<?php include('footer.php'); ?>
</div>