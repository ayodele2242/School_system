<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>

<?php
$id = $_GET['id'];

$m = mysqli_query($mysqli, "select * from events where id = '$id'");
$f = mysqli_fetch_array($m);

?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-calendar"></i> <?php echo $f['page_title'];  ?></h2> <span class="pull-right alert"><a href="event"><i class="fa fa-long-arrow-left"></i> Back to event page</a></span>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

<div class="profile">   

<form enctype="multipart/form-data" id="editevents">
 
                            <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="<?php echo $f['page_title'];  ?>" placeholder="Event Title" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  
                                                     
                                <div class="form-group form-float">
                                <div class="form-line">
                                <input type="text" value="<?php echo $f['event_date'];  ?>" class="form-control date3" name="event_date" id="event_date" placeholder="Event Date" >
                                 </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select name = "status" class="form-control">
                            <option value="publish" <?php echo ($f["status"] == 'publish') ? 'selected="selected"' : ''; ?>  >
                            <?php if($f["status"] == 'publish'){ echo 'Published';}else{ echo 'Publish'; }?> 
                                        </option>  
                            <option value="pending" <?php echo ($f["status"] == 'pending') ? 'selected="selected"' : ''; ?>  >
                            <?php if($f["status"] == 'pending'){ echo 'Pending Review';}else{ echo 'Pend Review'; }?> 
                           
                                        </option>                      


                            </select>  
                                    </div>
                                   
                                </div>

                                 <div class="form-group form-float">
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control" required><?php echo $f['details'];  ?></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                            <input type="hidden" name="id" value="<?php echo $f['id']; ?>"/>  
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-update"></span> &nbsp; Update</button>
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

   