<?php
require_once('../includes/config.php');
if(isset($_POST["confirm_no"])){
    
    $d = $_POST['confirm_no'];
    $query = mysqli_query($mysqli, "select email from student WHERE regiNo LIKE  '$d%' ");
    
    if(mysqli_num_rows($query) > 0){
    // You have many results - fetch them all iteratively
    // use `fetch_assoc` to have ability to use `mails`
    while ($row = mysqli_fetch_assoc($query)) {
        $emailArr[] = $row["email"];
    }
    $emails = implode(";", $emailArr);

    echo $emails;
}else{
    echo 'No email for this selection.';
}
}


if(isset($_POST["sms"])){
    
    $d = $_POST['sms'];
    $query = mysqli_query($mysqli, "select fatherCellNo from student WHERE regiNo LIKE  '$d%' ");
    
    if(mysqli_num_rows($query) > 0){
    // You have many results - fetch them all iteratively
    // use `fetch_assoc` to have ability to use `mails`
    while ($row = mysqli_fetch_assoc($query)) {
        $emailArr[] = $row["fatherCellNo"];
    }
    $emails = implode(";", $emailArr);

    echo $emails;
}else{
    echo 'No Contacts available for this selection.';
}
}
?>