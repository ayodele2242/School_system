<?php include('header.php'); ?>

<?php include('top.php'); ?>
<?php include('links.php'); ?>
<script>

</script>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2> <span class="fa fa-credit-card"></span> Scratch Cards Generator</h2>
            </div>

            <div class="row clearfix">
           
           	<div class=" col-lg-12"  style="margin-bottom:14px;">
               <button id="updatebutton" class="btn btn-sm btn-info" onclick="update_btn_click('params');"><span class="fa fa-refresh">&nbsp;Generate Cards</span></button>
               <span id="message" class="removeMessages"></span>&nbsp;|&nbsp;
                                <span class="fa fa-print"></span> <a href="pins?/<?php //echo randnumber();  ?>" target="_blank">&nbsp;Print Scratch Cards</a>
                               
							 </div>
                                  
<div class="col-lg-12 table-responsive">

              <table id="cardTable" class="table table_view">
              <thead class="heading">
                <tr>
                  <th>#No</th>
                  <th>Pins</th>
                  <th>Serials</th>
                  </tr>
              </thead>
              
            </table>

</div>


            </div>


        </div>
    </section>


  
    
<?php include('footer.php'); ?>    

   