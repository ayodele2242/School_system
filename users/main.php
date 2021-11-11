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

    <p class="osun header alert-warning">Click on <img src="photo.png" alt="Smiley face" width="42" height="42" align="middle"> on the image below to see menu for updating your profile image.</p>
   
</div>

<div class="col-lg-12" id="error"></div>

<div class="row">

<div class="alert col-lg-3 bg-white">
<!--File update-->
<div id="body-overlay"><div><img src="loading.gif" width="64px" height="64px"/></div></div>
		<div class="bgColor">
			<form id="uploadForm" action="upload.php" method="post">
				 <div id="targetOuter">
					<div id="targetLayer">
                    <?php if($detail['photo'] == ''){?>
                    <img src="../img/employer.png"  style="width:100%" height="200px" class="upload-preview img-responsive" />
                    <?php }else{?>
                        <img src="../uploads/<?php echo $detail['photo']; ?>"  style="width:100%" height="200px" class="upload-preview img-responsive" />

                    <?php } ?>
                    </div>
                    
					<img src="photo.png"  class="icon-choose-image"/>
					<div class="icon-choose-image" onClick="showUploadOption()"></div>
					<div id="profile-upload-option">
						<div class="profile-upload-option-list"><input name="userImage" id="userImage" type="file" class="inputFile" onChange="showPreview(this);"></input><span>Fetch Image</span></div>
						<!--<div class="profile-upload-option-list" onClick="hideUploadOption();">Cancel</div>-->
					</div>
                   
				</div>	
				<div>
                    
                <input type="submit" id="btn-submit" value="Update Profile Image" class="btnSubmit" onClick="hideUploadOption();"/>
                
				</div>
			</form>
		</div>	
        <!--File update end-->


<div class="header"></div>
<div class"break"><i class="fa fa-envelope-open-o"></i> <?php echo $_SESSION['email']; ?></div>
<div class"break"><i class="fa  fa-phone"></i> <?php if(empty($detail['cell_phone'])){echo '<span class="osun">Contact number not available</span>';}else{ echo $detail['cell_phone'];}  ?></div>

</div>

<div class="alert col-lg-8 table-responsive col-md-offset-1 " >
<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA">Create New Event</a></li>
<li><a data-toggle="tab" href="#sectionC">Events List</a></li>
</ul>

<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active"><!--Profile-->
<form enctype="multipart/form-data" id="events">
 
                            <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="" placeholder="Event Title" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  
                                                     
                                <div class="form-group form-float">
                                <div class="form-line">
                                <input type="text" value="" class="form-control date3" name="event_date" id="event_date" placeholder="Event Date" >
                                 </div>
                                </div>

                               

                                 <div class="form-group form-float">
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control" required></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                                
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-plus"></span> &nbsp; Create</button>
                            
                            
                            </div>

</form>
</div><!--Profile-->
<div id="sectionC" class="tab-pane fade " ><!--Password update-->
<div class="removeMessages"></div>
<div class="stas">
<?php
//DO NOT limit this query with LIMIT keyword, or...things will break!
$querys = "SELECT * FROM events where username='$email' order by id desc";

$getifs = mysqli_query ($mysqli, $querys);

if(mysqli_num_rows($getifs) < 1){
    echo '<div class="alert-warning" style="text-align:center; padding: 17px; font-weight:bolder;">You are yet to create an event.</div>';
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
      if($get['status']=='publish')
	 {
	$sta  = '
	<span class="text-success">Approved & Published</span>
	
	';
	 }
	elseif($get['status']=='pending')
	 {
	$sta  = '<span class="text-warning">Waiting Approval</span>';

	 }
        ?>
    <div class="row clearfix " style="background:#fff; padding:5px; margin-bottom:10px;">    
    
   <div class="col-lg-5 alert bg-purple"><strong><?php echo $get['page_title'];  ?>  </strong> (<?php echo get_timeago($get['etime']); ?>)</div>
   <div class="col-lg-3 alert alert-default "><?php echo $sta; ?></div>
   <div class="col-lg-4 alert">
   <span class="pull-right">

   
     <a type="button" data-toggle="modal" data-target="#cedModal" class="text text-danger" style="font-size:14px; margin:10px; cursor:pointer;"
      onclick="removeEvent(<?php echo $get['id']; ?>)"> <i class="fa fa-trash"></i> Delete</a>	    
	
     </span>
    
    <span class="pull-right">
    <a type="button" data-toggle="modal" id="id" data-target="#ceModal" class="text-info" style="font-size:14px; margin:10px; cursor:pointer;"  data-id="<?php echo $get['id']; ?>"> <span class="fa fa-eye"></span> View</a>	    
	    
    <a href="edit_event?id=<?php echo $get['id']; ?>" title="Edit Content" class="text-warning" style="font-size:14px; margin:10px;" ><i class="fa fa-edit"></i> Edit</a></span>
    
   </div>
   
   
   <div class="col-lg-12 alert alert-default text height textbody" id="textbody">

   <?php echo html_entity_decode($get['details']);  ?> 
    
   </div>  


   </div>
       
<?php
 endfor;

//} 
echo $paginators->createLinks( $links2, 'pagination pagination-sm' );
}
?>


</div>
</div><!-- Password update end -->

</div>

</div>

</div><!--#END Col-lg-12-->



</div>


</div>


</div><!--container end--> 
 

    <div class="modal fade mym" id="ceModal" tabindex="-1" role="dialog" aria-labelledby="ceModalLabel" aria-hidden="true">
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
<div class="modal fade re" tabindex="-1" role="dialog" id="cedModal" aria-labelledby="cedModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Event</h4>
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