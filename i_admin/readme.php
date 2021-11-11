<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php');

$id = $_GET['id'];

$m = mysqli_query($mysqli, "select * from mp_pages where page_id = '$id'");
$f = mysqli_fetch_array($m);

$suid = $f['posted_by'];


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
            <h2><?php echo $f['page_title']; ?></h2>         
            </div>




        <div class="row clearfix">
        <p>
        Posted on: <?php echo $f['pdate']; ?> 
         By: <?php 
  
 
 //$who =   " select user_id, last_name, first_name, grad_yr FROM alumni_users WHERE user_id = $uid ";
 $sql = "SELECT user_id, email, last_name, first_name, grad_year FROM alumni_users  WHERE email = '$suid'";
 $getm = mysqli_query($mysqli, $sql);
 $uinfo = mysqli_fetch_array($getm);
 
if($suid == $uinfo['email']){
    echo '<strong>'. $uinfo['last_name'] .' '.$uinfo['first_name'] .'</strong>, class of <strong>'. $uinfo['grad_year']. '</strong>';
}else if($suid == ''){
echo "Unknown";
}else{
    echo "You";
} ?>
        </p>
        <div class="col-lg-12 col-md-12">
        <?php
                              if($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png'){
                                echo '<img src="user_images/'.$f['img'].'" style="width:100%; height:500px;">';
                            }else if($type == 'video/mp4' || $type == 'video/avi' || $type == 'video/wav' || $type == 'video/3gp' || $type == 'video/AAC'
                            || $type == 'video/flv' || $type == 'video/wmv'){
                                echo '<video controls="" style="width:100%; height:500px;">
                                <source src="videos/'.$f['img'].'" type="'.$type.'">
                                Your browser does not support the video tag.
                                </video>
                                ';
                            }elseif($type == 'audio/mp3'){
                             echo '<audio id="audio" autoplay controls src="audios/'.$f['img'].'" type="'.$type.'"></audio>';
                            }
                            
                             ?>

        </div>

        <div class="col-lg-12 col-md-12 bg-white" style="padding:15px; margin-top:10px; margin-bottom:10px;">
        <?php echo html_entity_decode($f['page_desc']);  ?> 
       </div>
        </div>

         <div id="addComments" class="alert" style="padding:15px;">
               
                <form id="commentit" method="post">
                    <input type="hidden" name="name" value="<?php echo $fullname; ?>">
                    
                    <input type="hidden" name="email" value="<?php echo $email; ?>">
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

    </section>
    <script>tinymce.init({ selector:'textarea' });</script>

<?php include('footer.php'); ?>    

   