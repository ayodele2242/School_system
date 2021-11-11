<?php include('../includes/admins.php');  ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <meta name="description" content="Automating your school work.">
    <meta name="author" content="<?php echo $set['siteName']; ?>">
    <meta name="keyword" content="content, management, system, schools, school management system, schoool portal, chat, link, linkedln, <?php echo $set['siteName']; ?>">
    <link rel="icon"  href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>" type="image" />
    <title><?php echo $fullname;  ?></title>
    <!-- Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="192x192"href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="href="<?php echo $set['installUrl'].'logo/'.$set['schoolLogo']; ?>"">
    <meta name="theme-color" content="">

    <!-- Google Fonts -->
    <link href="../afiles/css/font.css" rel="stylesheet" type="text/css">
    <link href="../afiles/css/icon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../afiles/css/font-awesome.min.css" rel="stylesheet"  type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../afiles/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

</head>
<body style="background:#f1f1f1;">

<?php //include('top.php'); ?>
<?php //include('links.php'); ?>

   
<section style="width:90%; margin:0 auto">
<div class="row">
<?php 
error_reporting(E_ALL & ~E_NOTICE);
          // fetch all records
$sql = mysqli_query($mysqli,"select * from pins");
$total = mysqli_num_rows($sql);
  // Pagination begins here

$adjacents = 3;
$targetpage = "pins"; //your file name
$limit = 22; //how many items to show per page
$page = $_GET['page'];

if($page){ 
$start = ($page - 1) * $limit; //first item to display on this page
}else{
$start = 0;
}

/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is current page - 1
$next = $page + 1; //next page is current page + 1
$lastpage = ceil($total/$limit); //lastpage.
$lpm1 = $lastpage - 1; //last page minus 1

$sql2 = "select * from pins where 1=1";
$sql2 .= " order by pid  limit $start ,$limit ";
$get = mysqli_query($mysqli,$sql2);


/* CREATE THE PAGINATION */

$pagination = "";
if($lastpage > 1)
{ 
$pagination .= "<ul class='pagination'>";
if ($page > $counter+1) {
$pagination.= "<li><a href=\"$targetpage?page=$prev\">prev</a></li>"; 
}

if ($lastpage < 7 + ($adjacents * 2)) 
{ 
for ($counter = 1; $counter <= $lastpage; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
{
//close to beginning; only hide later pages
if($page < 1 + ($adjacents * 2)) 
{
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//in middle; hide some front and some back
elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
$pagination.= "<li>...</li>";
$pagination.= "<li><a href=\"$targetpage?page=$lpm1\">$lpm1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=$lastpage\">$lastpage</a></li>"; 
}
//close to end; only hide early pages
else
{
$pagination.= "<li><a href=\"$targetpage?page=1\">1</a></li>";
$pagination.= "<li><a href=\"$targetpage?page=2\">2</a></li>";
$pagination.= "<li>...</li>";
for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; 
$counter++)
{
if ($counter == $page)
$pagination.= "<li><a href='#' class='active'>$counter</a></li>";
else
$pagination.= "<li><a href=\"$targetpage?page=$counter\">$counter</a></li>"; 
}
}
}

//next button
if ($page < $counter - 1) 
$pagination.= "<li><a href=\"$targetpage?page=$next\">next</a></li>";
else
$pagination.= "";
$pagination.= "</ul>"; 
}

while($row = mysqli_fetch_array($get)){

?>      
<div class="col-lg-5 bg-white" style="margin-bottom:15px; background:#fff; margin:12px;padding:5px;">
 <p style="font-size:16px; font-weight:bold; text-align:center;"><?php echo ucwords($set['siteName']); ?><br>Admission Scratch Card.</p>
 <ol class="card-list" style="color:#000; font-size:11px;text-align:left;">
 <li> Scratch the card to review your PIN</li>
 <li> Go to <?php echo $set['installUrl']; ?>students/mypin.php</li>
 <li> After inputting the PIN you will be directed to the Application Page.</li>
<li>When you're done print out your details.</li>
 
 </ol>
  <p>
 &nbsp;&nbsp;<b>Serial:</b>&nbsp;&nbsp;<?php echo strtoupper($row['serials']);?>&nbsp;&nbsp;
 <b>Pin:</b>&nbsp;&nbsp;<?php echo $row['pins'];  ?>
</p>
 

</div>

<?php
}
?>
        </div>
     <div class="col-lg-12"><?php echo $pagination; ?></div>   
    </section>


  
    
<?php //include('footer.php'); ?>    
</body>
</html>
   