<?php 
include('header.php'); 
//if(isset($_GET['P'])){
       
//}
?>


<?php //include("navs.php"); ?>  
 <?php //include("slider3.php"); ?>   
 <!--Navbar-->
 <div class="topdiv mobile z-depth-5" style="background:#3f51b5; color:#fff;">
    <div class="pull-left">
        <strong class="titles"><?php echo $set['phone']; ?></strong>
        <strong class="titles">|</strong>
        <strong class="titles"><?php echo $set['siteEmail']; ?></strong>
    </div>

    <div class="pull-right">
    <ul class="nav " >
            <li class="nav-item">
            <a href="https://www.facebook.com/<?php echo $set['facebook'];  ?>" class="nav-link waves-effect waves-light  text-white" target="_blank">
              <i class="fa fa-facebook"></i> 
            </a>
          </li> 
         
          <li class="nav-item">
            <a href="https://www.twitter.com/<?php echo $set['twitter'];  ?>" class="nav-link waves-effect waves-light text-white" target="_blank">
              <i class="fa fa-twitter"></i> 
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/<?php echo $set['instagram'];  ?>" class="nav-link waves-effect waves-light text-white" target="_blank">
              <i class="fa fa-instagram"></i> 
            </a>
          </li>
            </ul>

    </div>
 
</div>

<section class="container postbody" style="background: #f1f1f1;">
<div class="row  ">



    <?php
if($getc < 1){
    echo '<div class="alert alert-danger">No post yet for this link</div>';
}else{ 
    echo  '<p class="text-info"><h4><a href="index">Home</a><h4><h2>/'.$pt['page_title'].'</h2></p>';
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
      
      
      } ?> 
    



</div>
</section>    


<?php include('footer.php'); ?>