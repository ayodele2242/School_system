<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php');
?>
   
    <section class="content ">
        <div class="container-fluid">
            <div class="block-header">
            <h2><i class="fa fa-comment"></i> All Comments</h2>         
            </div>

<div id="message"></div>
<div class="screen">

        <div class="row clearfix">
<?php
$result = mysqli_query($mysqli, "SELECT * FROM mp_pages INNER JOIN alumni_comments on mp_pages.page_id=alumni_comments.post_id ORDER BY comment_id DESC ");

$count = mysqli_num_rows($result);
if($count < 1){
    echo '<div class="alert alert-warning">No comments to fetch from posts</div>';
}else{

$last_category='';

while($row = mysqli_fetch_assoc($result)) {
    if($row["grad_year"] != ''){
        $class = " Class of ".$row["grad_year"];
    }else{
        $class = "";
    }

    if ($last_category!=$row['page_title']){
        echo '<div class="col-lg-12 maroon" style="padding:13px; margin-top:10px; font-size:16px;">' . $row['page_title'] . '</div>';
        $last_category=$row['page_title'];
    }

    echo '
    <div class="col-lg-12 col-md-12 records" style="padding:8px; margin-top:6px; font-size:16px;">By: ' . $row["name"] . ' '. $class. 
   '<i class="maroon"> - ' . $row["date"] .'</i> </div>
    <div class="col-lg-11 col-md-11 bg-white records"  style="padding:8px; margin-top:6px; font-size:14px;">' . $row["comment"] . 
    '</div><div class="col-lg-1 col-md-1 color-red" style="padding:8px; margin-top:6px; font-size:14px;"><button  id="'.$row['comment_id'].'" title="Delete" class="btn btn-sm btn-danger trash" ><i class="fa fa-trash"></i></button></div>
    
    ';

	
}
}
?>

        
        </div>
        </div>

    </section>

    <script type="text/javascript">
   
      $(function(){
    $(document).on('click','.trash',function(){
        var del_id = $(this).attr('id');
        //var $ele = $(this).parent().parent();
        var parent = $(this).parent(".records");
        $.ajax({
            type:'POST',
            url:'comment_delete.php',
            data: {'del_id':del_id},
            beforeSend: function() {
				parent.animate({'backgroundColor':'#fb6c6c'},300);
			},
            success: function(data){
                if(data=="YES"){
                    parent.slideUp(300,function() {
					parent.remove();
				});
                 }else{
                    $("#message").fadeIn(1000, function(){

$("#message").html('<div class="alert alert-danger"><span class="fa fa-info-circle"></span> &nbsp; '+data+' !</div>');
$("#btn-submit").html('<i class="fa fa-plus"></i> Add Class');
});
                 }
             }

            });
        });
});
 </script>


<?php include('footer.php'); ?>    

   