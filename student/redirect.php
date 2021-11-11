<?php
session_start();
echo 'Please wait....';
$di = $_GET['Roll_Number']; 
$class = $_POST['Class'];
$period = $_POST['internaltype'];



if($period == 'First' || $period == 'Second'){
$_SESSION['sid']=$di;
$_SESSION['cl']=$class;
$_SESSION['p']=$period;
    echo "<script>
    window.location = 'term_result';
</script>";
}else{
$_SESSION['sid']=$di;
$_SESSION['cl']=$class;
$_SESSION['p']=$period;
    echo "<script>
    window.location = 'mid_exam';
</script>"; 
}

?>
