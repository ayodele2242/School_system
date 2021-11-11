<?php include('header.php'); ?>

<?php
$id = $_GET['id'];

$m = mysqli_query($mysqli, "select * from events where id = '$id'");
$f = mysqli_fetch_array($m);

?>
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
</div>

<div class="alert col-lg-12" style="padding:5px;">
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
                                 <input type="hidden" name="id" id="id" />  
                                    <div id="autoSave"></div>  
                                    <div class="form-line">
                                    <textarea name="details"  placeholder="Content"  id="ckeditor" class="form-control" required><?php echo $f['details'];  ?></textarea> 
                                    </div>
                                   
                                </div> 
                                
                            <div class="form-group" align="center">
                            <div id="message"></div>
                            <input type="hidden" name="id" value="<?php echo $f['id']; ?>"/> 
                            <input type="hidden" name="status" value="<?php echo $f['status']; ?>"/>  
                                <button type="submit" class="btn btn-primary" id="btn-submit"><span class="fa fa-update"></span> &nbsp; Update</button>
                            </div>

</form>

</div><!--#END Col-lg-12-->

</div><!--container end--> 
 


<script src="../afiles/js/pages/forms/editors.js"></script>

<?php include('footer.php'); ?>    