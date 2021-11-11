<?php include('header.php'); ?>
<?php include('top.php'); ?>
<?php include('links.php'); ?>
   
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h2><span>Dashboard</span></h2>         
            </div>

<div class="scree">
<!-- Widgets -->
	</div>
<div >
<div class="clearfix">
<div class="col-lg-12" style="margin-bottom:14px;">
    <span class="pull-right"><a href="print_result"   class="btn btn-info btn-sm" > <span class="glyphicon glyphicon-print"></span> Print Students Result</a>   
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="info-box bg-orange">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <a href="members">
                        <div class="content">
                            <div class="text">NO. of STUDENTS</div>
                            <div class="number"><?php echo students(); ?></div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink ">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <a href="post">
                        <div class="content">
                            <div class="text">TOTAL POSTS</div>
                            <div class="number count-to"><?php echo $post_count->rowCount(); ?></div>
                        </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green">
                        <div class="icon">
                            <i class="material-icons">persons</i>
                        </div>
                        <a href="comments">
                        <div class="content">
                            <div class="text">TOTAL MALES</div>
                            <div class="number count-to"><?php echo mstudents(); ?></div>
                        </div>
                        </a>
                    </div>
                </div>


                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-dark-green">
                        <div class="icon">
                            <i class="material-icons">persons</i>
                        </div>
                        <a href="comments">
                        <div class="content">
                            <div class="text">TOTAL FEMALES</div>
                            <div class="count-to"><?php echo fstudents(); ?></div>
                        </div>
                        </a>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box bg-black hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">No. of Students Owing</div>
                            <div class="count-to"><?php echo owing(); ?></div>
                        </div>
                    </div>
                </div>

               
            
            </div>
            <!-- #END# Widgets -->



<div class="clearfix row">
<div class="col-lg-12">

</div>
<?php


?>
</div>

        <div class="clearfix">
        <div class="alert bg-orange">
        <?php
        $user_os        = getOS();
        $user_browser   = getBrowser();

$device_details = "<strong>Browser: </strong>".$user_browser."<br /><strong>Operating System: </strong>".$user_os."";

print_r($device_details);

echo("<br />".$_SERVER['HTTP_USER_AGENT']."");



?>
        </div>
        </div>

        </div>
    </section>

<?php include('footer.php'); ?>    

   