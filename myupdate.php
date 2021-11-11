<?php
include("../includes/config.php");
$sql="SELECT * FROM announcement order by id desc";
$result = mysqli_query($mysqli,$sql);
$count = mysqli_num_rows($result);

if($count < 1){
    echo '<li class="alert alert-danger">No update at the moment</li>';
}else{
$counter = 1;
while($row = mysqli_fetch_array($result)) {
    if($counter <= 1){ $active =   "active"; }
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