<?php include('header.php'); ?>


<div class="container">

<div class="alert col-lg-12" style="font-size:16px;">

<?php
// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo 'Good Morning: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo 'Good Afternoon: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo 'Good Evening: <span class="maroon" style="font-weight:bolder;"><i class="fa fa-user"></i> ' .$userFullName;
}
?>

<span class="pull-right"><a href="forum" class="btn btn-sm btn-info">Start a Discussion</a> <a href="forum_list" class="btn btn-sm btn-warning">Trending</a></span>
</div>


<div class="alert col-lg-12" style="padding:5px;">
<div class="col-lg-12">


</div>

<div class="col-lg-12" id="error"></div>

<div class="row">


<div class="alert col-lg-12 " >

 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA">Create New Post</a></li>
<li><a data-toggle="tab" href="#sectionC">Posts List</a></li>
</ul>

<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active"><!--Profile-->
<form enctype="multipart/form-data" id="page" `>
<div class="row clearfix">
<div id="message" class="alert"></div>   

<div class="col-lg-9">

                                    <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="" placeholder="Title" autocomplete="off"  onkeyup="changeAlias();" required />
                                     
                                    </div>
                                     </div>  
                             
                                <div class="form-group">
                                 <div class="form-line">
                                <label for="post_tags">Post Categories</label>
                             <select name="category" class="form-control">
                                <?php
                                    $query = $db_con->query("SELECT * FROM alumni_categories");
                                    $count = mysqli_num_rows($query);
                                    if($count < 1){
                                        echo '<option value="Uncategorized">Uncategorized</option>';
                                    }else{
                                    while($row = $query->fetchObject()) {
                                        echo "<option value='".$row->category_id."'>".$row->category."</option>";
                                    }
                                }
                                ?>
                            </select>



                                     <select name="parent" class="form-control" id="parent" style="display:none;">
                                    <option value="-1">No Parent</option>
                                    <?php
                                    $sql = mysqli_query($mysqli,"SELECT * FROM mp_pages WHERE status = 'active' AND parent = -1 ORDER BY page_title ASC");
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
                                    <textarea name="jobdes" required  rows="15" placeholder="Job description"  id="ckeditor" class="form-control ckeditor" ></textarea>
                                  
                                    </div>
                             
                                </div> 
                                
                               

                            </div><!--#END col-lg-7-->
                            <div class="col-lg-3"><!--col-lg-3-->
                            
                             <div class="form-group">
                              <div class="form-line">
                              <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="" placeholder="Meta Keywords" autocomplete="off"   />
                              <input type="hidden"  name="page_alias" id="page_alias" class="form-control" value="" placeholder=""  readonly/>
                               
                             </div>
                             </div> 

                              <div class="form-group">
                              <div class="form-line">
                              <input type="text" name="meta_desc" id="meta_desc" class="form-control" value="" placeholder="Meta Description" autocomplete="off"   />
                                
                             </div>
                             </div>

                              <div class="form-group">
                              <label>Publish Status</label>
                              <div class="form-line" >
                             <select name="status" class="form-control" required>
                            <option value="">Status</option>
                            <option value="publish">Publish</option>
                            <option value="draft">Draft</option>
                            <option value="pending">Pend Review</option>
                            </select>
                             </div>
                             </div>
                            <div class="row alert-default">
                            <!--<div class="form-group" >   
                            <div class="col-lg-12" style="overflow:hidden; white-space:nowrap;">

                           
                            </div>
                            </div> -->
                           

                            </div>

                            <div class="form-group">
                            <label for="post_tags">Tags</label>
                            <input id="tags" type="text" class="form-control" name="tags">
                           
                            </div>

                             <div class="form-group">
                             <label>Featured Image/Video/Audio</label>
                              <div class="form-line">
                              <div id="kv-avatar-errors-2" class="center-block" style="width:200px;display:none"></div>
                            <div class="kv-avatar center-block" style="width:200px">
                                <input id="avatar-2" name="userImage" type="file" class="file-loading">
                            </div>
                        
                             </div>
                             </div> 



                            </div><!--#END col-lg-4-->

                            
                                <div class="form-group" align="center">
                                <input  type="hidden" class="form-control" name="by" value="<?php echo $email; ?>">                           
                                <button type="submit" class="btn btn-primary btn-md" id="btn-submit"><span class="fa fa-plus"></span> &nbsp; Create</button>
                            
                            </div>                     

</div><!--#END row-->
</form>
</div><!--Profile-->
<div id="sectionC" class="tab-pane fade" ><!--Password update-->
<div class="removeMessages"></div>
<div class="stas screen2">
<?php
//DO NOT limit this query with LIMIT keyword, or...things will break!
$querys = "SELECT * FROM mp_pages where posted_by = '$email' order by page_id desc";

$getifs = mysqli_query ($mysqli, $querys);

if(mysqli_num_rows($getifs) < 1){
    echo '<div class="col-lg-12 alert-danger" style="text-align:center; padding: 7px; font-weight:bolder;">You are yet to start a discussion.</div>';
}else{

//these variables are passed via URL
$limits = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 15; //jobs per page
$pages = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
$links2 = 10;

$paginators = new Paginator($mysqli, $querys ); //__constructor is called



    $results2 = $paginators->getData( $limits, $pages );
     
for ($ps = 0; $ps < count($results2->data); $ps++):
//store in $get variable for easier reading
        $get = $results2->data[$ps]; 
        if($get['status']=='draft' || $get['status']=='')
	 {
	 $sta = "Drafted";
	}elseif($get['status']=='publish')
	 {
	$sta  = "Published";
	 }
	elseif($get['status']=='pending')
	 {
	$sta  = "Pending";

	 }
        ?>
    <div class="row clearfix " style="background:#fff; padding:5px; margin-bottom:10px;">    
    
   <div class="col-lg-6 alert bg-purple"><strong><?php echo $get['page_title'];  ?>   </strong> (<?php echo get_timeago($get['ptime']); ?>) - <a href="readme?id=<?php echo $get['page_id']; ?>" class="white bg-navy" style="padding:6px;"> Read More...</a></div>
   <div class="col-lg-2 alert alert-default "><?php echo $sta; ?></div>
   <div class="col-lg-4 alert">
   <span class="pull-right">

   
     <a type="button" data-toggle="modal" data-target="#cdModal" class="text text-danger" style="font-size:14px; margin:10px; cursor:pointer;"
      onclick="removeContent(<?php echo $get['page_id']; ?>)"> <i class="fa fa-trash"></i> Delete</a>	    
	
     </span>
    
    <span class="pull-right">
    <a type="button" data-toggle="modal" id="page_id" data-target="#cModal" class="text-info" style="font-size:14px; margin:10px;"  data-id="<?php echo $get['page_id']; ?>"> <span class="fa fa-eye"></span> View</a>	    
	    
    <a href="edit_page?page_id=<?php echo $get['page_id']; ?>" title="Edit Content" class="text-warning" style="font-size:14px; margin:10px;" ><i class="fa fa-edit"></i> Edit</a></span>
    
   </div>
   
   
   <div class="col-lg-12 alert alert-default text height textbody" id="textbody">

   <?php echo html_entity_decode($get['page_desc']);  ?> 
    
   </div>  


   </div>
       
<?php
 endfor;

//} 
echo $paginators->createLinks( $links2, 'pagination pagination-sm' );
}
?>


</div>
</div><!--Password update end-->

</div>

</div>
                
                </div>
                </div>
            </div>





</div><!--#END Col-lg-8-->



</div>


</div>


</div><!--container end--> 
<div class="modal fade" id="cModal" tabindex="-1" role="dialog" aria-labelledby="cModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content lg-modal modal-lg">
			<div class="modal-body">
            <div class="fetched-data alert alert-default"></div>
			</div>
			<div class="modal-footer">
           
                <!--<button type="button" class="btn btn-default print" onClick="window.print();return false">Print</button>-->
            </div>
		</div>
	</div>
</div>    

<!-- remove modal -->
<div class="modal fade removem" tabindex="-1" role="dialog" id="cdModal" aria-labelledby="cdModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Content</h4>
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


<script src="../afiles/js/pages/forms/editors.js"></script>


<?php include('footer.php'); ?>    