<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
<?php

$id = $_GET['page_id'];

$m = mysqli_query($mysqli, "select * from mp_pages where page_id = '$id'");
$f = mysqli_fetch_array($m);


// upload directories
$upload_dir = '../user_images/'; 
    $video = '../videos/';
    $audio = '../audios/';

$valid_extensions = array('jpeg', 'jpg', 'png'); // image extensions

$aud_extensions = array('mp3'); // audio extensions
$type = $f['img_type'];

?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-edit"></i> Edit <?php echo $f['page_title']; ?></h2>
            </div>

            <div class="row clearfix">
            <div id="message"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                <div class="cards ">



<form enctype="multipart/form-data" id="pagedit" class="editform ">
<div class="row clearfix ">

<div class="col-lg-9">
<div class="form-group" >
                  <label>Select Post Link</label>  
                <select name="plink" class="form-control">
                        <?php 
                        echo menu_list();//  functions.php 
                        ?>
                        </select>
                </div>
                                    <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="<?php echo $f['page_title']; ?>" placeholder="Title" autocomplete="off"  onkeyup="changeAlias();"  required/>
                                     
                                    </div>
                                     </div>  
                             
                                <div class="form-group">
                                <label>Parent</label>
                                     <div class="form-line">
                                     <select name="parent" class="form-control" id="parent">
                                    <option value="-1">No Parent</option>
                                    <?php
                                   $sql = mysqli_query($mysqli,"SELECT * FROM mp_pages WHERE status = 'active' ORDER BY page_title ASC");
                                   $optionsRs = mysqli_fetch_array($sql);
                                                           
                                    foreach ($optionsRs as $rs) {
                                        ?>
                                        <option value="<?php echo stripslashes($rs["page_id"]); ?>" <?php echo ($details[0]["parent"] == $rs["page_id"]) ? 'selected="selected"' : ''; ?>  >
                                            <?php echo stripslashes($rs["page_title"]); ?>
                                        </option>
                                        <?php
                                    }
                                    ?>
                                     </select>

                                     </div>
                                     </div>

                                
                                 <div class="form-group form-float">
                                
                                    <div class="form-line">
                                    <textarea name="jobdes"  placeholder="Job description"  id="ckeditor" class="form-control ckeditor" ><?php echo $f['page_desc']; ?></textarea>
                                  
                                    </div>
                             
                                </div> 
                                
                               

                            </div><!--#END col-lg-7-->
                            <div class="col-lg-3"><!--col-lg-3-->
                            <div class="form-group">
                            <div class="form-line">
                            <input type="text" name="page_alias" id="page_alias" class="form-control" value="<?php echo $f['page_alias']; ?>" placeholder=""  readonly/>
                             </div>
                             </div>  

                             
                             <div class="form-group">
                              <div class="form-line">
                              <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="<?php echo $f['meta_keywords']; ?>" placeholder="Meta Keywords" autocomplete="off"   />
                                   
                             </div>
                             </div> 

                              <div class="form-group">
                              <div class="form-line">
                              <input type="text" name="meta_desc" id="meta_desc" class="form-control" value="<?php echo $f['meta_desc']; ?>" placeholder="Meta Description" autocomplete="off"   />
                                
                             </div>
                             </div>

                              <div class="form-group">
                              <label>Publish Status</label>
                              <div class="form-line" >
                            <select name = "status" class="form-control">
                            <option value="draft" <?php echo ($f["status"] == 'draft') ? 'selected="selected"' : ''; ?>  >
                            <?php if($f["status"] == 'draft'){ echo 'Drafted';}else{ echo 'Draft'; }?>
                                        </option>
                            <option value="publish" <?php echo ($f["status"] == 'publish') ? 'selected="selected"' : ''; ?>  >
                            <?php if($f["status"] == 'publish'){ echo 'Published';}else{ echo 'Publish'; }?> 
                                        </option>  
                            <option value="pending" <?php echo ($f["status"] == 'pending') ? 'selected="selected"' : ''; ?>  >
                            <?php if($f["status"] == 'pending'){ echo 'Pending Review';}else{ echo 'Pend Review'; }?> 
                           
                                        </option>                      


                            </select>
                             </div>
                             </div>

                            <div class="form-group">
                             <label for="post_tags">Post Categories</label>
                            <input id="category" type="text" class="form-control" name="category" value="<?php echo $f['post_category']; ?>">
                            </div>

                            <div class="form-group">
                             <label for="post_tags">Post Tags</label>
                            <input id="post_tags" type="text" class="form-control" name="post_tags" value="<?php echo $f['post_tags']; ?>">
                            </div>

                             <div class="form-group">
                             <label>Featured Image/Video/Audio</label>
                             <div class="center-block" style="width:200px">
                             <div class="stasy">
                             <?php
                              if($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'){
                                echo '<img src="user_images/'.$f['img'].'" width="200" height="150" >';
                            }else if($type == 'video/mp4' || $type == 'video/avi' || $type == 'video/wav' || $type == 'video/3gp' || $type == 'video/AAC'
                            || $type == 'video/flv' || $type == 'video/wmv'){
                                echo '<video width="200" height="150" controls="">
                                <source src="videos/'.$f['img'].'" type="'.$type.'">
                                Your browser does not support the video tag.
                                </video>
                                ';
                            }elseif($type == 'audio/mp3'){
                             echo '<audio id="audio" autoplay controls src="audios/'.$f['img'].'" type="'.$type.'"></audio>';
                            }
                            
                             ?>
                             </div>
                             </div>

                             
                             </div> 



                            </div><!--#END col-lg-4-->

                           
                                <div class="form-group" align="center">
                                <input type="hidden" class="form-control" name="pid" value="<?php echo $f['page_id']; ?>">
                                                           
                                <button type="submit" class="btn btn-primary btn-md" id="btn-submit">Update</button>
                            </div>                     

</div><!--#END row-->
</form>


                
                </div>
                </div>
            </div>


        </div>
    </section>

 

<script src="../afiles/js/pages/forms/editors.js"></script>

<?php include('footer.php'); ?>    

   