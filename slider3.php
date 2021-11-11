<div class="topdiv mobile z-depth-5">
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

<div class="slider-wrapper theme-default">
<div class="overlayme">
    <div class="row">
    <div class="col-lg-4 colimg" style="text-align:left;">
    <img src="<?php echo $set['installUrl']; ?>/img/tlogo.png"  class="logom img-responsive" style="margin-left:30px;">
</div>
<div class="col-lg-7 " >
<div style="text-align: right;font-weight:bolder; padding:15px;">
<?php if($set['allowRegistrations'] =='1'){ ?>
    <a href="<?php echo $set['installUrl']; ?>registration/registration" class="btn btn-info"><i class="fa fa-user"></i> New Student Registration</a>  
   <?php }  ?>
   <a href="<?php echo $set['installUrl']; ?>student/login" class="btn btn-danger text-warning" ><i class="fa fa-scroll"></i> Check Result</a>

</div>
</div>

</div>
</div>

<div id="slider" class="nivoSlider"> 

<?php
            
            $sele = mysqli_query($mysqli, "select * from slider order by id desc limit 5");
            while($ro = mysqli_fetch_array($sele)){
?>
<a href="#" >

	<img src="<?php echo $set['installUrl']; ?>/imaging/<?php echo $ro['img']; ?>"  alt="<?php echo $ro['name']; ?>" title="<?php echo $ro['name']; ?>" class="img-fluid img-responsive nimg">
		    
    <span>
    <?php echo $ro['name']; ?>
				</span>
</a> 

<?php
}
?>

</div>
</div>
<div class="menuheader">
<nav id='cssmenu' class="nav">
<!--<div class="logo"><a href="index"><?php echo strtoupper($set['siteName']); ?></a></div>-->
<div id="head-mobile">Menu</div>
<div class="button"></div>
<!-- Collapsible content -->
<?php
function display_children($parent, $level) {
    global $mysqli;
    $result = mysqli_query($mysqli,"SELECT a.id, a.name, a.link, Deriv1.Count FROM `navigation_bar` a  LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `navigation_bar` GROUP BY parent_id) Deriv1 ON a.id = Deriv1.parent_id WHERE a.parent_id='$parent' ORDER BY position");
    if(!$result){ echo $mysqli->error; }
    echo "<ul>";
    while ($row = mysqli_fetch_array($result)) {
        if ($row['Count'] > 0) {
            echo "<li><a href='post?pid=" . $row['link'] . "'>" . $row['name'] . "</a>";
			display_children($row['id'], $level + 1);
			echo "</li>";
        } elseif ($row['Count']==0) {
            echo "<li><a href='post?pid=" . $row['link'] . "'>" . $row['name'] . "</a></li>";
        } else;
    }
    echo "</ul>";
}
echo display_children(0, 6);
?>

 </nav>
</div>
<div class="mobile-display">
<?php if($set['allowRegistrations'] =='1'){ ?>
    <a href="<?php echo $set['installUrl']; ?>registration/registration" class="btn-info bn"><i class="fa fa-user"></i> New Student Registration</a>  
   <?php }  ?>
   <a href="<?php echo $set['installUrl']; ?>student/login" class="btn-danger bn" ><i class="fa fa-scroll"></i> Check Result</a>

</div>

