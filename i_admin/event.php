<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-calendar"></i> Events</h2>  
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

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
                                    <div class="form-line">
                                   <select name="status" id="status" class="form-control" required>
                                   <option value="">Status</value>
                                   <option value="active">Publish</value>
                                   <option value="pending">Pend Review</value> 
                                   </select>   
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
$querys = "SELECT * FROM events order by id desc";

$getifs = mysqli_query ($mysqli, $querys);

if(mysqli_num_rows($getifs) < 1){
    echo '<div class="col-lg-12 alert-warning" style="text-align:center; padding: 37px; font-weight:bolder;">You are yet to create an event.</div>';
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
	<select id=event1_'.$get['id'].' onchange="eventcodes1(this,'.$get['id'].')" class="sta-active oks">
		<option value="publish"  selected >Published</option>
		<option value="pending" >Pend Review</option>
	</select>
	
	';
	 }
	elseif($get['status']=='pending')
	 {
	$sta  = '
	<select id=event1_'.$get['id'].' onchange="eventcodes1(this,'.$get['id'].')" class="suspend oks">
	   <option value="pending"  selected >Pending</option>
		<option value="publish">Publish</option>
		
	</select>
	';

	 }
        ?>
    <div class="row clearfix " style="background:#fff; padding:5px; margin-bottom:10px;">    
    
   <div class="col-lg-6 alert bg-purple"><strong><?php echo $get['page_title'];  ?>  </strong> (<?php echo get_timeago($get['etime']); ?>) - 
By <?php 
 $uid = $get['uid'];
  
 //$who =   " select user_id, last_name, first_name, grad_yr FROM alumni_users WHERE user_id = $uid ";
 $sql = 'SELECT user_id, last_name, first_name, grad_year FROM alumni_users  WHERE user_id = "'.$uid.'" ';
 $getm = mysqli_query($mysqli, $sql);
 $uinfo = mysqli_fetch_assoc($getm);
 
if($uid == $uinfo['user_id']){
    echo '<strong>'. $uinfo['last_name'] .' '.$uinfo['first_name'] .'</strong>, class of <strong>'. $uinfo['grad_year']. '</strong>';
}else{
    echo "You";
} ?>

</div>
   <div class="col-lg-2 alert alert-default "><?php echo $sta; ?></div>
   <div class="col-lg-4 alert">
   <span class="pull-right">

   
     <a type="button" data-toggle="modal" data-target="#cedModal" class="text text-danger" style="font-size:14px; margin:10px; cursor:pointer;"
      onclick="removeEvent(<?php echo $get['id']; ?>)"> <i class="fa fa-trash"></i> Delete</a>	    
	
     </span>
    
    <span class="pull-right">
    <a type="button" data-toggle="modal" id="id" data-target="#ceModal" class="text-info" style="font-size:14px; margin:10px; cursor:pointer;"  data-id="<?php echo $get['id']; ?>"> <span class="fa fa-eye"></span> View</a>	    
	    
    <a href="edit_event?id=<?php echo $get['id']; ?>" title="Edit Content" class="text-warning" style="font-size:14px; margin:10px;" ><i class="fa fa-edit"></i> Edit</a></span>
    
   </div>
   
   
   <div class="col-lg-12  text height textbody" id="textbody" ?>

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
</div><!--Password update end-->

</div>

</div>
                
                </div>
                </div>
            </div>


        </div>
    </section>


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

   