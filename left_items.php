<div id="multi-item-example" class="carousel slide carousel-multi-item " data-ride="carousel">
<!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
   <!--Slides-->
   <div class="carousel-inner " role="listbox">

<?php

$sql="SELECT * FROM announcement order by id desc";
$result = mysqli_query($mysqli,$sql);
$count = mysqli_num_rows($result);

if($count < 1){
    echo '<li class="alert alert-danger">No update at the moment</li>';
}else{
$counter = 1;
while($row = mysqli_fetch_array($result)) {
    if($counter = 1){ $active =   "active"; }
   echo  '<div class="carousel-item '.$active.' ">
    

    <div class="col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title text-info">'. $row['msg_title'].'</h4>
            <p class="card-text">'. $row['msg'] .'</p>
           
          </div>
        </div>
      </div>


</div>';



 // echo  '<li class="list-group-item list-group-item-primary"><a href="">'.$row['msg_title'].'</a></li>';
  //echo  $row['email'];
  $counter++;
}
}

?>


      <ol class="carousel-indicators">
           <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
           <li data-target="#carousel-example-captions" data-slide-to="1"></li>
           <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        </ol>
</div>  
</div>      