<?php 
include('header.php'); 
$id = $_GET['id'];

$m = mysqli_query($mysqli, "select * from mp_pages where page_id = '$id'");
$f = mysqli_fetch_array($m);

$suid = $f['posted_by'];


// upload directories
$upload_dir = '../i_admin/user_images/'; 
    $video = '../i_admin/videos/';
    $audio = '../i_admin/audios/';

$valid_extensions = array('jpeg', 'jpg', 'png'); // image extensions

$aud_extensions = array('mp3'); // audio extensions
$type = $f['img_type'];

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

<span class="pull-right"><a href="forum" class="btn btn-sm btn-info">Start a Discussion</a></span>
</div>

<div class="alert col-lg-12" style="padding:5px;">
<div class="block-header">
<h3><?php echo $f['page_title']; ?></h3>
<p>
Posted on: <?php echo $f['pdate']; ?>, 
         By:- <?php echo $f['posted_by']; ?> 
</p>
</div>
<div class="col-lg-12">
<?php
                              if($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'){
                                echo '<img src="../i_admin/user_images/'.$f['img'].'" style="width:100%; height:300px;">';
                            }else if($type == 'video/mp4' || $type == 'video/avi' || $type == 'video/wav' || $type == 'video/3gp' || $type == 'video/AAC'
                            || $type == 'video/flv' || $type == 'video/wmv'){
                                echo '<video controls="" style="width:100%; height:400px;">
                                <source src="../i_admin/videos/'.$f['img'].'" type="'.$type.'">
                                Your browser does not support the video tag.
                                </video>
                                ';
                            }elseif($type == 'audio/mp3'){
                             echo '<audio id="audio" autoplay controls src="../i_admin/audios/'.$f['img'].'" type="'.$type.'"></audio>';
                            }
                            
                             ?>

<div class="row">
<div class="col-lg-12 col-md-12 bg-white" style="padding:15px; margin-top:10px; margin-bottom:10px;">
        <?php echo html_entity_decode($f['page_desc']);  ?> 
</div>
<div class="col-lg-12 col-md-12 bg-white" style="padding:15px; margin-top:10px; margin-bottom:10px;">
        <div id="addComments" class="alert" style="padding:15px;">
               
               <form id="commentit" method="post">
                   <input type="hidden" name="name" value="<?php echo $userFullName; ?>">
                   
                   <input type="hidden" name="email" value="<?php echo $email; ?>">
                   <input type="hidden" name="class" value="<?php echo $_SESSION['class']; ?>">
                   <div class="form-group">
                  <textarea name="comment" rows="9" class="form-control mcomment" id="mcomment"></textarea>
                  </div>
                      
                   <div class="form-group" align="center">
                   <div id="message"></div>
                   <input type="hidden" name="id" value="<?php echo $id; ?>" />                        
                   <button type="submit" class="btn btn-primary btn-md" id="btn-submit"><span class="fa fa-comment"></span> &nbsp; Comment</button>
                           
                </div>    
               </form>    
           </div>

</div>
</div>
           <div id="Comments" class="auto">
                <?php
                    $query = mysqli_query($mysqli, "SELECT * FROM alumni_comments WHERE post_id='$id' ORDER BY comment_id DESC");

                    $com = mysqli_num_rows($query);
                    
                    if($com < 1){
                        echo '<div class="alert alert-warning stas">No comment for this post yet.</div>';
                    }else{
                    
                    while($row = mysqli_fetch_array($query)){
                        $suid2 = $row['email_add']

                        
                ?>
                <div class="col-lg-12 col-md-12 bg-white" style="padding:6px; margin-top:10px; margin-bottom+:10px; color:#000;">
                    <h5><?php 
                    $sql = "SELECT user_id, email, last_name, first_name, grad_year FROM alumni_users  WHERE email = '$suid2'";
                    $getm = mysqli_query($mysqli, $sql);
                    $uinfo = mysqli_fetch_array($getm);
                    
                    if($suid2 == $uinfo['email']){
                        echo '<strong>'. $uinfo['last_name'] .' '.$uinfo['first_name'] .'</strong>, class of <strong>'. $uinfo['grad_year']. ' - </strong><i class="maroon">'.$row['date']. '</i>';
                    }else{
                    $sql = "SELECT CONCAT(userLast,' ',userFirst)  name,  FROM users  WHERE userEmail = '$suid2'";
                    $getm = mysqli_query($mysqli, $sql);
                    $uinfo = mysqli_fetch_array($getm);

                   
                    if($suid2 == $uinfo['userEmail']){
                        echo '<strong>'. $uinfo['name'] .' - Administrator</strong>';
                    }else if($suid2 == ''){
                    echo "Unknown";
                    }
                    }
                    ?></h5>
                    <blockquote style="font-size:14px;"><?php echo  html_entity_decode($row['comment']); ?></blockquote>
                </div>
                <?php
                    } 
                }       
                ?>
            </div>

</div>

</div>


</div>
<script>tinymce.init({ selector:'textarea' });</script>
<?php include('footer.php'); ?>   