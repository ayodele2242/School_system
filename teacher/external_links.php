<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-link"></i> Links</h2>  
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cards">

<div class="profile">   
<ul class="nav nav-tabs" id="myTab">
<li class="active"><a data-toggle="tab" href="#sectionA">Create New Link</a></li>
<li><a data-toggle="tab" href="#sectionC">Links List</a></li>
</ul>

<div class="tab-content">
<div id="sectionA" class="tab-pane fade in active"><!--Profile-->
<form enctype="multipart/form-data" id="links">
 
                            <div class="form-group">
                                     <div class="form-line">
                                     <input type="text" name="page_title" id="page_title" class="form-control" value="" placeholder="Title" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  

                             <div class="form-group">
                                     <div class="form-line">
                                     <input type="url" name="url" id="url" class="form-control" value="https://www." placeholder="Url" autocomplete="off" required/>
                                     
                                    </div>
                             </div>  
                                                     
                                 <div class="form-group form-float">
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control"></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                                
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-plus"></span> &nbsp; Add</button>
                            </div>

</form>
</div><!--Profile-->
<div id="sectionC" class="tab-pane fade " ><!--Password update-->
<div class="removeMessages"></div>
<div class="stas">
<?php
//DO NOT limit this query with LIMIT keyword, or...things will break!
$querys = "SELECT * FROM links order by id desc";

$getifs = mysqli_query ($mysqli, $querys);

if(mysqli_num_rows($getifs) < 1){
    echo '<div class="col-lg-12 alert-warning" style="text-align:center; padding: 37px; font-weight:bolder;">You are yet to add link(s).</div>';
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
     
    ?>
    <div class="row clearfix " style="background:#fff; padding:5px; margin-bottom:10px;">    
    
   <div class="col-lg-6 alert"> 
   <p>
   <strong><?php echo $get['name'];  ?> - <a href="<?php echo $get['url'];  ?>" class="link"><?php echo $get['url'];  ?></a>  - </strong> 
   <small>
   <?php  
   $u = $get['username'];
   $re = mysqli_query($mysqli, "select first_name, last_name, grad_year, user_name from alumni_users where user_name = '$u' ");
   $arow = mysqli_fetch_array($re);
   if($arow['user_name'] == $u){
   echo 'Posted by: '. $arow['last_name'] .' '.$arow['first_name'] .' Year of graduation '.$arow['grad_year'];
   }else{
    echo 'Posted by: You';
   }
   ?>
   </small>
    
<p>  
</div>
   <div class="col-lg-6 alert">
   <span class="pull-right">

   
     <a type="button" data-toggle="modal" data-target="#ledModal" class="text text-danger" style="font-size:14px; margin:10px; cursor:pointer;"
      onclick="removeLink(<?php echo $get['id']; ?>)"> <i class="fa fa-trash"></i> Delete</a>	    
	
     </span>
    
    <span class="pull-right">
    <a type="button" data-toggle="modal" id="id" data-target="#elModal" class="text-info" style="font-size:14px; margin:10px; cursor:pointer;"  data-id="<?php echo $get['id']; ?>"> <span class="fa fa-eye"></span> View</a>	    
	    
    <a href="edit_link?id=<?php echo $get['id']; ?>" title="Edit" class="text-warning" style="font-size:14px; margin:10px;" ><i class="fa fa-edit"></i> Edit</a></span>
    
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


    <div class="modal fade mlinks" id="elModal" tabindex="-1" role="dialog" aria-labelledby="elModalLabel" aria-hidden="true">
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
<div class="modal fade elinks" tabindex="-1" role="dialog" id="ledModal" aria-labelledby="ledModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> Delete Link</h4>
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

   