<?php
//Include the database configuration file
include '../includes/config.php';

if(!empty($_POST["class"])){
    //Fetch all state data
    $class = $_POST["class"];
    $query = $mysqli->query("SELECT regiNo, lastName, firstName FROM student WHERE class = '$class'  ORDER BY id ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select student</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['regiNo'].'">'.$row['lastName'].' '. $row['lastName'] . ' - '. $row['regiNo'].'</option>';
        }
    }else{
        echo '<option value="">Student not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    $query = $db->query("SELECT * FROM cities WHERE state_id = ".$_POST['state_id']." AND status = 1 ORDER BY city_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>