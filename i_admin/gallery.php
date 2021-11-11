<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Slider Images uploader</h2>
            </div>

 <!-- Basic -->
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="alert alert-warning">To delete an image click on it.</div>
                    <div class="card">

                         <div class="body">
                         <form  enctype="multipart/form-data" id="sliderForms">
                        
                            <div class="form-group">
                            <label for="exampleInputPassword1">Image To Upload (Image width and height for slider should be 2040x500)</label>		    
                            <div id="kv-avatar-errors-2" class="center-block" style="width:800px;display:none"></div>

                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" id="name" >
                                        <label class="form-label">Image Title</label>
                                    </div>
                                </div>
                                
                                
                        <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" id="ckeditor"  cols="30" rows="5" class="form-control no-resize">
                                            
                                            Enter Description
                                        </textarea>
                                        
                                    </div>
                                </div>     

                          
                                <div class="form-group" align="center">
                                <div id="message"></div>
                                   
                                <button type="input" name="submit"  class="btn btn-success btn-md btn-icon  waves-effect" id="btn-submit" ><i class="fa fa-check-square-o"></i> Upload</button>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
                
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="tz-gallerys stasy">

        <div class="row">
            <?php
            
            $sele = mysqli_query($mysqli, "select * from slider order by id desc");
            $count = mysqli_num_rows($sele);
            if($count < 1){
                echo '<div class="alert alert-warning">You are yet to uploade slider image for the home page</div>';
            }else{
                while($ro = mysqli_fetch_array($sele)){
            
            
            ?>
            <a type="button" data-toggle="modal" data-target="#cdModal" class="text text-danger" style="font-size:14px; margin:10px; cursor:pointer;"
      onclick="removeContent(<?php echo $ro['id']; ?>)"> 
                <div class="col-lg-4 col-md-4 col-sm-4" style="margin-bottom:8px;">
                <img src="../imaging/<?php echo $ro['img']; ?>" alt="<?php echo $ro['name']; ?>" class="img-responsive" style="width:100%; height:150px; ">
               
            </div>
            </a>    
                <?php } } ?>
                     
                </div> 
                 </div> 
                  </div> 
                
            </div>
            <!-- #END# Basic -->
      </div>
    </section>
     <script src="js/sliderUploader.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>




<!-- remove modal -->
<div class="modal fade removem" tabindex="-1" role="dialog" id="cdModal" aria-labelledby="cdModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Image</h4>
	      </div>
	      <div class="modal-body">
          <div class="removeMessages"></div>
	        <p>Do you really want to delete it?</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-danger" id="removeBtn"><span class="glyphicon glyphicon-trash"></span> Delete</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /remove modal -->
	
<?php include('footer.php'); ?>    

   