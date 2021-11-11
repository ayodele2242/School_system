<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>

<?php
$id = $_GET['id'];

$m = mysqli_query($mysqli, "select * from links where id = '$id'");
$f = mysqli_fetch_array($m);

?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-link"></i> <?php echo $f['name'];  ?></h2> <span class="pull-right alert"><a href="external_links"><i class="fa fa-long-arrow-left"></i> Back </a></span>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

<div class="profile">   
<form enctype="multipart/form-data" id="editlinks">
 
                            <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="<?php echo $f['name']; ?>" placeholder="Title" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  

                             <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="url" id="url" class="form-control" value="<?php echo $f['url']; ?>" placeholder="Url" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  
                                                     
                                 <div class="form-group form-float">
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control"><?php echo $f['description']; ?></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                            <input type="hidden" name="id" value="<?php echo $f['id']; ?>"/>
                                    
                                
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa"></span> &nbsp; Update</button>
                            </div>

</form>





</div>
                
                </div>
                </div>
            </div>


        </div>
    </section>


   



<script src="../afiles/js/pages/forms/editors.js"></script>

<?php include('footer.php'); ?>    

   