<?php include("header-2.php"); ?>

<style>
.alert-danger{
  padding: 12px;
  text-align: center;
  background: red;
  color: #fff;
}

</style>

<div class="btPageWrap" id="top">
    
 <?php include("menu-2.php"); ?>

   <div class="btContentWrap btClear">
      <div class="btContentHolder">
         <div class="btContent">

            <div class="bt_bb_wrapper">

              


              


         <div class="bt_bb_separator bt_bb_bottom_spacing_normal bt_bb_border_style_none" style="margin-bottom: 140px"></div>

         <section id="bt_bb_section6079315443824"  class="bt_bb_section bt_bb_bottom_spacing_medium bt_bb_layout_boxed_1500 bt_bb_vertical_align_top"  >
            <div class="bt_bb_port">
               <div class="bt_bb_cell">
                  <div class="bt_bb_cell_inner">

                  <?php


if($getc < 1){
    echo '<div class="alert alert-danger">No post yet for this link</div>';
}else{ 

  if( $pt['nav_id'] == 'home'){
 header("Location: main");
  }else{
    echo  '<p class="text-info"><h4><a href="main">Home</a><h4><h2>/'.$pt['page_title'].'</h2></p>';
    $type = $pt['img_type'];
    if($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'){
        echo '<img src="'.$set['installUrl'].'i_admin/user_images/'.$pt['img'].'"  class="img-fluid img-thumbnail">';
    }else if($type == 'video/mp4' || $type == 'video/avi' || $type == 'video/wav' || $type == 'video/3gp' || $type == 'video/AAC'
    || $type == 'video/flv' || $type == 'video/wmv'){
        echo '<video controls="" class="img-fluid">
        <source src="'.$set['installUrl'].'i_admin/videos/'.$pt['img'].'" type="'.$type.'">
        Your browser does not support the video tag.
        </video>
        ';
    }elseif($type == 'audio/mp3'){
     echo '<audio id="audio" autoplay controls src="'.$set['installUrl'].'i_admin/audios/'.$pt['img'].'" type="'.$type.'" class="img-fluid"></audio>';
    }
     
      echo html_entity_decode($pt['page_desc']); 
      
  }
      
      } ?> 
                   

                  </div>
               </div>
            </div>
         </section>




            </div>
         </div>
         <!-- /boldthemes_content -->
      </div>
      <!-- /contentHolder -->
   </div>
   <!-- /contentWrap -->


  <?php  include("footer-top.php"); ?>
</div>
<!-- /pageWrap -->


<?php include("footer-2.php"); ?>