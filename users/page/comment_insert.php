<?php
 include "../../includes/functions.php";

 $id = $_POST['id'];
 $name = $mysqli->real_escape_string($_POST["name"]);
 $email = $mysqli->real_escape_string($_POST["email"]);
 $comment = $mysqli->real_escape_string($_POST["comment"]);
 $class = $mysqli->real_escape_string($_POST["class"]);

$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO alumni_comments(post_id, email_add, grad_year, name, comment, date) VALUES ('" . $id . "','" . $email . "','" . $class . "','" . $name . "','" . $comment . "','" . $date . "')";

$result = mysqli_query($mysqli, $sql);

if ($result) {
    echo 'done';
}else{
    echo 'Error occured: '. $mysqli->err;
}


?>