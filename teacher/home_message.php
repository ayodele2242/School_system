<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); 

$msg = mysqli_query($mysqli, "SELECT * FROM `alumni_home_message`");
$ms = mysqli_fetch_array($msg);

?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-file"></i> Welcome Message</h2>  
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">


<form enctype="multipart/form-data" id="homemessage">
 
                            <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="<?php echo $ms['title']; ?>" placeholder="Homepage text" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  
                                                     
                               
                                 <div class="form-group form-float">
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control" required><?php echo $ms['descr']; ?></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                                
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-save"></span> &nbsp; Save</button>
                            </div>


</div>
                
                </div>
                </div>
            </div>


        </div>
    </section>



<script src="../afiles/js/pages/forms/editors.js"></script>

<?php include('footer.php'); ?>    

   